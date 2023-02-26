<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;

use App\Collection;

use App\User;

use App\PostProbe;

use Illuminate\Support\Facades\Input as input;

use DB;


class CartController extends Controller
{
	

public function index()    {
       
        return view('cart');       
	 //   $users = DB::select('select * from employees');
     //return view('employee',['users'=>$users]);
}

public function store(Request $request)    {
       //$cart = cart::where('url', '=', Input::get('url'))->first();
//if ($employee === null) {        

        $cart = new Cart();
        
        //$cart->user_id = $request->input('user_id');
            
        $cart->name = $request->input('book');
		

			
        $cart->title = $request->input('author');

        
        $cart->email = $request->input('price');

        //$cart->post = $request->input('post');
		
		//$cart->htmlpost = $request->input('htmlpost');
		
		//$cart->spelling = $request->input('spelling');
		
		//$cart->url = $request->input('url');
        
        $cart->image = $request->input('image');
        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   ///$file->move('assets-front/img/post/', $filename);
   $file->move('../public/images/', $filename);
   $cart->image = $filename;
       }
       else
       {
           //return $request;
           $cart->image = '/favicon.png';
}

        $cart->save();
//}

        return view('admin.createbook')->with('cart',$cart);
		return view('admin.createbook',['cart',$cart]);
        //return back();
        
}




public function storecollection(Request $request)    {
        $cart = new Collection();
        $cart->user_id = $request->input('user_id');
        $cart->name = $request->input('name');
        $cart->save();
        return back();
       // return View('admin.settings',['user_id'=>$id]); 
}


public function editcollection($id,Request $request)
		{
                    

            $settings=DB::table('collection')->where('id',$id)->get();
            //$settings=DB::table('collection')->get();
        
            return View('admin.settings',['user_id'=>$id],['settings'=>$settings]); 
            //return view('admin.settings')->with('settings',$settings);
        }

public function updatecollection($id, Request $request)
		{

         $this->validate($request, [
            'user_id' => '',
            'name' => 'min:2'
                       ]);

        
		$posts = new collection;
        $posts = Collection::find($id);
        $posts->user_id = $request->user_id;
        $posts->name = $request->name;
        $posts->save();
		return back();
		
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

           
            //$root = public_path() . "/assets-front/img/post/". $user_email_new ."/temporarily/";
            $root = public_path() . "public/images/". $user_email_new ."/temporarily/";
          
            $objs = glob($root . "*");

            foreach ($objs as $obj) {
                unlink($obj);
            }
		   
           $request->file('img2')->move($root, $file_name_new);
		
			
            $f_name = "public/images/" . $user_email_new . '/temporarily/' . $file_name_new;

           

            $request->session()->put('root_name', $root);

            return response()->json(['response' => $f_name]);

        }
        

    }
    
    
    
    public function showcart()
    {


          $cartpage=DB::table('cart')->get();
        return View('cart',['cartpage'=>$cartpage]);
      //return View('admin',['emplo'=>$emplo]);
      //return $cartpage;
    }


    public function showsettings()
    {


          $settings=DB::table('cart')->get();
        return View('admin.settings',['settings'=>$settings]);
      //return View('admin',['emplo'=>$emplo]);
      //return $cartpage;
    }

    public function adminshow()
    {


        
         $empl=DB::table('cart')->get();
         $settings=DB::table('collection')->where('id')->get();
    // $settings=DB::table('collection')->get();
       
      return View('admin.index',['empl'=>$empl],['settings'=>$settings]);
    }


    public function editbook()
    {


        
         //$emplo=DB::table('cart')->where('id',$id)->get();
     $book=DB::table('cart')->get();
        
       // return View('admin.editBook',['book'=>$book]);
      //return View('admin.editBook');
      return View('admin.editBook',['book'=>$book]);
    }




    /*
     public function showpage($id)
    {

        $emplo = Employee::where('id',$id)
     
		->get();
        
        
        return View('website.post',['emplo'=>$emplo]);
		*/
        /*
        $comm=DB::table('comments')->where('post_id',$id)
		->get();
        
        
       return View('website.post',['emplo'=>$emplo, 'comm'=>$comm]);
       */
       //return back();
   // }
    
   
	
	
    public function show($id)
    {
        
        
         $em=DB::table('employees')
		->get();
     

       return View('post_update',['em'=>$em]);
        


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
    
   
    
     public function destroy($id)
     {
	
	      $users = DB::select('select * from collection');
      DB::delete('delete from collection where id = ?',[$id]);
        return View('delete',['users'=>$users]);
     }

     public function destroybook()
     {
	
	      $users = DB::select('select * from cart');
      DB::delete('delete from cart where id');
        return View('deletebook',['users'=>$users]);
     }


     public function updatepost($id, Request $request)
		{
		
	    /* правила валидации введённых данных пользователем */
        $this->validate($request, [
            'name' => 'min:2',
            'image' => 'image|mimes:jpeg,png|max:4000',
        ]);

       // $subcategory = CategoryPost::find($request->subcategory);

        //$posts = PostProbe::find($id);
		$posts = new cart;
        $posts = Cart::find($id);

		//$posts->user_id = $request->user_id;
		//$posts->user_ip = $request->user_ip;
		$posts->name = $request->book;
        //$posts->name = $request->;
		$posts->title = $request->author;
        $posts->email = $request->price;
        //$posts->category = $request->input('category');
        //$posts->post_type = $request->input('post_type');

        if ($request->hasFile('image')) {
            $f_type = $request->file('image')->getClientOriginalExtension();
            $file_name_new = str_random(15) . "." . $f_type;
            $root = public_path() . "/images/post/";

	$image = new SimpleImage();
	$image->load($request->file('image'));
	$image->cutFromCenter(1920, 1080);
    $image->save($root.$file_name_new);	


            $f_name = "/images/post/" . $file_name_new;
            $posts->image = $f_name;
        }
 else
       {
           //return $request;
		   //if($posts->image=='/upload_photo.png'){
           $posts->image = '/upload_photo.png';
		   //$posts->image = $request->image;
		   //}
}
        $posts->save();
		return back();
		
     }
}


