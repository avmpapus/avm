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




        <div style="margin:-10px;padding:10px;">
            <?php

            if($user_profile->language!='ua'){
            ?>
            <div class="panel-heading">Настройки</div>
            <?php
            }
            else
            {
            ?>
            <div class="panel-heading">Налаштування</div>
            <?php
            }
            ?>




        </div>



                <div class="panel panel-default sk-panel-login">
                    <?php
                    if($user_profile->language!='ua'){
                        ?>
                    <div class="panel-heading">Смена пароля</div>
                        <?php
                        }
                        else
                            {
                                ?>
                                <div class="panel-heading">Зміна паролю</div>
                        <?php
                            }
                        ?>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('change/password') }}">
                            {{ csrf_field() }}



                            <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Ваш пароль *</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="passwordold"
                                           placeholder="мин. 6 символов" required>

                                    @if ($errors->has('passwordold'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('passwordold') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <?php
                                if($user_profile->language!='ua'){
                                ?>
                                    <label for="password-confirm" class="col-md-4 control-label">Новый пароль *</label>
                                <?php
                                }
                                else
                                {
                                ?>
                                    <label for="password-confirm" class="col-md-4 control-label">Новий пароль *</label>
                                <?php
                                }
                                ?>


                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password"
                                           placeholder="подтвердите пароль" required>


                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <?php
                                if($user_profile->language!='ua'){
                                ?>
                                    <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль *</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                               placeholder="подтвердите пароль" required>
                                    </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                    <label for="password-confirm" class="col-md-4 control-label">Підтвердіть пароль *</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                               placeholder="Підтвердіть пароль" required>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php
                                        if($user_profile->language!='ua'){
                                        ?>
                                            <i class="fa fa-btn fa-user"></i> Сменить
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                            <i class="fa fa-btn fa-user"></i> Змінити
                                        <?php
                                        }
                                        ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                        {{--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}


                </div>
				{{--
                      
							
							
                            <div class="panel-body">



                            
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        @if($user_profile->check1==1)
                                            <a href="settings/notcheck1/{{$user_profile->user_id}}">
                                                <button type="button" class="btn">
                                                    Отправлять материалы на вашу почту
                                                    &nbsp;&nbsp;&nbsp;&nbsp;<img src="assets-front/img/check1.png" width="20">
                                                </button>
                                            </a>
                                        @endif

                                        @if($user_profile->check1==0)

                                            <a href="settings/check1/{{$user_profile->user_id}}">
                                                <button type="button" class="btn"
                                                        style="background-color: #5bc0de;border-color: #46b8da;">
                                                    Отправлять материалы на вашу почту
                                                </button>
                                            </a>
                                        @endif


                                    </div>

                                </div>
                            
                            </div>
			            
                            </form>

                        </div>
	--}}

        <div class="panel panel-default sk-panel-login" style="padding: 10px;">
            <?php
            if($user_profile->language!='ua'){
            ?>
            <center>
                <a href="settingsmail/changeemail" class="btn">
                    <button type="button" class="btn">
                        Смена почты
                    </button>
                </a>
            </center>
            <?php
            }
            else
            {
            ?>
            <center>
                <a href="settingsmail/changeemail" class="btn">
                    <button type="button" class="btn">
                        Зміна пошти
                    </button>
                </a>
            </center>
            <?php
            }
            ?>
        </div>
    </div>

</div>






{{--отправка материала без перезагрузки--}}

<script type="text/javascript">
/*
    $(document).ready(function() {
        $('#post_form_settings').submit(function(){
            $.post("/insert", $("#post_form_settings").serialize(),  function(response) {
            });
            return false;
        });
    });
    */
</script>

    <?php
    if($user_profile->language!='ua'){
    ?>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <div class="rightcolm">
           Наука
    <br>
    <a href="../posts-for-cat/25">Наука</a>
	<br>
    <a href="../posts-for-cat/24">Наука и исследования</a>
	<br>
    <a href="../posts-for-cat/1">Общественные и гуманитарные науки</a>
	<br>
    <a href="../posts-for-cat/2">Естественные науки</a>
	<br>
    <a href="../posts-for-cat/3">Технические науки</a>
	<br>
    <a href="../posts-for-cat/4">Технические эксперименты, прикладные исследования</a>
	<br>
    <a href="../posts-for-cat/5">Исследования, эксперименты</a>
<br>
<br>
    Энергия
    <br>
    <a href="../posts-for-cat/6">Энергосберегающие технологии</a>
	<br>
	<br>
        Быт
        <br>
    <a href="../posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a>
	<br>
	<br>
    Строительство
        <br>
    <a href="../posts-for-cat/8">Капитальное строительство</a>
	<br>
        <a href="../posts-for-cat/9">Ландшафтное строительство</a>
		<br>
        <a href="../posts-for-cat/10">Ландшафтный дизайн</a>
		<br>
		<br>
        Культура
        <br>
        <a href="../posts-for-cat/11">Искусство</a>
		<br>
        <a href="../posts-for-cat/12">Религия</a>
		<br>
		<br>
        Экология
        <br>
        <a href="../posts-for-cat/13">Лес, парковое хозяйство</a>
		<br>
        <a href="../posts-for-cat/14">Реки, водные системы, береговые зоны</a>
		<br>
        <a href="../posts-for-cat/15">Природные ресурсы</a>
		<br>
		<br>
    Общество
        <br>
        <a href="../posts-for-cat/16">Модели коммуникации</a>
		<br>
        <a href="../posts-for-cat/22">Информационные технологии</a>
		<br>
        <a href="../posts-for-cat/17">Национальная идея, формирование национальной идеи</a>
		<br>
        <a href="../posts-for-cat/18">Система общественного самоуправления (СиОС)</a>
		<br>
		<br>
        Образование
        <br>
        <a href="../posts-for-cat/19">Образование, самообразование</a>
		<br>
		<br>
        Идеи
        <br>
        <a href="../posts-for-cat/20">Идеи, предложения, решения</a>
        </div>
    </div>
    <?php
    }
    else
    {
    ?>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <div class="rightcolm">
            @include('website.ua-menu')
        </div>
    </div>
    <?php
    }
    ?>




{{--
<script src="https://ajax.googleleapis.com/ajax/libs/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>


<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css/"/>
--}}


@endsection