@extends('layouts.main-index')

@section('content')

<div class="clearfix"></div>

{{--
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>
--}}

<div class="col-md-12 col-sm-12 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        {{--
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

                &nbsp;&nbsp;|&nbsp;&nbsp;
              <a href="index_enter.php"><font color="white">Войти</font></a>
              &nbsp;&nbsp;
              <a href="reg.php"><font color="white">Зарегистрироваться</font></a>

        </div>
        --}}


        <div style="margin:10px;padding:10px;background:white;">
            <a href="/">Актуальное!</a>
                &nbsp;&nbsp;<b>Подтемы</b>
                <br />

            @foreach($categories as $category)
            <a href="" style="text-decoration: none;">
                <font color="">
                    {{ $category->page }}
                    &diams;
                </font>
            </a>
            @endforeach

        </div>


        {{--var_dump(is_int((int)'55*1'))--}}
        @foreach($posts as $one_post)
        <div class="sk-div-post" data-id = "{{ $one_post->id }}">

            <div class="row">
            <div class="col-md-10">
                <b>
                    &nbsp;&nbsp;&nbsp;
                    {{ $one_post->title }}
                </b>
            </div>

            @if($one_post->id_user == Auth::id() && Auth::check())
            <div class="col-md-2">
                <p class="text-right">
                    <a href="{{ action('PostController@edit', $one_post->id) }}">
                        <i class="fa fa-pencil-square-o fa-lg sk-fa-edit" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Изменить"></i>
                    </a>
                    &nbsp;
                    <a href="{{ action('PostController@delPost', $one_post->id) }}">
                        <i class="fa fa-trash-o fa-lg sk-fa-del" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Удалить"></i>
                    </a>
                    &nbsp;
                </p>


            </div>
            @endif
            </div>


            @if($one_post->img)
            <div class="col-md-12">
                <img src="{{ $one_post->img }}" class="img-responsive img-post-sk">
            </div>
            @endif

            @if($one_post->video)
            <div class="video-sk col-md-12">
                {!! $one_post->video !!}
            </div>
            @endif

            <p>

                {!! $one_post->description !!}
                {{--
                Спильна справа &mdash; украинская социальная сеть. Основана 10 декабря 2015 года
                Александром Мартыненко. Сайт несколько раз переделывался и был завершен к 2017 году,
                доступен для всех, но создан с целью контролировать информацию только в Украине.
                --}}
            </p>

            <p class="text-right">
            <small >
                {{\Carbon\Carbon::parse($one_post->created_at)->format("добавлено j/m/Y в G:i")}}
            </small>
            </p>


            <a href="{{ url('/post',$one_post->id) }}" style="text-decoration: none;">
                Подробнее
            </a>
            <br />

            <font color="gray">
                Подтема: {{ $one_post->category }}
            </font>
            <br>

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
                        <img src="{{$user_array[$comment->user_id]->photo}}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="{{$user_array[$comment->user_id]->user_id}}">
                                {{$user_array[$comment->user_id]->name}}
                            </span>
                            {{$user_array[$comment->user_id]->last_name}}
                        </strong>

                    </div>
                    {{-- если это последний элемент и его автор текущ. польз. --}}
                    {{-- вывести иконки для редакт. и удаления коментария --}}
                    @if($one_post->commentsForPost->last()== $comment && $comment->user_id == Auth::id())
                    <div class="com-action col-md-2">
                        <p class="text-right">
                            <i class="fa fa-pencil-square-o sk-fa-edit" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Изменить"></i>
                            &nbsp;
                            <i class="fa fa-trash-o sk-fa-del" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Удалить"></i>
                        </p>
                    </div>
                    @endif
                    </div>

                    <div class="com-content">
                        {!! $comment->comment !!}
                    </div>

                    <div class="com-time">
                        <p class="text-info">
                        <small>
                            {{$comment->date}}
                            @if($comment->user_id != Auth::id())
                            &nbsp;&nbsp;
                            <span class="com-answer">
                                Ответить
                            </span>
                            @endif
                        </small>
                        </p>
                    </div>
                    {{-- \Carbon\Carbon::now()->diffForHumans($comment->updated_at,true) --}}
                    {{-- \Carbon\Carbon::now()->diffInDays($comment->updated_at) --}}
                    <hr>
                </div>
                @endforeach

                </div>
            </div>
            </div>


            @if($user_profile)
            <div class="sk-div-write">
                <div class="row">

                    <p><em>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        коментировать...
                    </em></p>

                    <div class="parent-contenteditable col-md-12"
                        data-id = "{{ $one_post->id }}"
                        style="border:1px solid #ddd; border-radius:5px;">

                        <div class="row">
                            <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" contenteditable="true"
                                style="height:100px; padding:10px;"></div>



                            <div class="col-md-1 col-sm-2 col-xs-2 smile-img-load">

                                <img class="smile-open" src="{{asset('assets-front/smile.png')}}">


                                <div class="emoji_container" id="">
                                    <table class="table-smile">

                                        <tr>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/1.jpg')}}"></td>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/2.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/3.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/4.jpg')}}"></td>
                                        </tr>
                                        <tr>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/5.jpg')}}"></td>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/6.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/7.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/8.jpg')}}"></td>
                                        </tr>
                                        <tr>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/9.jpg')}}"></td>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/10.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/11.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/12.jpg')}}"></td>
                                        </tr>
                                        <tr>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/13.jpg')}}"></td>
                                            <td ><img class="smile-Insert" src="{{asset('assets-front/tieba/14.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/15.jpg')}}"></td>
                                            <td><img class="smile-Insert" src="{{asset('assets-front/tieba/16.jpg')}}"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>



                        </div>

                    </div>

                    {{--
                    <div id="smile" class="col-md-6">
                    </div>
                    --}}

                    <div class="col-md-12 div-write-submit">
                        <p class="text-right">
                            <button class="btn btn-primary btn-sm" style="margin-top:1px">
                                Отправить
                            </button>
                        </p>
                    </div>

                </div>
            </div>
            @else
            <a href="{{ url('user/create') }}" >
            <p class="bg-warning text-center link-profile">
                <small><i>
                Заполните профиль пользователя, что бы написать комментарий или поставить лайк
                </i></small>
            </p>
            </a>
            @endif



        </div>
        @endforeach

        <div class="pages-pagination text-center">
        {{ $posts->render() }}
        </div>

    </div>
</div>

{{--
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>
--}}



@endsection