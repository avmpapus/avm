@extends('layouts.main-front')

@section('content')

    <?php
    use App\UserProfile;
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
            <br><br><br>
            <div id="myDiv"></div>


            <div style="margin:-10px;padding:30px;background:white;">
                <h4 class="text-center" style="text-decoration: underline;">
                    <i>Все диалоги</i>
                </h4>
                <hr>

				
				
                
                @if(!$dialogs_users->isEmpty())
                    @foreach($dialogs_users as $one_dialog)

                        <div class="sk-one-dialog">
                            <div class="row">

                                <div class="col-md-10 col-sm-10 col-xs-10 block-user-data" data-user-id="">

                                    <a href="{{ url('user', $one_dialog->profileForUser->user_id) }}">
                                        <img src="{{$one_dialog->profileForUser->photo}}" width="50" height="50" class="" alt="">
                                        &nbsp;
                                        <strong>	                                       								
                                            {{$one_dialog->profileForUser->name}}                                            {{$one_dialog->profileForUser->last_name}}                                     									
                                        </strong>
                                        @if($one_dialog->is_online)
                                            <span class="text-danger">
                                - online
                            </span>
                                        @endif
                                    </a>
                                </div>

                                <div class="for-small-screens">

                                    <a href="{{ action('MessageController@show', $one_dialog->id) }}" class="" >
                                        @if($one_dialog->count_mess > 0)
                                            <i class="fa fa-eye fa-lg" aria-hidden="true" data-toggle="tooltip"
                                               title="перейти к диалогу" data-placement="top"></i>
                                        @else

                                            <i class="fa fa-eye-slash fa-lg" aria-hidden="true" data-toggle="tooltip"
                                               title="перейти к диалогу" data-placement="top"></i>
                                        @endif
                                    </a>
                                    &nbsp;&nbsp;

                                </div>



                                <div class="block-dialog-action col-md-2 col-sm-2 col-xs-2">
                                    <div class="for-large-screens">
                                        <p class="text-right">
                                            <a href="{{ action('MessageController@show', $one_dialog->id) }}" class="" >
                                                @if($one_dialog->count_mess > 0)
                                                    <i class="fa fa-eye fa-lg" aria-hidden="true" data-toggle="tooltip"
                                                       title="перейти к диалогу" data-placement="top"></i>
                                                @else

                                                    <i class="fa fa-eye-slash fa-lg" aria-hidden="true" data-toggle="tooltip"
                                                       title="перейти к диалогу" data-placement="top"></i>
                                                @endif
                                            </a>
                                            &nbsp;&nbsp;
                                        </p>
                                    </div>
                                </div>

                                <div class="block-dialog-content col-md-4 col-sm-4 col-xs-4">

                                    {!!$one_dialog->last_mess->message!!}

                                </div>

                                <div class="block-dialog-time col-md-8">
                                    <p class="text-info text-right">
                                        <small>
                                            {{\Carbon\Carbon::parse($one_dialog->last_mess->updated_at)
                                                        ->format("последнее сообщение - j/m/Y в G:i")}}
                                        </small>
                                    </p>

                                </div>


                            </div>
                            <hr>
                        </div>


                    @endforeach


                @else
                    <p class="text-center">
                        <i>.... нет диалогов</i>
                    </p>
                @endif
				
            </div>
        </div>
    </div>


    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>
        <br><br>
        <div class="rightcolm">
            @include('website.ru-menu')
        </div>
        <?php
        }
        if($user_profile->language=='ua'){
        ?>
            <br><br>
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