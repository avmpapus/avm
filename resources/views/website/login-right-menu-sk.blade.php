<div class="for-large-screens">

    <?php
    use App\UserProfile; // Подключение класса UserProfile
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>
    <div style="position: fixed; top:2px; margin-left:28px; z-index:2;">
        <a href="{{ url('/posts') }}" style="text-decoration: none;">
            <img src="/assets-front/img/c.png" width="33"
                 title="Рабочий кабинет">
        </a>
    </div>

    <div style="position: fixed; top:7px; margin-left:75px; z-index:2; width:2000px;">


        <form method="post" action="{{action('SearchController@searchAll')}}" onsubmit="return validThis(this);">
            {{ csrf_field() }}

            <input type="search" id="sk-input-search" name="searchString" size="23" class="form-input"

                   placeholder="Введите запрос и нажмите Enter" {{Auth::guest() ? "disabled" : ""}}>

        </form>


        <div style="position: fixed; top:0px; z-index:2;margin-left:832px;">

            <?php
            $url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';
            $a = explode('?', $url);
            $a = $a[0];
            ?>


            <?php
            if($a=='/user/'.$user_profile->user_id.'/edit'){
            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                echo '<a href="../'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="32" height="32" alt=""
                                                            style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }else{
                // Выввод изображения поставленно пользователм
                echo '<a href="../'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="32" height="32" alt=""
                                                            style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }

            ?>
            <div style="position: relative; top:15px; left:40px; z-index:2;">
                <a href="../{{$user_profile->user_id}}"><font color="white">{{$user_profile->name}}</font></a>
            </div>
            <?php
            }


            if($a!='/user/'.$user_profile->user_id.'/edit'){
            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                echo '<a href="../user/'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="32" height="32" alt=""
                                                               style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }else{
                // Выввод изображения поставленно пользователм
                echo '<a href="../user/'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="32" height="32" alt=""
                                                               style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }

            ?>
            <div style="position: relative; top:15px; left:40px; z-index:2;">
                <a href="../user/{{$user_profile->user_id}}"><font color="white">{{$user_profile->name}}</font></a>
            </div>
            <?php
            }
            ?>






            <div style="position: relative; top:-20px; left:120px; z-index:2;">
                &nbsp;&nbsp;&nbsp;
                <a href="{{ url('/message') }}" class="a-badge-mess">
                    <img src="{{asset('assets-front/img/message_.png')}}" width="42"
                         class="{{ isset($count_mess)&& $count_mess>0 ? 'com-anime' : '' }}"
                         style="position: absolute;top:10px;" data-toggle="tooltip" title="Сообщения" data-placement="left">
                </a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ url('/notice') }}" class="a-badge-notice">
                    @if(isset($count_new)&& $count_new>0)
                        <span class="badge badge-com badge-notice">
                        {{ $count_new }}
                    </span>
                    @endif

                    <img src="{{asset('assets-front/img/cmmans_.png')}}" width="40"
                         class="{{ isset($count_new)&& $count_new>0 ? 'com-anime' : '' }}"
                         style="position: absolute;top:10px;" data-toggle="tooltip" title="Уведомления" data-placement="left">
                </a>
                &nbsp;&nbsp;
            </div>
        </div>





        <div style="display: block;
    margin-bottom: 10px;
    position: fixed;
    margin-left: -46px;
    margin-top:30px;
width:275px;">
            <div class="panel panel-default sk-panel-login">
                <div class="panel-heading">Войти
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control">Ел. почта</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" style="width:155px;">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control">Пароль</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" style="width:155px;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Запомнить меня
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Войти
                                </button>
                                <?php
                                /*
                                if(!$errors->has('password')){
                                echo '<br/><br/>Добро пожаловать в Спильну справу';
                                  }
                                */
                                ?>
                                {{--
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                --}}
                            </div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>



{{--дизайн для узкого экрана--}}

<div class="for-small-screens">


    <div style="position: fixed; top:2px; margin-left:28px; z-index:2;">
        <a href="{{ url('/posts') }}" style="text-decoration: none;">
            <img src="/assets-front/img/c.png" width="33"
                 title="Рабочий кабинет">
        </a>
    </div>

    <div style="position: fixed; top:7px; margin-left:75px; z-index:2; width:700px;">


        <form method="post" action="{{action('SearchController@searchAll')}}">
            {{ csrf_field() }}

            <input type="search" id="sk-input-search" name="searchString" size="23" class="form-input"

                   placeholder="Введите запрос и нажмите Enter" {{Auth::guest() ? "disabled" : ""}}>

        </form>

    </div>



    <div style="position: fixed; top:0px; left:270px; z-index:2;">
        &nbsp;&nbsp;&nbsp;
        <a href="{{ url('/message') }}" class="a-badge-mess">
            <img src="{{asset('assets-front/img/message_.png')}}" width="42"
                 class="{{ isset($count_mess)&& $count_mess>0 ? 'com-anime' : '' }}"
                 style="position: absolute;top:10px;" data-toggle="tooltip" title="Сообщения" data-placement="left">
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ url('/notice') }}" class="a-badge-notice">
            @if(isset($count_new)&& $count_new>0)
                <span class="badge badge-com badge-notice">
                        {{ $count_new }}
                    </span>
            @endif

            <img src="{{asset('assets-front/img/cmmans_.png')}}" width="40"
                 class="{{ isset($count_new)&& $count_new>0 ? 'com-anime' : '' }}"
                 style="position: absolute;top:10px;" data-toggle="tooltip" title="Уведомления" data-placement="left">
        </a>
        &nbsp;&nbsp;
    </div>




    <div style="position: fixed; top:0px; z-index:2;margin-left:232px;">

        <?php
        $url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';
        $a = explode('?', $url);
        $a = $a[0];
        ?>


        <?php
        if($a=='/user/'.$user_profile->user_id.'/edit'){
            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                echo '<a href="../'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="32" height="32" alt=""
                                                            style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }else{
                // Выввод изображения поставленно пользователм
                echo '<a href="../'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="32" height="32" alt=""
                                                            style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }
        }


        if($a!='/user/'.$user_profile->user_id.'/edit'){
            if(!$user_profile->photo){ // Проверка аватара пользователя. Если у пользователя нет поставленой им автарки. Тогда выводится картинка по умолчанию

                echo '<a href="../user/'.$user_profile->user_id.'"><img src="/assets-front/img/no-avatar.jpg" width="32" height="32" alt=""
                                                               style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }else{
                // Выввод изображения поставленно пользователм
                echo '<a href="../user/'.$user_profile->user_id.'"><img src="'.$user_profile->photo.'" width="32" height="32" alt=""
                                                               style="position: absolute;top:11px;border-radius: 50%;"></a>';
            }
        }
        ?>
    </div>




    <div style="display: block;
    margin-bottom: 10px;
    position: fixed;
    margin-left: 20px;
    margin-top:20px;
z-index: 2;">


        <input type="checkbox" id="btn-menu" />
        <label for="btn-menu"></label>
        <ul class="list-menu">
            <nav class="dws-menu">
                <a href="{{ url('/posts') }}">
                    <img src="{{asset('assets-front/img/home_site2.png')}}" width="17"
                         data-toggle="tooltip" title="Рабочий кабинет" data-placement="right">
                    Рабочий кабинет</a>
                <br><br>
                <a href="{{ url('user/create') }}" >
                    <img src="{{asset('assets-front/img/edit_ank.png')}}"
                         width="17" data-toggle="tooltip"
                         title="Редактировать профиль" data-placement="right">
                    Редактировать профиль</a>
                <br><br>

                <a href="{{ url('groups/create') }}">
                    <img src="{{asset('assets-front/img/make_group1.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Создать группу">
                    Создать группу/проект</a>
                <br><br>

                <a href="{{ url('post/create') }}">
                    <img src="{{asset('assets-front/img/make_mth1.png')}}" width="17"
                         data-toggle="tooltip" title="Добавить материал" data-placement="right">
                    Добавить материал</a>
                <br><br>

                <a href="{{action('GroupsController@index')}}">
                    <img src="{{asset('assets-front/img/my_groups2.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Мои группы">
                    Проекти/группы</a>
                <br><br>
                <a href="{{ url('/friend') }}">
                    <img src="{{asset('assets-front/img/friends.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Друзья">
                    Друзья
                    @if(isset($count_online) && $count_online > 0)
                        <span class="text-danger">
        ({{$count_online}} онлайн)
        </span>
                    @endif
                </a>
                <br><br>
                <a href="{{ url('settings') }}">
                    <img src="{{asset('assets-front/img/settings.png')}}" width="17" title="Настройки">
                    Настройки</a>
                <br><br>
                <a href="{{ url('/logout') }}" style="text-decoration: none;">
                    <img src="{{asset('assets-front/img/exit.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Выйти из сайта">
                    <strong>Выйти</strong>
                </a>
            </nav>
        </ul>


    </div>
</div>