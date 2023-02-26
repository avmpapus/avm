@extends('layouts.main-front')

@section('content')


        <?php
		use App\Employee;
    use App\UserProfile;
    use App\User;
	use App\PostProbe;
    $user_profile = UserProfile::where('user_id',Auth::id())->first();
    $user = User::where('id', Auth::id())->first();
        ?>
	 @if($user_profile['user_id']) 

		{{$user_profile->hobby}}
<?php
        if($user_profile['photo']){
        ?>
                <a class="sk-popup-link" href="/{{$user_profile->photo}}">	
                        <img src="/{{$user_profile->photo}}" width="100">
                    </a>    				
<?php
        }
        if(!$user_profile['photo']){
        ?>
                    <img src="{{asset('/assets-front/img/no-avatar.jpg')}}" width="100">
            <?php
        }
        ?>
			@endif
			
			
			@if(!$user_profile['user_id']) 
				!!!!!!!!!!
				@endif
				
				
				
				<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Общая информация</label>

   
    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Редактировать имя, интересы</label>

   <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Загрузить фото</label>

    <div id="txt_1">
       <?php
	   
				  	if($user_profile['user_id']){
		echo 'Мой логин: '.$user_profile->name;
	}
		if(!$user_profile['user_id']){
		echo 'Мой логин: '.$user->name;
	}
	
	?>
	<br><br>
	@if($user_profile['hobby'])
	Мои увлечения: {{$user_profile->hobby}}
	@endif
	<br><br>
	@if($user_profile['specialization'])
	Моя специальность: {{$user_profile->specialization}}
    @endif
    

        </form>
    </div>

    <div id="txt_3">
       <form action="{{action('UserProfileController@create')}}" method='post' role="form">
        {{ csrf_field() }}



        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
			{{----<label>Логин:</label>----}}
                <input type="hidden" class="form-control" name="login" value="{{Auth::user()->name}}">
            </div>

            <div class="form-group">
                <label>Имя:</label>
                                <input type="hidden" class="form-control" name="user_id"
                    value="{{Auth::id()}}">
     
                  <?php
				  	if($user_profile['user_id']){
		echo'<input type="text" class="form-control" name="name"
                    value="'.$user_profile->name.'">';
	}
		if(!$user_profile['user_id']){
		echo'<input type="text" class="form-control" name="name"
                    value="'.$user->name.'">';
	}
	?>
	
	
	            				@if(!$user_profile['hobby'])
				<label>Ваши увлечения:</label>
                <input type="text" class="form-control" name="hobby" value="Поле Увлечения пока не заполнено">
          @endif
              @if(!$user_profile['specialization'])
            <div class="form-group">
                <label>Ваша специальность:</label>
                                <input type="text" class="form-control" name="specialization"
                    value="Поле Специализация пока не заполнено">
            </div>
			@endif
	
	
				@if($user_profile['hobby'])
				<label>Ваши увлечения:</label>
                <input type="text" class="form-control" name="hobby" value="{{$user_profile->hobby}}">
          @endif
              @if($user_profile['specialization'])
            <div class="form-group">
                <label>Ваша специальность:</label>
                                <input type="text" class="form-control" name="specialization"
                    value="{{$user_profile->specialization}}">
            </div>
			@endif
			@if($user_profile['about'])
			<div class="form-group">
                <label>Расскажите о себе:</label>
                                <input type="text" class="form-control" name="about"
                    value="{{$user_profile->about}} ">
            </div>
			@endif
			@if(!$user_profile['about'])
			<div class="form-group">
                <label>Расскажите о себе:</label>
                                <input type="text" class="form-control" name="about"
                    value="Поле О себе пока не заполнено">
            </div>
			@endif
            <button type="submit" class="btn btn-primary btn-sm center-block">
                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                Сохранить
            </button>

        </div>


        </form>	
				</div>
</div>
				<div id="txt_4">
 @if($user_profile['user_id'])  
        
        
<div>
    <div class="midcont">
        <br>
        <div style="background:#ffffff;padding:20px;margin:20px;">
          
            
            Загрузить фото профиля
            <br><br>
            <form action="{{action('UserProfileController@uploadImg')}}" method='post'
                enctype='multipart/form-data' id="form-post-sk">
                {{ csrf_field() }}
                <input type="hidden" name="angle" value="">

                <div class="form-group">
                    <label for="InputFileProfile">
                        Изображение должно быть формата jpg,<br/>gif или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="img2" id="InputFileProfile">

                    @if(Session::has('message'))
                    <p class="help-block">{{Session::get('message')}}</p>
                    @endif

                    @if ($errors->has('img2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                    @endif
                    <br>

                </div>

                <button type="submit" class="btn btn-primary btn-sm btn-profile-img-submit">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Сохранить
                        </button>
            </form>
            <hr>

        </div>

      


    </div>
</div>

</div>


@endif
        </div>
@endsection