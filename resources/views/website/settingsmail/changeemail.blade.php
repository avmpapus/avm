@extends('layouts.main-front')

@section('content')

    <?php

    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();

    if($user_profile->language!='ua'){
    ?>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        @include('website.ru-left-menu-sk')
    </div>
    <?php
    }
    else
    {
    ?>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        @include('website.ua-left-menu-sk')
    </div>
    <?php
    }
    ?>





<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">




        <div style="margin:-10px;padding:10px;">
            <?php

            if($user_profile->language!='ua'){
            ?>
            <label for="tab_1">Настройки</label>
            <?php
            }
            else
            {
            ?>
            <label for="tab_1">Налаштування</label>
            <?php
            }
            ?>




        </div>

	<br>
        <div class="panel panel-default sk-panel-login">
            <?php
            if($user_profile->language!='ua'){
            ?>
                <div class="panel-heading">Сменить почту</div>
        <?php
            }
            else
            {
            ?>
                <div class="panel-heading">Змінити пошту</div>
            <?php
            }
            ?>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('changeemail') }}">
                    {{ csrf_field() }}



                    <div class="form-group{{ $errors->has('passwordold') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Ваш пароль *</label>

                        <div class="col-md-6">
                            <?php
                            if($user_profile->language!='ua'){
                            ?>
                                <input id="password" type="password" class="form-control" name="passwordold"
                                       placeholder="мин. 6 символов" required>
                            <?php
                            }
                            else
                            {
                            ?>
                                <input id="password" type="password" class="form-control" name="passwordold"
                                       placeholder="мин. 6 символів" required>
                            <?php
                            }
                            ?>


                            @if ($errors->has('passwordold'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('passwordold') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                            <label for="email-confirm" class="col-md-4 control-label">Новая почта *</label>
                        <?php
                        }
                        else
                        {
                        ?>
                            <label for="email-confirm" class="col-md-4 control-label">Нова пошта *</label>
                        <?php
                        }
                        ?>


                                               <div class="col-md-6">
                                                   <?php
                                                   if($user_profile->language!='ua'){
                                                   ?>
                                                       <input id="email-confirm" type="text" class="form-control" name="email"
                                                              placeholder="подтвердите пароль" required>
                                                   <?php
                                                   }
                                                   else
                                                   {
                                                   ?>
                                                       <input id="email-confirm" type="text" class="form-control" name="email"
                                                              placeholder="підтвердіть пароль" required>
                                                   <?php
                                                   }
                                                   ?>





                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                    <div class="form-group">
                        {{--
                        <label for="email-confirm" class="col-md-4 control-label">Подтвердите пароль *</label>

                        <div class="col-md-6">
                            <input id="email-confirm" type="email" class="form-control" name="email_confirmation"
                                   placeholder="подтвердите пароль" required>
                                   --}}
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
            </div></div></div></div>


            {{--отправка материала без перезагрузки--}}

<script type="text/javascript">
/*
    $(document).ready(function() {
        $('#changeemail_form').submit(function(){
            $.post("changeemail/create", $("#changeemail_form").serialize(),  function(response) {
            });
            return false;
        });
    });
*/
</script>


<?php
if($user_profile->language!='ua'){
?>
	<br><br><br>
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
	<br><br><br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
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
</div>
<?php
}
?>



{{--
<script src="https://ajax.googleleapis.com/ajax/libs/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>


<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css/"/>
--}}


{{--
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>
--}}



{{--
@if(session('success'))
    <script>
        $(document).ready(function(){
            alertify.success('{{session('success')}}');
        })
    </script>
@endif

@if(session('error'))
    <script>
        $(document).ready(function(){
            alertify.error('{{session('error')}}');
        })
    </script>
@endif
--}}

@endsection