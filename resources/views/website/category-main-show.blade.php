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
            <a href="/">Актуальное</a>
                &nbsp;&nbsp;<b>Подтемы</b>
                <br />


            @foreach($subcategories as $category)
            <a href="" style="text-decoration: none;">
                <font color="">
                    {{ $category->page }}
                    &diams;
                </font>
            </a>
            @endforeach


        </div>


        @foreach($subcategories_page[0]->subcategoriesOfCategory as $value)
        <div style="background:#fff;margin:10px;padding:10px;">

            <div class="media">
                <a class="" href="">
                    <img class="img-cat-sk"
                    src="{{$value->img}}" width="120" alt="...">

                    <h4 class="media-heading">
                     {{$value->page}}
                     </h4>
                     {{$value->description}}
                </a>

            </div>
        </div>
        @endforeach
        <br /><br>





    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>



@endsection