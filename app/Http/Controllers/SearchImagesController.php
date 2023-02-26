<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Images;

use App\Http\Controllers\Collection;

class SearchImagesController extends Controller
{



    
   public function searchallimages(Request $request)
    {


$img = Images::where('title' ,'LIKE','% '.$search.' %')

                       ->orWhere('email', 'LIKE', '% '.$search.' %')      

                       ->orWhere('htmlpost', 'LIKE', '%'.$search.'%')						   
					   
					   ->orWhere('spelling', 'LIKE', '%'.$search.'%')						   

                       ->orderBy('id', 'DESC')

                       ->get();



					 //  print_r($posts); 


return view('website.searchall',['img'=>$img]);
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
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
                $posts = DB::table('posts')
        //->leftJoin('users_profiles','users_profiles.user_id','=','posts.user_id')
		//->orderBy('users_profiles.user_id')
        ->get();
        
        
        /*
        $posts = DB::table('users_profiles')
        ->leftJoin('posts','users_profiles.user_id','=','posts.user_id')
		->orderBy('posts.id')
        ->get();
        */
        //return view('website.postindexall', compact('posts'));
        return View('website.postindexall',['posts'=>$posts]);
    
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
