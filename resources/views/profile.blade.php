@extends('layouts.main-front')

@section('content')


        <?php
		use App\Employee;
    use App\UserProfile;
    use App\User;
	use App\PostProbe;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    $user = User::where('id', Auth::id())->first();
        ?>

		

		<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
		
		
		<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
<div class="message">
<img src="/public/assets-front/img/mess2.png" width="30" id="sub_toggle">
<div id="sub_modal">
Уведомления
<hr>
<?php

$host='localhost';
$dbname='gbua_x_otvet';
$dbUsername='root';
$dbPassword='';


try {

    $dbcon = new PDO('mysql:host=localhost;dbname=gbua_x_otvet', $dbUsername, $dbPassword);
    $data = $dbcon->prepare('SELECT * FROM comments WHERE user_id="'.Auth::id().'" limit 10');
    $data->execute(array('user_id' => Auth::id()));
 
    $result = $data->fetchAll();
 
    if (count($result)) {

        foreach($result as $row) {

			echo '<a href="/post/'.$row['id'].'">'.$row['title'].'</a><br><br>';
        }
    } else {
        echo "Нет записей для вывода";
    }
 
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}

?>
</div>
</div>
		
		<script>
$("#sub_toggle").click(function() {
  $('#sub_modal').slideToggle();
});
</script>
		
		
<br>
<?php
        if($user_profile['photo']){
        ?>
                <a class="sk-popup-link" href="/public/{{$user_profile->photo}}">	
                        <img src="/public/{{$user_profile->photo}}" width="100">
                    </a>    				
<?php
        }
        if(!$user_profile['photo']){
        ?>
                    <img src="{{asset('/public/assets-front/img/no-avatar.jpg')}}" width="100">
            <?php
        }
        ?>
		<div style="position:relative;top:-80px;left:120px;">
		<h4>О себе</h4>

		<h4>Мои увлечения</h4>
		{{$user_profile->id}}
		</div>



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
	Мои увлечения: {{$user->hobby}}
	<br><br>
	

    

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
              
 
<label>Ваши увлечения:</label>
                <input type="text" class="form-control" name="hobby" value="{{$user->hobby}}">
          

            <div class="form-group">
                <label>Ваша специальность:</label>
                                <input type="text" class="form-control" name="specialization"
                    value="">
            </div>
			<div class="form-group">
                <label>Расскажите о себе:</label>
                                <input type="text" class="form-control" name="about"
                    value="">
            </div>
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