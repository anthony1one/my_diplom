<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\AlbumsCategory;
use App\AlbumsFoto;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = AlbumsCategory::all();
        return view('admin.album.index')->with('albums', $albums);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
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
            $albumFoto = new AlbumsFoto();
            $tmp_store = $image->store('img-albums');
            $end_store = $image->move('img/albums', $tmp_store);
            $albumFoto->src_img = $end_store;
            $albumFoto->id_category = Session::get('album_id');
            $albumFoto->save();
            Storage::delete($tmp_store);
        }

        return redirect()->route('albums_category.show', Session::get('album_slug'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function deleteImg($id)
    {
        $albumFoto = AlbumsFoto::find($id);
        unlink(public_path($albumFoto->src_img));
        $albumFoto->delete();
        return redirect()->route('albums_category.show', Session::get('album_slug'));
    }
}
