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
        @include('website.ru-right-menu-sk')
        <?php
        }

        ?>



    </div>

<br><br>

<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>

        <div class="sk-div-post" data-id = "">
            <div class="row">
                <h4 class="text-center" style="text-decoration: underline;">
                    <?php

                    if($user_profile->language!='ua'){
                    ?>
                    <i>Материалы</i>
                    <?php
                        }
                        else
                            {
                                ?>
                        <i>Матеріали</i>
                        <?php
                            }
                        ?>
                </h4>

                @if(!$posts->isEmpty())
                @foreach($posts as $post)
                <div class="one-item-search col-md-12" data-user-id="">
                <hr>
                    <a href="{{action('PostController@show', $post->id)}}">
                        <h4 class="text-center">
                        <?php
                            $tit = $post->title;
                            // если в тексте содержится строка поиска
                            if(mb_stripos($tit, $string, 0, 'UTF-8') === FALSE){
                                echo $tit;
                            }
                            else{
                                // получ. начало строки до вхождения
                                $st_1 = mb_stristr($tit, $string,true);
                                // получить строку после вхождения с искомой подстрокой
                                $st_2 = mb_stristr($tit, $string);
                                // найти длину строки поиска
                                $string_len_0 = strlen($string);
                                /// Возвращает подстроку с позиции 0 длиной $string_len
                                $st_201 = substr($st_2, 0,$string_len_0);
                                // Возвращает подстроку с позиции $string_len
                                $st_202 = substr($st_2, $string_len_0);

                                echo $st_1."<span style='background: #c4c2c2;'>".$st_201."</span>".$st_202;
                            }
                        ?>
                            {{--$post->title--}}
                        </h4>
                    </a>

                    @if($post->img)
                        <a href="img/{{ $post->id }}"><img src="{{$post->img}}" width="60%" class="" alt=""></a>
                        <br><br>
                    @endif

                    <div class="one-item-search-description col-md-12">
                    <p><i>
                        <?php
                            $des = $post->description;
                            // если в тексте содержится строка поиска
                            if(mb_stripos($des, $string, 0, 'UTF-8') === FALSE){
                                echo $des;
                            }
                            else{
                                // получ. начало строки до вхождения
                                $str_1 = mb_stristr($des, $string,true);
                                // получить строку после вхождения с искомой подстрокой
                                $str_2 = mb_stristr($des, $string);
                                // найти длину строки поиска
                                $string_len_1 = strlen($string);
                                /// Возвращает подстроку с позиции 0 длиной $string_len
                                $str_201 = substr($str_2, 0,$string_len_1);
                                // Возвращает подстроку с позиции $string_len
                                $str_202 = substr($str_2, $string_len_1);

                                echo $str_1."<span style='background: #9fbbd2;'>".$str_201."</span>".$str_202;
                            }
                        ?>
                    </i></p>

                    </div>


                </div>

                @endforeach
                @else
                    <p class="text-center">
                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        <i>.... нет результатов поиска</i>
                            <?php
                            }
                            else
                            {
                                ?>
                                <i>.... нема результатів пошуку</i>
                            <?php
                            }
                            ?>
                @endif

            </div>
        </div>



        <div class="sk-div-post" data-id = "">
            <div class="row">

            <h4 class="text-center" style="text-decoration: underline;">
                <i>Люди</i>
            </h4>
            @if(!$users->isEmpty())
            @foreach($users as $user)
            {{-- не выводить текущ. польз.--}}
            @if($user->user_id != Auth::id())

            <div class="one-item-search col-md-12" data-user-id="{{$user->user_id}}">
            <hr>
                <a href="{{url('user',$user->user_id)}}">
                    <img src="{{$user->photo}}" width="50" height="50" class="" alt="">
                    &nbsp;
                    <strong>
                        {{$user->name}}
                        {{$user->last_name}}
                    </strong>
					@if($user->i_need_help == 1)
						 (нужна помощь)
					 @endif
                </a>

                @if($user->is_friend == 2)
                     - <i class="fa fa-handshake-o fa-lg" aria-hidden="true"></i> -
                     <a href="{{ url('/friend') }}">
                         <?php
                         if($user_profile->language!='ua'){
                             ?>
                     друзья
                         <?php
                         }
                          else
                         {
                             ?>
                             друзі
<?php
                         }
                         ?>
                     </a>
					 
					 
					 
					 
                @elseif($user->is_friend === 0)
                    - <i class="fa fa-hand-paper-o fa-lg" aria-hidden="true"></i> -
                     <a href="{{ url('/friend') }}">
                         <?php
                         if($user_profile->language!='ua'){
                             ?>
                     заявка в друзья
                         <?php
                         }
                         else
                             {
                              ?>
                                 заявка в друзі
                             <?php
                             }
                         ?>


                     </a>
                @elseif($user->is_friend == 1)
                    - <i class="fa fa-thumbs-o-down fa-lg" aria-hidden="true"></i> -
                     <a href="{{ url('/friend') }}">
                         <?php
                         if($user_profile->language!='ua'){
                         ?>
                             заявка в друзья отклонена
                         <?php
                         }
                         else
                         {
                         ?>
                             заявка в друзі відхилена
                         <?php
                         }
                         ?>
                     </a>
                @endif

            </div>


            @if($user->userOfProfile->friends1OfUser->isEmpty() && $user->userOfProfile->friends2OfUser->isEmpty())
            <div class="col-md-12 text-right" style="margin-top: -20px;">

                <button type="button" class="btn btn-primary btn-xs btn-friendship" data-request="{{$user->user_id}}">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>



                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                    Добавить в друзья
                    <?php
                    }
                    else
                    {
                    ?>
                    Додати в друзі
                    <?php
                    }
                    ?>
                </button>
            </div>
            @endif
            @endif



            @endforeach

            @else
            <p class="text-center">
                <?php
                if($user_profile->language!='ua'){
                ?>
                    <i>.... нет результатов поиска</i>
                <?php
                }
                else
                {
                ?>
                    <i>.... нема результатів пошуку</i>
                <?php
                }
                ?>
            </p>
            @endif

            </div>
        </div>



        <div class="sk-div-post" data-id = "">
            <div class="row">
                <h4 class="text-center" style="text-decoration: underline;">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <i>Группы</i>
                    <?php
                    }
                    else
                    {
                    ?>
                        <i>Групи</i>
                    <?php
                    }
                    ?>
                </h4>

                @if(!$groups->isEmpty())
                @foreach($groups as $group)
                <div class="one-item-search col-md-12" data-user-id="">
                <hr>
                    <a href="{{url('group',$group->id)}}">

                        <h4 class="text-center">
                            {{$group->title}}
                        </h4>

                        <img src="{{$group->avatar}}" width="60%" class="" alt="">
                        <br><br>

                        <p><i>
                            {{$group->description}}
                        </i></p>
                    </a>

                </div>

                @endforeach
                @else
                    <p class="text-center">
                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                            <i>.... нет результатов поиска</i>
                        <?php
                        }
                        else
                        {
                        ?>
                            <i>.... нема результатів пошуку</i>
                        <?php
                        }
                        ?>
                    </p>
                @endif

            </div>
        </div>


    </div>
</div>

    <br>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>

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




@endsection