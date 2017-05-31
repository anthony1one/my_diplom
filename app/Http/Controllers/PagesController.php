<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolios;
use App\AlbumsCategory;

class PagesController extends Controller
{
	public function welcome_page()
	{
		return view('pages.welcome');
	}

	public function portfolio()
	{
		$portfolios = Portfolios::all();
		return view('pages.portfolio')->with('portfolios', $portfolios);
	}

	public function about()
	{
		return view('pages.about');
	}

	public function albums()
	{
		$albums = AlbumsCategory::all();
		return view('pages.albums')->with('albums', $albums);
	}

	public function shop()
	{
		return view('pages.shop');
	}

	public function contacts()
	{
		return view('pages.contacts');
	}	
}
