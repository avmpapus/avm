@extends('layouts.main-front')

@section('content')


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
        <br>
        <div style="background:#ffffff;padding:20px;margin:20px;">

            @if($user_profile->photo)
            <img src="{{$user_profile->photo}}" class="img-responsive center-block" alt="">
            @elseif(!$user_profile->photo)
            <img src="{{asset('assets-front/img/no-avatar.jpg')}}" class="img-responsive center-block" alt="">
            @endif
            <br>

            Загрузить фото профиля
            <br><br>
            <form action="{{action('UserProfileController@uploadImg')}}" method='post'
                enctype='multipart/form-data' id="form-post-sk">
                {{ csrf_field() }}
                <input type="hidden" name="angle" value="">

                <div class="form-group">
                    <label for="InputFileProfile">
                        Изображение должно быть формата jpg,<br/>gif или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="img2" id="InputFileProfile">

                    @if(Session::has('message'))
                    <p class="help-block">{{Session::get('message')}}</p>
                    @endif

                    @if ($errors->has('img2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                    @endif
                    <br>

                </div>

                <div class="ajax-respond" style="position:relative;">

                    <div class="div-rotate-img" style="display: none;">
                        <button type="button" class="btn btn-warning btn-sm rotate-img-left">
                            <i class="fa fa-undo fa-lg" aria-hidden="true"></i>
                        </button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning btn-sm rotate-img-right">
                            <i class="fa fa-repeat fa-lg" aria-hidden="true"></i>
                        </button>

                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger btn-sm rotate-img-clear">
                            Сброс
                        </button>

                        &nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary btn-sm btn-profile-img-submit">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Сохранить
                        </button>
                    </div>

                </div>
            </form>
            <hr>

            <p>
                <i>
                    ... или
                </i>
            </p>

            <a href="#modalImgFolder" class="btn btn-warning btn-sm" data-toggle="modal">
                Выбрать из загруженных
            </a>
        </div>

        <form action="{{action('UserProfileController@update',['id'=> Auth::id()])}}" method='post' role="form">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
                <label>Логин:</label>
                <input type="text" class="form-control" name="login" value="{{Auth::user()->name}}" disabled>
            </div>

            <div class="form-group">
                <label>Имя:</label>
                <input type="text" class="form-control" name="name"
                    value="{{$user_profile->name}}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Фамилия:</label>
                <input type="text" class="form-control" name="lastname"
                    value="{{$user_profile->last_name}}">
                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>

        </div>


        <div class="form-inline" role="form"
            style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
            <label class=""> Дата : </label>
            <select name="day" class="form-control">
                <option value="">--</option>
                @for ($i = 1; $i < 32; $i++)
                <option value="{{$i}}" {{ ($user_profile->day==$i) ? 'selected' : '' }}>
                    {{$i}}
                </option>
                @endfor
            </select>
            </div>

            <div class="form-group">
            <label class=""> Месяц : </label>
            <select name="month" class="form-control">
                <option value="">--</option>
                <option value="Января" {{ ($user_profile->month=="Января") ? 'selected' : '' }}>Января</option>
                <option value="Февраля" {{ ($user_profile->month=="Февраля") ? 'selected' : '' }}>Февраля</option>
                <option value="Марта" {{ ($user_profile->month=="Марта") ? 'selected' : '' }}>Марта</option>
                <option value="Апреля" {{ ($user_profile->month=="Апреля") ? 'selected' : '' }}>Апреля</option>
                <option value="Мая" {{ ($user_profile->month=="Мая") ? 'selected' : '' }}>Мая</option>
                <option value="Июня" {{ ($user_profile->month=="Июня") ? 'selected' : '' }}>Июня</option>
                <option value="Июля" {{ ($user_profile->month=="Июля") ? 'selected' : '' }}>Июля</option>
                <option value="Августа" {{ ($user_profile->month=="Августа") ? 'selected' : '' }}>Августа</option>
                <option value="Сентября" {{ ($user_profile->month=="Сентября") ? 'selected' : '' }}>Сентября</option>
                <option value="Октября" {{ ($user_profile->month=="Октября") ? 'selected' : '' }}>Октября</option>
                <option value="Ноября" {{ ($user_profile->month=="Ноября") ? 'selected' : '' }}>Ноября</option>
                <option value="Декабря" {{ ($user_profile->month=="Декабря") ? 'selected' : '' }}>Декабря</option>

            </select>
            </div>

            <div class="form-group" >
                <label class="">Год : </label>
                <select name="year" class="form-control">
                    <option value="">--</option>
                    @for ($ii = 1930; $ii < 2012; $ii++)
                    <option value="{{$ii}}" {{ ($user_profile->year==$ii) ? 'selected' : '' }}>
                        {{$ii}}
                    </option>
                    @endfor
                </select>
            </div>


            <div class="form-group" >
                <label class="">Знак Зодиака</label>
                <select name="zodiak" class="form-control">
                    <option value="">--</option>
                    <option value="Овен" {{ ($user_profile->zodiak=="Овен") ? 'selected' : '' }}>Овен</option>
                    <option value="Телец" {{ ($user_profile->zodiak=="Телец") ? 'selected' : '' }}>Телец</option>
                    <option value="Близнецы" {{ ($user_profile->zodiak=="Близнецы") ? 'selected' : '' }}>Близнецы</option>
                    <option value="Рак" {{ ($user_profile->zodiak=="Рак") ? 'selected' : '' }}>Рак</option>
                    <option value="Лев" {{ ($user_profile->zodiak=="Лев") ? 'selected' : '' }}>Лев</option>
                    <option value="Дева" {{ ($user_profile->zodiak=="Дева") ? 'selected' : '' }}>Дева</option>
                    <option value="Весы" {{ ($user_profile->zodiak=="Весы") ? 'selected' : '' }}>Весы</option>
                    <option value="Скорпион" {{ ($user_profile->zodiak=="Скорпион") ? 'selected' : '' }}>Скорпион</option>
                    <option value="Стрелец" {{ ($user_profile->zodiak=="Стрелец") ? 'selected' : '' }}>Стрелец</option>
                    <option value="Козерог" {{ ($user_profile->zodiak=="Козерог") ? 'selected' : '' }}>Козерог</option>
                    <option value="Водолей" {{ ($user_profile->zodiak=="Водолей") ? 'selected' : '' }}>Водолей</option>
                    <option value="Рыбы" {{ ($user_profile->zodiak=="Рыбы") ? 'selected' : '' }}>Рыбы</option>
                </select>
            </div>

        </div>


        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
                <label>
                    <i class="fa fa-skype fa-lg" aria-hidden="true"></i>
                    введите свой логин skype
                </label>
                <input type="text" class="form-control" name="skype" value="{{ $user_profile->skype }}">
                @if ($errors->has('skype'))
                    <span class="help-block">
                        <strong>{{ $errors->first('skype') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    введите свой номер телефона
                </label>
                <input type="text" class="form-control" name="phone" value="{{ $user_profile->phone }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>


        </div>

        <div style="background:#ffffff;padding:20px;margin:20px;">
            <label>
                <i class="fa fa-street-view fa-lg" aria-hidden="true"></i>
                чем я занят последнее время:
            </label>
            <textarea class="form-control" name="article" rows="3" style="resize: none;">{{$user_profile->article}}</textarea>
                @if ($errors->has('article'))
                    <span class="help-block">
                        <strong>{{ $errors->first('article') }}</strong>
                    </span>
                @endif
            <br>

            <label>
                <i class="fa fa-heartbeat fa-lg" aria-hidden="true"></i>
                мои увлечения:
            </label>



            <select name="hobby" class="form-control" >
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
                <option>Искусство</option>
                <option>Религия</option>
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
            {{--
                        <textarea class="form-control" name="hobby" rows="3" style="resize: none;">{{$user_profile->hobby}}</textarea>
                            @if ($errors->has('hobby'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hobby') }}</strong>
                                </span>
                            @endif
                        <br>
                        --}}
            <label>
                <i class="fa fa-bullseye fa-lg" aria-hidden="true"></i>
                моя цель:
            </label>
            <textarea class="form-control" name="my_target" rows="3" style="resize: none;">{{$user_profile->my_target}}</textarea>
                @if ($errors->has('my_target'))
                    <span class="help-block">
                        <strong>{{ $errors->first('my_target') }}</strong>
                    </span>
                @endif
            <br>

            <div class="btn-group btn-group-justified">
                <div class="btn-group">
                    @if($user_profile->i_need_help==1)
                        <a href="../nottargetprofile/{{$user_profile->user_id}}">
                            <button type="button" class="btn">
                                Нужна помощь&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://localhost//public/assets-front/img/check1.png" width="20">
                            </button>
                        </a>
                    @endif

                    @if($user_profile->i_need_help==0)

                        <a href="../targetprofile/{{$user_profile->user_id}}">
                            <button type="button" class="btn btn-success btn-xs"
                                    style="background-color: #5bc0de;border-color: #46b8da;">

                                Помощь не нужна

                            </button>
                        </a>
                    @endif


                </div>
				
				
				{{-----статус невидимости-----}}
				
</div>
			<br>	
			<div class="btn-group btn-group-justified">
                <div class="btn-group">
                    @if($user_profile->hidden==1)
                        <a href="../hidden/{{$user_profile->user_id}}">
                            <button type="button" class="btn">
                                Невидимка&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://localhost//public/assets-front/img/check1.png" width="20">
                            </button>
                        </a>
                    @endif

                    @if($user_profile->hidden==0)

                        <a href="../nothidden/{{$user_profile->user_id}}">
                            <button type="button" class="btn btn-success btn-xs"
                                    style="background-color: #5bc0de;border-color: #46b8da;">

                                Включить невидимость

                            </button>
                        </a>
                    @endif
					<br><br>
					* Если вам нужна материальная помощь, то вы можете нажать на кнопку Нужна помощь, тогда инвесторы
					смогут видеть ваш запрос при просмотре вашего профиля и в поиске.
					<br><br>
* Если невидимость включена, то пользоатель не сможет вам написать, но будет вас видеть
</div>
                </div>
				

          

            <br><br>

            <button type="submit" class="btn btn-primary btn-sm center-block">
                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                Сохранить
            </button>

        </div>


        </form>


    </div>
</div>

<br><br>

    

        <?php
        if($user_profile->language!='ua'){
        ?>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
<div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: 10px;">
            Наука
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/25">Наука</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/24">Наука и исследования</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/1">Общественные и гуманитарные науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/2">Естественные науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/3">Технические науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/4">Технические эксперименты, прикладные исследования</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/5">Исследования, эксперименты</a><br><br>
    Энергия
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/6">Энергосберегающие технологии</a><br><br>
        Быт
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a><br><br>
    Строительство
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/8">Капитальное строительство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/9">Ландшафтное строительство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/10">Ландшафтный дизайн</a><br><br>
        Культура
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/11">Искусство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/12">Религия</a><br><br>
        Экология
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/13">Лес, парковое хозяйство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/14">Реки, водные системы, береговые зоны</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/15">Природные ресурсы</a><br><br>
    Общество
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/16">Модели коммуникации</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/22">Информационные технологии</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/17">Национальная идея, формирование национальной идеи</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/18">Система общественного самоуправления (СиОС)</a><br><br>
        Образование
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/19">Образование, самообразование</a><br><br>
        Идеи
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/20">Идеи, предложения, решения</a>
       </div>

        <?php
        }
        if($user_profile->language=='ua'){
        ?>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
<div style="margin-left: -40px;background-color:#fff;padding:10px;margin-top: 10px;">
            Наука
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/25">Наука</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/24">Наука і дослідження</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/1">Громадські та гуманітарні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/2">Природні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/3">Технічні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/4">Технічні експерименти, прикладні дослідження</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/5">Дослідження, експерименти</a><br><br>
    Энергія
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/6">Енергозберігаючі технології</a><br><br>
        Побут
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/7">Побутові, технічні експерименти, саморобки</a><br><br>
        Будівництво
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/8">Капітальне будівництво</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/9">Ландшафтне будівництво</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/10">Ландшафтний дизайн</a><br><br>
        Культура
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/11">Искусство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/12">Религия</a><br><br>
        Экологія
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/13">Ліс, паркове господарство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/14">Річки, водні системи, берегові зони</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/15">Природні ресурси</a><br><br>
        Суспільство
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/16">Моделі комунікації</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/22">Інформаційні технології</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/17">Національна ідея, формування національної ідеї</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/18">Система громадського самоврядування (СіОС)</a><br><br>
        Освіта
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/19">Освіта, самоосвіта</a><br><br>
        Ідеї
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/20">Ідеї, Пропозиції, Рішення</a>
</div>

        <?php
        }
        ?>
		</div>
    </div>

<script>
// для изменения фото профиля из папки
$('#modalImgFolder').on('shown.bs.modal', function() {

    // если картинки уже выбраны с сервера, то выход из функ.
    if($('div').is(".carousel-inner .item")){
        return false;
    }

    // текущая картинка в профиле
    var imgCurr = $(".midcont img").attr("src");

    $.ajax({
        type: "POST",
        url: "/user/request-img-folder",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
            var mB = $("#modalImgFolder div.modal-body .container-fluid .row");
            mB.find(".sk-pre").hide();
            mB.find("#carousel-photo").show();
            $(".sk-bt-img").show();
            for (var i = 0; i < data.response[1].length; ++i) {

                if(i==0){
                    var ac = " active";
                }
                else{
                    var ac = "";
                }

                mB.find(".carousel-inner").append("<div class=\"item" + ac +
                        "\" data-img=\""+ data.response[0][i] + "\">" +
                         "<img class=\"img-responsive center-block\" " +
                        "src=\""  +  data.response[1][i] + "\"></div>");

                /*
                // если картинка равно текущей, то нет кнопки удаления
                if(imgCurr == data.response[1][i]){
                    mB.append("<div class=\"col-md-6\"><a href=\"/user/img-update-folder/" + data.response[0][i]
                                + "\"><img src=\"" +  data.response[1][i] +
                                "\" class=\"img-responsive sk-img-folder\"></a></div>");
                }
                else{
                    mB.append("<div class=\"col-md-6\"><a href=\"/user/img-update-folder/" + data.response[0][i]
                            + "\"><img src=\"" +  data.response[1][i] +
                            "\" class=\"img-responsive sk-img-folder\"></a>" +
                            "<button type=\"button\" class=\"btn btn-danger del-image-folder btn-xs\">" +
                            "<i class=\"fa fa-times fa-lg\"></i> </button></div>");
                }

                if(((i%2) != 0)){
                    mB.append("<div class=\"clearfix\"></div>");
                }
                */
            }
        }
    })

});


// для удаления фото из папки
$('#modalImgFolder').on('click', '.del-image-folder',function(){

    var imgMain = $(".midcont img").first().attr('src');
    var divImg = $(".carousel-inner .active");
    var img = divImg.find("img").attr('src');

    // если текущая картинка равна изображению в профиле, то не удалять
    if(imgMain == img){
        alert("Вы не можете удалить главное изображение профиля !");
        return false;
    }

    // окно подверждения удаления
    var isDel = confirm("Удалить изображение ?");
    if(isDel == true) {

        $.ajax({
            type: "POST",
            url: "/user/img-del-folder",
            data: {img: img},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
                //alert(data.response);
                if(data.response != -1){
                    //divImg.next().addClass("active");
                    divImg.detach();
                    $(".carousel-inner .item").first().addClass("active");

                    //$("#modalImgFolder div.modal-body .clearfix").detach();
                    //var allDivsImg = $("#modalImgFolder div.modal-body .col-md-6");

                    /*
                    // перебор набора элементов(цикл for тут не работает)
                    allDivsImg.each(function(index,val){
                        if(((index%2) != 0)){
                             $(this).after("<div class=\"clearfix\"></div>");
                        }
                    });
                    */
                }
            }
        });
    }
});

$('#modalImgFolder').on('click', '.img-update-folder',function(){

    var divImg = $(".carousel-inner .active");
    var dataImg = divImg.attr('data-img');
    var imgMain = $(".midcont img").first().attr('src');
    var img = divImg.find("img").attr('src');

    // если текущая картинка равна изображению в профиле, то не удалять
    if(imgMain == img){
        return false;
    }
    window.location.href = "/user/img-update-folder/" + dataImg ;
});


</script>

<script>
// вращение картинок
$(function () {

    // перем. угла поворота
    var rot = 0;

    // Переменная куда будут располагаться данные файлов
    //var file;

    // предзагрузка изображения
    $('#form-post-sk input[type=file]').change(function(){

        // получить форму, а НЕ input
        var aaa = $("#form-post-sk");

        var formData = new FormData(aaa[0]);

        // обновить attr, что бы убрать height
        $('.ajax-respond').attr("style","position:relative;");

        $('.ajax-respond').prepend( "<img src='/assets-front/img/30.gif' class='img-responsive sk-img-pre'>" );

        //console.log("Форма "+aaa[0]);

        $.ajax({
            url: "/img-store",
            type: "POST",
            data : formData,
            dataType: 'json',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function(data){

                console.log('Результат - ' + data.response);

                var html = "<img src=\"" + data.response + "\" class=\"img-responsive\"> <br>";

                $('.ajax-respond .sk-img-pre, .ajax-respond img, .ajax-respond br, .ajax-respond .help-block').detach();
                $('.ajax-respond').prepend( html);
                $('.ajax-respond .div-rotate-img').show();

                // сброс угла вращения в перем. и форме
                rot = 0;
                $("input[name='angle']").val(rot);

            },
            error: function(err){
                $('.ajax-respond .sk-img-pre, .ajax-respond img, .ajax-respond br').detach();
                $('.ajax-respond .div-rotate-img').hide();

                $('.ajax-respond').prepend("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                + " Выберите другое изображение. </span>");
            }
        });
    });


    // вращ. налево
    $(".rotate-img-left").click(function () {

        rot += -90;
        imgRotate(rot);
        $("input[name='angle']").val(rot);

    });

    // вращ. направо
    $(".rotate-img-right").click(function () {

        rot += 90;
        imgRotate(rot);
        $("input[name='angle']").val(rot);

    });

    // сброс манипуляций
    $(".rotate-img-clear").click(function () {
        clearRotate();
        rot = 0;
        $("input[name='angle']").val(0);
    });

    //обработчик события resize
    $(window).resize(function(){
        clearRotate();
        rot = 0;
        $("input[name='angle']").val(0);
    });

});

// функ. сброса всех манипуляций
// с изображением
function clearRotate(){
    // если загружен img
    if($(".ajax-respond img").length){

        $(".ajax-respond img").css("transform", "rotate(0deg)");

        var imgNat_W = $(".ajax-respond img").prop('naturalWidth');
        var imgNat_H = $(".ajax-respond img").prop('naturalHeight');

        var wDiv = $(".ajax-respond").width();

        // если натур. ширина картинки больше блока
        if(imgNat_W > wDiv){
            $(".ajax-respond img").width(wDiv);

            var iH = (wDiv/imgNat_W) * imgNat_H;
            $(".ajax-respond img").height(iH);
        }
        else{
            $(".ajax-respond img").width(imgNat_W);
            $(".ajax-respond img").height(imgNat_H);
        }

        // установка в начало родительского блока
        var posDiv = $(".ajax-respond").offset();
        $(".ajax-respond img").offset(posDiv);

        // установка высоты блока равной высоте img
        var h = $(".ajax-respond img").height();
        $(".ajax-respond").height(h);
    }
}

// функ. поворота
function imgRotate(r){

        var posDiv = $(".ajax-respond").offset();

        //r += -90;
        $(".ajax-respond img").css("transform", "rotate(" + r + "deg)");


        var imgNat_W = $(".ajax-respond img").prop('naturalWidth');
        var imgNat_H = $(".ajax-respond img").prop('naturalHeight');

        // получ. ширину блока
        var wDiv = $(".ajax-respond").width();

        // если длина картинки больше ширина блока
        // то назнач. длину равную ширине блока
        var h = $(".ajax-respond img").height();
        if(h > wDiv){
            $(".ajax-respond img").height(wDiv);

            // ширина - пропорционально
            $(".ajax-respond img").width( (imgNat_W/imgNat_H) * wDiv );

            //назнач. длину блока равную ширине блока
            $(".ajax-respond").height(wDiv);
        }
        // если длина картинки меньше ширина блока
        // то назнач. длину блока равную ширине блока
        if(h < wDiv){

            var w = $(".ajax-respond img").width();

            //получ. большее из длины и ширины для текущ. размера картики
            var delta = Math.max(w, h);
            // назн. текущ. длину блока
            $(".ajax-respond").height(delta);

            //$(".ajax-respond").height(wDiv);
        }

        $(".ajax-respond img").offset(posDiv);

}

</script>
    
@endsection
         
      
  
    
