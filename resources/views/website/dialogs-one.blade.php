@extends('layouts.main-front')

@section('content')

    <title>{{$user->name}} {{ $user->last_name}}</title>

    <?php
    use App\UserProfile;
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

<script>
    var curUs = "<?php echo Auth::id(); ?>";
</script>
    <br><br>
<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        <div class="sk-div-post" data-user-dialog = "{{$user->user_id}}">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>
                    Диалог c {{$user->name}} {{ $user->last_name}}
                </i>
            </h4>

            <p id="userOnline" class="text-danger text-center">
            @if($user->is_online)
                 online
            @endif
            </p>

            <hr>


            <?php
            $message = '1';
            DB::table('messages')
                ->where('recipient_id', Auth::user()->id)
                ->update(['respond' => $message]);
            ?>


            @if(!$all_mess->isEmpty())
            @foreach($all_mess as $one_mess)

            <div class="one-block-dialog" data-mess-id="{{$one_mess->id }}">
            <div class="row">

                <div class="col-md-10 col-sm-10 col-xs-10 block-user-data"
                    data-user-id="{{ $one_mess->author_id }}">

                    <a href="{{ url('user', $one_mess->author_id) }}">
                        <img src="{{ $one_mess->userForAuthor->profileForUser->photo }}"
                            width="50" height="50" class="" alt="">
                        &nbsp;
                        <strong>
                            {{$one_mess->userForAuthor->profileForUser->name}}
                            {{$one_mess->userForAuthor->profileForUser->last_name}}
                        </strong>
                    </a>
                </div>


                @if($one_mess->author_id == Auth::id() && $one_mess->respond == 0)
                    <div class="mess-action col-md-2">
                        <p class="text-right">
                            &nbsp;
                            <i class="fa fa-pencil-square-o sk-fa-edit" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Изменить"></i>
                            &nbsp;
                            <i class="fa fa-trash-o sk-fa-del" aria-hidden="true"
                                data-toggle="tooltip" data-placement="top" title="Удалить"></i>
                        </p>
                    </div>
                @elseif($one_mess->author_id == Auth::id() && $one_mess->respond == 1)
                    <div class="mess-action col-md-2">
                        <div class="text-right block-sk-eye">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                    </div>
                @endif

                <div class="col-md-12">
                <div class="mess-content-sk
                {{-- ($one_mess->respond == 0 && $one_mess->author_id != Auth::id()) ? 'border-answer' : ''--}}">

                    <div class="mess-text-sk col-md-12
                        {{ ($one_mess->respond == 0 && $one_mess->author_id != Auth::id()) ? 'border-answer' : ''}}">
                        {!!$one_mess->message!!}
                    </div>


                    @if($one_mess->img)
                        <div class="mess-img-sk col-md-12">
                            <a class="sk-popup-link" href="{{$one_mess->img}}">
                                <img src="{{ $one_mess->img }}" class="img-responsive img-post-sk">
                            </a>
                        </div>
                    @endif

                    @if($one_mess->video)
                        <div class="video-sk col-md-12">
                            {!! $one_mess->video !!}
                        </div>
                    @endif


                </div>
                </div>

                <div class=" col-md-12">
                    <p class="text-info text-right">
                    <small>
                    @if( \Carbon\Carbon::now()->diffInMinutes($one_mess->updated_at) < 60 )
                        {{\Carbon\Carbon::parse($one_mess->updated_at)
                                ->format("в G:i")}}
                    @else
                        добавлен {{\Carbon\Carbon::now()->diffForHumans($one_mess->updated_at,true)}} назад
                    @endif
                    &nbsp;&nbsp;&nbsp;
                    </small>
                    </p>
                </div>


            </div>
            <hr>
            </div>
            @endforeach
@if($user->hidden==0)
            <div class="sss sss-no-move sk-div-write"
                data-mess-edit = "" style="display: block; position: relative;">
                <div class="row">

                    <p class="sk-pencil">
                    <em>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        написать...
                    </em>
                    </p>

                    <div class="parent-contenteditable col-md-12"
                        data-id = "{{ $user->user_id }}"
                        style="border:1px solid #ddd; border-radius:5px;">

                        <div class="row">

                            <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor-{{$user->id}}"
                                contenteditable="true" style="height:100px; padding:10px;"></div>

                            <div class="col-md-1 col-sm-2 col-xs-2" style="padding-left: 5px;padding-right: 5px;">
                                <img src="/12-22.png" class="sk-smile-btn" id="smile-{{$user->id}}"
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
                            <button class="btn btn-primary btn-sm" style="margin-top:1px">
                                Отправить
                            </button>
                        </p>
                    </div>

                    <div class="col-md-12 img-video-edit"></div>

                </div>
            </div>
@endif
        {{-- !!Session::get('mess_id')!! --}}

            @else
            <p class="text-center">
                <i>.... нет диалогов</i>
            </p>
            @endif
        </div>
    </div>
</div>


<script>

$(function () {
    // скролл к сообщения и отмена рамки
    var elem = $('.border-answer:last');
    if(elem.length ) {

        // получ. значение по высоте на странице элемента
        var elemTop = elem.offset().top;

        // получ. высоты самого элемента
        var elemHeight = elem.height();

        // получ. высоту экрана
        var windowHeight = $(window).height();

        var deltaTop = elemTop - windowHeight / 2 + elemHeight;

        // плавный скроллинг к элементу
        //$('html,body').animate({scrollTop: deltaTop}, 2000);

        /*
        function classMessDelete() {
            $('.border-answer').removeClass("border-answer");
        }
        setTimeout(classMessDelete,4000);
        */
    }


    /*
    $("#smile").on('click',function (){
        var el = $('.sss');
        var pos = el.offset();
        var he = $(".emoji_container").height();

        // показать блок в нужном месте
        $(".emoji_container").css({top: pos.top - he + 25 + "px",left: pos.left -40 + "px"});
    });
    */


     // сохранение сообщения
     $(".div-mess-submit button").click(function () {

            // ... для редактирования сообщения
            var messId = $(".sk-div-write").attr("data-mess-edit");

            var divForMess = $(".one-block-dialog:last");
            var divWrite = $(this).parents('.sk-div-write').find(".div-contenteditable");
            var divWriteContent = divWrite.html();

            // скрыть окно со смайликами
            $('.emoji_container').hide();

            // если строка ввода не пустая
            if (divWriteContent.length > 0) {

                var userId = $(this).parents('.sk-div-write').find(".parent-contenteditable").attr("data-id");
                //alert(postId);

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
                //alert(img);

                //return false;

                $.ajax({
                    type: 'POST',
                    url: '/store-for-dialog',
                    data: {
                        messId: messId,
                        contentMess: divWriteContent,
                        id: userId,
                        img: img,
                        video: video
                    },
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (msg) {

                        if(msg.response != -1) {

                            divWrite.html('');

                            console.log(msg.message) ;

                            // получ. и форматирование даты
                            var now = new Date();
                            var m = now.getMinutes();
                            if( m<10) {m = "0"+m;}
                            var d = now.getHours()+ "." + m;

                            // удаление иконок действий
                            //$(".one-block-dialog .mess-action").detach();

                            if(msg.message.img){
                                var imgBlock = "<div class=\"mess-img-sk col-md-12\">"
                                                + "<a class=\"sk-popup-link\" href=\"" + msg.message.img + "\">"
                                                + "<img src=\"" +  msg.message.img +  "\" class=\"img-responsive img-post-sk\">"
                                                + "</a> </div> " ;
                            }
                            else{
                                var imgBlock = "";
                            }

                            if(msg.message.video){
                                var videoBlock = "<div class=\"video-sk col-md-12\">"
                                                + msg.message.video + "</div> " ;
                            }
                            else{
                                var videoBlock = "";
                            }

                            divForMess.after("<div class=\"one-block-dialog\" data-mess-id=\""
                                        + msg.message.id + "\"> <div class=\"row\">"
                                        + "<div class=\"col-md-10 col-sm-10 col-xs-10 block-user-data\""
                                        + " data-user-id=\"" + msg.userData.user_id + "\"> <a href=\"\"> "
                                        + " <img src=\"" + msg.userData.photo + "\""
                                        + " width=\"50\" height=\"50\" class=\"\" alt=\"\">"
                                        + " &nbsp; <strong>" + msg.userData.name + " "
                                        +  msg.userData.last_name + "</strong> </a> </div>"
                                        + " <div class=\"mess-action col-md-2\"> <p class=\"text-right\">"
                                        + "<i class=\"fa fa-pencil-square-o sk-fa-edit\" aria-hidden=\"true\""
                                        + " data-toggle=\"tooltip\" data-placement=\"top\""
                                        + " title=\"Изменить\"></i> &nbsp;"
                                        + " <i class=\"fa fa-trash-o sk-fa-del\" aria-hidden=\"true\""
                                        + " data-toggle=\"tooltip\" data-placement=\"top\" title=\"Удалить\"></i>"
                                        + " </p> </div> <div class=\"col-md-12\"> <div class=\"mess-content-sk\">"
                                        + "<div class=\"mess-text-sk col-md-12\">" + msg.message.message + "</div>"
                                        + imgBlock + videoBlock
                                        + "</div> </div> <div class=\"col-md-12\"> <p class=\"text-info text-right\">"
                                        + " <small> в " + d + "&nbsp;&nbsp;&nbsp; </small></p></div>"
                                        + " </div> <hr> </div>");
                            // удаление предзагруженных изображений
                            // удаление предзагруженных видео
                            $(".img-video-edit").children().detach();

                            // удаление старого сообщения, если оно есть(редактирование)
                            var countDiv = $('[data-mess-id =' + msg.message.id + ']');
                            if(countDiv.length > 1){
                                countDiv.first().detach();
                            }
                            //console.log(countDiv.length);

                            $(".sss-no-move").attr("data-mess-edit","");
                        }
                    }
                });
            }
     });


    // tooltip новый
    $('.sk-div-post').on('mouseenter', '.mess-action .sk-fa-edit', function(){
        $(this).tooltip('show');
    });
    $('.sk-div-post').on('mouseenter', '.mess-action .sk-fa-del', function(){
        $(this).tooltip('show');
    });


    /* удаление сообщения (нового и старого) */
    $('.sk-div-post').on('click', '.mess-action .sk-fa-del',function(){
        var divBlockDialog = $(this).parents('.one-block-dialog');

        var Id = divBlockDialog.attr('data-mess-id');

        //alert(commentId);
        // окно подверждения удаления
        var isDel = confirm("Удалить сообщение ?");

        if(isDel == true) {
            $.ajax({
                type: 'POST',
                url: '/del-mess',
                data: {
                    Id: Id
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {
                    if (msg.response == 1) {
                        divBlockDialog.detach();
                    }

                }
            })
        }
    });


    /* редактирование сообщения (нового и старого) */
    $('.sk-div-post').on('click', '.mess-action .sk-fa-edit',function(){
        var divBlockDialog = $(this).parents('.one-block-dialog');

        var Id = divBlockDialog.attr('data-mess-id');

        // назначить атрибут блоку, указывающий на редактируемое сообщение
        $(".sss-no-move").attr("data-mess-edit",Id);

        var content = divBlockDialog.find('.mess-text-sk').html();

        // установить полупрозрачность для блока редактируемого сообщения
        divBlockDialog.fadeTo(500, 0.3);

        // получ. блок с картинокй
        var i = divBlockDialog.find('.mess-img-sk');

        //console.log(i);

        // если блок с кртинкой есть в сообщении, то добавить кнопку удаления
        if(i.length){

            var iUrl = i.find("img").attr('src');

            // вывести копию блока с картинкой после кнопки div-mess-submit
            $(".img-video-edit").html("<div class=\"img-for-del col-md-12\">"
                                + "<img src=\"" + iUrl
                                + "\" class=\"img-responsive img-post-sk\"> "
                                + "<button type=\"button\" class=\"btn btn-danger del-image-mess btn-xs\">"
                                + "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button></div>");

        }

        // получ. блок с видео
        var v = divBlockDialog.find('.video-sk').clone();
        if(v.length){
            //var iUrl = i.find("img").attr('src');

            var vBlock = v.children();

            // вывести копию блока с картинкой после кнопки div-mess-submit
            $(".img-video-edit").html("<div class=\"video-for-del col-md-12\">"
                                + "<button type=\"button\" class=\"btn btn-danger del-video-mess btn-xs\">"
                                + "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button></div>");

            // добавить клон элемента видео в начала блока video-for-del
            v.prependTo(".img-video-edit .video-for-del");
        }

        var divWrite = divBlockDialog.parents('.sk-div-post').find(".div-contenteditable").html(content);

    });


    /* загрузка картинки из модали */
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

                $(".img-video-edit").html("<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"\"><br> ");
                $(".img-video-edit").append("<button type=\"button\" class=\"btn btn-danger del-image-mess btn-xs\">" +
                                        "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button>");

            },
            error: function(err){

                $(".img-video-edit").html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                                       + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                                       + " Выберите другое изображение. </span>");
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

    // массив для предотвращения дублирования отправки сообщений.
    var arrMess = [];

    // установ. обработчик скроллинга для его последующего удаления
    // и отправка на сервер для "viewed" тех, которые в видимой области
    $(document).on('scroll',function(){
        var boxesInWindow = inWindow(".border-answer");

        console.log('boxesInWindow ----'+ boxesInWindow.attr("class"));

        if(boxesInWindow){

            // если не остался ни один элемент в рамке на странице
            // то удалить обработчик скроллинга
            if($(".border-answer").length == 0){
                //$(document).off("scroll");
            }

            // перебор набора элементов в видимой области
            // и удаление рамки для каждого из них с задержкой
            boxesInWindow.each(function(indx, element){

                // если его css-свойство display равно none
                // то выход из функции
                //if($(element).is(':hidden')){ return false;};

                var messId = $(element).parents('.one-block-dialog').attr("data-mess-id");

                //alert(commentId);

                // если в массиве нет элемента данного сообщения
                // проверка для предотвращ. дублирования отправки на сервер
                if($.inArray(messId, arrMess) == -1){
                    // добав. комент в массив
                    arrMess.push(messId);

                    $.ajax({
                        type: 'POST',
                        url: '/message/mess-read',
                        data: {
                            messId: messId
                        },
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (msg) {

                            if (msg.response == 1) {
                                var countNotice = $('.badge-mess').text();

                                var newCountNotice = countNotice -1;

                                if(newCountNotice == 0){
                                    $('.badge-mess').detach();
                                    $(".a-badge-mess img").removeClass("com-anime");
                                }
                                else{
                                    $('.badge-mess').text(newCountNotice);
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

})

</script>



    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>
            <br>
        <div class="rightcolm">
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
    <a href="../posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a><br><br>
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
            <br>
        <div class="rightcolm">
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
            echo'<br><div class="rightcolm"><a href="ua" id="post_form_language">Українська</a>';
            echo'<br><font color="gray">Русский</font></div>';
        }

        if($user_profile->language=='ua'){
            echo'<br><div class="rightcolm"><font color="gray">Українська</font>';
            echo'<br><a href="ru" id="post_form_language">Русский</a></div>';
        }
        ?>
    </div>

    </div>



@endsection