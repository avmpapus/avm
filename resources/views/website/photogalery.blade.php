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
</div></div>
<br><br><br><br><br>
<div class="leftcolm" style="background-color: white; margin-left:20px;">
<center>

    <?php
    //$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");
    $mysqli = new mysqli("localhost", "gbua_cpil_new", "pcDnGDLNwbi9rRVV", "gbua_cpil_new");


    if ($mysqli->connect_errno) {
        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT * FROM search_probe WHERE id_user=".$post->userForPost['id'];

    if ($result = $mysqli->query($query)) {

        while ($row = $result->fetch_assoc())
            if($row['img']){
                echo'<a href='.$row['id'].'>';
                echo "<br><img src=".$row['img']." width='200'><br>";
                echo'</a>';
            }


        $result->free();
    }

    $mysqli->close();
    ?>
</center>
<br>
</div>
</div>