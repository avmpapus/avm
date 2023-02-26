<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
    	return view('post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $data = Post::select("title as name","image as img","body as desc")->where("title","LIKE","%{$request->input('query')}%")->limit(3)->get();
        //return view('/',['data'=>$data]);
        return response()->json($data);
    }
}