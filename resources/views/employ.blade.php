 <?php

use App\User;
$user = User::where('id', Auth::id())->first();
?>
 
<br><br>
 @foreach ($emplo as $empl) 
 <div class='block1'>
{{$empl->user_id }} <br>

<a href="/post/{{$empl->id }}">{{$empl->title }}</a><br>
<font color="gray">{{$empl->name }}, {{$empl->created_at }}, &bull;</font> <a href="/post/{{$empl->id }}"><font color="gray">ответить</font></a><br>
  @if($empl->user_id==Auth::id())
<a href="/post_update/{{$empl->id }}">Редактировать</a><br>
  @endif
@if($empl->image!='favicon.png')
<img src="/public/assets-front/img/post/{{$empl->image }}" width="50">
@endif
</div>
@endforeach
