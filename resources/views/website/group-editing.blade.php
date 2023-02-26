@extends('layouts.main-front')

@section('content')

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
        @include('website.right-menu-sk')
        <?php
        }

        ?>



    </div>
    <br><br>
<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Изменить группу/проект</i>
            </h4>

            {{--
            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif
            --}}

            <form role="form" id="form-group-sk" action="{{action('GroupsController@updateGroup')}}"
                                            method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $group->id }}">

				
								<div class="form-group">
                    <label>Категория группы/проекта *</label>
						<select name="category" class="form-control" >
                        <option>Мой родной край</option>
						<option>Другое</option>
                        </select>
				</div>
				
				
                <div class="form-group">
                    <label>Название*</label>
                    <input id="log" onkeyup="duble.value = this.value" type="text" name="title" class="form-control" value="{{ $group->title }}">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label>
                        Загрузить/измените аватар* <br>
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
                <div class="ajax-respond">
                    @if($group->avatar)
                    <img src="{{ $group->avatar }}" class="img-responsive" width="50%">
                    @endif
                </div>
                <br>

                <div class="form-group">
                    <label>Описание*</label>
                    <textarea id="duble" class="form-control" name="description" rows="5">{{ $group->description }}</textarea>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="checkbox" style="margin-bottom: 20px;">
                    <label>
                          <input type="checkbox" name="closed_group"
                          {{$group->closed_group ? 'checked' : ''}}>
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
                        Сохранить изменения
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
    <br>
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



@endsection