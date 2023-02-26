<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;
use Validator;
use Log;

use App\PostProbe;


class PostSendController extends Controller
{
	
    public function __construct()
    {
        $this->middleware('auth');
    }


public function index()    {
        

}

public function show()    {

}


    public function storesend(Request $request)
    {

      
      
        
        $this->validate($request, [
        'name' => 'min:2|max:150',
            'title' => 'min:2|max:150',
             'description'=> 'min:2|max:150',
             'category'=> 'min:2|max:150',
             
             
        ]);
        

               $new_post = new PostProbe;
               $new_post->user_id = $request->content_user_id;
                $new_post->name = $request->content_name;
               $new_post->title = $request->content_post;
               $new_post->description = $request->content_text;
               $new_post->category = $request->content_category;

                

     if($new_post->title == 0) {
                
$new_post->save();


return redirect()->back();
}



    }
    
    
    
    
}


