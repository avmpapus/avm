@extends('layouts.main-front')

@section('content')

    <?php
    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>

    <div class="clearfix"></div>

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

        <div class="sk-div-post" data-id = "{{ $news->id }}">

            <b>
                &nbsp;&nbsp;&nbsp;
                {{ $news->title }}
            </b>
            <br />

            @if($news->img)
            <div class="col-md-12">
                <img src="{{ $news->img }}" class="img-responsive img-post-sk">
            </div >
            @endif

            @if($news->video)
                <div class="video-sk col-md-12">
                    {!! $news->video !!}
                </div>
            @endif

            <p>

                {!! $news->content_news !!}

            </p>

            <p class="text-right">
                <small >
                    {{\Carbon\Carbon::parse($news->created_at)->format("добавлено j/m/Y в G:i")}}
                </small>
            </p>



            <form method="POST" action="{{action('NewsController@destroy',['id'=>$news->id])}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete"/>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-danger btn-block">
                        <i class="fa fa-scissors fa-lg" aria-hidden="true"></i>&nbsp;
                        Удалить новость навсегда
                    </button>
                </div>
            </form>


        </div>




    </div>
</div>

    <br><br>
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

    </div>



@endsection