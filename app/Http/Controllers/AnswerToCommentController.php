<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input as input;
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



class AnswerToCommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function AnsToCom(Request $request)
    {

       $cmmnt = new AnswerToComment();
        
        $cmmnt->user_id = $request->input('user_id');
        
         $cmmnt->post_id = $request->input('post_id');
         
         $cmmnt->comment_id = $request->input('comment_id');
            
        $cmmnt->name = $request->input('name');
        
        $cmmnt->title = $request->input('title');
      
        
        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/answer_to_comment/', $filename);
   $cmmnt->image = $filename;
       }
       else
       {

           $cmmnt->image = '/favicon.png';
}
        $cmmnt->save();
        return redirect()->back();
        //return view('website.showanswertocommen')->with('cmmnt',$cmmnt);
        //return view('website.showanswertocommen',['cmmnt'=>$cmmnt]);
       
    }
    
    public function show($id)
    {
        /*
     $emplo = Comment::where('id',$id)
     
		->get();
        
*/
        if (AnswerToComment::where('user_id', '=', Input::get('user_id'))->count() != 0) {
                 $post = AnswerToComment::where('comment_id',$id)
     
		->get();

       return View('website.showanswertocommen',['post'=>$post]);
        }
        if (AnswerToComment::where('post_id', '=', Input::get('post_id'))->count() == 0) {
            return redirect()->back();
         //return View('website.post',['post'=>$post]);
        }
    }
    


}
