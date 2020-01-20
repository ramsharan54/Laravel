<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
    	return view('tests.home');
    }
     public function about(){
    	return view('tests.about');
    }
     public function contact(){
    	return view('tests.contact');
    }
}
