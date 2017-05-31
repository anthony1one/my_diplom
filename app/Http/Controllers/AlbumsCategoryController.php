<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use App\AlbumsCategory;
use App\AlbumsFoto;

class AlbumsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.category.create');
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
            'name' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:albums_categories,slug',
            'image' => 'required|image'
        ]);

        $tmp_store = $request->image->store('img-album-category');
        $end_store = $request->image->move('img/album-category', $tmp_store);
        Storage::delete($tmp_store);

        $category = new AlbumsCategory();
        
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->src_img = $end_store;

        $category->save();

        Session::flash('message', 'Альбом добавлен');

        return redirect()->route('albums.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $album = AlbumsCategory::where('slug', $slug)->first();
        Session::put('album_id', $album->id);
        Session::put('album_slug', $album->slug);
        return view('admin.album.category.show')->with('album', $album);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = AlbumsCategory::find($id);
        Session::put('current_slug', $album->slug);
        return view('admin.album.category.edit')->with('album', $album);
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
         $album = AlbumsCategory::find($id);
        if ($album->slug != Session::get('current_slug')) {
            $this->validate($request, [
                'slug' => 'required|alpha_dash|min:5|max:255'
            ]);
        }
        $this->validate($request, [
            'name' => 'required',
            'image' => 'image'
        ]);

        if (isset($request->image)) {
            unlink(public_path($album->src_img));
            $tmp_store = $request->image->store('img-album-category');
            $end_store = $request->image->move('img/album-category', $tmp_store);
            $album->src_img = $end_store;
            Storage::delete($tmp_store);
        }
        
        $album->name = $request->name;
        $album->slug = $request->slug;
        
        $album->save();

        return redirect()->route('albums.index');
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
}
