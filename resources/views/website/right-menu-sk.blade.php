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
                                                            style="position: absolute;top:19px;border-radius: 50%;"></a>';
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
                                                               style="position: absolute;top:19px;border-radius: 50%;"></a>';
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
    margin-top:30px;">
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
                Проекты/группы</a>
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
        </div>
    </div>
</div>