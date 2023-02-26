<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Comment;
use App\Employee;
use Auth;
use File;
use Session;
use Validator;
use DB;
use Log;

use App\UserProfile;



class PostCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

public function index()    {
       
        return view('website.post',['comms'=>$comms]);  
     //echo'sdfsdf';     
}
    
    public function show($id)
    {

        
         $comms=DB::table('comments')->where('post_id',$id)
		->get();
     

       return View('website.post',['comms'=>$comms]);
       //return View('website.post');
    }


}
