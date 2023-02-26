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
                    <i>Друзья</i>
                <?php
                }
                else
                {
                ?>
                    <i>Друзі</i>
                <?php
                }
                ?>

            </h4>
            @if(!$friends->isEmpty())
            @foreach($friends as $friend)


            <div class="one-item-search col-md-12" data-user-id="{{$friend->id}}">
            <hr>
                <a href="{{url('user',$friend->id)}}">
                    <img src="{{$friend->profileForUser->photo}}" width="50" height="50" class="" alt="">
                    &nbsp;
                    <strong>
                        {{$friend->profileForUser->name}}
                        {{$friend->profileForUser->last_name}}
                    </strong>
                    @if($friend->is_online)
                    <span class="text-danger">
                        - online
                    </span>
                    @endif
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
    <br><br>
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>

        <div class="rightcolm">
            @include('website.ru-menu')
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