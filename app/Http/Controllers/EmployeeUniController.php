<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\universology;

use App\User;

use App\PostProbe;

use Illuminate\Support\Facades\Input as input;

use DB;


class EmployeeUniController extends Controller
{
	

public function index()    {
       
        return view('employeeuni');       
	 //   $users = DB::select('select * from employees');
     //return view('employee',['users'=>$users]);
}

public function store(Request $request)    {
       $employeeuni = universology::where('url', '=', Input::get('url'))->first();
//if ($employee === null) {        

        $employeeuni = new universology();
        
        $employeeuni->user_id = $request->input('user_id');
            
        $employeeuni->name = $request->input('name');
		

			
        $employeeuni->title = $request->input('title');

        
        $employeeuni->email = $request->input('email');

        //$employeeuni->post = $request->input('post');
		
		$employeeuni->htmlpost = $request->input('htmlpost');
		
		$employeeuni->spelling = $request->input('spelling');
		
		$employeeuni->url = $request->input('url');
        
        $employeeuni->image = $request->input('image');
        
       if($request->hasFile('image')){
           
   $file = $request->file('image');
   
   
       
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/post/', $filename);
   $employeeuni->image = $filename;
       }
       else
       {
           //return $request;
           $employeeuni->image = '/favicon.png';
}

        $employeeuni->save();
//}

        return view('employeeuni')->with('employeeuni',$employeeuni);
		return view('employeeuni',['employeeuni',$employeeuni]);
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


        
         $emplo=DB::table('employeesuni')

	
		->get();
     
        return View('employeeuni',['emplo'=>$emplo]);
      
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
        
        
         $em=DB::table('employeesuni')
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
	   
	
	   
	      $users = DB::select('select * from universology');
     //return view('employee',['users'=>$users]);
      DB::delete('delete from universology where id = ?',[$id]);
     //echo "Record deleted successfully.<br/>";
     //echo '<a href="/">Click Here</a> to go back.';
     
        return View('delete',['users'=>$users]);
     }
}


