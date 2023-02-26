<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\NotLike;
use Auth;
use File;
use Session;
use Validator;
use DB;
use Log;

use App\UserProfile;



class NotLikesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function notlikes()
    {
        return $this->hasMany(Comment::class);
    }
	/*
    public function index()    {
       
        return view('website.post');       
}
*/
   public function Store()    {
/*
        $likes = new likes();
        
        $likes->user_id = $request->input('user_id');
            
        $likes->post_id = $request->input('post_id');
        
        $likes->name = $request->input('name');

       
	  $likes->save();

	  return view('post/{?}')->with('likes',$likes);	  
	  */
	  //return view('post.create');
}
    
    public function show()
    {
        
        
    }
    
    
     public function update()
    {
       
    }
    
    public function UpdateSend()
    {
      
    }
    
    /*******************ответ на комментарий******************/
    
    public function AnswerToComment()
    {
      
  
    }
    
    
    


}
