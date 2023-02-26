<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Auth;

use App\UserProfile;

//use App\PostProbe;
use App\Employee;

use App\Http\Controllers\Collection;

class PostController extends Controller
{

    public function allData($id)
   {



      // $employee = employee::where('id',$id)->get();
	  // $employee=DB::table('employees')
		//->get();
     
       //$emp='првет<br>мир как дела';
       //echo 'ываыва';
	   //return View('create')->with('emp',$emp);
	   $employee = new employee;
       return View('post',['data'=>$employee->where('id',$id)->get()]);
        //return 'апвапв';
		
    }
	
	
	    public function store(request $request)
   {
	   
	  

//$likes = likes::where('name', '=', Input::get('name'))->first();
//if ($likes === null) {
	/*
        $likes = new likes();
        
        $likes->user_id = $request->input('user_id');
            
        $likes->post_id = $request->input('post_id');
        
        $likes->name = $request->input('name');
		
		//$likes->title = $request->input('title');

        $likes->like = $request->input('like');
        
        $likes->save();
//}
        return view('create')->with('likes',$likes);
		//return redirect()->route('create');
        
		//return view('post/{?}');
    */
	return back();
}
	

    }
