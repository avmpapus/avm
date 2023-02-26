<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;


use App\PostProbe;

use App\Http\Controllers\Collection;

class PostIndexController extends Controller
{



    
   public function postindexall(Request $request)
    {
        
        
$posts = PostProbe::where('title', 'like', '%'.$request->searchString.'%')

->where('title', 'LIKE', '%'.$request->searchString.'%')
->orWhere('description', 'LIKE', '%'.$request->searchString.'%')
                ->orWhere('description','like', '%'.$request->searchString.'%')
                ->orWhere('category', 'LIKE', '%'.$request->searchString.'%')
                //->orWhere('price', 'LIKE', '%'.$request->searchString.'%')
                
->get();

        return view('website.postindexall',['posts'=>$posts]);

	}

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
