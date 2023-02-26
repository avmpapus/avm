@extends('layouts.main-front')

@section('content')

    <?php
    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>


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

    <div class="col-md-6 col-sm-6 col-xs-12 sk-block sk-block-center">
        <div class="midcont">

            <div id="myDiv"></div>

            {{--хлебные крошки--}}
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
            </script>


            <?php
            echo $_SERVER['REQUEST_URI']
            ?>

            <div class="sk-div-groups" data-id = "">

                <div class="row">
                    <div class="col-md-12 sk-one-group">
                        <h4>
                            {{$group->title}}
                        </h4>
                    </div>

                    <div class="col-md-12 sk-one-group">


                        <p class="group-description">
                            {{--
                            <a class="sk-popup-link" href="{{$group->avatar}}">

                                <img src="{{$group->avatar}}" width="50%" class="img-responsive4"
                                    alt="" style="float:left; margin: 7px 12px 7px 0;">
                            </a>
                            --}}
                            <i>{{$group->description}}</i>
                        </p>

                    </div>

                    <div class="col-md-12 sk-one-group">
                        <div class="btn-group btn-group-justified">

                            @if($group->user_id == Auth::id())
                                <a href="{{ action('GroupsController@edit', $group->id) }}"
                                   class="btn btn-primary btn-xs" role="button">
                                    Изменить
                                </a>
                            @endif

                            {{-- если коллекция НЕ содерж. указанное значение
                            @if(!$group->userForGroup->contains('id',Auth::id()))
                            <a href="{{ action('GroupsController@enterGroup', $group->id) }}"
                                class="btn btn-success btn-xs" role="button">
                                Вступить в группу
                            </a>
                            @endif
                            --}}

                            {{-- если коллекция запросов содерж. указанное значение--}}
                            @if($group->requestOfGroup->contains('user_id_request',Auth::id()))
                                <a href="" class="btn btn-success btn-xs" role="button" disabled>
                                    Подана заявка
                                </a>
                                <!-- если коллекция вступивших в группу НЕ содерж. указанное значение -->
                            @elseif(!$group->userForGroup->contains('id',Auth::id()))
                                <a href="{{ action('GroupsController@enterGroup', $group->id) }}"
                                   class="btn btn-success btn-xs" role="button">
                                    Вступить в группу
                                </a>
                                <!-- если коллекция содерж. указанное значение-->
                            @elseif($group->userForGroup->contains('id',Auth::id()))
                                <a href="{{ action('GroupsController@exitGroup', $group->id) }}"
                                   class="btn btn-warning btn-xs" role="button">
                                    Выйти из группы
                                </a>
                            @endif

                            <a href="" class="btn btn-info btn-xs btn-members" role="button" onclick="return false;">
                                Участники
                            </a>

                        </div>


                        @if(Session::has('messEnter'))
                            <p class="help-block">{{Session::get('messEnter')}}</p>
                        @endif

                        <div class="div-group-members" style="display: none;">
                            @if(!$group->userForGroup->isEmpty())
                                @foreach($group->userForGroup as $user)
                                    <div class="one-member">
                                        <a href="{{url('user',$user->profileForUser->user_id)}}">
                                            <img src="{{$user->profileForUser->photo}}" width="50" height="50" class="" alt="">
                                            &nbsp;
                                            <strong>
                                                {{$user->profileForUser->name}}
                                                {{$user->profileForUser->last_name}}
                                            </strong>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <br>
                                <p class="text-center">
                                    <i>.... в этой группе нет участников </i>
                                </p>
                            @endif
                        </div>

                        {{--
                        <hr>
                        <p class="group-description">
                            <i>{{$group->description}}</i>
                        </p>
                        --}}
                    </div>


                    <p class="text-center">
                        <i></i>
                    </p>

                </div>

            </div>



        <!-- если группа не закрытая или польз. в ней состоит -->
            @if(!$group->closed_group || $group->userForGroup->where('id', Auth::id())->first())
                <div class="sk-div-post">
                    <form role="form" id="form-news-sk" action="{{action('NewsController@storeNews')}}"
                          method='post' enctype='multipart/form-data'>
                        {{ csrf_field() }}
                        <input type="hidden" name="group_id" value="{{$group->id}}">




                        <div class="for-large-screens">
                            <p>
                                <a href="../user/{{$user_profile->user_id}}">
                                    <img src="{{$user_profile->photo}}"
                                         width="45" height="45"
                                         style="border-radius: 50%;" class="leftimg"></a>
                        </div>




                        <a href="javascript:onoff('div1');">

                            <?php
                            if($user_profile->language!='ua'){
                            ?>
                            <textarea id="duble" class="form-control" name="content_news" rows="2" style="width:88%" placeholder="Что Вы думаете?">{{ old('content_news') }}</textarea>
                        </a>
                                <?php
                            }
                            if($user_profile->language=='ua'){
                            ?>
                            <textarea id="duble" class="form-control" name="content_news" rows="2" style="width:88%"  placeholder="Що Ви думаете?">{{ old('content_news') }}</textarea>
                        </p>
                        <?php
                            }
                            ?>

                            @if ($errors->has('content_news'))
                                <span class="help-block">
                            <strong>{{ $errors->first('content_news') }}</strong>
                        </span>
                            @endif

                        </a>
                        <br>
                        <div id="div1" style="display:none;">
                            <div class="form-group">
                                <input id="log" onkeyup="duble.value = this.value" type="text" name="title" class="form-control" value="{{ old('title') }}"
                                       placeholder="Заголовок">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="file" name="img2" title="Загрузить изображение. Изображение должно быть формата jpg или png.">
                                @if ($errors->has('img2'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                                @endif
                            </div>


                            <div class="ajax-respond"></div>


                            <div class="form-group">
                                <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                                       placeholder="Добавьте ссылку на видео в YouTube и видео будет в Вашем посте">
                                @if ($errors->has('video_link'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="form-group">


                            </div>


                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                    Сохранить
                                </button>
                                &nbsp;&nbsp;
                                <a href="{{action('GroupsController@showGroup', $group->id)}}" class="btn btn-danger btn-sm" role="button">
                                    Отменить
                                </a>
                            </div>
                        </div>
                    </form>


                    <script>
                        function onoff(t){
                            p=document.getElementById(t);
                            if(p.style.display=="none"){
                                p.style.display="block";}
                            else{
                                p.style.display="show";}
                        }
                    </script>
                </div>




                @if(isset($group->newsOfGroup))
                    @foreach($group->newsOfGroup as $one_news)
                        <div class="sk-div-post" data-id = "{{$one_news->id}}">

                            <div class="row">
                                <div class="col-xs-12">
                                    <img src="{{$one_news->userForNews["profileForUser"]['photo']}}"
                                         width="38" height="38"
                                         style="border-radius: 50%;" class="img-rounded" alt="">
                                    &nbsp;
                                    <a href="{{action('UserProfileController@show', $one_news->userForNews['id'])}}"
                                       class="text-warning">
                                        {{$one_news->userForNews["profileForUser"]['name']}}
                                        {{$one_news->userForNews["profileForUser"]['last_name']}}
                                    </a>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-md-10">
                                    <a name="anc-news-{{$one_news->id}}"></a>
                                    <h4>
                                        &nbsp;&nbsp;&nbsp;
                                        {{ $one_news->title }}
                                    </h4>
                                </div>

                                @if($one_news->user_id == Auth::id())
                                    <div class="col-md-2">
                                        <p class="text-right">
                                            <a href="{{ action('NewsController@edit', $one_news->id) }}">
                                                <i class="fa fa-pencil-square-o fa-lg sk-fa-edit" aria-hidden="true"
                                                   data-toggle="tooltip" data-placement="top" title="Изменить"></i>
                                            </a>
                                            &nbsp;
                                            <a href="{{ action('NewsController@delNews', $one_news->id) }}">
                                                <i class="fa fa-trash-o fa-lg sk-fa-del" aria-hidden="true"
                                                   data-toggle="tooltip" data-placement="top" title="Удалить"></i>
                                            </a>
                                            &nbsp;
                                        </p>


                                    </div>
                                @endif
                            </div>


                            @if($one_news->img)
                                <div class="col-md-12">
                                    <a class="sk-popup-link" href="{{$one_news->img}}">
                                        <img src="{{ $one_news->img }}" class="img-responsive img-post-sk">
                                    </a>
                                </div>
                            @endif

                            @if($one_news->video)
                                <div class="video-sk col-md-12">
                                    {!! $one_news->video !!}
                                </div>
                            @endif

                            <p>
                                {{ $one_news->content_news }}
                            </p>

                            <p class="text-right">
                <span class="text-info">
                <a class="" href="{{ action('UserProfileController@show', $one_news->userForNews->id) }}">
                {{$one_news->userForNews->profileForUser->name}}
                </a>
                </span>
                                <small >
                                    {{\Carbon\Carbon::parse($one_news->created_at)->format("добавил j/m/Y в G:i")}}
                                </small>
                            </p>

                            {{-- блок лайков --}}
                            @if($group->type == 1)
                                <div class="row">
                                    <div class="col-xs-12" style="margin-bottom: 10px;">
                                        <table class="table-like">
                                            <tr>
                                                <td class="td-one-sk">

                                                    <input type='image' src='{{asset('assets-front/img/very_like.png')}}' value='Не нравится'
                                                           data-toggle="tooltip" title="Очень нравится"
                                                           name='submit_very_likes' width='20' class="radius_unlikes"
                                                           data-id = "{{-- $one_post->id --}}" data-like="1"
                                                           onclick="return false;" onFocus="this.blur();"/>

                                                    <a href="#" class="sk-very-like" tabindex="0" data-trigger="focus" onclick="return false;">
                                                        {{ $one_news->like_arr['ve'] }}
                                                    </a>

                                                </td>

                                                <td class="td-one-sk">
                                                    <!---<input type='submit' value='Нравится' name='submit_likes'  />--->
                                                    <input type='image' src='{{asset('assets-front/img/like.png')}}' value='Не нравится' data-toggle="tooltip" title="Нравится"
                                                           name='submit_likes' width='20' class="radius_unlikes"
                                                           data-id = "{{-- $one_post->id --}}" data-like="2"
                                                           onclick="return false;" onFocus="this.blur();"/>

                                                    <a href="#" class="sk-like" tabindex="0" data-trigger="focus" onclick="return false;">
                                                        {{ $one_news->like_arr['li'] }}
                                                    </a>
                                                </td>
                                                <td class="td-one-sk">
                                                    <!---<input type='submit' value='Не нравится' name='submit_unlikes' />-->
                                                    <input type='image' src='{{asset('assets-front/img/unlike.png')}}' value='Не нравится' data-toggle="tooltip" title="Не нравится"
                                                           name='submit_unlikes' width='20' class="radius_unlikes"
                                                           data-id = "{{-- $one_post->id --}}" data-like="3"
                                                           onclick="return false;" onFocus="this.blur();"/>

                                                    <a href="#" class="sk-no-like" tabindex="0" data-trigger="focus" onclick="return false;">
                                                        {{ $one_news->like_arr['un'] }}
                                                    </a>

                                                </td>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            @endif
                            {{-- блок лайков --}}


                            <div class="div-comments">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 div-all-comments">


                                        {{-- если больше 3 комментов, вывести кнопку и 3 последних поста --}}
                                        @if($one_news->commentOfNews->count()>3)

                                            <button type="button" class="btn btn-warning btn-lg btn-block btn-xs btn-more-comment">
                                                <strong>
                                                    показать все
                                                </strong>
                                            </button>
                                        @endif

                                        <hr>


                                        @foreach($one_news->commentOfNews as $key=>$comment)
                                            {{-- если комментарий не входит в 3 последних --}}
                                            <div class="{{($key < $one_news->commentOfNews->count()- 3)
                                        ? 'comment-hidden' : 'comment-block-no-hidden'}}"
                                                 data-comment="{{ $comment->id }}">
                                                <div class="row">
                                                    <div class="com-title col-md-10">
                                                        <img src="{{$comment->userForComment->profileForUser->photo}}"
                                                             width="33" height="33"
                                                             style="border-radius: 50%;" class="" alt="">
                                                        &nbsp;
                                                        <strong>
                                    <span class="author-name"
                                          data-authorid="{{$comment->userForComment->id}}">
                                        {{$comment->userForComment->profileForUser->name}}
                                    </span>
                                                            {{$comment->userForComment->profileForUser->last_name}}
                                                        </strong>

                                                    </div>
                                                    {{-- если это последний элемент и его автор текущ. польз. --}}
                                                    {{-- вывести иконки для редакт. и удаления коментария --}}
                                                    @if($comment->user_id == Auth::id())
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

                                                <div class="com-content
                                {{ ($comment->viewed == 0 && $comment->for_user == Auth::id()) ? 'border-answer' : '' }}">
                                                    {!! $comment->comment !!}
                                                </div>

                                                @if($comment->img)
                                                    <div class="mess-img-sk col-md-12">
                                                        <a class="sk-popup-link" href="{{$comment->img}}">
                                                            <img src="{{ $comment->img }}" class="img-responsive img-post-sk">
                                                        </a>
                                                    </div>
                                                @endif

                                                <div class="com-time">
                                                    <p class="text-info">
                                                        <small>
                                                            {{ \Carbon\Carbon::now()->diffForHumans($comment->updated_at,true) }}
                                                            назад
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


                            <div class="sk-div-write" data-comment-edit="">
                                <div class="row">

                                    {{--
                                    <div class="col-md-12 text-center">
                                        <button type="button" class="btn btn-warning btn-sm"
                                            data-toggle="modal" data-target="#modalForComments" data-backdrop="static">
                                            <em>
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                <b>написать...</b>
                                            </em>
                                        </button>
                                    </div>
                                    --}}

                                    <p><em>
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                            коментировать...
                                        </em></p>


                                    <div class="parent-contenteditable col-md-12"
                                         data-id = ""
                                         style="border:1px solid #ddd; border-radius:5px;">

                                        <div class="row">
                                            <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor-{{$one_news->id}}"
                                                 contenteditable="true" style="height:100px; padding:10px;"></div>
                                            <div class="col-md-1 col-sm-2 col-xs-2" style="padding-left: 5px;padding-right: 5px;">
                                                <img src="/12-22.png" class="sk-smile-btn" id="smile-{{$one_news->id}}"
                                                     width="30px" height="30px">
                                            </div>
                                            <div class="col-md-1 col-sm-2 col-xs-2 mess-img">
                                                <a href="#modalImg" data-toggle="modal">
                                                    <i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12 div-write-submit">
                                        <p class="text-right">
                                            <button class="btn btn-primary btn-sm" style="margin-top:1px">
                                                Отправить
                                            </button>
                                        </p>
                                    </div>


                                </div>
                            </div>


                            <div class="div-img-ajax" style="margin-left: 15px; margin-right: 15px;">
                                <div class="row">
                                    <div class="col-md-12 img-edit"></div>
                                </div>
                            </div>

                        </div>


                    @endforeach
                @endif

            <!-- если группа закрытая и польз. в ней не состоит -->
            @else
                <div class="sk-div-information">
                    <p class="text-center bg-warning text-danger">
                        <strong>Это приватная группа.</strong>
                    </p>
                    <p class="">
                        &nbsp;&nbsp;&nbsp;
                        Что бы видеть новости и участвовать в обсуждениях нужно вступить в группу
                    </p>
                </div>
            @endif

            <div class="pages-pagination text-center">
                {{-- $posts->render() --}}
            </div>



        </div>

    </div>
<br><br>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <div class="rightcolm">

            <a class="sk-popup-link" href="{{$group->avatar}}">
                <img src="{{$group->avatar}}" width="100%">
            </a>

        </div>
    </div>


    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>

        <div class="rightcolm">
            @include('website.menu')
        </div>
        <?php
        }
        if($user_profile->language=='ua'){
        ?>

        <div class="rightcolm">
            @include('website.ua-menu')
        </div>
        <?php
        }


        if($user_profile->language!='ua'){
            ?>


                <?php
            echo'<br><div class="rightcolm"><a href="ua" id="post_form_language">Українська</a>';
            echo'<br><font color="gray">Русский</font></div>';
        }

        if($user_profile->language=='ua'){
            echo'<br><div class="rightcolm"><font color="gray">Українська</font>';
            echo'<br><a href="ru" id="post_form_language">Русский</a></div>';
        }
        ?>
    </div>

    {{--
    <div class="sss">
        <div class="row">

            <p><em>
                <i class="fa fa-pencil" aria-hidden="true"></i>
                коментировать...
            </em></p>

            <div class="parent-contenteditable col-md-12"
                    id="sk-parent-editable" data-news=""
                    style="border:1px solid #ddd; border-radius:5px;">

                <div class="row">
                    <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor"
                        contenteditable="true" style="height:100px; padding:10px;"></div>
                    <div id="smile" class="col-md-1 col-sm-2 col-xs-2"></div>

                    <div class="col-md-1 col-sm-2 col-xs-2 mess-img">
                        <a href="#modalImg" data-toggle="modal">
                            <i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-md-12 div-write-submit">
                <p class="text-right">
                    <button class="btn btn-primary btn-sm" style="margin-top:1px">
                        Отправить
                    </button>
                </p>
            </div>

        </div>
    </div>
    --}}

    <script>
        var scrollId = "<?php echo $com; ?>";
    </script>

    <script>
        $(document).ready(function(){

            //анимация при показе подписчиков группы
            $('.btn-members').click(function () {
                $(this).blur();

                if($(".div-group-members").is(':visible')){
                    $(".div-group-members").hide(300);
                }
                else{
                    $(".div-group-members").show(300);
                }

            });



            // добавление в форму модального окна modalImg
            // id новости
            $('.mess-img').click(function () {
                var newsId = $(this).parents(".sk-div-post").attr("data-id");
                $("#inputNewsIdForImg").val(newsId);
                $('.mess-img').blur();
            });


            /*
                //обработчик события resize
                $(window).resize(function(){
                    //alert('Размеры окна браузера изменены.');

                    var sv = $(".sss").css("display");

                    //alert(sv);

                    if(sv == "block"){

                        $(".emoji_container").hide();

                        var er = $(".sss .parent-contenteditable").attr("data-news");

                        var el = $('[data-id ='+ er + ']');

                        var pos = el.find(".sk-div-write").offset();
                                //alert(pos.top);

                        var w = el.width();
                        var h = el.height();


                        $(".sss").css({top: pos.top + "px",left:pos.left + "px"}).width(w-30).height(h).show();

                        var he = $(".emoji_container").height();
                        // озиция окна смайликов
                        $(".emoji_container").css({top: pos.top - he - 10 + "px",left: pos.left -40 + "px"});

                    }

                });


                // перетаскивание блока ввода в нужное место по клику
                $(".div-contenteditable-emp").click(function () {

                    $(".emoji_container").hide();

                    // показать все элементы sk-div-write
                    $(".sk-div-write").fadeTo(0, 1);

                    var el = $(this).parents('.sk-div-write');

                    var pos = el.offset();
                    //alert(pos.top);

                    var w = el.width();
                    var h = el.height();
                    // скрыть элемент
                    el.fadeTo(0, 0);

                    var postId = el.parents('.sk-div-post').attr("data-id");

                    // показать блок в нужном месте
                    //$(".sss").offset({top:pos.top, left:pos.left}).width(w).height(h).show();
                    $(".sss").css({top: pos.top + "px",left:pos.left + "px"}).width(w).height(h).show();

                    // фокус в поле ввода
                    $("#editor").html('').focus();
                    // убрать атрибут блоку, указывающий на редактируемое сообщение
                    $(".sss").attr("data-comment-edit","");
                    $(".sss .parent-contenteditable").attr("data-news",postId);

                    var he = $(".emoji_container").height();

                    // озиция окна смайликов
                    $(".emoji_container").css({top: pos.top - he - 10 + "px",left: pos.left -40 + "px"});

                })
            */

            /* отправка коментария */
            $(".div-write-submit button").click(function () {

                var commentId = $(this).parents('.sk-div-write').attr("data-comment-edit");
                var newsId = $(this).parents('.sk-div-post').attr("data-id");
                var divWriteContent = $(this).parents('.sk-div-write').find(".div-contenteditable").html();
                var divForComment = $(this).parents(".sk-div-post").find(".div-all-comments");

                // после получения контента коментария
                // очистить блок для предотвращения повторной отправки
                $(this).parents('.sk-div-write').find(".div-contenteditable").html("");

                var img = $(".img-edit img").attr("src");

                // если строка ввода не пустая
                if (divWriteContent.length > 0) {
                    $.ajax({
                        type: 'POST',
                        url: '/comment-group-store',
                        data: {
                            contentComment: divWriteContent,
                            img: img,
                            postId: newsId,
                            commentId: commentId
                        },
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        beforeSend: function() {

                        },
                        success: function (msg) {
                            //console.log('Результат - ' + msg.comment.id);

                            //очистить поле newsId в форме загрузки картинки
                            $("#inputNewsIdForImg").val('');

                            /*
                            // если это редактирование, то удалить старый коментарий(если он есть)
                            if(msg.comment.id > 0){
                                var oldCommentId = msg.comment.id;
                                $('[data-comment =' + oldCommentId + ']').detach();
                            }
                            */

                            // если есть изображение
                            if(msg.comment.img){
                                var imgBlock = "<div class=\"mess-img-sk col-md-12\">"
                                    + "<a class=\"sk-popup-link\" href=\"" + msg.comment.img + "\">"
                                    + "<img src=\"" +  msg.comment.img +  "\" class=\"img-responsive img-post-sk\">"
                                    + "</a> </div> " ;
                            }
                            else{
                                var imgBlock = "";
                            }

                            if (msg.response != -1) {

                                //divForComment.find(".com-action").detach();
                                var elInsert = "<div class=\"comment-block-no-hidden\""
                                    + "data-comment=\"" + msg.comment.id + "\">"
                                    + "<div class=\"row\"> <div class=\"com-title col-md-10\">"
                                    + "<img src=\"" + msg.userData.photo + "\" width=\"50\" height=\"50\" "
                                    + "class=\"\" alt=\"\">"
                                    + " &nbsp; <strong><span class=\"author-name\" data-authorid=\"" + msg.userData.user_id
                                    + "\">" + msg.userData.name + " </span> " + msg.userData.last_name
                                    + "</strong> </div> <div class=\"com-action col-md-2\">"
                                    + "<p class=\"text-right\">"
                                    + "<i class=\"fa fa-pencil-square-o sk-fa-edit\" aria-hidden=\"true\""
                                    + " data-toggle=\"tooltip\" title=\"Изменить\"></i>"
                                    + " &nbsp; <i class=\"fa fa-trash-o sk-fa-del\" aria-hidden=\"true\""
                                    + " data-toggle=\"tooltip\" title=\"Удалить\"></i>"
                                    + "</p> </div> </div> <div class=\"com-content\">"
                                    + msg.comment.comment + "</div>"+ imgBlock +"<div class=\"com-time\"> <p class=\"text-info\">"
                                    + "<small>добавлен в " + msg.timeComment + "</small> </p> </div> <hr> </div>";

                                // если это редактирование, то заменить старый коментарий
                                if(commentId){
                                    var oldCommentId = msg.comment.id;
                                    $('[data-comment =' + oldCommentId + ']').html(elInsert).fadeTo(500, 1);
                                }
                                // иначе вставить в самый конец блока коментариев
                                else{
                                    divForComment.append(elInsert);
                                }
                            }

                            $(".img-edit").children().detach();

                            // убрать атрибут блоку, указывающий на редактируемое сообщение
                            $(".sk-div-write").attr("data-comment-edit","");
                        }
                    });
                }
            });



            //обработчик событий для динамически добавленных в DOM элементов
            // tooltip новый
            $('.div-all-comments').on('mouseenter', '.com-action .sk-fa-edit', function(){
                $(this).tooltip('show');
            });

            // tooltip новый
            $('.div-all-comments').on('mouseenter', '.com-action .sk-fa-del', function(){
                $(this).tooltip('show');
            });


            /* удаление коментария (нового и старого) */
            $('.div-all-comments').on('click', '.com-action .sk-fa-del',function(){
                var divCommentBlock = $(this).parents('.comment-block-no-hidden');

                var commentId = divCommentBlock.attr('data-comment');

                //alert(commentId);
                // окно подверждения удаления
                var isDel = confirm("Удалить коментарий ?");

                if(isDel == true) {
                    $.ajax({
                        type: 'POST',
                        url: '/comment-group-del',
                        data: {
                            commentId: commentId
                        },
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (msg) {
                            if (msg.response == 1) {
                                divCommentBlock.detach();
                            }

                        }
                    })
                }
            });


            /* редактирование коментария (нового и старого) */
            $('.div-all-comments').on('click', '.com-action .sk-fa-edit',function(){
                var divCommentBlock = $(this).parents('[data-comment]');

                var commentId = divCommentBlock.attr('data-comment');

                var content = divCommentBlock.find('.com-content').html();

                // назначить атрибут блоку, указывающий на редактируемое сообщение
                divCommentBlock.parents(".sk-div-post").find(".sk-div-write").attr("data-comment-edit",commentId);

                // отменить прозрачность для всех блоков, которые
                // могли быть с прозрачностью при прошлом редактировании
                $('.comment-block-no-hidden, .sk-div-write').fadeTo(0, 1);
                // вставить редактируемый текст в поле ввода
                divCommentBlock.parents(".sk-div-post").find(".div-contenteditable").html(content);

                // удалить все старые картинки из блоков для редактирования
                $(".img-edit").children().detach();

                // установить полупрозрачность для блока редактируемого сообщения
                divCommentBlock.fadeTo(500, 0.3);

                // получ. блок с картинкой(вставить картинку до перетаскивания sss)
                var i = divCommentBlock.find('.mess-img-sk');

                // если блок с кртинкой есть в сообщении, то добавить кнопку удаления
                if(i.length){

                    var iUrl = i.find("img").attr('src');

                    // вывести копию блока с картинкой после кнопки div-mess-submit
                    divCommentBlock.parents('.sk-div-post').find(".img-edit").html("<div class=\"img-for-del col-md-12\">"
                        + "<img src=\"" + iUrl
                        + "\" class=\"img-responsive img-post-sk\"> "
                        + "<button type=\"button\" class=\"btn btn-danger del-image-mess btn-xs\">"
                        + "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button></div>");

                }

            });


            /* ответ на коментарий */
            $('.div-all-comments').on('click', '.com-answer',function(){

                var divCommentBlock = $(this).parents('.comment-block-no-hidden, .comment-hidden');
                var commentId = divCommentBlock.attr('data-comment');

                // получ. имя автора коментария и удалить все лишние пробелы
                var nameAuthor = $.trim(divCommentBlock.find('.author-name').text());
                var idAuthor = divCommentBlock.find('.author-name').attr('data-authorid');

                var divPost = $(this).parents('.sk-div-post').attr('data-id');

                // отменить прозрачность для всех блоков, которые
                // могли быть с прозрачностью при прошлом редактировании
                $('.comment-block-no-hidden, .sk-div-write').fadeTo(0, 1);

                // убрать все старые данные из #editor
                //$("#editor").html("");

                // удалить все старые картинки из блоков для редактирования
                $(".img-edit").children().detach();
                // убрать атрибут блоку, указывающий на редактируемое сообщение
                $(".sk-div-write").attr("data-comment-edit","");


                divCommentBlock.parents(".sk-div-post").find(".div-contenteditable")
                    .html('<span data-for-id="' + idAuthor+ '">'+ nameAuthor+',</span>&nbsp;');

            });


            /* загрузка картинки из модали */
            //$('#saveImgMess').click(function () {
            $('#formImgMess input[type=file]').change(function(){

                $('#modalImg').modal('hide');

                // получ. значение newsId, загружаемой картики
                var newsId = $("#inputNewsIdForImg").val();

                // получить форму, а НЕ input
                var form = $("#formImgMess");

                var formData = new FormData(form[0]);

                $.ajax({
                    url: "/comment-store-img",
                    type: "POST",
                    data : formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    success: function(data){

                        console.log('Результат - ' + data.error);

                        // если есть newsId вставить картику в блок ввода
                        if(newsId){

                            var elImg = $('.sk-div-post[data-id ='+ newsId + ']').find(".img-edit");

                            elImg.html("<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"60%\"><br> ").fadeIn();

                        }

                    },
                    error: function(err){

                        console.log(err);

                        //var fff = $(".sss .parent-contenteditable").attr("data-news");
                        var elRRR = $('.sk-div-post[data-id ='+ newsId + ']').find(".img-edit");

                        elRRR.html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                            + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                            + " Выберите другое изображение. </span>");

                    }
                });
            });


            // удаление картинки при редактировании
            $('.sk-div-post').on('click', '.del-image-mess',function(){
                // окно подверждения удаления
                var isDel = confirm("Удалить изображение ?");

                if(isDel == true) {
                    $(".img-edit").children().detach();
                }
            });



            // массив для предотвращения дублирования отправки комментов.
            var arrCom = [];

            // установ. обработчик скроллинга для его последующего удаления
            // и отправка на сервер для "viewed" тех, которые в видимой области
            $(document).on('scroll',function(){
                var boxesInWindow = inWindow(".border-answer");

                console.log('boxesInWindow ----'+ boxesInWindow.attr("class"));

                if(boxesInWindow){

                    // если не остался ни один элемент в рамке на странице
                    // то удалить обработчик скроллинга
                    if($(".border-answer").length == 0){
                        $(document).off("scroll");
                    }

                    // перебор набора элементов в видимой области
                    // и удаление рамки для каждого из них с задержкой
                    boxesInWindow.each(function(indx, element){

                        // если его css-свойство display равно none
                        // то выход из функции
                        if($(element).is(':hidden')){ return false;};

                        var commentId = $(element).parents().attr("data-comment");

                        //alert(commentId);

                        // если в массиве нет элемента данного коментария
                        // проверка для предотвращ. дублирования отправки на сервер
                        if($.inArray(commentId, arrCom) == -1){
                            // добав. комент в массив
                            arrCom.push(commentId);

                            //console.log(tid);

                            $.ajax({
                                type: 'POST',
                                url: '/comment-group/viewed',
                                data: {
                                    commentId: commentId
                                },
                                headers: {
                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (msg) {
                                    if (msg.response == 1) {
                                        var countNotice = $('.badge-notice').text();

                                        var newCountNotice = countNotice -1;

                                        if(newCountNotice == 0){
                                            $('.badge-notice').detach();
                                            $(".a-badge-notice img").removeClass("com-anime");
                                        }
                                        else{
                                            $('.badge-notice').text(newCountNotice);
                                        }
                                    }

                                }
                            });

                        }

                        // удаление класса через временной интервал
                        setTimeout(function() { $(element).removeClass("border-answer")}, 3000);
                    });
                }

            });

        });

    </script>

@endsection