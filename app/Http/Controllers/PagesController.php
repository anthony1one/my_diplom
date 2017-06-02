<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolios;
use App\AlbumsCategory;
use Mail;
use App\Mail\Message;
use Illuminate\Support\Facades\Session;

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

	public function album_single($slug)
	{
		$album = AlbumsCategory::where('slug', $slug)->first();
		return view('pages.album-single')->with('album', $album);
	}

	public function shop()
	{
		return view('pages.shop');
	}

	public function contacts()
	{
		return view('pages.contacts');
	}

	public function contacts_mail(Request $request)
	{
		$email_to = 'knbarkova@gmail.com';

		$this->validate($request, [
            'name' => 'required|regex:/^[\pL\s\-]+$/u|min:5|max:100',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
            'message' => 'required|min:5',
        ]);

        $name = $request->request->get('name');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        $message = $request->request->get('message');

        $content = [];

        $content['name'] = $name;
        $content['phone'] = $phone;
        $content['email'] = $email;
        $content['message'] = $message;

        Mail::to($email_to)->send(new Message($content));

        Session::flash('message', 'Спасибо за ваше письмо!');

        return redirect()->route('contacts');
	}	
}
