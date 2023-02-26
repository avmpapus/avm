@extends('layouts.main-front')

@section('content')

    <?php
    use App\Userprofile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>

    <div class="clearfix"></div>


    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <?php

        if($user_profile->language=='ua'){
        ?>
        @include('website.ua-right-menu-sk')
        <?php
        }
        if($user_profile->language!='ua'){
        ?>
        @include('website.ru-right-menu-sk')
        <?php
        }

        ?>



    </div>
<br><br>
<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        {{-- блок ответов в материалах --}}
        <div class="sk-div-post" data-id = "">

            <h4 class="text-center">
                Уведомления
            </h4>

            <div class="panel-group" id="accordion">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseMaterial">
                                Ответы в материалах
                            </a>
                            @if(!$comments_answer->whereLoose('viewed', 0)->isEmpty())
                            <span class="pull-right text-danger">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </span>
                            @endif
                        </h4>
                    </div>
                    <div id="collapseMaterial" class="panel-collapse collapse">
                        <div class="panel-body">
                        @if($comments_answer->isEmpty())
                        <p class="text-center">
                            <i>Нет ответов</i>
                        </p>
                        @else

                        @foreach($comments_answer as $one_answer_for_comment)
                        <div class="" data-comment="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                    <img src="{{$one_answer_for_comment->userForComment->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">
                                    &nbsp;
                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$one_answer_for_comment->userForComment->profileForUser->name}}
                                        </span>
                                        {{$one_answer_for_comment->userForComment->profileForUser->last_name}}
                                    </strong>

                                </div>

                            </div>

                            <div class="com-content
                                    {{ ($one_answer_for_comment->viewed == 0) ? 'border-answer' : '' }}">
                                <a href="{{ action('PostController@show',
                                        ['id'=>$one_answer_for_comment->post->id,'com'=>$one_answer_for_comment->id]) }}" >
                                {!! $one_answer_for_comment->comment !!}
                                </a>
                            </div>

                            <div class="com-time">
                                <small>
                                    <a href="{{ action('PostController@show',
                                        ['id'=>$one_answer_for_comment->post->id,'com'=>$one_answer_for_comment->id]) }}" >
                                    {{ $one_answer_for_comment->updated_at }}

                                     в комментариях &#10148;
                                    </a>
                                    <span class="text-info">

                                        <a href="{{ action('PostController@show',
                                        ['id'=>$one_answer_for_comment->post->id,'com'=>$one_answer_for_comment->id]) }}" >
                                            {{ $one_answer_for_comment->post->title }}
                                        </a>

                                    </span>

                                </small>
                            </div>

                            <hr>
                        </div>

                        @endforeach
                        @endif
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseGroup">
                                Ответы в группах
                            </a>
                            @if(!$comments_group_answer->whereLoose('viewed', 0)->isEmpty())
                            <span class="pull-right text-danger">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </span>
                            @endif
                        </h4>
                    </div>
                    <div id="collapseGroup" class="panel-collapse collapse">
                        <div class="panel-body">

                        @if($comments_group_answer->isEmpty())
                        <p class="text-center">
                            <i>Нет ответов</i>
                        </p>
                        @else

                        @foreach($comments_group_answer as $one_answer_for_group)
                        <div class="" data-comment="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                    <img src="{{$one_answer_for_group->userForComment->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">
                                    &nbsp;
                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$one_answer_for_group->userForComment->profileForUser->name}}
                                        </span>
                                        {{$one_answer_for_group->userForComment->profileForUser->last_name}}
                                    </strong>

                                </div>

                            </div>

                            <div class="com-content
                                    {{ ($one_answer_for_group->viewed == 0) ? 'border-answer' : '' }}">
                                {!! $one_answer_for_group->comment !!}
                            </div>

                            <div class="com-time">
                                <small>

                                    {{ $one_answer_for_group->updated_at }}
                                     в комментариях &#10148;

                                    <span class="text-info">
                                        <a href="{{ action('GroupsController@showGroup',
                                                    ['id'=>$one_answer_for_group->newsForComment->groupForNews->id,
                                                    'com'=>$one_answer_for_group->id]) }}" >
                                            {{ $one_answer_for_group->newsForComment->title }}
                                        </a>
                                    </span>

                                </small>
                            </div>

                            <hr>
                        </div>
                        @endforeach
                        @endif

                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFriend">
                                Новые заявки в друзья
                            </a>
                            @if(!$users_for_friendship->isEmpty())
                            <span class="pull-right text-danger">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </span>
                            @endif
                        </h4>
                    </div>
                    <div id="collapseFriend" class="panel-collapse collapse">
                        <div class="panel-body">
                        @if($users_for_friendship->isEmpty())
                        <p class="text-center">
                            <i>Нет новых заявок</i>
                        </p>
                        @else

                        @foreach($users_for_friendship as $user)
                        <div class="" data-comment="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                <a href="{{url('user',$user->user1ForFriend->id)}}">
                                    <img src="{{$user->user1ForFriend->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">
                                    &nbsp;
                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$user->user1ForFriend->profileForUser->name}}
                                        </span>
                                        {{$user->user1ForFriend->profileForUser->last_name}}
                                    </strong>

                                </a>
                                - хочет добавить Вас в друзья
                                </div>

                                <div class="col-md-12 text-right">
                                    <button type="button" class="btn btn-danger btn-xs btn-friend-not"
                                            data-request="{{$user->user1ForFriend->id}}">
                                        Отклонить
                                    </button>
                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-success btn-xs btn-friend-yes"
                                            data-request="{{$user->user1ForFriend->id}}">
                                        Принять
                                    </button>
                                </div>



                            </div>

                            {{--
                            <div class="com-content">

                            </div>

                            <div class="com-time">
                                <small>
                                    <span class="text-info">

                                    </span>
                                </small>
                            </div>
                            --}}

                        </div>

                        @endforeach
                        @endif
                        </div>
                    </div>
                </div>

                <!-- заявки на вступление в группу -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseRequestGroup">
                                Новые заявки в группах
                            </a>
                            @if(!$request_for_group->isEmpty())
                            <span class="pull-right text-danger">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </span>
                            @endif
                        </h4>
                    </div>
                    <div id="collapseRequestGroup" class="panel-collapse collapse">
                        <div class="panel-body">
                        @if($request_for_group->isEmpty())
                        <p class="text-center">
                            <i>Нет новых заявок</i>
                        </p>
                        @else

                        @foreach($request_for_group as $one_request)
                        <div class="" data-comment="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                <a href="{{url('user',$one_request->userForRequest->id)}}">
                                    <img src="{{$one_request->userForRequest->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">
                                    &nbsp;
                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$one_request->userForRequest->profileForUser->name}}
                                        </span>
                                        {{$one_request->userForRequest->profileForUser->last_name}}
                                    </strong>

                                </a>
                                - хочет вступить в группу
                                <a href="{{action('GroupsController@showGroup',$one_request->groupForRequest->id)}}"
                                    class="text-warning">
                                    <strong>
                                        {{$one_request->groupForRequest->title}}
                                    </strong>
                                </a>

                                </div>

                                <div class="col-md-12 text-right">
                                    <form role="form" action="{{action('GroupsController@disallowEnterGroup')}}"
                                        method='post' style="display: inline-block;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$one_request->userForRequest->id}}">
                                        <input type="hidden" name="group_id" value="{{$one_request->groupForRequest->id}}">
                                        <button type="submit" class="btn btn-danger btn-xs">
                                            Отклонить
                                        </button>
                                    </form>
                                    &nbsp;&nbsp;
                                    <form role="form" action="{{action('GroupsController@confirmEnterGroup')}}"
                                        method='post' style="display: inline-block;">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="user_id" value="{{$one_request->userForRequest->id}}">
                                        <input type="hidden" name="group_id" value="{{$one_request->groupForRequest->id}}">
                                        <button type="submit" class="btn btn-success btn-xs">
                                            Принять
                                        </button>
                                    </form>

                                </div>
                            </div>

                        </div>

                        @endforeach
                        @endif
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseLike">
                                Новые лайки пользователей
                            </a>
                            @if(!$new_likes->isEmpty() || !$new_news_likes->isEmpty())
                            <span class="pull-right text-danger">
                                <i class="fa fa-check-square-o"></i>
                            </span>
                            @endif
                        </h4>
                    </div>
                    <div id="collapseLike" class="panel-collapse collapse">
                        <div class="panel-body">

                        @if($new_likes->isEmpty() && $new_news_likes->isEmpty())
                        <p class="text-center">
                            <i>Нет ответов</i>
                        </p>
                        @else

                        @if(!$new_likes->isEmpty())
                        @foreach($new_likes as $one_like)
                        <div class="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                    <img src="{{$one_like->userForLike->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">

                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$one_like->userForLike->profileForUser->name}}
                                        </span>
                                        {{$one_like->userForLike->profileForUser->last_name}}
                                    </strong>
                                </div>
                            </div>

                            <div class="">



                                <small>
                                    <a href="{{ action('NoticeController@viewedPostLike',$one_like->id) }}">
                                    {{\Carbon\Carbon::parse($one_like->updated_at)->format("j/m/Y в G:i")}}
                                    оценил
                                    </a>
                                </small>

                                <span>
                                    <a href="{{ action('NoticeController@viewedPostLike',$one_like->id) }}">
                                    <img src='{{asset('assets-front/img/very_like.png')}}' width='20'>
                                        </a>
                                </span>

                                <small>
                                    <a href="{{ action('NoticeController@viewedPostLike',$one_like->id) }}">
                                    материал
                                    </a>
                                </small>

                                &#10148;

                                <span class="text-info">
                                    <a href="{{ action('NoticeController@viewedPostLike',$one_like->id) }}">
                                        {{ $one_like->postForLike->title }}
                                    </a>
                                </span>
                            </div>

                            <hr>

                        </div>
                        @endforeach
                        @endif

                        @foreach($new_news_likes as $one_news_like)
                        <div class="">
                            <div class="row">
                                <div class="com-title col-md-12">
                                    <img src="{{$one_news_like->userForLike->profileForUser->photo}}"
                                        width="50" height="50" class="" alt="">
                                    &nbsp;
                                    <strong>
                                        <span class="author-name" data-authorid="">
                                            {{$one_news_like->userForLike->profileForUser->name}}
                                        </span>
                                        {{$one_news_like->userForLike->profileForUser->last_name}}
                                    </strong>
                                </div>
                            </div>

                            <div class="">
                                <small>
                                    {{\Carbon\Carbon::parse($one_news_like->updated_at)->format("j/m/Y в G:i")}}
                                    оценил
                                </small>

                                <span>
                                    <img src='{{asset('assets-front/img/very_like.png')}}' width='20'>
                                </span>

                                <small>
                                    новость
                                </small>

                                &#10149;

                                <span class="text-info">
                                    <a href="{{action('NoticeController@viewedNewsLike',$one_news_like->id)}}#anc-news-{{$one_news_like->newsForLike->id}}">
                                        {{ $one_news_like->newsForLike->title }}
                                    </a>
                                </span>
                            </div>

                            <hr>

                        </div>
                        @endforeach

                        @endif

                        </div>
                    </div>
                </div>

            </div>


            {{--
            <h4 class="text-center">
                Ответы в материалах
            </h4>
            <hr>

            @if($comments_answer->isEmpty())
            <p class="text-center">
                <i>Нет ответов</i>
            </p>
            @else

            @foreach($comments_answer as $one_answer_for_comment)
            <div class="" data-comment="">
                <div class="row">
                    <div class="com-title col-md-12">
                        <img src="{{$one_answer_for_comment->userForComment->profileForUser->photo}}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="">
                                {{$one_answer_for_comment->userForComment->profileForUser->name}}
                            </span>
                            {{$one_answer_for_comment->userForComment->profileForUser->last_name}}
                        </strong>

                    </div>

                </div>

                <div class="com-content
                        {{ ($one_answer_for_comment->viewed == 0) ? 'border-answer' : '' }}">
                    {!! $one_answer_for_comment->comment !!}
                </div>

                <div class="com-time">
                    <small>

                        {{ $one_answer_for_comment->updated_at }}
                         в комментариях &#10148;

                        <span class="text-info">

                            <a href="{{ action('PostController@show',
                            ['id'=>$one_answer_for_comment->post->id,'com'=>$one_answer_for_comment->id]) }}" >
                                {{ $one_answer_for_comment->post->title }}
                            </a>

                        </span>

                    </small>
                </div>

                <hr>
            </div>

            @endforeach
            @endif
            <br>
            --}}

        </div>



        {{-- блок ответов в группах
        <div class="sk-div-post" data-id = "">

            <h4 class="text-center">
                Ответы в группах
            </h4>
            <hr>

            @if($comments_group_answer->isEmpty())
            <p class="text-center">
                <i>Нет ответов</i>
            </p>
            @else

            @foreach($comments_group_answer as $one_answer_for_group)
            <div class="" data-comment="">
                <div class="row">
                    <div class="com-title col-md-12">
                        <img src="{{$one_answer_for_group->userForComment->profileForUser->photo}}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="">
                                {{$one_answer_for_group->userForComment->profileForUser->name}}
                            </span>
                            {{$one_answer_for_group->userForComment->profileForUser->last_name}}
                        </strong>

                    </div>

                </div>

                <div class="com-content
                        {{ ($one_answer_for_group->viewed == 0) ? 'border-answer' : '' }}">
                    {!! $one_answer_for_group->comment !!}
                </div>

                <div class="com-time">
                    <small>

                        {{ $one_answer_for_group->updated_at }}
                         в комментариях &#10148;

                        <span class="text-info">
                            <a href="{{ action('GroupsController@showGroup',
                                        ['id'=>$one_answer_for_group->newsForComment->groupForNews->id,
                                        'com'=>$one_answer_for_group->id]) }}" >
                                {{ $one_answer_for_group->newsForComment->title }}
                            </a>
                        </span>

                    </small>
                </div>

                <hr>
            </div>

            @endforeach
            @endif
            <br>

        </div>
         блок ответов в группах --}}


        {{--
        <div class="sk-div-post" data-id = "">

            <h4 class="text-center">
                Новые заявки в друзья
            </h4>
            <hr>

            @if($users_for_friendship->isEmpty())
            <p class="text-center">
                <i>Нет новых заявок</i>
            </p>
            @else

            @foreach($users_for_friendship as $user)
            <div class="" data-comment="">
                <div class="row">
                    <div class="com-title col-md-12">
                    <a href="{{url('user',$user->user1ForFriend->id)}}">
                        <img src="{{$user->user1ForFriend->profileForUser->photo}}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="">
                                {{$user->user1ForFriend->profileForUser->name}}
                            </span>
                            {{$user->user1ForFriend->profileForUser->last_name}}
                        </strong>

                    </a>
                    - хочет добавить Вас в друзья
                    </div>

                    <div class="col-md-12 text-right">
                        <button type="button" class="btn btn-danger btn-xs btn-friend-not"
                                data-request="{{$user->user1ForFriend->id}}">
                            Отклонить
                        </button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-success btn-xs btn-friend-yes"
                                data-request="{{$user->user1ForFriend->id}}">
                            Принять
                        </button>
                    </div>




                </div>

                <div class="com-content">

                </div>

                <div class="com-time">
                    <small>



                        <span class="text-info">

                        </span>

                    </small>
                </div>

                <hr>
            </div>

            @endforeach
            @endif
            <br>

        </div>
        --}}



    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">

    <?php
    if($user_profile->language!='ua'){
    ?>

    <div style="margin-left: -40px;background-color:#fff;padding:10px;">
        Наука
    <br>
    <a href="../posts-for-cat/25">Наука</a><br>
    <a href="../posts-for-cat/24">Наука и исследования</a><br>
    <a href="../posts-for-cat/1">Общественные и гуманитарные науки</a><br>
    <a href="../posts-for-cat/2">Естественные науки</a><br>
    <a href="../posts-for-cat/3">Технические науки</a><br>
    <a href="../posts-for-cat/4">Технические эксперименты, прикладные исследования</a><br>
    <a href="../posts-for-cat/5">Исследования, эксперименты</a><br><br>
    Энергия
    <br>
    <a href="../posts-for-cat/6">Энергосберегающие технологии</a><br><br>
        Быт
        <br>
    <a href="../posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a><br>
    Строительство
        <br>
    <a href="../posts-for-cat/8">Капитальное строительство</a><br>
        <a href="../posts-for-cat/9">Ландшафтное строительство</a><br>
        <a href="../posts-for-cat/10">Ландшафтный дизайн</a><br><br>
        Культура
        <br>
        <a href="../posts-for-cat/11">Искусство</a><br>
        <a href="../posts-for-cat/12">Религия</a><br><br>
        Экология
        <br>
        <a href="../posts-for-cat/13">Лес, парковое хозяйство</a><br>
        <a href="../posts-for-cat/14">Реки, водные системы, береговые зоны</a><br>
        <a href="../posts-for-cat/15">Природные ресурсы</a><br><br>
    Общество
        <br>
        <a href="../posts-for-cat/16">Модели коммуникации</a><br>
        <a href="../posts-for-cat/22">Информационные технологии</a><br>
        <a href="../posts-for-cat/17">Национальная идея, формирование национальной идеи</a><br>
        <a href="../posts-for-cat/18">Система общественного самоуправления (СиОС)</a><br><br>
        Образование
        <br>
        <a href="../posts-for-cat/19">Образование, самообразование</a><br><br>
        Идеи
        <br>
        <a href="../posts-for-cat/20">Идеи, предложения, решения</a>
    </div>
    <?php
    }
    if($user_profile->language=='ua'){
    ?>

    <div style="margin-left: -40px;background-color:#fff;padding:10px;">
        Наука
    <br>
    <a href="../posts-for-cat/25">Наука</a><br>
    <a href="../posts-for-cat/24">Наука і дослідження</a><br>
    <a href="../posts-for-cat/1">Громадські та гуманітарні науки</a><br>
    <a href="../posts-for-cat/2">Природні науки</a><br>
    <a href="../posts-for-cat/3">Технічні науки</a><br>
    <a href="../posts-for-cat/4">Технічні експерименти, прикладні дослідження</a><br>
    <a href="../posts-for-cat/5">Дослідження, експерименти</a><br><br>
    Энергія
    <br>
    <a href="../posts-for-cat/6">Енергозберігаючі технології</a><br><br>
        Побут
        <br>
    <a href="../posts-for-cat/7">Побутові, технічні експерименти, саморобки</a><br><br>
        Будівництво
        <br>
    <a href="../posts-for-cat/8">Капітальне будівництво</a><br>
        <a href="../posts-for-cat/9">Ландшафтне будівництво</a><br>
        <a href="../posts-for-cat/10">Ландшафтний дизайн</a><br><br>
        Культура
        <br>
        <a href="../posts-for-cat/11">Искусство</a><br>
        <a href="../posts-for-cat/12">Религия</a><br><br>
        Экологія
        <br>
        <a href="../posts-for-cat/13">Ліс, паркове господарство</a><br>
        <a href="../posts-for-cat/14">Річки, водні системи, берегові зони</a><br>
        <a href="../posts-for-cat/15">Природні ресурси</a><br><br>
        Суспільство
        <br>
        <a href="../posts-for-cat/16">Моделі комунікації</a><br>
        <a href="../posts-for-cat/22">Інформаційні технології</a><br>
        <a href="../posts-for-cat/17">Національна ідея, формування національної ідеї</a><br>
        <a href="../posts-for-cat/18">Система громадського самоврядування (СіОС)</a><br><br>
        Освіта
        <br>
        <a href="../posts-for-cat/19">Освіта, самоосвіта</a><br><br>
        Ідеї
        <br>
        <a href="../posts-for-cat/20">Ідеї, Пропозиції, Рішення</a><br>
    </div>
    <?php
    }


    if($user_profile->language!='ua'){
        ?>


                <?php
        echo'<br>
<div style="margin-left: -40px;background-color:#fff;padding:10px;">
<a href="ua" id="post_form_language">Українська</a>';
        echo'<br><font color="gray">Русский</font>
</div>';
    }

    if($user_profile->language=='ua'){
        echo'<br>
<div style="margin-left: -40px;background-color:#fff;padding:10px;">
<font color="gray">Українська</font>';
        echo'<br><a href="ru" id="post_form_language">Русский</a>
</div>';
    }
    ?>
</div>

</div>



@endsection