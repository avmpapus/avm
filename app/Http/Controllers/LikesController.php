<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Likes;

use App\User;

//use App\PostProbe;

use Illuminate\Support\Facades\Input as input;

use DB;


class LikesController extends Controller
{
	

public function index()    {
       
        return view('likes');       
}

public function store(Request $request)    {
	
       $likes = likes::where('name', '=', Input::get('name'))->first();
if ($likes === null) {
        $likes = new likes();
        
        $likes->user_id = $request->input('user_id');
            
        $likes->post_id = $request->input('post_id');
        
        $likes->name = $request->input('name');
		
		//$likes->title = $request->input('title');

        $likes->like = $request->input('like');
        
        $likes->save();
}
        return view('post')->with('likes',$likes);
        //return back();
        
}




/* метод для предзагрузки изображения в промежуточную папку AJAX */
    public function storeImg(Request $request)
    {

        if ($request->hasFile('image')) {



            $va = Validator::make($request->all(), [
                'image' => 'image|mimes:jpeg,png|max:4000',
            ]);

            if ($va->fails())
            {
                Log::error('Что-то действительно идёт не так.');
                return redirect()->back()->withErrors($va->errors());

              
            };

           
            $f_type = $request->file('image')->getClientOriginalExtension();


            
            $file_name_new = str_random(15). "." . $f_type;
	
            $user_email = Auth::user()->email;

            $array_sim = array('@', '.');
           
            $user_email_new = str_ireplace($array_sim, "-", $user_email);

           
            $root = public_path() . "/assets-front/img/post/". $user_email_new ."/temporarily/";

          
            $objs = glob($root . "*");

            foreach ($objs as $obj) {
                unlink($obj);
            }
		   
           $request->file('img2')->move($root, $file_name_new);
		
			
            $f_name = "/assets-front/img/post/" . $user_email_new . '/temporarily/' . $file_name_new;

           

            $request->session()->put('root_name', $root);

            return response()->json(['response' => $f_name]);

        }
        

    }
    
    
    
    public function showpost()
    {


        
         $emplo=DB::table('employees')

	
		->get();
     
        return View('employ',['emplo'=>$emplo]);
      
    }

    
     public function showpage($id)
    {

        $emplo = Employee::where('id',$id)
     
		->get();
        
        
        return View('website.post',['emplo'=>$emplo]);
        /*
        $comm=DB::table('comments')->where('post_id',$id)
		->get();
        
        
       return View('website.post',['emplo'=>$emplo, 'comm'=>$comm]);
       */
       //return back();
    }
    
    
    public function show($id)
    {
        
        
         $em=DB::table('employees')
		->get();
     

       return View('website.post_update',['em'=>$em]);
        
      /*
        $this->validate($request, [
            'name' => 'min:2|max:150',
            'title' => 'required|integer',
            'email' => 'min:2',
            'post' => 'min:2',
        ]);


        $post = Employees::find($id);

        $post->id_user=Auth::id();
        $post->name = $request->name;
        $post->title = $request->title;
        $post->email = $request->email;
        $post->post = $request->post;


        $post->save();

            */
      // return view('website.post_update',['post'=>$post]);

    }
    
   
    
    
}


