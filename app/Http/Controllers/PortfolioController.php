<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Portfolios;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolios::all();
        return view ('admin.portfolio.index')->with('portfolios', $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => [
                'image',
            ]
        ]);

        foreach($request->images as $image) {
            $portfolio = new Portfolios();
            $tmp_store = $image->store('img-portfolio');
            $end_store = $image->move('img/portfolio', $tmp_store);
            $portfolio->src_img = $end_store;
            $portfolio->save();
            Storage::delete($tmp_store);
        }
    
        Session::flash('message', 'Портфолио обновлено');

        return redirect()->route('portfolio.index');
    }

    public function deleteImg($id)
    {
        $portfolio = Portfolios::find($id);
        unlink(public_path($portfolio->src_img));
        $portfolio->delete();
        return redirect()->route('portfolio.index');
    }
}
