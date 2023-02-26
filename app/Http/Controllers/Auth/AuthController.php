<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\UserProfile;

class AuthController extends Controller
{

    
        public function index(){
      //  return view('auth');
                //return redirect('/');
    }
   
    
        public function checklogin(Request $request){    
            
/*             $user = Auth::user();
$id = Auth::id(); */


        /* $this->validate($request,[
        'email'=>'required|email',
        'password'=>'required|min:3'
        ]);*/


        if (! Auth::attempt($request->only('email', 'password'), $request->has('remember')))
		{
			var_dump($request);
			echo  'Неправильный логин или пароль';
		}
		
	

		else {
		echo 'Вы успешно авторизовались';
    }
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
