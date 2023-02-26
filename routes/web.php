<?php

use Illuminate\Support\Facades\Input as input;
use App\User;
use App\Userprofile;

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::get('reg', function () {
    return view('reg');
});

Route::get('translate', function () {
    return view('translate');
});

Route::get('postindexall', function () {
    return view('website.postindexall');
});

Route::get('postindexall','PostIndexController@postindexall');


//Route::auth();

Auth::routes();
/*
Auth::routes(['verify' => true]);


Route::get('profile', function () {

})->middleware('verified');
*/

Route::get('auth','AuthController@checklogin')->name('auth');

Route::post('reg','RegisterController@create');

Route::get('/','RegisterController@index');

//Route::get('searchallalt','SearchAltController@searchallalt');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('search','SearchImagesController@searchallimages');
Route::get('search','SearchController@searchall');
Route::get('searchuni','SearchUniController@searchalluni');

Route::get('theme', function () {
    return view('theme');
});


Route::get('employee', function () {
    return view('employee');
});

Route::get('employeeuni', function () {
    return view('employeeuni');
});

Route::get('store', 'PostSendController@storesend');


//Route::get('theme', 'PostSendController@storesend');



Route::get('user/{id}', function () {
    return view('user');
});


Route::get('profile/edit/{id}', function () {
    return view('edit');
});

Route::get('form', function () {
    return view('website.form');
	
});

Route::get('post_update/{id}', function ($id) {
    return view('post_update');
	
});

Route::get('/profile/create', function () {
    return view('website.profile');

});

Route::get('post/{id}', function ($id) {
    return view('post');

});

Route::get('update-com/{id}', function ($id) {
    return view('website.update-com');

});
////////////////////////////
Route::get('showanswertocommen/{id}', function ($id) {
    return view('website.showanswertocommen');

});

Route::get('showanswertocommen/create', function ($id) {
    return view('website.showanswertocommen');

});

Route::post('/profile/create', 'UserProfileController@create');

Route::post('profile', 'UserProfileController@update');

Route::resource('profile', 'UserProfileController');

//работа с аватарой

Route::post('/upload-img','UserProfileController@uploadImg');
Route::post('/profile/request-img-folder', 'UserProfileController@requestImgFolder');
Route::get('/profile/img-update-folder/{id}', 'UserProfileController@uploadImgFolder');
Route::post('/profile/img-del-folder', 'UserProfileController@delImgFolder');

Route::get('postindexall', 'SearchController@show');
//Route::get('searchuni', 'SearchUniController@show');
//Route::get('post/{id}', 'PostController@show');
//Route::get('post/{id}', 'EmployeeController@showpage');


/********************/
Route::get('/employ', 'EmployeeController@showpost');
Route::get('/post_update/{id}', 'EmployeeUpdateController@show');
Route::post('/post_update/{id}', 'EmployeeUpdateController@update');
Route::get('/employee', 'EmployeeController@showpost');
Route::post('/employee', 'EmployeeController@store');
Route::post('/employeeuni', 'EmployeeUniController@store');

//Route::get('post/{id}','CommentsController@show');
//Route::get('update-com/{id}','CommentsController@update');
//Route::post('update-com/{id}','CommentsController@UpdateSend');
//Route::post('post/{id}','CommentsController@CommentsStore');
Route::get('/post/{id}','PostController@allData');
Route::post('/post','PostController@store');
//Route::post('post/create','NotLikesController@Store');
//Route::resource('post/{id}','PostCommentsController');
/*
Route::post('/create/', function ($id) {
    return view('/create');
});
*/
/*
Route::get('post', function () {
    return view('post');
});
*/
//Route::get('showanswertocommen/{id}','AnswerToCommentController@show');
//Route::post('showanswertocommen/create','AnswerToCommentController@AnsToCom');
//Route::post('showanswertocommen/{id}','AnswerToCommentController@AnsToCom');
//Route::get('/post/{id}','CommentsController@show');
//Route::get('/post/showanswertocommen/{id}','CommentsController@show');
//Route::get('/showanswertocommen/{id}','CommentsShowController@show');


Route::get('index', function () {
    return view('google/index');
});

Route::get('/topcontent', function () {
    return view('/topcontent');
});

Route::get('/calc', function () {
    return view('/calc');
});

Route::get('post/{id}','CommentsController@show');
Route::get('update-com/{id}','CommentsController@update');
Route::post('update-com/{id}','CommentsController@UpdateSend');
Route::post('post/{id}','CommentsController@CommentsStore');
//Route::get('post/{id}','EmployeeController@destroy');
Route::get('/delete/{id}','EmployeeController@destroy');

Route::get('/linkgo3', function () {
    return view('/linkgo3');
});

Route::get('searchspage', function () {
    return view('searchspage');
});

Route::get('/errors/404', function () {
    return view('/errors/404');
});
Route::get('declensions', function () {
    return view('declensions');
});
/*
Route::delete(employees.'/post/{id}', 
array('as' => '/','uses' => Employeescontroller.'@destroy'));
*/
/*
Artisan::command('logs:clear', function() {
    exec('rm ' . storage_path('logs/laravel*'));
    $this->comment('Logs have been cleared!');
})->describe('Clear log files');
*/
Route::get('about', function () {
    return view('about');
});
Route::get('map', function () {
    return view('map');
});
Route::get('category/{id}', function ($id) {
    return view('category/{id}');
});

Route::get('category/{id}','CategoryController@show');

Route::get('article', function () {
    return view('article');
});

Route::get('spelling', function () {
    return view('spelling');
});

Route::get('directory/предлог_на_или_в_украине', function () {
    return view('directory/predlog_na_ili_v_ukraine');
});

Route::get('directory/духовность', function () {
    return view('directory/duhovnost');
});

Route::get('similar_topics', function () {
    return view('similar_topics');
});

Route::get('ArtificialIntelligenceZoryana', function () {
    return view('ArtificialIntelligenceZoryana');
});

Route::get('rightpanel', function () {
    return view('rightpanel');
});

Route::get('/topcontentmob', function () {
    return view('/topcontentmob');
});

Route::get('grammatic', function () {
    return view('grammatic');
});

Route::get('test3', function () {
    return view('test3');
});

Route::get('rules', function () {
    return view('rules');
});

Route::get('check_lat', function () {
    return view('check_lat');
});

Route::get('check_lat_bio', function () {
    return view('check_lat_bio');
});

Route::get('searchbio','BiologyController@searchbio');

Route::get('welcomebio', function () {
    return view('welcomebio');
});

Route::get('/welcomebio/spider', function () {
    return view('spider');
});

Route::get('/welcomebio/членистоногие', function () {
    return view('членистоногие');
});

Route::get('/welcomephilo/dusha', function () {
    return view('dusha');
});

Route::get('/menu_uni', function () {
    return view('menu_uni');
});

Route::get('/menu_bio', function () {
    return view('menu_bio');
});

/* Route::get('/autocomplete', function () {
    return view('autocomplete');
}); */