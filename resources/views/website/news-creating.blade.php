@extends('layouts.main-front')

@section('content')

<div class="clearfix"></div>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>

<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        <div class="sk-div-post">

            <h4 class="text-center" >
                <i style="text-decoration: underline;">Добавление новости в группу</i>
                <br>
                <p class="text-warning">{{$group->title}}</p>
            </h4>

            <br>

            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif

            <form role="form" id="form-news-sk" action="{{action('NewsController@storeNews')}}"
                                            method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                 <input type="hidden" name="group_id" value="{{$group->id}}">

                <div class="form-group">
                    <label>Заголовок новости</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                        placeholder="Заголовок">
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
                <div class="ajax-respond"></div>
                <br>

                <div class="form-group">
                    <label>
                        Добавьте ссылку на видео в YouTube
                        <br>
                        и видео будет отображаться в новости
                    </label>
                    <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                        placeholder="ссылка YouTube">
                    @if ($errors->has('video_link'))
                        <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>Содержание новости*</label>
                    <textarea class="form-control" name="content_news" rows="5">{{ old('content_news') }}</textarea>
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
                    <a href="{{action('GroupsController@showGroup', $group->id)}}" class="btn btn-danger btn-sm" role="button">
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

        @include('website.right-menu-sk')

    </div>
</div>



@endsection