<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Collection;

use App\User;

use Illuminate\Support\Facades\Input as input;

use DB;


class CollectionController extends Controller
{
	

public function index()    {
       
        return view('collection');       
	 //   $users = DB::select('select * from employees');
     //return view('employee',['users'=>$users]);
}

    
    public function showcollection()
    {


          $collectionpage=DB::table('collection')->get();
        return View('collection',['collectionpage'=>$collectionpage]);
    }

}


