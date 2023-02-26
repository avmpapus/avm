<form id="form" action="{{action('LikesController@likesstore')}}" method="POST" enctype="multipart/form-data">
<input type="text" name="name" value="{{ Auth::user()->name }}">
<input type="text" name="user_id" value="{{ Auth::user()->id }}">
<input type="text" name="name" value="{{$tit = $post->id}}">
<input type="text" name="like" value="1">
<button type="button" name="submit" style="position:relative; top:10px; left:100px;"><img src="/public/assets-front/img/smile/agre.png" width="25" >Не нравится</button>
</form>
<br>

<form id="form" action="{{action('LikesController@likesstore')}}" method="POST" enctype="multipart/form-data">
<input type="text" name="name" value="{{ Auth::user()->name }}">
<input type="text" name="user_id" value="{{ Auth::user()->id }}">
<input type="text" name="name" value="{{$tit = $post->id}}">
<input type="text" name="notlike" value="1">
<button type="button" name="submit" style="position:relative; top:-42px; left:250px; z-index:2;">&nbsp;&nbsp;&nbsp;<img src="/public/assets-front/img/smile/5853f52df07d415907f5bba1.png" width="27">Нравится&nbsp;&nbsp;</button>
</form>