<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

//use App\Employee;

use App\Biologies;

use App\Http\Controllers\Collection;

class BiologyController extends Controller
{



    
   public function searchbio(Request $request)
    {

 $cString = $request->searchStringBio;
  $aString = explode(' ', $cString);  // строку в массив 

  $aFind = array(); 

					
   foreach ($aString as $value)

   { 

       if ($value) 

       {
           $cZnach = array_search($value,  $aFind);

           if  ($cZnach) { 
		   $cString = $cString.' '.$cZnach;  
		   }

       }

   }
   $search =  $cString;
   
   $request->searchStringBio =  $cString;
   
   
   $aSearch = explode(" ", $search);



    $search = " ";

    $i = 1;

    foreach ($aSearch as $value)

    if ($value) 



    {



         $search = '% '.$value.' %';      

        $postsbio = Biologies::where('title' , 'LIKE', ' %'.$search.'% ')

                       ->Where('email', 'LIKE', '%'.$request->searchStringBio.'%')
					   
                       ->Where('htmlpost', 'LIKE', ' %'.$request->searchStringBio.' %')					   
                       
                       ->get();

         view('website.searchbio',['postsbio'=>$postsbio]);



     }



    $request->searchStringBio = '% '.$search.' %';


/*
$posts = Employee::where('title' ,'LIKE','% '.$search.' %')

                       ->orWhere('email', 'LIKE', '% '.$search.' %')      

                       ->Where('htmlpost', 'LIKE', '%'.$search.'%')						   
					   
					   ->orWhere('spelling', 'LIKE', '%'.$search.'%')						   

                       ->orderBy('id', 'DESC')

                       ->get();
*/


$postsbio = Biologies::where('title' ,'LIKE','%'.$search.'%')

                       ->orWhere('email', 'LIKE', '%'.$search.'%')      

                       ->orWhere('htmlpost', 'LIKE', '%'.$search.'%')						   
					   
					   ->orWhere('spelling', 'LIKE', '%'.$search.'%')						   

                       ->orderBy('id', 'DESC')

                       ->get();


					 
return view('website.searchbio',['postsbio'=>$postsbio]);
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
        
              //  $posts = DB::table('posts')
        //->leftJoin('users_profiles','users_profiles.user_id','=','posts.user_id')
		//->orderBy('users_profiles.user_id')
        //->get();
        
        
        /*
        $posts = DB::table('users_profiles')
        ->leftJoin('posts','users_profiles.user_id','=','posts.user_id')
		->orderBy('posts.id')
        ->get();
        */
        //return view('website.postindexall', compact('posts'));
        //return View('website.postindexall',['posts'=>$posts]);
    
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
