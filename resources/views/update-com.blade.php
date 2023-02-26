
 @foreach ($comm as $com)
@endforeach
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <a href="theme">Добавить вопрос без фото</a>

                        
    @if($com->user_id==Auth::id())
  <div class="containet">
  <div class="jombotron">
<form action="{{action('CommentsController@UpdateSend',$com->id)}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <input type="text" name="user_id" class="form-control" placeholder="Email" value="{{auth::id()}}">
     <br>
     <input type="text" name="post_id" class="form-control" placeholder="Email" value="{{$com->id}}">
    <label for="exampleInputEmail1">my Name</label>
    <input type="text" name="name" class="form-control" placeholder="Email" value="{{$com->name}}">
    
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="title" class="form-control" placeholder="Email" value="{{$com->title}}" autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="image" id="exampleInputFile" value="{{$com->image}}">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
 @endif
 
         @if($com->user_id!=Auth::id())
                            
                     
                                 @endif
  </body>
</html>