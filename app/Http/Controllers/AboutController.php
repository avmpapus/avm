<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Post;

class AboutController extends Controller
{
    public function index()
    {
    	return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about='привет мир';
        //return view('/');
        return $about;
    }
}