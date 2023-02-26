<div class="for-large-screens">

    <?php
    use App\UserProfile; // Подключение класса UserProfile
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>
	
	
	<?php
            $url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';
            $a = explode('?', $url);
            $a = $a[0];
            ?>
	
	
	
    <div style="position: fixed; top:2px; margin-left:28px; z-index:2;">
        <a href="{{ url('/posts') }}" style="text-decoration: none;">
            <img src="/assets-front/img/c.png" width="33"
                 title="Робочий кабінет">
        </a>
    </div>

    <div style="position: fixed; top:7px; margin-left:75px; z-index:2; width:2000px;">


        <form method="post" action="{{action('SearchController@searchAll')}}" onsubmit="return validThis(this);">
            {{ csrf_field() }}

            <input type="search" id="sk-input-search" name="searchString" size="23" class="form-input"

                   placeholder="Введіть запит і нитисніть Enter" {{Auth::guest() ? "disabled" : ""}}>

        </form>

		<div style="position: fixed; top:15px; z-index:2;margin-left:545px;">
		<a href="../mycity"><font color="white">Мій рідний край</font></a>&nbsp;&nbsp;&nbsp;
		</div>
		
		<div style="position: fixed; top:15px; z-index:2;margin-left:654px;">
		<a href="../maps"><font color="white">Мапи</font></a>&nbsp;&nbsp;&nbsp;
		</div>

		
		

		<div style="position: fixed; top:12px; z-index:2;margin-left:715px;">
		<a href="../etimology"><font color="white">Етимологія</font></a>
		
		<?php
		if($a=='/posts'){
		?>
		&nbsp;&nbsp;&nbsp;
<img src="assets-front/img/line.png" width="5" height="30">
		</div>
		
			    <?php
		}
		?>
		
		<?php
		if($a!='/posts'){
		?>
		
<img src="../assets-front/img/line.png" width="5" height="30">
		</div>
		
			    <?php
		}
		?>
		


        <div style="position: fixed; top:0px; z-index:2;margin-left:832px;">


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






            <div style="position: relative; top:-20px; left:127px; z-index:2;">
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
                Робочий кабінет</a>
            <br><br>
			{{--
            <a href="{{ url('user/create') }}" >
                <img src="{{asset('assets-front/img/edit_ank.png')}}"
                     width="17" data-toggle="tooltip"
                     title="Редактировать профиль" data-placement="right">
                Редагувати профіль</a>
            <br><br>
            --}}
            <a href="{{ url('groups/create') }}">
                <img src="{{asset('assets-front/img/make_group1.png')}}" width="17"
                     data-toggle="tooltip" data-placement="right" title="Создать группу">
                Створити групу/проект</a>
            <br><br>
            {{---
            <a href="{{ url('post/create') }}">
                <img src="{{asset('assets-front/img/make_mth1.png')}}" width="17"
                     data-toggle="tooltip" title="Добавить материал" data-placement="right">
                Додати матеріал</a>
            <br><br>
            --}}
            <a href="{{action('GroupsController@index')}}">
                <img src="{{asset('assets-front/img/my_groups2.png')}}" width="17"
                     data-toggle="tooltip" data-placement="right" title="Мои группы">
                Проекти/групи</a>
            <br><br>
            <a href="{{ url('/friend') }}">
                <img src="{{asset('assets-front/img/friends.png')}}" width="17"
                     data-toggle="tooltip" data-placement="right" title="Друзья">
                Друзі
                @if(isset($count_online) && $count_online > 0)
                    <span class="text-danger">
        ({{$count_online}} онлайн)
        </span>
                @endif
            </a>
           
		   
{{--
            <br><br>

            <a href="{{ url('mycomments') }}">
                <img src="{{asset('assets-front/img/mycomments.png')}}" width="17" title="Настройки">
            Мои комментарии
            </a>
            --}}
			            <br><br>

            <a href="#openModal3">
                <img src="{{asset('assets-front/img/mycomments.png')}}" width="17" title="Настройки">
            Мої коментарі
            </a>
			
			<br><br>
			
			            <a href="#openModal">
                <img src="{{asset('assets-front/img/player.png')}}" width="17">
            Фільми
            </a>
            <br><br>
			
			<a href="#openModal2">
                <img src="{{asset('assets-front/img/new_music.png')}}" width="17">
            Музика
            </a>
            <br><br>
			
						<a href="{{ url('update') }}">
                <img src="{{asset('assets-front/img/update.png')}}" width="17">
            Оновлення
            </a>
            <br><br>
		   
		   
            <a href="{{ url('settings') }}">
                <img src="{{asset('assets-front/img/settings.png')}}" width="17" title="Настройки">
                Налаштування</a>
            <br><br>
            <a href="{{ url('/logout') }}" style="text-decoration: none;">
                <img src="{{asset('assets-front/img/exit.png')}}" width="17"
                     data-toggle="tooltip" data-placement="right" title="Выйти из сайта">
                <strong>Вийти</strong>
            </a>
        </div>
    </div>
</div>

<div id="openModal3" class="modalDialog" style="position:relative; left:0px; width:1000px;">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
		<h2>Мої коментарі</h2>
		<?php
            //$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");

            //$mysqli = new mysqli("localhost", "gbua_cpil_new", "pcDnGDLNwbi9rRVV", "gbua_cpil_new");
			
			//$mysqli = new mysqli("localhost", "root", "", "gbua_cpil_new");
			
			$mysqli = new mysqli("localhost", "cpcp9174_cp", "111111", "cpcp9174_cpil");


            if ($mysqli->connect_errno) {
                printf("Соединение не удалось: %s\n", $mysqli->connect_error);
                exit();
            }

            $query = "SELECT * FROM post_comments where user_id=".auth::id()." ORDER BY id DESC";

            if ($result = $mysqli->query($query)) {

                while ($row = $result->fetch_assoc())



                echo"<table>
   <tr>
    <td width='70%' cellpadding='5'><a href='../post/".$row['post_id']."'>".$row['comment']."</a></td><br>
    <td width='70%' cellpadding='5'>".$row['updated_at']."</td>
  </tr>
 </table>";

                $result->free();
            }
            echo"</table>";
            $mysqli->close();

            ?>
	</div>
</div>

{{--дизайн для узкого экрана--}}

<div class="for-small-screens">


    <div style="position: fixed; top:2px; margin-left:28px; z-index:2;">
        <a href="{{ url('/posts') }}" style="text-decoration: none;">
            <img src="/assets-front/img/c.png" width="33"
                 title="Робочий кабінет">
        </a>
    </div>

    <div style="position: fixed; top:7px; margin-left:75px; z-index:2; width:700px;">


        <form method="post" action="{{action('SearchController@searchAll')}}">
            {{ csrf_field() }}

            <input type="search" id="sk-input-search" name="searchString" size="23" class="form-input"

                   placeholder="Введіть запит і нитисніть Enter" {{Auth::guest() ? "disabled" : ""}}>

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


    
<div class="for-large-screens">
    <div style="display: block;
    margin-bottom: 10px;
    position: fixed;
    margin-left: 20px;
    margin-top:20px;
z-index: 2;">

        <?php

        if($user_profile->language=='ua'){
        ?>

        <input type="checkbox" id="btn-menu" />
        <label for="btn-menu"></label>
        <ul class="list-menu">
            <nav class="dws-menu">
                <a href="{{ url('/posts') }}">
                    <img src="{{asset('assets-front/img/home_site2.png')}}" width="17"
                         data-toggle="tooltip" title="Рабочий кабинет" data-placement="right">
                    Робочий кабінет</a>
                <br><br>
                <a href="{{ url('user/create') }}" >
                    <img src="{{asset('assets-front/img/edit_ank.png')}}"
                         width="17" data-toggle="tooltip"
                         title="Редактировать профиль" data-placement="right">
                    Редагувати профіль</a>
                <br><br>

                <a href="{{ url('groups/create') }}">
                    <img src="{{asset('assets-front/img/make_group1.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Создать группу">
                    Створити групу/проект</a>
                <br><br>

                <a href="{{ url('post/create') }}">
                    <img src="{{asset('assets-front/img/make_mth1.png')}}" width="17"
                         data-toggle="tooltip" title="Добавить материал" data-placement="right">
                    Додати матеріал</a>
                <br><br>

                <a href="{{action('GroupsController@index')}}">
                    <img src="{{asset('assets-front/img/my_groups2.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Мои группы">
                    Проекти/групи</a>
                <br><br>
                <a href="{{ url('/friend') }}">
                    <img src="{{asset('assets-front/img/friends.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Друзья">
                    Друзі
                    @if(isset($count_online) && $count_online > 0)
                        <span class="text-danger">
        ({{$count_online}} онлайн)
        </span>
                    @endif
                </a>
                <br><br>
                <a href="{{ url('settings') }}">
                    <img src="{{asset('assets-front/img/settings.png')}}" width="17" title="Настройки">
                    Налаштування</a>
                <br><br>
                <a href="{{ url('/logout') }}" style="text-decoration: none;">
                    <img src="{{asset('assets-front/img/exit.png')}}" width="17"
                         data-toggle="tooltip" data-placement="right" title="Выйти из сайта">
                    <strong>Вийти</strong>
                </a>
            </nav>
        </ul>
		<?php
		}
		?>
    </div>
</div>

</div>