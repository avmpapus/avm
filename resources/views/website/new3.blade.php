<?php

use App\User;

use App\UserProfile;

//use App\PostProbe;

use App\Employee;
?>

@foreach ($posts as $post)
{{$post->title}}
<br>
{{$post->email}}
<br>
{{$post->post}}
<br>
<img src="/public/assets-front/img/post/{{$post->image}}">
@endforeach 
