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
        {{--хлебные крошки--}}
        <script language="JavaScript">
            document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
        </script>


        <?php
        echo $_SERVER['REQUEST_URI']
        ?>

        <div class="sk-div-groups" data-id = "">
            <div class="row">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Мои группы и проекты</i>
            </h4>
            @if(!$groups->isEmpty())
            @foreach($groups as $group)
            <div class="sk-one-group col-md-12">

                <a href="{{ action('GroupsController@showGroup', $group->id) }}">
                    <strong>
                        {{$group->title}}
                    </strong>
                    @if($group->user_id == Auth::id())
                        @if($group->type == 1)
                        <span class="text-success">
                            &#9733; моя группа &#9733;
                        </span>
                        @else
                        <span class="text-danger">
                            &#9733; мой проект &#9733;
                        </span>
                        @endif
                    @endif
                    <br><br>
                    <img src="{{$group->avatar}}" width="50%" class="img-responsive" alt="">
                    &nbsp;

                </a>

                <p class="group-count">
                    <i>
                    &nbsp;&nbsp;&nbsp;{{$group->user_for_group_count}} подписчиков
                    </i>

                </p>

                <p class="group-description">
                    {{$group->description}}
                </p>

                <p class="text-primary text-right">
                    <i>
                    {{\Carbon\Carbon::parse($group->created_at)->format("Группа создана j/m/Y")}}
                    </i>
                <p>
            <hr>
            </div>

            @endforeach

            @else
            <p class="text-center">
                <i>.... нет результатов поиска</i>
            </p>
            @endif

            </div>
        </div>


    </div>
</div>


<?php
if($user_profile->language!='ua'){
?>
<br><br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
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
</div>
<?php
}
if($user_profile->language=='ua'){
?>
<br><br>
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



@endsection