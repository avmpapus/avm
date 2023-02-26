@extends('layouts.main-front')

@section('content')

<?php
use App\GroupRequest;

    use App\UserProfile; // Подключение класса UserProfile
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

        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Изменение новости в группе</i>
            </h4>
            <br>

            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif

            <form role="form" id="form-news-sk" action="{{action('NewsController@update', $news->id)}}"
                                            method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="group_id" value="{{$news->group_id}}">

                <div class="form-group">
                    <label>Заголовок новости</label>
                    <input id="log" onkeyup="duble.value = this.value" type="text" name="title" class="form-control" value="{{ $news->title }}">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>
                        Загрузить изображение <br>
                        Изображение должно быть формата jpg или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="img2">
                    @if ($errors->has('img2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                    @endif
                </div>

                <br>
                <div class="ajax-respond">
                    <img src='{{$news->img}}' class='img-responsive'>
                </div>
                <br>

                <div class="form-group">
                    <label>
                        Добавьте ссылку на видео в YouTube
                        <br>
                        и видео будет отображаться в новости
                    </label>
                    <input type="text" name="video_link" class="form-control" value="{{ $news->video }}">
                    @if ($errors->has('video_link'))
                        <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Содержание новости*</label>
                    <textarea id="duble" class="form-control" name="content_news" rows="5">{{ $news->content_news }}</textarea>
                    @if ($errors->has('content_news'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content_news') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        Сохранить
                    </button>
                    &nbsp;&nbsp;
                    <a href="{{action('GroupsController@showGroup',$news->group_id)}}" class="btn btn-danger btn-sm" role="button">
                        Отменить
                    </a>
                </div>

            </form>



        </div>



    </div>
</div>

<script>
$(document).ready(function(){

    $('#form-news-sk input[type=file]').change(function(){

        // получить форму, а НЕ input
        var aaa = $("#form-news-sk");

        // files - массив с данными о выбранных файлах
        //file = this.files;

        var formData = new FormData(aaa[0]);


        $('.ajax-respond').html( "<img src='/assets-front/img/30.gif' class='img-responsive'>" );

        console.log("Форма "+aaa[0]);

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

                var html = "<img src=\"" + data.response + "\" class=\"img-responsive\"> ";

                $('.ajax-respond').html( html );
            }
        });
    });



});
</script>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

       

    </div>
</div>



@endsection