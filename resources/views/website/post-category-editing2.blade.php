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


        


        {{--var_dump(is_int((int)'55*1'))--}}

        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Изменение ТЕМЫ материала</i>
            </h4>
            <br>

            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif


            <form role="form" action="{{action('PostController@updateCategory')}}" method='post'>
                {{ csrf_field() }}
                <input type="hidden" name="postId" value="{{$post_id}}"/>

                <div class="form-group">
                <label class="">Задайте основную ТЕМУ для Вашего материала</label>
                <select name="category" class="form-control">
                <option value="0">--выберите тему из списка--</option>
                @foreach($categories as $value)
                    <option value="{{$value->id}}" {{ ($value->id == $category_post->id) ? 'selected' : '' }}>
                        {{$value->category}}

                    </option>
                    <option style="color:red;" disabled>Выберите героя</option>
                @endforeach

                </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm center-block">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        Продолжить
                    </button>
                </div>

            </form>



        </div>



    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>



@endsection