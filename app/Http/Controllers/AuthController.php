<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\UserProfile;

class AuthController extends Controller
{
    
    
        public function index(){
        return view('login');
                //return redirect('/');
    }
    
    
        public function checklogin(Request $request){
        $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:3|confirm'
        ]);
    }
    
    
     /*
    public function __construct()
    {
        $this->middleware('auth');

    }

    
    public function index(){
        return view('auth');
                return redirect('/');
    }

      */

    
}
