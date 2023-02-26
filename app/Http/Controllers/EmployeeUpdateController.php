<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use App\User;

use Auth;

use App\PostProbe;

use DB;


class EmployeeUpdateController extends Controller
{
	

public function index()    {
       
        return view('/');       
}

    
    public function update($id, Request $request)
    {
        /*
        $employ = Employee::find($id);
        $employ->title = $request->title;
        $employ->name = $request->name;
        $employ->email = $request->email;
        $employ->post = $request->post;
        $employ->image = $request->image;
       
        $employ->save();
        
        
        $request->session()->flash('success','!!!!!!!!!');

		return redirect()->back();
       */
       
       $employ = Employee::find($id);
        $employ->title = $request->title;
        $employ->name = $request->name;
        $employ->email = $request->email;
        $employ->post = $request->post;
       
       if($request->hasFile('image')){
   $file = $request->file('image');
   $extension = $file->getClientOriginalExtension();
   $filename = time().".".$extension;
   $file->move('assets-front/img/post/', $filename);
   $employ->image = $filename;
       }
       $employ->save();
       return redirect()->back();
    }
    
            public function show($id)
    {
      
         $em=DB::table('employees')->where('id',$id)->get();
      return View('post_update',['em'=>$em]);
      
              
    }
    
    
}


