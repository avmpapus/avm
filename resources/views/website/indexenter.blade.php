@extends('layouts.main-front')

@section('content')



@foreach($postenter as $one_post)
@endforeach


@if($one_post->userForPost["profileForUser"]['name']!='украинец')

    @endif

<div style="position: fixed; top:2px; margin-left:28px; z-index:2;">
        <a href="{{ url('/posts') }}" style="text-decoration: none;">
            <img src="/assets-front/img/c.png" width="33"
                 title="Рабочий кабинет">
        </a>
    </div>
    
    
    
    <div style="position: fixed; top:7px; margin-left:75px; z-index:3; width:2000px;">


        <form method="post" action="{{action('SearchController@searchAll')}}">
            {{ csrf_field() }}

            <input type="search" id="sk-input-search" name="searchString" size="23" class="form-input"

                   placeholder="Введите запрос и нажмите Enter" {{Auth::guest() ? "" : ""}}>

        </form>

    </div>
<br><br><br>
<div style="top:2px; margin-left:28px;margin-top:-40px;">

        <div class="col-md-3 col-sm-3 col-xs-12 sk-block"><br>
           <div class="panel panel-default sk-panel-login" style="width:296px;">
            <div class="panel-heading">Войти
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ url('/') }}">Главная</a>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <div class="col-md-6">Ел. почта
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                            style="width:265px;">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="col-md-6">Пароль
                            <input id="password" type="password" class="form-control" name="password" style="width:265px;">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="" name="remember"> Запомнить меня
                                </label>
                            </div>

                    <br>



                            <button type="submit" class="btn btn-success btn-xs" style="padding:10px;width:265px;">
                                <i class="fa fa-btn fa-sign-in"></i> Войти
                            </button>
                            <br>
                            <br>

                            <a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="padding:10px;width:265px;">Зарегистрироваться</a>

                            <br>
                            <br>
                    {{--
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                            --}}




                </form>
            </div>
        </div>
        </div>
        {{---------}}
        
        <div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        {{--var_dump(is_int((int)'55*1'))--}}
        @foreach($postenter as $one_post)

        <div class="sk-div-post" data-id = "{{ $one_post->id }}">

            <div class="row">
                <div class="col-xs-12" id="PostContentUser-{{ $one_post->id }}">
                    <img src="{{$one_post->userForPost["profileForUser"]['photo']}}"
                         width="38" height="38"
                         style="border-radius: 50%;" class="img-rounded" alt="">
                    &nbsp;

                    @if($one_post->userForPost["profileForUser"]['name']!='украинец')
                    <a href="{{action('UserProfileController@show', $one_post->userForPost['id'])}}"
                        class="text-warning">
                        {{$one_post->userForPost["profileForUser"]['name']}}
                        {{$one_post->userForPost["profileForUser"]['last_name']}}
                    </a>
@else
<img src="/assets-front/img/ccicon.png" width="38" style="border-radius: 50%;">
администратор
@endif
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-10">
                    <b>
                        {{ $one_post->title }}
                    </b>
                </div>


            </div>



            <div id="PostContent-{{$one_post->id}}">
                @if($one_post->img)
                <div class="col-md-12">
                    <a href="img/{{ $one_post->id }}">
                    <img src="{{ $one_post->img }}" class="img-responsive img-post-sk">
                    </a>
                </div>
                @endif

                @if($one_post->video)
                <div class="video-sk col-md-12">
                    {!! $one_post->video !!}
                </div>
                @endif

                <p>
                    {!! $one_post->description !!}
                </p>

            </div>
            <!-- Форма для редактирования поста -->
           
            <!-- Скрипт для редактирования поста -->
           
            <?php
            // SQL-запрос для редактирование поста
/*
            $data = $_GET;
            if(isset($data['save_post'.$one_post->id])){
            	$title = htmlspecialchars($data['title']);
            	$text = htmlspecialchars($data['text']);
            	$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");
                //$mysqli = new mysqli("localhost", "root", "", "gbua_cpil_new");
				$mysqli->query("SET NAMES 'utf-8'");
				$mysqli->query("UPDATE `search_probe` SET  `title` =  '$title',`description` = '$text' WHERE  `search_probe`.`id` = '$one_post->id'");
				header('Location: http://cpilnacprava.com.ua/posts/#PostContentUser-'.$one_post->id);
                //header('Location: http://cpilnacprava.com.ua/#'.$one_post->id);
            }
*/
            ?>
            <p class="text-right">
            <small >
                {{\Carbon\Carbon::parse($one_post->created_at)->format("Добавлено j/m/Y в G:i")}}
            </small>
            </p>

           
            <font color="gray">
                Подтема:{{-- {{ $one_post->category }}--}}
                <?php echo "<a href='../posts-for-cat/".$one_post->subcategory_id."'>".$one_post->category."</a>&nbsp";?>
            </font>
            


            <br>
            <br>

            {{-- блок лайков --}}
            <div class="row">
            <div class="col-xs-12" style="margin-bottom: 10px;">
                
            </div>
            </div>
            {{-- блок лайков --}}


            <div class="div-comments">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 div-all-comments">

                {{-- если больше 3 комментов, вывести кнопку и 3 последних поста --}}
                @if($one_post->commentsForPost->count()>3)
                <button type="button" class="btn btn-warning btn-lg btn-block btn-xs btn-more-comment">
                    <strong>
                        показать все
                    </strong>
                </button>
                @endif
                <hr>


                {{-- take(-3) возвращает новую коллекцию с указанным числом элементов c конца --}}
                {{-- @foreach($one_post->comments->take(-3) as $comment) --}}
                @foreach($one_post->commentsForPost as $key=>$comment)
                {{-- если комментарий не входит в 3 последних --}}
                <div class="{{($key < $one_post->commentsForPost->count()- 3)  ? 'comment-hidden' : 'comment-block-no-hidden'}}"
                        data-comment="{{ $comment->id }}">
                    <div class="row">
                    <div class="com-title col-md-10">
                        <img src="{{$comment->userForComment->profileForUser->photo}}"
                             width="33" height="33"
                             style="border-radius: 50%;" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="{{$comment->user_id}}">
                                {{$comment->userForComment->profileForUser->name}}
                            </span>
                            {{$comment->userForComment->profileForUser->last_name}}
                        </strong>

                    </div>
                    {{-- если это последний элемент и его автор текущ. польз. --}}
                    {{-- вывести иконки для редакт. и удаления коментария --}}

                    </div>

                    <div class="com-content">
                        {!! $comment->comment !!}
                    </div>

                    @if($comment->img)
                        <div class="mess-img-sk col-md-12">
                            <a class="sk-popup-link" href="{{$comment->img}}">
                                <img src="{{ $comment->img }}" class="img-responsive img-post-sk">
                            </a>
                        </div>
                    @endif


                </div>
                @endforeach

                </div>
            </div>
            </div>


        </div>

        @endforeach

        <div class="pages-pagination text-center">
        {{ $postenter->render() }}
        </div>

    </div>
    </div>


<br><br>

        <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

<?php
            $url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';
            $a = explode('?', $url);
            $a = $a[0];
            ?>


            <?php
            if($a=='/postenter'){
?>
    <div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top:-20px;">
	{{-- @include('website.ru-menu')--}}
	
	

	Наука
    <br>
    <a href="../posts-for-cat/25">Наука</a>
	<br>
    <a href="../posts-for-cat/24">Наука и исследования</a>
	<br>
    <a href="../posts-for-cat/1">Общественные и гуманитарные науки</a>
	<br>
    <a href="../posts-for-cat/2">Естественные науки</a>
	<br>
    <a href="../posts-for-cat/3">Технические науки</a>
	<br>
    <a href="../posts-for-cat/4">Технические эксперименты, прикладные исследования</a>
	<br>
    <a href="../posts-for-cat/5">Исследования, эксперименты</a>
<br>
<br>
    Энергия
    <br>
    <a href="../posts-for-cat/6">Энергосберегающие технологии</a>
	<br>
	<br>
        Быт
        <br>
    <a href="../posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a>
	<br>
	<br>
    Строительство
        <br>
    <a href="../posts-for-cat/8">Капитальное строительство</a>
	<br>
        <a href="../posts-for-cat/9">Ландшафтное строительство</a>
		<br>
        <a href="../posts-for-cat/10">Ландшафтный дизайн</a>
		<br>
		<br>
        Культура
        <br>
        <a href="../posts-for-cat/11">Искусство</a>
		<br>
        <a href="../posts-for-cat/12">Религия</a>
		<br>
		<br>
        Экология
        <br>
        <a href="../posts-for-cat/13">Лес, парковое хозяйство</a>
		<br>
        <a href="../posts-for-cat/14">Реки, водные системы, береговые зоны</a>
		<br>
        <a href="../posts-for-cat/15">Природные ресурсы</a>
		<br>
		<br>
    Общество
        <br>
        <a href="../posts-for-cat/16">Модели коммуникации</a>
		<br>
        <a href="../posts-for-cat/22">Информационные технологии</a>
		<br>
        <a href="../posts-for-cat/17">Национальная идея, формирование национальной идеи</a>
		<br>
        <a href="../posts-for-cat/18">Система общественного самоуправления (СиОС)</a>
		<br>
		<br>
        Образование
        <br>
        <a href="../posts-for-cat/19">Образование, самообразование</a>
		<br>
		<br>
        Идеи
        <br>
        <a href="../posts-for-cat/20">Идеи, предложения, решения</a>

</div>
<?php
			}
?>
   
{{--комментарии--}}



</div>
        
        @endsection