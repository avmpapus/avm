<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use DB;
use App\UserProfile;
use App\PostProbe;
use App\CategoryPost;
use App\VisitPageProbe;
use App\VeryLike;
use App\Like;
use App\Unlike;
use App\PostComment;
use App\Friend;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /* метод для отображения стартовой страницы после входа */
    public function index()
    {
        
      return view('website.profile');
	//echo'sdfsdfsdf';
    }



    /* метод вызывает вид для заполнения профиля пользователя */
    public function create(Request $request)
    {
		 $this->validate($request, [
            'name' => 'min:2|max:50',
			'hobby' => 'min:2|max:50',
			'specialization' => 'min:2|max:50',
			//'about' => 'alpha_dash|min:2|max:50',
            //'photo' => 'min:2|max:1000',
            //'img2' => 'required|image|mimes:jpeg,png|max:1000',
        ]);

        
         $user_id = $request->input('user_id');
        $name = $request->input('name');
		$hobby = $request->input('hobby');
		$specialization = $request->input('specialization');
		//$about = $request->input('about');
        //$img2 = $request->input('photo');
     DB::update('update users_profiles set name=?,hobby=?,specialization=? where user_id = '.Auth::id(),[$name,$hobby,$specialization,$user_id]);
     $root = public_path() . "./assets-front/img/profile/";
     //return view('profile');
	 //return redirect()->action('UserProfileController@index');
	 //return redirect()->back();
        //return view('website.profile');
        
		
		
         if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() == 0) {
        $profile = new UserProfile;
       
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
		$profile->hobby = $request->hobby; //увлечения
		$profile->specialization = $request->specialization; //специальность
          $profile->photo = "./assets-front/img/no-avatar.jpg";
        $profile->update($request->all(Auth::id()));
     $profile->save(); 
	 //return view('profile');
	 //return redirect()->action('UserProfileController@index');
	 //return redirect()->back();

        }
			// echo'sdfsdfsdf';
		return redirect()->back();
		
		
		/*
 $user_id = $request->input('user_id');
 $name = $request->input('name');
     DB::insert('insert into users_profiles (user_id) values(?)',[$user_id]);
	 */
	 /*
	  if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() == 0) {
        $profile = new UserProfile;
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
     

        $profile->save(); // Сохраняем в БД

        //return view('website.profile');
		return redirect()->action('UserProfileController@index');
	  }
		*/
		
		//if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() > 0) {
			/*
		$user_id = $request->input('user_id');
        $name = $request->input('name');
     DB::update('update users_profiles set name = name where user_id = user_id',[$user_id]);
	 */
	//	}
		/*
        $user_profile = UserProfile::where('user_id', Auth::id())->first();
        if(!$user_profile) {
            return view('profile');
        }
        else{
           return redirect()->action('UserProfileController@edit',['id' =>  Auth::id()]);
		   */
		  // return view('website.profile');
       // }
		
    }



    /* метод сохраняет профиля пользователя в БД */
    public function store(Request $request)
    {
        /* правила валидации введённых данных пользователем */
		
        $this->validate($request, [
            'name' => 'required|alpha_dash|min:2|max:50',
            //'photo' => 'min:2|max:1000',
        ]);

$profile = new UserProfile;
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
        $profile->photo = "assets-front/img/no-avatar.jpg";
        
        $profile->save(); // Сохраняем в БД

        return redirect()->back()-> with('message2','Модель сохранена');
    }


    /* метод для сохранения фото пользователя */
    public function uploadImg(Request $request)
    {
    //dd($request);

        /* правила валидации введённых данных пользователем */
        $this->validate($request, [
            'img2' => 'required|image|mimes:jpeg,png|max:1000',
        ]);


        // получить оригинальное расширение фото(jpg/png)
        $f_type = $request->file('img2')->getClientOriginalExtension();
            //dd($f_type);

        //Создать последовательность случайных символов заданной длины.
        //$file_name_new = "." . $f_type;
        $file_name_new = Str::random(15) . "." . $f_type;


        $user_email = Auth::user()->email;//вытянуть уникальный email пользователя

        $array_sim = array('@', '.');// символы вхождения в строке
        /* возвращает строку или массив, в котором все вхождения в строке заменены на - */
        $user_email_new = str_ireplace($array_sim, "-", $user_email);

        $root = public_path() . "/assets-front/img/profile/" . $user_email_new; //корневая папка для загрузки картинок

        $request->file('img2')->move($root, $file_name_new);//перемещаем файл в папку

        //$f_name = "./assets-front/img/profile/" . $file_name_new;//получаем имя файла для БД
        $f_name = "assets-front/img/profile/" . $user_email_new . '/' . $file_name_new;//получаем имя файла для БД


        // если в запросе есть угол поворота
        if ($request->angle != 0) {

            // транформ. угол поворота
            $degrees = ($request->angle) * -1;

            /* тут должен быть именно ПУТЬ , а не УРЛ(через HTTP не загружается)!!!!!!!!!*/
            $img_delta = public_path() . $f_name;

            if ($f_type == 'jpg') {
                // Загрузка изображения
                $source = imagecreatefromjpeg($img_delta);

                // Поворот
                $rotate = imagerotate($source, $degrees, 0);

                // сохр. в файл
                imagejpeg($rotate, $img_delta);

                // Высвобождение памяти
                imagedestroy($source);
                imagedestroy($rotate);
            }
            elseif ($f_type == 'png'){

                $source = imagecreatefrompng($img_delta);

                // Поворот
                $rotate = imagerotate($source, $degrees, imageColorAllocateAlpha($source, 0, 0, 0, 127));
                imagealphablending($rotate, false);
                imagesavealpha($rotate, true);

                // сохр. в файл
                imagepng($rotate, $img_delta);

                // Высвобождение памяти
                imagedestroy($source);
                imagedestroy($rotate);
            }

        }


        // получ. профиля текущ. польз.
        $user_profile = UserProfile::where('user_id', Auth::id())->first();
        //если есть профиль и фото, то замена фото и удаление старого фото
        if($user_profile && $user_profile->photo) {

            // если у польз. НЕ заглушка no-avatar.jpg
            //if($user_profile->photo != "/assets-front/img/no-avatar.jpg") {
                //удаление старого фото
                //unlink(public_path() . $user_profile->photo);
            //}

            $user_profile->photo = $f_name;

            $user_profile->save();
            //dd('Обновлено');
        }
        //если есть профиль, но нет фото, то сохранение фото в профиль
        elseif($user_profile && !$user_profile->photo){
            $user_profile->photo = $f_name;
            $user_profile->save();
            //dd('Сохранено');
        }
        // если нет профиля, то создание и сохранение фото
        else{
            $profile_new = new UserProfile;
            $profile_new->user_id = Auth::id(); //id в таблице users
            $profile_new->photo = $f_name;
            $profile_new->save();
            //dd('Сохранено в новый профиль');
        }


        return redirect()->back()-> with('message','Добавлено фото');


    }

    /* метод показывает профиль одного польз. */
    public function show($id)
    {
		
         //$user_profile = UserProfile::where('user_id', $id)->first();

        // если профиль польз. ещё не создан, то редирект назад
		
        if(!$user_profile) {
            return redirect()->back();
        }
        else {
            // если это не профиль текущ. польз.
            if($user_profile->user_id != Auth::id()) {

                $user_profile = UserProfile::where(['user_id', Auth::id()])->first();

                //dd($is_friend);
            }
            else{
                $is_friend = null;
            }

            // получ. материалов от имени польз.
            $user_profile = PostProbe::where('id_user',$id)->get();

            return view('profile',['user_profile'=>$user_profile]);
        }
		

    }


    /* метод вызывает вид для редактирования профиля пользователя */
    public function edit($id)
    {
        //если польз. пытается редактировать НЕ свою страницу
		
        if($id != Auth::id()){
            return redirect()->action('UserProfileController@show',Auth::id());
        }

        $user_profile = UserProfile::where('user_id', $id)->first();
        if(!$user_profile) {
            return redirect()->action('UserProfileController@create');
        }
        else {
            return view('profile');
        }
		
    }



    /* метод для редактирования профиля пользователя в БД*/
    public function update(Request $request, $id)
    {
		/*
		 $this->validate($request, [
            'name' => 'required|alpha_dash|min:2|max:50',
        ]);

        
         $user_id = $request->input('user_id');
        $name = $request->input('name');
     DB::update('update users_profiles set name = name where user_id = auth::id()',[$name,$id]);
	 return redirect()->action('UserProfileController@index');
	 */
	 
     //return view('/welcome');
        
        /*
         if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() == 0) {
        $profile = new UserProfile;
       
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
          
        $profile->update($request->all(Auth::id()));
     $profile->save(); 
        }
		*/
		/*
		$name = $request->input('stud_name');
     DB::update('update users_profiles set name = ? where user_id = auth::id()',[$name,$user_id]);
*/
        /*
        $this->validate($request, [
            'name' => 'required|alpha_dash|min:2|max:50',
            
        ]);

        $profile = UserProfile::where('user_id', $id)->first();
        $profile->name = $request->name; //имя
       

        $profile->save(); // Сохраняем в БД

        return redirect()->back()-> with('message2','Модель сохранена');
		
		//return view('profile');
		*/
    }



    /* метод для запроса изображений из папки */
    public function requestImgFolder(Request $request)
    {
     $user_email = Auth::user()->email;//вытянуть уникальный email пользователя

        $array_sim = array('@', '.');// символы вхождения в строке
        /* возвращает строку или массив, в котором все вхождения в строке заменены на - */
        $user_email_new = str_ireplace($array_sim, "-", $user_email);

        $root_files = public_path() . "assets-front/img/profile/" . $user_email_new; //корневая папка для загрузки картинок


        $files = scandir($root_files);

        $arr_img = array();

        foreach($files as $file){
            if(is_file($root_files ."/".$file)){
                $arr_img[0][] = $file;
                //$arr_img[1][] = asset("/assets-front/img/profile/") ."/". $user_email_new ."/".$file ;
                $arr_img[1][] = "assets-front/img/profile/". $user_email_new ."/".$file ;
            }

        }

        return response()->json(['response' => $arr_img]);
    }


    /* метод для изменения изображений из папки */
    public function uploadImgFolder($id){

        $user_email = Auth::user()->email;//вытянуть уникальный email пользователя

        $array_sim = array('@', '.');// символы вхождения в строке
        /* возвращает строку или массив, в котором все вхождения в строке заменены на - */
        $user_email_new = str_ireplace($array_sim, "-", $user_email);

        $file_bd = "assets-front/img/profile/" . $user_email_new ."/". $id;

        $profile = UserProfile::where('user_id', Auth::id())->first();
        $profile->photo = $file_bd;
        $profile->save(); // Сохраняем в БД

        return redirect()->back();
    }


    /* метод для изменения изображений из папки */
    public function delImgFolder(Request $request){

        $img_for_del = $request->img;

        $img_arr = explode("assets-front/", $img_for_del);

        $root_img = public_path() . "./assets-front/" . $img_arr[1];

        // если файл существует
        if(file_exists($root_img)) {
            //удаление старого фото
            unlink($root_img);
            $mess = 1;
        }
        else{
            $mess = -1;
        }

        return response()->json(['response' => $mess]);
       
    }

}
