<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    <link href="{{asset('assets-front/c.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <title>
    Спільна справа
    </title>

    <link rel="stylesheet" href="{{asset('assets-front/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-front/css/magnific-popup.css')}}" >
    <link rel="stylesheet" href="{{asset('assets-front/css/jquery.mCustomScrollbar.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets-front/css/jquery.emoji.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets-front/css/primero_index_enter.css')}}">
    <link rel="stylesheet" href="{{asset('assets-front/css/style-sk.css')}}">
    <link rel="stylesheet" href="{{asset('assets-front/css/menu_index_enter.css')}}">

    <!-- 2. Подключаем библиотеку jQuery, необходимую для работы скриптов Bootstrap 3 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>

<body>

    {{-- модаль предзагрузки картинок --}}
    <div id="modalImg" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

            <form action="{{action('MessageController@storeImg')}}" method='post'
                id="formImgMess" enctype='multipart/form-data'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    <div class="form-group">
                        <label for="InputImgMess">
                            Загрузите изображение
                        </label>
                        <input type="hidden" name="postId" id="inputPostIdForImg" value="">
                        <input type="hidden" name="newsId" id="inputNewsIdForImg" value="">
                        <input type="file" name="img2" id="InputImgMess">

                        {{--
                        @if(Session::has('message'))
                        <p class="help-block">{{Session::get('message')}}</p>
                        @endif

                        @if ($errors->has('imgUpload'))
                        <span class="help-block">
                            <strong>{{ $errors->first('imgUpload') }}</strong>
                        </span>
                        @endif
                        --}}

                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Закрыть</button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="saveImgMess">
                            Сохранить
                        </button>
                    </div>

                </div>
            </form>

            </div>
        </div>
    </div>
    {{-- модаль предзагрузки картинок --}}


    {{-- модаль загрузки видео --}}
    <div id="modalVideo" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

            <form action="{{action('MessageController@storeImg')}}" method='post'
                id="formImgMess" enctype='multipart/form-data'>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    <div class="form-group">
                        <label for="InputImgVideo" style="font-weight: normal;">
                            &nbsp;&nbsp;&nbsp; Если Вы хотите встроить на страницу проигрыватель видео
                            <a href="https://www.youtube.com/" target="_blank">
                            <span class="text-danger">
                                <i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i>
                            </span>
                            <strong>YouTube</strong>
                            </a>
                            , скопируйте в поле ввода строку в формате
                            <code><iframe&gt;....</iframe&gt;</code> .
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
                        <input type="text" class="form-control" name="imgVideo" id="InputImgVideo"
                            placeholder="Вставьте строку из YouTube">

                    </div>

                    <div class="pull-right">
                        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">
                            Закрыть
                        </button>
                        &nbsp;&nbsp;
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="saveVideoMess">
                            Встроить
                        </button>
                    </div>

                </div>
            </form>

            </div>
        </div>
    </div>
    {{-- модаль эагрузки видео --}}

    {{-- модаль для картинок из папки --}}
    <div id="modalImgFolder" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa fa-times fa-lg"></i>
                    </button>
                    <h4 class="modal-title">
                        Мои изображения
                    </h4>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="text-center sk-pre">
                                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            </div>

                            <div id="carousel-photo" class="carousel slide"
                                data-interval="false" data-wrap="false" data-ride="carousel">

                                <div class="carousel-inner ">
                                    {{--
                                    <div class="item active ">
                                        <img class="img-responsive center-block" src="{{$user_profile->photo}}">
                                    </div>

                                    <div class="item ">
                                        <img class="img-responsive center-block" src="{{$user_profile->photo}}">
                                    </div>
                                    --}}
                                </div>


                                <a class="left carousel-control" href="#carousel-photo"
                                    data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-photo"
                                    data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-sm sk-bt-img img-update-folder">
                        Сделать главным
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-danger btn-sm sk-bt-img del-image-folder">
                        Удалить
                    </button>
                    {{--
                    &nbsp;
                    <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Закрыть</button>
                    --}}
                </div>
            </div>
        </div>
    </div>
    {{-- модаль для картинок из папки --}}


                  


    <div id="toplayer" class="container-fluid sk-top-menu">
    <div class="row">
        {{--
        <center class="sk-top-menu">
        --}}

        <div class="col-md-6 col-sm-6 col-xs-9 sk-top-menu-left">
            <p class="text-left">

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <a href="{{ url('/posts') }}">
                    <img src="{{asset('assets-front/img/home_site2.png')}}" width="33"
                    data-toggle="tooltip" title="Рабочий кабинет" data-placement="right">
                </a>


                <a href="{{ url('user/create') }}" >
                    <img src="{{asset('assets-front/img/edit_ank.png')}}"
                    width="30" data-toggle="tooltip"
                    title="Редактировать профиль" data-placement="right">
                </a>

                <a href="{{ url('groups/create') }}">
                    <img src="{{asset('assets-front/img/make_group1.png')}}" width="40"
                    data-toggle="tooltip" data-placement="right" title="Создать группу">
                </a>
            
                {{--
                &nbsp;&nbsp;&nbsp;
                <a href="make_image.php?id=89"><img src="img/make_image.png" width="33"></a>
                --}}
                
                <a href="{{ url('post/create') }}">
                    <img src="{{asset('assets-front/img/make_mth1.png')}}" width="33"
                    data-toggle="tooltip" title="Добавить материал" data-placement="right">
                </a>
                {{--
                <a href="{{ action('UserProfileController@show', Auth::id()) }}">
                    <img src="{{asset('assets-front/img/my_ank4.png')}}" width="25"
                    data-toggle="tooltip" data-placement="right" title="Моя анкета">
                </a>
                --}}

                
               

                
                
                <a href="{{ url('groups') }}">
                    <img src="{{asset('assets-front/img/my_groups2.png')}}" width="45"
                    data-toggle="tooltip" data-placement="right" title="Мои группы">
                </a>

                <a href="">
                    <img src="{{asset('assets-front/img/settings.png')}}" width="43" title="Настройки">
                </a>

            </p>
        </div>


        <div class="col-md-6 col-sm-6 col-xs-3 sk-top-menu-right">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




                   {{------имя пользователя------}} 
                    <a href="{{ action('UserProfileController@show', Auth::id()) }}"  style="position: absolute;color:#fff;top:10px;">
                
                    @if (Auth::user())
                    {{ Auth::user()->name }}</a>     
                @endif
        



        

      
            <p class="text-center">
                <a href="{{ url('/message') }}" class="a-badge-mess">
                    @if(isset($count_mess)&& $count_mess>0)
                    <span class="badge badge-com badge-mess">
                        {{ $count_mess }}
                    </span></a>
                    @endif



                   
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



                    <img src="{{asset('assets-front/img/message.png')}}" width="42"
                    class="{{ isset($count_mess)&& $count_mess>0 ? 'com-anime' : '' }}"
                    style="position: absolute;top:5px;" data-toggle="tooltip" title="Сообщения" data-placement="left">
                </a>

                <a href="{{ url('/notice') }}" class="a-badge-notice">
                    @if(isset($count_new)&& $count_new>0)
                    <span class="badge badge-com badge-notice">
                        {{ $count_new }}
                    </span>
                    @endif
                    <img src="{{asset('assets-front/img/cmmans_.png')}}" width="40"
                         class="{{ isset($count_new)&& $count_new>0 ? 'com-anime' : '' }}"
                         style="position: absolute;top:3px;" data-toggle="tooltip" title="Уведомления" data-placement="left">
                </a>

                {{--
                <a href="">
                    <img src="{{asset('assets-front/img/mthcount2.png')}}" width="32"
                        style="position: absolute;top:5px;" title="Количество добавленных материалов">
                </a>

                <a href="" style="position: absolute;top:12px;">
                    <font color="white">0</font>
                </a>

                <a href="">
                    <img src="{{asset('assets-front/img/p.png')}}" width="32" title="Статус пользователя">
                </a>
                --}}

            </p>
        </div>

        {{--
        <div id="time" class="descr">Осталось времени: <span></span>
        </div>
        --}}
    {{--
    </center>
    --}}
    

    </div>

    </div>



<?php
$url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';  
$a = explode('?', $url);  
$a = $a[0];
?>


                     
                          <div class="container container-login">
        <div class="container container-login">
    <div class="row">

    
    
      <nav>
      <ul class="topmenu">
        <li><a href="" class="submenu-link">Наука</a>
        <ul class="submenu">
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/25">Наука</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/24">Наука и исследования</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/1">Общественные и гуманитарные науки</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/2">Естественные науки</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/3">Технические науки</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/4">Технические эксперименты, прикладные исследования</a></li>
              <li><a href="http://cpilnacprava.com.ua/posts-for-cat/5">Исследования, эксперименты</a></li>

    
          </ul>
        <li><a href="" class="submenu-link">Энергия</a>
          <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/6">Энергосберегающие технологии</a></li>
          </ul>
        </li>
        <li><a href="" class="submenu-link">Быт</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a></li>
          </ul>
        <li><a href="" class="submenu-link">Стройка</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/8">Капитальное строительство</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/9">Ландшафтное строительство</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/10">Ландшафтный дизайн</a></li>
          </ul>

      <li><a href="" class="submenu-link">Культура</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/11">Живопись</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/12">Рукоделие</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/21">Декоративно-прикладное искусство</a></li>
          </ul>
          
          
          <li><a href="" class="submenu-link">Экология</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/13">Лес, парковое хозяйство</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/14">Реки, водные системы, береговые зоны</a></li>
            <li><a href="http://cpilnacprava.com.ua/posts-for-cat/15">Природные ресурсы</a></li>
          </ul>
          
          <li><a href="" class="submenu-link">Общество</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/16">Модели коммуникации</a></li>
            <li><a href="http://cpilnacprava.com.ua/posts-for-cat/22">Информационные технологии</a></li>
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/17">Национальная идея, формирование национальной идеи</a></li>
            <li><a href="http://cpilnacprava.com.ua/posts-for-cat/18">Система общественного самоуправления (СиОС)</a></li>
          </ul>
          
          
          <li><a href="" class="submenu-link">Образование</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/19">Образование, самообразование</a></li>
          </ul>
          
          
          <li><a href="" class="submenu-link">Идеи</a>
        <ul class="submenu">
      <li><a href="http://cpilnacprava.com.ua/posts-for-cat/20">Идеи, Предложения, Решения</a></li>
          </ul>
      </ul>
    </nav>

        @yield('content')

    </div>
    </div>

<div class="scrollup">
  <i class="fa fa-arrow-up" aria-hidden="true"></i>
</div>

{{--<audio src="/assets-front/wav/druzya.WAV" autoplay></audio>--}}


<!-- 3. Подключаем скомпилированный и минимизированный файл JavaScript платформы Bootstrap 3 -->
<script src="{{asset('assets-front/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-front/js/jquery.magnific-popup.min.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js"></script>
<script src="{{asset('assets-front/js/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('assets-front/js/jquery.emoji.js')}}"></script>
<script src="{{asset('assets-front/js/emoji-array.js')}}"></script>
<script src="{{asset('assets-front/js/more-comments.js')}}"></script>
{{--<script src="{{asset('assets-front/js/actions-comments2.js')}}"></script>--}}
<script src="{{asset('assets-front/js/scroll-comments.js')}}"></script>
<script src="{{asset('assets-front/js/in-window.js')}}"></script>
@if(!Request::is('group/*'))
<script src="{{asset('assets-front/js/popover-like.js')}}"></script>
@endif
{{--
<script src="{{asset('assets-front/js/file-upload.js')}}"></script>
--}}
<script src="{{asset('assets-front/js/request-for-friendship.js')}}"></script>
<script src="{{asset('assets-front/js/respond-for-friendship.js')}}"></script>
{{--<script src="{{asset('assets-front/js/actions-mess.js')}}"></script>--}}

<script src="{{asset('assets-front/js/request-lp.js')}}"></script>




<script>
$(function () {
    // инициализировать все элементы на страницы,
    // имеющих атрибут data-toggle="tooltip",
    // как компоненты tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // инициализация окна для новых и старых элементов
    $('html, body').magnificPopup({
        delegate: 'a.sk-popup-link',
        type:'image'
    });


    /*
    // инициализировать popover
    $('.sk-very-like, .sk-like, .sk-no-like').popover({
        html: true,
        content: 'Тут может быть любой контент ...<br> ...ссылки и картинки' +
            '<br> <p class="text-center"><a href="https://www.google.com.ua/" class="text-center">Гугля</a></p>',
        trigger: 'manual',
        placement : 'top'
    }).on("mouseenter", function () {

        var _this = this;
        $(this).popover("show");
        $(".popover").on("mouseleave", function () {
            $(_this).popover('hide');
        });

    }).on("mouseleave", function () {
        var _this = this;
        setTimeout(function () {
            if (!$(".popover:hover").length) {
                $(_this).popover("hide")
            }
        }, 1000);
    });
    */

    /* событие сработает только если курсор был наведён некоторое время */
    $('.fa-pencil').mouseenter(function() {
        myTimeout = setTimeout(function() {
            alert(555);
        }, 1500);
        }).mouseleave(function() {
            clearTimeout(myTimeout);
        });
    /* событие сработает только если курсор был наведён некоторое время */



    // при нажатии на кнопку scrollup
    $('.scrollup').click(function() {
        // переместиться в верхнюю часть страницы
        $("html, body").animate({scrollTop:0},500);
    })

    // при прокрутке окна (window)
    $(window).scroll(function() {
        // если пользователь прокрутил страницу более чем на 200px
        if ($(this).scrollTop()>200) {
            // то сделать кнопку scrollup видимой
            $('.scrollup').fadeIn();
        }
        // иначе скрыть кнопку scrollup
        else {
            $('.scrollup').fadeOut();
        }
    });

});

/* функ. проверяет наличие 3 символов в поле поиска */
function validThis(obj){
    var strSearch = $("#sk-input-search").val();
    // если меньше двкх символов, то подсказка не всплывает
    if(strSearch.length < 3) {
        return false;
    }
    else{
        return true;
    }
}

    /* для окна смайликов
    var smileWindow;
    $(".smile-open").click(function(){

        smileWindow = $(this).parents('.smile-img-load').find('.emoji_container');
        //alert(smileWindow);

        if(smileWindow.is(':visible')){
            smileWindow.fadeOut(500);
        }
        if(smileWindow.is(':hidden')){
            smileWindow.fadeIn(300);
        }
    });


    /* добавл. смайлик в поле + фокус в конце
    $(".smile-Insert").click(function(){
        var smile = $(this).attr('src');
        var divWrite = $(this).parents('.parent-contenteditable').find(".div-contenteditable");
        var divWriteContent = divWrite.html();


        //alert(divWriteContent);

        var len = divWriteContent.length;
        var ifDiv = divWriteContent.indexOf("</div>", len-6);
        var ifBr = divWriteContent.indexOf("<br>", len-4);
        var ifBrDiv = divWriteContent.indexOf("<br></div>", len-10);


        divWrite.append('<img src="'+ smile +'">');

        var position = window.getSelection().getRangeAt(0).startOffset;

        //divWrite.html(divWriteContent +'<img src="'+ smile +'">');

        /*
        if(ifDiv>0){
            alert(123);
            //var newContent = divWriteContent.substr(0,len-6);
            //divWrite.html(newContent +'<img src="'+ smile +'">');
            $(".div-contenteditable").find("div:last").append('<img src="'+ smile +'">');
        }
        else{
            $(".div-contenteditable").append('<img src="'+ smile +'">');
        }


        if(ifBr>0){
            var newContent = divWriteContent.substr(0,len-4);
            divWrite.html(newContent +'<img src="'+ smile +'">');
        }

        if(ifBrDiv>0){
            var newContent = divWriteContent.substr(0,len-10);
            divWrite.html(newContent +'<img src="'+ smile +'">');
        }

        else{
            divWrite.html(divWriteContent +'<img src="'+ smile +'">');
        }


        //alert ('вхождение - '+ifDiv+ ' новая строка -' + rtrt);
        divWrite.focus();

        //console.log(divWrite);
        //console.log(divWrite.get(0));
        placeCaretAtEnd( divWrite[0] );
        //placeCaretAtEnd( document.getElementById("text") );
    });
    */


/* функ. устанавл. курсор в конец текста
function placeCaretAtEnd(el) {
    el.focus();
    if (typeof window.getSelection != "undefined"
        && typeof document.createRange != "undefined") {
                var range = document.createRange();
                range.selectNodeContents(el);
                range.collapse(false);
                var sel = window.getSelection();
                sel.removeAllRanges();
                sel.addRange(range);
    } else if (typeof document.body.createTextRange != "undefined") {
                var textRange = document.body.createTextRange();
                textRange.moveToElementText(el);
                textRange.collapse(false);
                textRange.select();
    }
}
*/

</script>

{{-- ограничение по URL для скриптов лайков --}}
@if(Request::is('group/*'))
<script>
$(function () {
    // по клику на смайлике
    $('input[data-like]').click(function () {
        var dataLike = $(this).attr('data-like');
        var newsId = $(this).parents('.sk-div-post').attr("data-id");

        var linkVeryLike = $(this).parents('.table-like').find(".sk-very-like");
        var linkLike = $(this).parents('.table-like').find(".sk-like");
        var linkNoLike = $(this).parents('.table-like').find(".sk-no-like");

        var nextALink = $(this).parent().children("a");

        $.ajax({
            type: 'POST',
            url: '/news-like',
            data: {
                dataLike: dataLike,
                newsId: newsId
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (msg) {
                if(msg.response == 1){


                    linkVeryLike.text(msg.likes['ve']);
                    linkLike.text(msg.likes['li']);
                    linkNoLike.text(msg.likes['un']);

                    // тень для цифры возле лайков
                    nextALink.css('text-shadow','1px 1px 1px #358ed3');

                    // отменить тень через время
                    setTimeout(function() {nextALink.css('text-shadow','none');}, 2000);

                    //console.log(msg.likes);
                }
            }
        });
        //alert(newsId);
    });


    $('.sk-very-like, .sk-like, .sk-no-like').click(function() {

        var objThis = $(this);

        // получ. знач. лайков на текущей ссылке
        var likeValue = objThis.text();

        // если лайков нет, то останавл. скрипт
        if (likeValue == 0) {
            return false;
        }
        else {

            objThis.popover({
                html: true,
                placement : 'bottom',
                content: "<div class=\"div-popover text-center\"><i class=\"fa fa-spinner fa-spin fa-lg fa-fw\"></i></div>"

            }).popover('show');

            var newsId = objThis.parents(".sk-div-post").attr("data-id");
            var likeType = objThis.prev("input").attr("data-like");


            $.ajax({
                type: 'POST',
                url: '/popover-ajax-news',
                cache: false,
                data: {
                    likeType: likeType,
                    newsId: newsId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {

                    if (data.response.length > 0) {
                        $('.div-popover').html('');
                    }

                    for (var i = 0; i < data.response.length; ++i) {
                        // помещаем в элемент текст подсказки
                        $('.div-popover').
                            append(" <a href='/user/" + data.response[i].id + "'>"
                                    + data.response[i].profile_for_user.name + " "
                                    + data.response[i].profile_for_user.last_name + "</a> <hr>");
                    }

                }
            });
        }
    });
});

</script>
@elseif(Request::is('post*'))
<script>
$(function () {
    // по клику на смайлике
    $('input[data-like]').click(function () {
        var dataLike = $(this).attr('data-like');
        var newsId = $(this).parents('.sk-div-post').attr("data-id");

        var linkVeryLike = $(this).parents('.table-like').find(".sk-very-like");
        var linkLike = $(this).parents('.table-like').find(".sk-like");
        var linkNoLike = $(this).parents('.table-like').find(".sk-no-like");

        var nextALink = $(this).parent().children("a");

        $.ajax({
            type: 'POST',
            url: '/post-like',
            data: {
                dataLike: dataLike,
                newsId: newsId
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (msg) {
                if(msg.response == 1){


                    linkVeryLike.text(msg.likes['ve']);
                    linkLike.text(msg.likes['li']);
                    linkNoLike.text(msg.likes['un']);

                    // тень для цифры возле лайков
                    nextALink.css('text-shadow','1px 1px 1px #358ed3');

                    // отменить тень через время
                    setTimeout(function() {nextALink.css('text-shadow','none');}, 2000);

                    //console.log(msg.likes);
                }
            }
        });
        //alert(newsId);
    });


    $('.sk-very-like, .sk-like, .sk-no-like').click(function() {

        var objThis = $(this);

        // получ. знач. лайков на текущей ссылке
        var likeValue = objThis.text();

        // если лайков нет, то останавл. скрипт
        if (likeValue == 0) {
            return false;
        }
        else {

            objThis.popover({
                html: true,
                placement : 'bottom',
                content: "<div class=\"div-popover text-center\"><i class=\"fa fa-spinner fa-spin fa-lg fa-fw\"></i></div>"

            }).popover('show');

            var newsId = objThis.parents(".sk-div-post").attr("data-id");
            var likeType = objThis.prev("input").attr("data-like");


            $.ajax({
                type: 'POST',
                url: '/popover-ajax-post',
                cache: false,
                data: {
                    likeType: likeType,
                    newsId: newsId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {

                    if (data.response.length > 0) {
                        $('.div-popover').html('');
                    }

                    for (var i = 0; i < data.response.length; ++i) {
                        // помещаем в элемент текст подсказки
                        $('.div-popover').
                            append(" <a href='/user/" + data.response[i].id + "'>"
                                    + data.response[i].profile_for_user.name + " "
                                    + data.response[i].profile_for_user.last_name + "</a> <hr>");
                    }

                }
            });
        }
    });
});

</script>
@endif

</body>
</html>
