
 <link rel="stylesheet" href="{{asset('public/assets-front/css/answer_to_comment.css')}}">


<div class='block2'>
    @foreach ($post as $co)
    {{$co->title}}<br>
@endforeach


</div> 
<form action="/showanswertocommen/create" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <input type="text" name="user_id" class="form-control" placeholder="Email" value="{{auth::id()}}">
     <input type="text" name="post_id" class="form-control" placeholder="Email" value="{{$co->id}}">
     <input type="text" name="comment_id" class="form-control" placeholder="Email" value="{{$co->comment_id}}">
    <label for="exampleInputEmail1">my Name</label>
    <input type="text" name="name" class="form-control" placeholder="Введите текст отвыета" value="{{$co->name}}">
    
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="title" class="form-control" placeholder="Введите текст ответа">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="image" id="exampleInputFile" value="{{$co->image}}">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
