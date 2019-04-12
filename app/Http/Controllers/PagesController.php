<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
    	$title = 'Welcome to PHP Test App';
    	return view('pages.landing')->with('title', $title);
    }

    public function contact(){
    	$title = 'Contact me.';
    	return view('pages.contact')->with('title', $title);
    }
}
