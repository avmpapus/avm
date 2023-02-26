<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Comment;
//use App\AnswerToComment;
use App\Employee;
use Auth;
use File;
use Session;
use Validator;
use DB;
use Log;

use App\UserProfile;



class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    

    public function CommentsStore(Request $request)
    {
        /*
        Comment::create([
        'body'=>request('body');
        'post_id'=>$post->id
        ]);
        
        return back();
        */
        
        $comment = new Comment();
        
        $comment->user_id = $request->input('user_id');
        
        $comment->post_id = $request->input('post_id');
            
        $comment->name = $request->input('name');
        
        $comment->title = $request->input('title');
        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/comments/', $filename);
   $comment->image = $filename;
       }
       else
       {
           //return $request;
           $comment->image = 'favicon.png';
}
        $comment->save();
        return redirect()->back();
        return view('post')->with('post',$post);
        
    }
    
    public function show($id)
    {
        
         $emplo = Employee::where('id',$id)
     
		->get();
        

                 $comm = Comment::where('post_id',$id)
     
		->get();
        
        
     $post=DB::table('answer_to_comment')->where('post_id',$id)
		//->leftJoin('post_id')
		//->leftJoin('atributes','atributes.category_id','=','categories.id')
		//->leftJoin('value','value.atribute_id','=','atributes.id')
		//->select('products.name as name','products.price as price','categories.name as category','atributes.name as atribute','value.value')
		//->orderBy('answer_to_comment.comment_id')
		->get();
           
       //return View('website.showanswertocommen',['emplo'=>$emplo, 'comm'=>$comm, 'post'=>$post]);
      // return View('website.post',['post'=>$post]);
      return View('post',['emplo'=>$emplo, 'comm'=>$comm, 'post'=>$post]);
    }
    
    
     public function update($id, Request $request)
    {
        
         $comm = Comment::where('id',$id)
     
		->get();
        
       return View('update-com',['comm'=>$comm]);
       
       
        /*
    $com = Comment::find($id);
        $com->user_id = $request->user_id;
        $com->post_id = $request->post_id;
        $com->name = $request->name;
        $com->title = $request->title;
       
       if($request->hasFile('image')){
   $file = $request->file('image');
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/post/', $filename);
   $com->image = $filename;
       }
       $com->save();
       return redirect()->back();
       */
    }
    
    public function UpdateSend($id, Request $request)
    {
        $com = Comment::find($id);
      //  $com->id = $request->id;
      //  $com->post_id = $request->post_id;
     //   $com->name = $request->name;
        $com->title = $request->title;
       
       if($request->hasFile('image')){
   $file = $request->file('image');
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/comments/', $filename);
   $com->image = $filename;
       }
       $com->save();
       return redirect()->back();
    }
    
    /*******************ответ на комментарий******************/
    
    public function AnswerToComment(Request $request)
    {
      
        
       $answertocomment = new answertocomment();
        
        $answertocomment->user_id = $request->input('user_id');
        
         $answertocomment->post_id = $request->input('post_id');
         
         $answertocomment->comment_id = $request->input('comment_id');
            
        $answertocomment->name = $request->input('name');
        
        $answertocomment->title = $request->input('title');

        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/AnswerToComment/', $filename);
   $answertocomment->image = $filename;
       }
       else
       {

           $answertocomment->image = '/favicon.png';
}
        $answertocomment->save();
        return redirect()->back();
        return view('post')->with('post',$post);
        
    }
    
    
    


}
