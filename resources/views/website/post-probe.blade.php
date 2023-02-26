@extends('layouts.main-front')

@section('content')

<div class="clearfix"></div>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>

<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>


        <div style="margin:-10px;padding:10px;">
            <a href="../../addquestionform.php"><font color="">Добавить
                вопрос</font></a>
            &nbsp;&nbsp;
            <a href="../../addlinkform.php"><font color="">Добавить ссылку</font></a>
            &nbsp;&nbsp;
            <a href="{{ url('post/create') }}"><font color="">Добавить материал</font></a>
            &nbsp;&nbsp;
            &nbsp;
            <a href="../../addidia.php"><font color="">Добавить идею</font></a>
            &nbsp;&nbsp;
            <a href="../../addproject.php"><font color="">Добавить проект</font></a>
                {{--
                &nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="index_enter.php"><font color="white">Войти</font></a>
              &nbsp;&nbsp;
              <a href="reg.php"><font color="white">Зарегистрироваться</font></a>
              --}}
        </div>


        <div style="margin:10px;padding:10px;background:white;">
            Загрузить фото профиля
            <br><br>
            <form action="{{action('UserProfileController@uploadImg')}}" method='post'
            id="aa1" enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="InputFileProfile">
                        Изображение должно быть формата jpg,<br/>gif или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="imgUpload" id="InputFileProfile">



                </div>

                {{--
                <button type="submit" class="btn btn-primary btn-sm center-block">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    Сохранить
                </button>
                --}}


            </form>

            {{--
            <img src="{{asset('assets-front/img/30.gif')}}" class="img-responsive" alt="Responsive image">
            --}}

            <br><br>
            <div class="ajax-respond"></div>


        </div>






    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>



@endsection