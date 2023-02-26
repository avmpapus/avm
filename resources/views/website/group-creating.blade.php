@extends('layouts.main-front')

@section('content')

    <?php

    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();

    ?>
    <br><br>


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
        <br>
        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Создать группу или проект</i>
            </h4>

            {{--
            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif
            --}}

            <form role="form" id="form-group-sk" action="{{action('GroupsController@store')}}"
                                            method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}

				<div class="form-group">
                    <label>Категория группы/проекта *</label>
						<select name="category" class="form-control" >
                        <option>Мой родной край</option>
						<option>Другое</option>
                        </select>
				</div>
				
				
                <div class="form-group">
                    <label>Название группы или проекта *</label>
                    <input id="log" onkeyup="duble.value = this.value" type="text" name="title" class="form-control" value="{{ old('title') }}"
                        placeholder="Кратко опишите деятельность вашей группы">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="radio">
                    <label class="radio-inline">
                        <input type="radio" name="group_project" id="" value="1" checked>
                        <b class="text-success">
                            группа
                        </b>
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="group_project" id="" value="2">
                        <b class="text-warning">
                            проект
                        </b>
                    </label>
                </div>

                <div class="form-group">
                    <label>
                        Загрузить аватар* <br>
                        Изображение должно быть формата jpg или png. <br>
                    </label>
                    <input type="file" name="avatarForGroup">
                    @if ($errors->has('avatarForGroup'))
                        <span class="help-block">
                            <strong>{{ $errors->first('avatarForGroup') }}</strong>
                        </span>
                    @endif
                </div>

                <br>
                <div class="ajax-respond"></div>
                <br>

                <div class="form-group">
                    <label>Описание *</label>
                    <textarea id="duble" class="form-control" name="description" rows="5">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="checkbox" style="margin-bottom: 20px;">
                    <label>
                          <input type="checkbox" name="closed_group">
                          <strong>
                            Приватная группа
                          </strong>
                    </label>
                    <p>
                        <em>
                            Если Ваша группа
                        </em>
                        <strong class="text-warning">
                            приватная
                        </strong>
                        <em>
                            , то просматривать материалы и участвовать
                            в обсуждении смогут только участники группы
                        </em>
                    </p>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm center-block">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        Создать
                    </button>
                </div>

            </form>



        </div>



    </div>
</div>

<script>
$(document).ready(function(){

    $('#form-group-sk input[type=file]').change(function(){

        // получить форму, а НЕ input
        var aaa = $("#form-group-sk");

        var formData = new FormData(aaa[0]);

        $('.ajax-respond').html( "<img src='/assets-front/img/30.gif' class='img-responsive'>" );


        console.log("Форма "+aaa[0]);

        $.ajax({
            url: "/store-img-group",
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

                var html = "<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"50%\"> ";

                $('.ajax-respond').html( html );
            }
        });
    });



});

</script>
    <br><br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        <?php

        if($user_profile->language=='ua'){
        ?>
        @include('website.ua-menu')
        <?php
        }
        if($user_profile->language!='ua'){
        ?>
        @include('website.menu')
        <?php
        }

        ?>

    </div>
</div>



@endsection