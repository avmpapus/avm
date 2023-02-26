<?php

namespace App\Http\Controllers;
use App\UserProfile;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    //use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
     /*
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
*/
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
    
    
   /*
   public function __construct()
    {
        $this->middleware('auth');
    }
   */
   
   
   public function index(){
       return view('welcome');
   }
   
    
    public function create(Request $request){

        
        $this->validate($request,[
        'name' => 'required|max:255',
    'email' => 'required|email|unique:users',
         //'password' => 'required|between:6,25|confirm'
     'password' => 'required|between:6,25|confirmed'
        ]);


        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
       /*******запись данных в users profiles******/
        /*
        $this->validate($request, [
        'user_id' => 'required|alpha_dash|min:2|max:50',
            'name' => 'required|alpha_dash|min:2|max:50',
        ]);

        $profile = new UserProfile;
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
       


        $profile->save(); // Сохраняем в БД
*/
return redirect()->action('RegisterController@index');
        
        
    }
   
}
