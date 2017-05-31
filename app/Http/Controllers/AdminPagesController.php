<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function index_admin()
    {
    	return view('admin.index');
    }
}
