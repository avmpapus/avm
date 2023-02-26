@extends('layouts.main-front')
@section('content')




<?php

use App\User;

use App\UserProfile;

$user = User::where('id', Auth::id())->first();
    $user_profile = UserProfile::where('user_id', Auth::id())->first();

$host='localhost';
$dbname='gbua_x_otvet';
$dbUsername='root';
$dbPassword='';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/public/images/favicon.png" type="image/x-icon">
	  <link rel="stylesheet" href="{{asset('public/assets-front/css/post.css')}}">
 @foreach ($emplo as $empl)

              
@endforeach 
    <title>
	{{$empl->title}}
    </title>
</head>
<body>


<br>


<br>
 <link rel="stylesheet" href="{{asset('public/assets-front/css/answer_to_comment.css')}}">

<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
 @if (Auth::id())
	 <div class="message">
<img src="/public/assets-front/img/mess2.png" width="30" id="sub_toggle">
<a href="profile"><font color="white">Мой профиль</font></a>
                               
								 <?php
$str = Auth::user()->name;
   $str =  ucwords($str);
   echo $str;
?>

						

								<?php
                      if($user_profile['photo']){
                      ?>
                                    <img src="/public/{{$user_profile->photo}}" width="30" style="border-radius:50px;">
                        <?php
                        }
                        ?>
                            <?php
                      if(!$user_profile['photo']){
                      ?>
                                    <img src="/public/assets-front/img/no-avatar.jpg" width="30" style="border-radius:50px;">
                        <?php
                        }
                        ?>
                     

                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
                          @endif	                     
<div id="sub_modal">
Уведомления
<hr>
<?php

$host='localhost';
$dbname='gbua_x_otvet';
$dbUsername='root';
$dbPassword='root';


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

<!----
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
--->

<div id="left_panel">
<?php
if (stripos($empl->title, 'ко') !== false 
or stripos($empl->title, 'ноут') !== false
or stripos($empl->title, 'сист') !== false
or stripos($empl->title, 'телеф') !== false) {
  echo 'компы';
}
if (stripos($empl->title, 'кар') !== false) {
  echo 'карты';
}
?>
</div>




<div id="page">
  <a href="/post/{{$empl->id}}">{{$empl->title}}</a>
  <br>
  {{$empl->description}}
	  <br>
	  {{$empl->email}}
	  <br>
      <font color="gray">{{$empl->id}},{{$empl->user_id}}, {{$empl->name}},  категория: {{$empl->post }}</font>
      <br><br>
      
@if($empl->image!='favicon.png')
<img src="/public/assets-front/img/post/{{$empl->image }}" width="500">
@endif

@if($empl->image=='favicon.png')
<img src="/{{$empl->image }}" width="500">
@endif

<hr>
Дискуссии:
<hr>
    @foreach ($comm as $com)
    {{$com->name}}<br>
{{$com->title}}
<br>
<a href='javascript://' onclick='document.getElementById("target").value = "{{$com->name}} ответил {{Auth::user()->name}}:&nbsp;";'>Ответить {{Auth::user()->name}}</a>
<br>
@if($com->image!='favicon.png')
<img src="/public/assets-front/img/comments/{{$com->image}}" width="100">
@endif
@if($com->image=='favicon.png')
<img src="/public/assets-front/img/post/favicon.png" width="100">
@endif
<br><a href="/update-com/{{$com->id}}">Редактировать</a>
    {{----<a href="/post/{{$empl->id}}/comments/{{$com->id}}">Ответить</a>----}}
    <a href='javascript://' onclick='document.getElementById("target").value = "{{Auth::user()->name}} ответил {{$com->name}}:&nbsp;";'>Ответить {{$com->name}}</a>
    
<br>

    
@endforeach 


<div class='block2'>

{{----@if($empl->user_id==Auth::id())---}}
<form action="/post/{{$empl->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <input type="text" name="user_id" class="form-control" placeholder="Email" value="{{auth::id()}}">
     <input type="text" name="post_id" class="form-control" placeholder="Email" value="{{$empl->id}}">
    <label for="exampleInputEmail1">my Name</label>
    <input type="text" name="name" class="form-control" placeholder="Введите текст отвыета" value="{{$empl->name}}">
    
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="title" class="form-control" placeholder="Введите текст ответа" id='target' size="90">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="image" id="exampleInputFile" value="{{$empl->image}}">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
{{---@endif---}}



<script>
function Hide(a)
{
   var b = a.parentNode.getElementsByTagName('span')[0].style;
   if(a.value == 'Открыть')
   {
      a.value = 'Закрыть';
      b.display = '';
   }
   else
   {
      a.value = 'Открыть';
      b.display = 'none';
   }
}
</script>




</div>


<?




/*
$mystring = $empl->title;
$findme = 'дж';
$pos = strpos($mystring, $findme);

if ($pos !== false) {
     echo "Строка '$findme' найдена в строке '$mystring'";
         echo " в позиции $pos";
} else {
     echo "Строка '$findme' не найдена в строке '$mystring'";
}
*/

//echo mb_substr($empl->title, 0, 5).'...';

echo '<br><br><br><br>Все темы по категории '.$empl->post.'<br><br>';



//$dbcon = new PDO('mysql:host=localhost;dbname=gbua_x_otvet',$dbname, $dbUsername, $dbPassword);



 
try {
    //соединение с БД
    $dbcon = new PDO('mysql:host=localhost;dbname=gbua_x_otvet', $dbUsername, $dbPassword);
    $data = $dbcon->prepare('SELECT * FROM employees WHERE post="'.$empl->post.'"');
    $data->execute(array('post' => $empl->post));
 
    $result = $data->fetchAll();
 
    if (count($result)) {
        //выводим результат
        foreach($result as $row) {
            //print_r($row);
			echo '<a href="/post/'.$row['id'].'">'.$row['title'].'</a><br>';
        }
    } else {
        echo "Нет записей для вывода";
    }
 
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
?>
</div>
</body>
</html>
@endsection