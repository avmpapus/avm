<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Comment;
use App\AnswerToComment;
use App\Employee;
use Auth;
use File;
use Session;
use Validator;
use DB;
use Log;

use App\UserProfile;



class CommentsShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function show($id)
    {
       $emplo = Comment::where('id',$id)
     
		->get();
       
       
       
     $post=DB::table('answer_to_comment')->where('comment_id',$id)
		
		->get();
        
      return View('website.showanswertocommen',['emplo'=>$emplo,'post'=>$post]);
      //return View('website.showanswertocommen');  
    
    }
    
    
    
    
    


}
