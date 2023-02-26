@extends('layouts.main-front')



<?php
    use App\UserProfile;
        use App\User;
        use Illuminate\Support\Facades\Input as input;
        use App\Http\Requests;
    $user = User::where('id', Auth::id())->first();
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>
   

<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">
        <br>
        <div style="background:#ffffff;padding:20px;margin:20px;">

        <form action="{{action('UserProfileController@update')}}" method='post' role="form">
        {{ csrf_field() }}


        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
                <label>Логин:</label>
                <input type="text" class="form-control" name="login" value="{{Auth::user()->name}}" disabled>
            </div>

            <div class="form-group">
                <label>Имя:</label>
                

                                <input type="text" class="form-control" name="user_id"
                    value="{{$user->id}}">
                 
                    
                 
                 <?php
                 //if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() > 0) {
                 ?>
                 
                    
              <?php
                // }
                 ?>
                    <?php
                 //if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() == 0) {
                 ?>              
				 <?php
               //  }
                 ?>

@if ($errors->has('user_id'))
                 <br>
                    <input type="text" class="form-control" name="name"
                    value="">
					@endif

@if (!$errors->has('user_id'))
                 <br>
                    <input type="text" class="form-control" name="name"
                    value="{{$user_profile->name}}">
					@endif


                 
            </div>


            <button type="submit" class="btn btn-primary btn-sm center-block">
                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                Сохранить
            </button>

        </div>


        </form>
		
    <a href="/profile">Редактировать</a>
    
    
    
    <?php
    /*
     if (UserProfile::where('user_id', '=', Input::get('user_id'))->count() == 0) {
        $profile = new UserProfile;
       
        $profile->user_id = Auth::id(); //id в таблице users
        $profile->name = $request->name; //имя
          
        $profile->update($request->all(Auth::id()));
     $profile->save(); 
        }
        */
    ?>
