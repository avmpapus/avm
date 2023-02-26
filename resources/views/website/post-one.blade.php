@extends('layouts.main-front')

@section('content')

<div class="clearfix"></div>

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




<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>



        <?php
        //use App\UserProfile;

        //$user_profile = UserProfile::where('user_id', Auth::id())->first();

        if($user_profile->language!='ua'){
        ?>


        <div style="margin:-10px;padding:10px;">
            {{--хлебные крошки--}}
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
            </script>


            <?php
            echo $_SERVER['REQUEST_URI']
            ?>
            <label for="tab_2"><a href="../post/create">&nbsp;&nbsp;Опубликовать фото</a></label>
        </div>

        <?php
        }



        if($user_profile->language=='ua'){
        ?>


        <div style="margin:-10px;padding:10px;">
            {{--хлебные крошки--}}
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Попередня сторінка</a>");
            </script>


            <?php
            echo $_SERVER['REQUEST_URI']
            ?>
        </div>

        <?php
        }
        ?>



        <div style="margin:10px;padding:10px;background:white;">


            <?php
            //use App\UserProfile;
            //$roles = DB::table('users_profiles')->pluck('photo','user_id');


            //foreach ($roles as $users_profiles => $photo) {
            //  echo '<img src="'.$photo.'" width="50px" height="50px"/>';
            //}
            /*
                                               $notes = DB::table('users')
                                                    ->leftJoin('users_profiles', 'users.user_id', 'users_profiles.user_id')
                                                ->where('photo', Auth::user()->id);
                                               */

            $user_profile = UserProfile::where('user_id', Auth::id())->first();
            ?>


                <form role="form" id="form-post-sk" action="{{action('PostController@store')}}"
                      method='post' enctype='multipart/form-data'>

                    {{ csrf_field() }}



                    <input type="hidden" name="last_name" value="<?php echo auth::user()->name ?>">




                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                    <div class="for-large-screens">
                        <p>
                            <?php
                            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                            echo '<a href="../user/'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                            }else{
                            // Выввод изображения поставленно пользователм
                            echo '<a href="../user/'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                            }
                            ?>
                    </div>

                    <div class="for-small-screens">
                        <p>
                        <?php
                        if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                            echo '<a href="../user/'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                        }else{
                            // Выввод изображения поставленно пользователм
                            echo '<a href="../user/'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                        }
                        ?>
                    </div>


                    <a href="javascript:onoff('div1');">

             
                        <textarea id="content_post" class="form-control" name="content_post" rows="2" style="width:88%" placeholder="Что у вас нового?">{{ old('content') }}</textarea>
                        
                        
                        
                        </p>
                        
                        <?php
                        }
                        if($user_profile->language=='ua'){
                        ?>
                        @foreach($posts as $one_post)
                        @endforeach

                        <div class="for-small-screens">
                            <p>
                            <?php
                            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                                echo '<a href="../user/'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                            }else{
                                // Выввод изображения поставленно пользователм
                                echo '<a href="../user/'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="45" height="45"
                                     style="border-radius: 50%;" class="leftimg"></a>';
                            }
                            ?>
                        </div>


                        <div class="for-large-screens">
                     
                        
                        
                            <p>
                                <a href="../user/{{$user_profile->user_id}}">
                                    <img src="{{$user_profile->photo}}"
                                         width="45" height="45"
                                         style="border-radius: 50%;" class="leftimg"></a>
                        </div>
                        <a href="javascript:onoff('div1');">


                        
                        
                        
                            <textarea class="form-control" name="content_post" rows="2" style="width:88%" placeholder="Що у вас нового?">{{ old('content') }}</textarea>
                            </p>
                            <?php
                            }
                            ?>


                            @if ($errors->has('content_post'))
                                <span class="help-block">
                                <strong>{{ $errors->first('content_post') }}</strong>
                            </span>
                            @endif


                        </a>



                        <div id="div1" style="display:none;">
						
						
						<font color="blue">Статус материала</font>
						<select name="pub" class="form-control" >
                        <option>Опубликовать</option>
                        <option>Личное</option>
                        </select>
						
						
                            <div class="form-group">

                                <br>
                                <?php
                                if($user_profile->language=='ua'){
                                ?>

                                <font color="blue">По замовченню стоїть Общее, або виберіть підтему для вашого матеріалу</font>
                                <?php
                                }
                                else
                                {
                                ?>
                                <font color="blue">По умолчанию стоит Общее, если не знаете какую подтему выбрать</font>
                                <?php
                                }
                                ?>
                                @foreach($categories as $sub_value)

                                @endforeach
                                <select name="subcategory" class="form-control">
                                    <?php
                                    if($user_profile->language=='ua'){
                                    ?>
                                    <option value="{{$sub_value->id=26}}">{{$sub_value->page='--Общее--'}}</option>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <option value="{{$sub_value->id=26}}">{{$sub_value->page='--Общее--'}}</option>

                                    <?php
                                    }
                                    ?>


                                    @foreach($categories as $sub_value)
                                        <option value="{{$sub_value->id}}">
                                            {{$sub_value->page}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">

                                <?php
                                if($user_profile->language!='ua'){
                                ?>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                       placeholder="Заглавие">
                                <?php
                                }
                                else
                                {
                                ?>

                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                       placeholder="Заголовок">
                                <?php
                                }
                                ?>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                @endif
                            </div>

                            <div class="form-group">

                                <?php
                                if($user_profile->language!='ua'){
                                ?>
                                <input type="file" name="img2" title="Загрузить изображение. Изображение должно быть формата jpg или png.">
                                @if ($errors->has('img2'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                                @endif
                                <?php
                                }
                                else
                                {
                                ?>
                                <input type="file" name="img2" title="Завантажити світлину. Світлина повинна бути формату jpg або png.">
                                @if ($errors->has('img2'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                                @endif
                                <?php
                                }
                                ?>
                            </div>
                            <div class="ajax-respond"></div>
                            <div class="form-group">



                                <?php
                                if($user_profile->language!='ua'){
                                ?>

                                <label for="InputImgVideo" style="font-weight: normal;">
                                    &nbsp;&nbsp;&nbsp; Если Вы хотите встроить на страницу проигрыватель видео
                                    <a href="https://www.youtube.com/" target="_blank">
                            <span class="text-danger">
                                <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                            </span>
                                        <strong>YouTube</strong>
                                    </a>
                                    , скопируйте в поле ввода строку в формате
                                    <code>&lt;iframe&gt;....&lt;/iframe&gt;</code> .
                                    <hr>
                                    &nbsp;&nbsp;&nbsp; Для этого нужно под интересующим Вас видео на сайте
                                    <a href="https://www.youtube.com/" target="_blank">
                            <span class="text-danger">
                                <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                            </span>
                                        <strong>YouTube</strong>
                                    </a>
                                    выбрать <strong class="text-warning">Поделиться</strong>,
                                    затем <strong class="text-warning">Встроить</strong>
                                    и после <strong class="text-warning">Копировать</strong> нужную строку.
                                    <hr>
                                </label>


                                <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                                       placeholder="Добавьте ссылку на видео в YouTube и видео будет в Вашем посте">
                                @if ($errors->has('video_link'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                                @endif
                                <?php
                                }
                                else
                                {
                                ?>
                                <label for="InputImgVideo" style="font-weight: normal;">
                                    &nbsp;&nbsp;&nbsp; Якщо Ви плануєте включити на сторінку програвач відео
                                    <a href="https://www.youtube.com/" target="_blank">
                            <span class="text-danger">
                                <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                            </span>
                                        <strong>YouTube</strong>
                                    </a>
                                    , скопіюйте в поле введення рядок у форматі
                                    <code>&lt;iframe&gt;....&lt;/iframe&gt;</code> .
                                    <hr>
                                    &nbsp;&nbsp;&nbsp; Для цього потрібно під цікавлять Вас відео на сайті
                                    <a href="https://www.youtube.com/" target="_blank">
                            <span class="text-danger">
                                <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                            </span>
                                        <strong>YouTube</strong>
                                    </a>
                                    вибрати <strong class="text-warning">Поділитися</strong>,
                                    потім <strong class="text-warning">Вбудувати</strong>
                                    і після <strong class="text-warning">Копіювати</strong> необхідну стрічку.
                                    <hr>
                                </label>
                                <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                                       placeholder="Додайте посилання на відео в YouTube і відео буде у Вашому пості">
                                @if ($errors->has('video_link'))
                                    <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                                @endif
                                <?php
                                }
                                ?>



                            </div>



                            <a class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm center-block">
                                    <i class="fa fa-external-link-square" aria-hidden="true"></i>
                                    <?php
                                    if($user_profile->language!='ua'){
                                    ?>
                                    Сохранить
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    Зберегти
                                    <?php
                                    }
                                    ?>

                                </button>
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


        {{--отправка материала без перезагрузки--}}

        <script type="text/javascript">

            $(document).ready(function() {
                $('#post_form').submit(function(){
                    $.post("/create", $("#post_form").serialize(),  function(response) {
                    });
                    return false;
                });
            });
        </script>


        {{----------------}}





        {{--var_dump(is_int((int)'55*1'))--}}

        <div class="sk-div-post" data-id = "{{ $post->id }}">

            <div class="row">
                <div class="col-xs-12">
                    <img src='{{$post->userForPost["profileForUser"]["photo"]}}'
                        width='38' height='38' style='border-radius: 50%;' class='img-rounded' alt=''>
                    &nbsp;
                    <a href="{{action('UserProfileController@show', $post->userForPost['id'])}}"
                        class="text-warning">
                        {{$post->userForPost["profileForUser"]['name']}}
                        {{$post->userForPost["profileForUser"]['last_name']}}
                    </a>
                </div>
            </div>
            <hr>

            <b>
                <small >
            <font color="#ADACAC">{{\Carbon\Carbon::parse($post->created_at)->format("j/m/Y в G:i")}}</font>
            
			</small>
            <font color="#ADACAC">&#183;</font>
                 <div class="photo" data-title="Значок планеты - означает, что опубликованный материал виден всем пользователям, если вы опубликовали его со статусом Опубликовать. Если вы опубликовали его со статусом Личное, то он будет виден только в вашем профиле."><img src="../assets-front/img/planeta.png" width="15"></div>
                {{ $post->title }}
            </b>
            <br />

            @if($post->img)
            <div class="col-md-12">
                <a class="sk-popup-link" href="{{$post->img}}">
                <img src="{{ $post->img }}" class="img-responsive img-post-sk">
                </a>
            </div >
            @endif

            @if($post->video)
                <div class="video-sk col-md-12">
                    {!! $post->video !!}
                </div>
            @endif

            <p>

                {!! $post->description !!}

            </p>

            


            <?php
            if($user_profile->language!='ua'){
            ?>
            <font color="gray">
                Подтема:{{-- {{ $one_post->category }}--}}
                <?php echo "<a href='../posts-for-cat/".$post->subcategory_id."'>".$post->category."</a>&nbsp";?>
            </font>
            <?php
            }
            if($user_profile->language=='ua'){
            ?>
            <font color="gray">
                Підтема:{{-- {{ $one_post->category }}--}}
                <?php echo "<a href='../posts-for-cat/".$post->subcategory_id."'>".$post->category."</a>&nbsp";?>
            </font>
            <?php
            }
            ?>
            <br>


            {{-- блок лайков --}}
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
	                                    {{ $post->like_arr['ve'] }}
	                            </a>

	                        </td>

	                        <td class="td-one-sk">
	                            <input type='image' src='{{asset('assets-front/img/like.png')}}' value='Не нравится' data-toggle="tooltip" title="Нравится"
	                                name='submit_likes' width='20' class="radius_unlikes"
	                                data-id = "{{-- $one_post->id --}}" data-like="2"
	                                onclick="return false;" onFocus="this.blur();"/>

	                            <a href="#" class="sk-like" tabindex="0" data-trigger="focus" onclick="return false;">
	                                {{ $post->like_arr['li'] }}
	                            </a>
	                        </td>
	                        <td class="td-one-sk">
	                            <input type='image' src='{{asset('assets-front/img/unlike.png')}}' value='Не нравится' data-toggle="tooltip" title="Не нравится"
	                                name='submit_unlikes' width='20' class="radius_unlikes"
	                                data-id = "{{-- $one_post->id --}}" data-like="3"
	                                onclick="return false;" onFocus="this.blur();"/>

	                            <a href="#" class="sk-no-like" tabindex="0" data-trigger="focus" onclick="return false;">
	                                {{ $post->like_arr['un'] }}
	                            </a>

	                        </td>

	                    </tr>
	                </table>
	            </div>
            </div>
            {{-- блок лайков --}}


            <div class="div-comments">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 div-all-comments">

                {{-- если больше 3 комментов, вывести кнопку и 3 последних поста
                @if($post->commentsForPost->count()>3)

                <button type="button" class="btn btn-warning btn-lg btn-block btn-xs btn-more-comment">
                    <strong>
                        показать все
                    </strong>
                </button>
                @endif

                <hr>
                --}}
                <hr>


                {{-- take(-3) возвращает новую коллекцию с указанным числом элементов c конца --}}
                {{-- @foreach($one_post->comments->take(-3) as $comment) --}}
                @foreach($post->commentsForPost as $key=>$comment)
                {{-- если комментарий не входит в 3 последних --}}
                <div class="comment-block-no-hidden"
                        data-comment="{{ $comment->id }}">
                    <div class="row">
                    <div class="com-title col-md-10">
                        <img src="{{$comment->userForComment->profileForUser->photo}}"
                            width="33" height="33" style="border-radius: 50%;" class="" alt="">
                        &nbsp;
                        <strong>
                            <span class="author-name" data-authorid="{{$comment->userForComment->id}}">
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
                            {{ $comment->date }}
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


            @if(Auth::user()->profileForUser)
            <div class="sk-div-write" data-comment-edit="">
                <div class="row">

                    <p><em>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                            <?php
                            if($user_profile->language!='ua'){
                                ?>
                            коментировать...
                            <?php
                            }
                            if($user_profile->language=='ua'){
                                ?>
                            коментувати...
                            <?php
                            }
                            ?>

                    </em></p>

                    <div class="parent-contenteditable col-md-12"
                        data-id = "{{ $post->id }}" data-news="{{ $post->id }}"
                        style="border:1px solid #ddd; border-radius:5px;">

                        <div class="row">
                            <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor-{{$post->id}}"
                                contenteditable="true" style="height:100px; padding:10px;"></div>

                            <div  class="col-md-1 col-sm-2 col-xs-2" style="padding-left: 5px;padding-right: 5px;">
                                <img src="/12-22.png" class="sk-smile-btn" id="smile-{{$post->id}}"
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
                                <?php
                                if($user_profile->language!='ua'){
                                    ?>
                                Отправить
                                <?php
                                }
                                if($user_profile->language=='ua'){
                                    ?>
                                Відправити
                                <?php
                                }
                                ?>

                            </button>
                        </p>
                    </div>

                    <div class="col-md-12 img-edit"></div>

                </div>
            </div>

            @else
            <a href="{{ url('user/create') }}" >
            <p class="bg-warning text-center link-profile">
                <small><i>
                        <?php
                        if($user_profile->language!='ua'){
                            ?>
                            Заполните профиль пользователя, что бы написать...
    <?php
                        }
                        if($user_profile->language=='ua'){
                            ?>
                            Заповніть профіль користувача, що б написати ...
    <?php
                        }
                        ?>

                </i></small>
            </p>
            </a>
            @endif



        </div>

    <?php
    if(!isset($comment_id)){
        $comment_id = 0;
    }
    ?>

    <script>
        var scrollId = "<?php echo $comment_id; ?>";
    </script>

    </div>
</div>

<br><br>
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
<a href="../ua" id="post_form_language">Українська</a>';
        echo'<br><font color="gray">Русский</font>
</div>';
    }

    if($user_profile->language=='ua'){
        echo'<br>
<div style="margin-left: -40px;background-color:#fff;padding:10px;">
<font color="gray">Українська</font>';
        echo'<br><a href="../ru" id="post_form_language">Русский</a>
</div>';
    }
    ?>
</div>

</div>

<script>


$(function () {

    // добавление в форму модального окна modalImg
    // id поста
    $('.mess-img').click(function () {
        var postId = $(this).parents(".sk-div-post").attr("data-id");
        $("#inputPostIdForImg").val(postId);
        $('.mess-img').blur();
    });


    /* отправка коментария */
    $(".div-write-submit button").click(function () {

        var commentId = $(this).parents('.sk-div-write').attr("data-comment-edit");
        var postId = $(this).parents('.sk-div-post').attr("data-id");
        var divWriteContent = $(this).parents('.sk-div-write').find(".div-contenteditable").html();
        var divForComment = $(this).parents(".sk-div-post").find(".div-all-comments");


        // после получения контента коментария
        // очистить блок для предотвращения повторной отправки
        $(this).parents('.sk-div-write').find(".div-contenteditable").html("");

        var img = $(".img-edit img").attr("src");
        // скрыть окно со смайликами
        $('.emoji_container').hide();

        // если строка ввода не пустая
        if (divWriteContent.length > 0) {

            $.ajax({
                type: 'POST',
                url: '/comment-post-store',
                data: {
                    contentComment: divWriteContent,
                    img: img,
                    postId: postId,
                    commentId: commentId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {

                    //очистить поле newsId в форме загрузки картинки
                    $("#inputPostIdForImg").val('');

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

    //$('.div-all-comments').on('click', '.com-action .sk-fa-del',myAjaxDel);

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
                url: '/comment-del',
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

        // получ. значение postId, загружаемой картики
        var postId = $("#inputPostIdForImg").val();

        // получить форму, а НЕ input
        var form = $("#formImgMess");

        var formData = new FormData(form[0]);

        $.ajax({
            url: "/comment-store-img",
            //url: "/img-store",
            type: "POST",
            data : formData,
            dataType: 'json',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function(data){
                //console.log('Результат - ' + data.error);

                var elImg = $('.sk-div-post[data-id ='+ postId + ']').find(".img-edit");
                elImg.html("<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"60%\"><br> ").fadeIn();

            },
            error: function(err){

                var elImg = $('.sk-div-post[data-id ='+ postId + ']').find(".img-edit");
                elImg.html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
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

                // если в массиве нет элемента данного коментария
                // проверка для предотвращ. дублирования отправки на сервер
                if($.inArray(commentId, arrCom) == -1){
                    // добав. комент в массив
                    arrCom.push(commentId);

                    //console.log(tid);

                    $.ajax({
                        type: 'POST',
                        url: '/comment-post/viewed',
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