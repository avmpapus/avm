@extends('layouts.main-front')

@section('content')

    <?php
   // use App\Userprofile;
  //  $user_profile = UserProfile::where('user_id', Auth::id())->first();
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








<br>
    <div class="col-md-6 col-sm-6 col-xs-12 sk-block">
        <div class="midcont">
           
            <?php
            /*кто смотрел*/

/*
            if($user_profile->user_id != Auth::id()){

                            $user = DB::table('visit_profile_user')->where('id_user_2',Auth::id())->first();


                $db = new PDO('mysql:host=mysql317.1gb.ua;dbname=gbua_cpil_new;charset=utf8', 'gbua_cpil_new', 'dffd9d06qw');

                $stmt = $db->query('SELECT count FROM visit_profile_user WHERE id_user_1='.$user_profile->user_id);

                $row_count = $stmt->rowCount();

                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Вашу анкету смотрел: <font color="blue">'.$user->name.'</font>&nbsp;&nbsp;<font color="gray">'.$row_count.'</font> раз';

            }
*/
            ?>
            <div style="background:#ffffff;padding:20px;margin:20px;">


                <?php

                /*запись в базу данных пользователя смотревшего анкету другого пользователя*/

             //   $mysqli = new mysqli("localhost", "root", "", "gbua_cpil_new");


            //    if ($mysqli->connect_errno) {
            //        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
            //       exit();
              //  }
                /*
                            if($user_profile->user_id != Auth::id()){
                                    DB::table('visit_profile_user')->insert(array('id_user_2' => Auth::id(),
                                        'id_user_1' => $user_profile->user_id, 'name' => Auth::user()->name));
                }
                */

                ?>


                <?
                /*кто смотрел*/

                /*
                                    if($user_profile->user_id != Auth::id()){

                                            $user = DB::table('visit_profile_user')->where('id_user_1',Auth::id())->first();

                                          echo $user->id_user_1;
                                            echo $user->name;


                }

                                if($user_profile->user_id == Auth::id()){

                                                    $user = DB::table('visit_profile_user')->where('id_user_1',Auth::id())->first();


                                                    echo '&nbsp;'.$user->id_user_2;
                                                    echo $user->name;





                                        }
                */


                ?>



                @if($user_profile->photo)

                    <a class="sk-popup-link" href="{{$user_profile->photo}}">					


                        <img src="{{$user_profile->photo}}" width="200">

                    </a>

                @elseif(!$user_profile->photo)
			
                    <img src="{{asset('assets-front/img/no-avatar.jpg')}}" width="200">


                @endif
			<div style="position:relative;left:210px;top:-155px;">
                {{$user_profile->name}}
                {{$user_profile->last_name}}
             			 <br>		
                    @if($user_profile->day && $user_profile->day && $user_profile->year)
                <font color="gray">Дата рождения:</font> {{$user_profile->day}}
                {{$user_profile->month}}
                {{$user_profile->year}}				

@endif


<br>

                <font color="gray">Знак зодиака:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>{{$user_profile->zodiak}}
</div>
</div>

            <div style="margin:20px;" class="block-act-for-user">

                @if($user_profile->user_id == Auth::id())



                @elseif(isset($is_friend) && $is_friend->status == 2)

                    <div class="btn-group btn-group-justified">
                        <?php





                        if($user_profile->user_id){
                        ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs btn-mess">
                                Написать
                            </button>
                        </div>
                        <?php
                        }

                        ?>

                        <?php
                        if($user_profile->user_id){

                        ?>


                        <div class="btn-group">


                        </div>


                        <a href="delete_friend/{{$user_profile->user_id}}"  class="btn btn-danger btn-xs">Удалить из друзей</a>


                        <?php
                        }
                        ?>

                    </div>






                    <div class="sss sss-no-move sk-div-write write-mess"
                         data-mess-edit = "" style="display: none; position: relative;">
                        <div class="row">

                            <p class="sk-pencil">
                                <em>
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    написать...
                                </em>
                            </p>

                            <div class="parent-contenteditable col-md-12"
                                 data-id = "{{ $user_profile->user_id }}"
                                 style="border:1px solid #ddd; border-radius:5px;">

                                <div class="row">

                                    <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor-{{$user_profile->user_id}}"
                                         contenteditable="true" style="height:100px; padding:10px;"></div>

                                    <div class="col-md-1 col-sm-2 col-xs-2" style="padding-left: 5px;padding-right: 5px;">
                                        <img src="/12-22.png" class="sk-smile-btn" id="smile-{{$user_profile->user_id}}"
                                             width="30px" height="30px">
                                    </div>

                                    <div class="col-md-1 col-sm-2 col-xs-2 mess-img">
                                        <a href="#modalImg" data-toggle="modal">
                                            <i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="col-md-1 col-sm-2 col-xs-2 mess-video">
                                        <a href="#modalVideo" data-toggle="modal">
                                            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 div-mess-submit">
                                <p class="text-right">
                                    <button class="btn btn-warning btn-sm btn-not" style="margin-top:1px">
                                        Отменить
                                    </button>
                                    &nbsp;&nbsp;
                                    <button class="btn btn-primary btn-sm mess-direct" style="margin-top:1px">
                                        Отправить
                                    </button>
                                </p>
                            </div>

                            <div class="col-md-12 img-video-edit"></div>

                        </div>
                    </div>



                @elseif(isset($is_friend) && $is_friend->status < 2)

                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-xs" disabled="disabled">
                                Заявка в друзья подана
                            </button>
                            </br>
                            </br>





                            {{--отмена заявки на добавление в друзья (связанные с ним файлы:
                            контроллер app\Http\Controllers\DashPosts.php,
                            app\Http\routes)--}}

                            @if(isset($is_friend) && $is_friend->status == 0)
                                <a href="cancel_query/{{$user_profile->user_id}}">
                                    <button type="button" class="btn btn-success btn-xs">
                                        Отменить заявку
                                    </button>
                                </a>
                            @endif



                            {{--автоматичекое удаление отклоненной заявки (связанные с ним файлы:
                            контроллер app\Http\Controllers\DashPosts.php,
                            app\Http\routes)--}}
                            <?
                            if(isset($is_friend) && $is_friend->status == 1){
                                DB::table('friends')->where('status', '1')->delete();
                            }
                            ?>
                        </div>

                    </div>

                @else

                    <div class="btn-group btn-group-justified">
                        <div class="btn-group">
                            @if($user_profile->block==0)
                                <button type="button" class="btn btn-primary btn-xs btn-friendship"
                                        data-request="{{$user_profile->user_id}}">
                                    Добавить в друзья
                                </button>
                            @endif

                            @if($user_profile->block>0)

                                <a href="user_cancel_block/{{$user_profile->user_id}}">
                                    <button type="button" class="btn btn-success btn-xs">

                                        Разблокировать пользователя

                                    </button>
                                </a>
                            @elseif  ($user_profile->block==0)
                                <a href="user_block/{{$user_profile->user_id}}">
                                    <button type="button" class="btn btn-success btn-xs">

                                        Заблокировать пользователя

                                    </button>
                                </a>
                            @endif


                        </div>

                    </div>

                @endif




            </div>



            {{--
                        <div style="background:#ffffff;padding:20px;margipx;">



                            <div class="form-group">
                                <label>Имя:</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{$user_profile->name}}" disabled>
                            </div>

                            <div class="form-group">
                                <label>Фамилия:</label>
                                <input type="text" class="form-control" name="lastname"
                                       value="{{$user_profile->last_name}}" disabled>
                            </div>

                        </div>


                        <div class="form-inline" role="form"
                             style="background:#ffffff;padding:20px;margin:20px;">

                            <div class="form-group">
                                <label class=""> Дата : </label>
                                <select name="day" class="form-control" disabled>
                                    <option value="" selected>
                                        {{$user_profile->day}}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class=""> Месяц : </label>
                                <select name="month" class="form-control" disabled>
                                    <option value="" selected>
                                        {{$user_profile->month}}
                                    </option>
                                </select>
                            </div>

                            <div class="form-group" >
                                <label class="">Год : </label>
                                <select name="year" class="form-control" disabled>
                                    <option value="" selected>
                                        {{$user_profile->year}}
                                    </option>
                                </select>
                            </div>


                            <div class="form-group" >
                                <label class="">Знак Зодиака</label>
                                <select name="zodiak" class="form-control" disabled>
                                    <option value="" selected>
                                        {{$user_profile->zodiak}}
                                    </option>
                                </select>

                            </div>

            </div>
    --}}

            <div style="background:#ffffff;padding:20px;margin:20px;">

                @if($user_profile->skype)
                    <div class="form-group">
                        <label>
                            <i class="fa fa-skype fa-lg" aria-hidden="true"></i>
                            skype
                        </label>
                        <input type="text" class="form-control" name="skype" value="{{ $user_profile->skype }}" disabled>
                    </div>
                @endif

                @if($user_profile->phone)
                    <div class="form-group">
                        <label>
                            <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                            номер телефона
                        </label>
                        <input type="text" class="form-control" name="phone" value="{{ $user_profile->phone }}" disabled>
                    </div>
                @endif



                <label>
                    <i class="fa fa-street-view fa-lg" aria-hidden="true"></i>
                    чем я занят последнее время:
                </label>
                <textarea class="form-control" name="article" rows="3" style="resize: none;"
                          disabled>{{$user_profile->article ? $user_profile->article : 'не указано'}}</textarea>
                <br>


                <label>
                    <i class="fa fa-heartbeat fa-lg" aria-hidden="true"></i>
                    мои увлечения:
                </label>
                {{--
                <textarea class="form-control" name="hobby" rows="3" style="resize: none;"
                disabled>{{$user_profile->hobby ? $user_profile->hobby : 'не указано'}}</textarea>
            <br>
            --}}

                <select name="hobby" class="form-control" disabled>
                    <option>{{$user_profile->hobby}}</option>
                    <option>Наука</option>
                    <option>Наука и исследования</option>
                    <option>Общественные и гуманитарные науки</option>
                    <option>Естественные науки</option>
                    <option>Технические науки</option>
                    <option>Технические эксперименты, прикладные исследования</option>
                    <option>Исследования, эксперименты</option>
                    <option>Энергосберегающие технологии</option>
                    <option>Бытовые, технические эксперименты, самоделки</option>
                    <option>Капитальное строительство</option>
                    <option>Ландшафтное строительство</option>
                    <option>Ландшафтный дизайн</option>
                    <option>Живопись</option>
                    <option>Рукоделие</option>
                    <option>Декоративно-прикладное искусство</option>
                    <option>Лес, парковое хозяйство</option>
                    <option>Реки, водные системы, береговые зоны</option>
                    <option>Природные ресурсы</option>
                    <option>Модели коммуникации</option>
                    <option>Информационные технологии</option>
                    <option>Национальная идея, формирование национальной идеи</option>
                    <option>Система общественного самоуправления (СиОС)</option>
                    <option>Образование, самообразование</option>
                    <option>Идеи, Предложения, Решения</option>
                </select>
                </br>



                <label>
                    <i class="fa fa-bullseye fa-lg" aria-hidden="true"></i>
                    моя цель:
                </label>
                <textarea class="form-control" name="my_target" rows="3" style="resize: none;"
                          disabled>{{$user_profile->my_target ? $user_profile->my_target : 'не указано'}}</textarea>
                <br>

            </div>

            <div style="background:#ffffff;padding:20px;margin:20px;">
                <h4 class="text-center">
                    Добавленые материалы
                </h4>
                <hr>

                @if(!$posts->isEmpty())
                    @foreach($posts as $post)
				@if($post->pub=='Личное')
					
				{{$post->title}}
								{{$post->description}}
                        <div class="sk-material-list">
                            <a href="{{action('PostController@show', $post->id)}}"
                               class="text-warning">
                                <img src="{{$post->img}}" width="100%">
									
                            </a>
                            &nbsp;&nbsp; <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                            {{\Carbon\Carbon::parse($post->created_at)->format("добавлен j/m/Y в G:i")}}
                        </div>
						@endif
                    @endforeach
                @else
                    <i> нет материалов </i>
                @endif






            </div>

        </div>
    </div>


    <script>
        /* для личных сообщений со стр. "профиль" */
        $(function () {

            /* открыть поле для написания */
            $(".btn-mess").click(function () {
                $(".write-mess").show('fast');
                $(this).blur();
                $(".div-contenteditable").focus();

            });

            /* закрыть поле для написания */
            $(".btn-not").click(function () {
                $(".write-mess").hide('fast');
                $(".div-contenteditable").html('');
            });


            // для отправки сообщений со стр. "профиль"
            $(".mess-direct").click(function(){

                var recipientId = $(".parent-contenteditable").attr('data-id');
                var mess = $(".div-contenteditable").html();

                var img = $(".img-video-edit img").attr("src");

                var video;

                if(img){
                    video = null;
                }
                else{
                    // получить HTML-код видео из блока .img-video-edit .video-sk
                    video = $(".img-video-edit .video-sk").html();
                    //alert(video);
                }

                // простая валидация "если ничего не набрано"
                if(mess == ''){
                    //alert('Пустое поле');
                    return false;
                }

                $.ajax({
                    url: '/store-for-profile',
                    type: 'POST',
                    data: {
                        recipientId: recipientId,
                        mess: mess,
                        img: img,
                        video: video
                    },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        if(data.response != -1) {

                            $(".div-contenteditable").html('');

                            $(".img-video-edit").children().detach();

                            $(".sk-pencil").html("<span class=\"help-block\">"
                                + data.response + " </span>");

                            $(".write-mess").delay(2000).hide('fast');
                        }
                    }
                });

            });
            // для отправки сообщений со стр. "профиль"

            /* загрузка картинки из модали */
            //$('#saveImgMess').click(function () {
            $('#formImgMess input[type=file]').change(function(){

                $('#modalImg').modal('hide');

                // получить форму, а НЕ input
                var form = $("#formImgMess");

                var formData = new FormData(form[0]);

                $.ajax({
                    url: "/store-img-mess",
                    type: "POST",
                    data : formData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    processData: false,
                    contentType: false,
                    success: function(data){

                        $(".img-video-edit").html("<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"60%\"><br> ");
                        $(".img-video-edit").append("<button type=\"button\" class=\"btn btn-danger del-image-mess btn-xs\">" +
                            "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button>");
                    },
                    error: function(err){

                        $(".img-video-edit").html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                            + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                            + " Выберите другое изображение. </span>");
                        // Render the errors with js ...
                    }
                });
            });


            /* загрузка ссылки на видео из модали */
            $('#saveVideoMess').click(function () {

                var l = $('input[name=imgVideo]').val();

                $(".img-video-edit").html('<div class="video-sk col-md-12">' + l + '</div><div class="clearfix"></div>');
                $(".img-video-edit").append("<button type=\"button\" class=\"btn btn-danger del-video-mess btn-xs\">" +
                    "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button>");

                $('input[name=imgVideo]').val('');

            });

            // удаление картинки при редактировании
            $('.sk-div-write').on('click', '.del-image-mess',function(){
                // окно подверждения удаления
                var isDel = confirm("Удалить изображение ?");

                if(isDel == true) {
                    $(".img-video-edit").children().detach();
                }
            });

            // удаление видео при редактировании
            $('.sk-div-write').on('click', '.del-video-mess',function(){
                // окно подверждения удаления
                var isDel = confirm("Удалить видео ?");

                if(isDel == true) {
                    $(".img-video-edit").children().detach();
                    // удалить ссылку из input модали
                    $('input[name=imgVideo]').val("");
                }
            });

        });

    </script>
<br><br><br><br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">

    <?php
    if($user_profile->language!='ua'){
    ?>

    <div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: -50px;">
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

    <div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: -10px;">
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
        <a href="../posts-for-cat/20">Ідеї, Пропозиції, Рішення</a>
    </div>
    <?php
    }


    if($user_profile->language!='ua'){
        ?>


                <?php
        echo'
<div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: 5px;">
<a href="ua" id="post_form_language">Українська</a>';
        echo'<br><font color="gray">Русский</font>
</div>';
    }

    if($user_profile->language=='ua'){
        echo'
<div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: 11px;">
<font color="gray">Українська</font>';
        echo'<br><a href="ru" id="post_form_language">Русский</a>
</div>';
    }
    ?>




    <hr>
            <div style="margin-left: -40px;background-color:#fff;padding:10px;">
            @include('website.friend')
            </div>
        
    </div>
</div>
</div>



@endsection




