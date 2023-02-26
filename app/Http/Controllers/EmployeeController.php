<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\User;

use App\PostProbe;

use Illuminate\Support\Facades\Input as input;

use DB;


class EmployeeController extends Controller
{
	

public function index()    {
       
        return view('employee');       
	 //   $users = DB::select('select * from employees');
     //return view('employee',['users'=>$users]);
}

public function store(Request $request)    {
       $employee = employee::where('url', '=', Input::get('url'))->first();
//if ($employee === null) {        

        $employee = new Employee();
        
        $employee->user_id = $request->input('user_id');
            
        $employee->name = $request->input('name');
		

			
        $employee->title = $request->input('title');

        
        $employee->email = $request->input('email');

        $employee->post = $request->input('post');
		
		$employee->htmlpost = $request->input('htmlpost');
		
		$employee->spelling = $request->input('spelling');
		
		$employee->url = $request->input('url');
        
        $employee->image = $request->input('image');
        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/post/', $filename);
   $employee->image = $filename;
       }
       else
       {
           //return $request;
           $employee->image = '/favicon.png';
}

        $employee->save();
//}

        return view('employee')->with('employee',$employee);
		return view('employee',['employee',$employee]);
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
     
        return View('employee',['emplo'=>$emplo]);
      
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
	//$employe = employee::whereIn('id', $id)->get()->delete();
     //$employee = Employees::find($id);
     //$employee->delete();
     //return Redirect::route('noorsi.employee.index');
	 //return view('/');
	 //return redirectto('/');
	 //return view('post',['employe'=>$employe]);
	  //return redirect()->back();
	  
	  
	  //$emplo=DB::table('employees')
       //  $emplo=employees::whereIn('id', $id)->get()->delete();
	   
	
	   
	      $users = DB::select('select * from employees');
     //return view('employee',['users'=>$users]);
      DB::delete('delete from employees where id = ?',[$id]);
     //echo "Record deleted successfully.<br/>";
     //echo '<a href="/">Click Here</a> to go back.';
     
        return View('delete',['users'=>$users]);
     }
}


