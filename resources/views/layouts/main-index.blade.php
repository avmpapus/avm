<!DOCTYPE HTML>
<html>
<head>
    <title>Спільна справа</title>
    <link rel="stylesheet" href="{{asset('assets-front/css/style-sk.css')}}">
    <link href="{{asset('assets-front/css/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets-front/css/css/style.css')}}" rel="stylesheet"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">



    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <script src="{{asset('assets-front/css/js/jquery.min.js')}}"></script>

    <!---strat-slider---->
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front/css/css/slider.css')}}" />


    <style>
        .size {
            white-space: nowrap; /* Отменяем перенос текста */
            overflow: hidden; /* Обрезаем содержимое */
            padding: 5px; /* Поля */
            text-overflow: ellipsis; /* Многоточие */
        }
        .size:hover {
            /*background: #f0f0f0; /* Цвет фона */
            white-space: normal; /* Обычный перенос текста */
        }


        @media(max-width:960px) {
            .for-large-screens {
                display:none;
            }
        }


        @media(min-width:961px) {
            .for-small-screens {
                display:none;
            }
        }
		
		
.thumb img  {
    border: 2px solid #55c5e9; /* Рамка вокруг фотографии */
    padding: 15px; /* Расстояние от картинки до рамки */
    background: #666; /* Цвет фона */
    margin-right: 10px; /* Отступ справа */
    margin-bottom: 10px; /* Отступ снизу */
   }
   

  html { overflow-x:  hidden; }
    </style>


</head>
<div>


    <div class="for-small-screens">

        <div class="panel panel-default sk-panel-login">
            <div class="panel-heading">Войти
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ url('/') }}">Главная</a>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Ел. почта</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Пароль</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">

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
                            <button type="submit" class="btn btn-success btn-xs" style="padding:10px;">
                                <i class="fa fa-btn fa-sign-in"></i> Войти
                            </button>
                        </div>
                    </div>
                    <a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="padding:10px;">Зарегистрироваться</a>
                </form>
            </div>
        </div>
    </div>


    <div class="for-large-screens">
        <div class="header">
            <div class="container"><img src="{{asset('assets-front/img/ccicon.png')}}" width="35" style="position:relative;left:50px;top:-20px;"/>



                <center>
                    Спільна справа - социальная сеть для быстрого и удобного общения между людьми и об их интересах.
                    <br>
					
                    Общайтесь и размещайте материалы на разные темы



                    <div style="position:relative;left:0px;top:-105px;">
                        <form method="post" action="{{action('SearchController@searchAll')}}" onsubmit="return validThis(this);">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="search" id="sk-input-search" style="
          display: block;
  width: 22%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        " placeholder="Введите запрос и нажм. Enter" title="Чтобы ввести запрос, авторизуйтесь или зарегистрируйтесь"  {{Auth::guest() ? "disabled" : ""}}>
                            </div>
                        </form>
                    </div>


                    <div style="position:relative;left:0px;top:-10px;">
                        <a href="{{ url('/posts') }}"  class="btn btn-success btn-xs" style="padding:10px;">Войти</a>
                        или
                        <a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="padding:10px;">Зарегистрироваться</a>
                    </div>

<br/><br/>
					    <p class="thumb">
	 <center>
	 
    <a href="http://cpcp.com.ua/user/1"><img src="assets-front/img/profile/sskkvvguglya-gmail-com/ujehJ76v3TyV5oX.jpg" alt="Фотография 1" width="120" height="120" title="Кусик Кукусиков"></a>
	
    <a href="http://cpcp.com.ua/user/2"><img src="assets-front/img/profile/srt-ghgh-ru/2PI4RVOYEoVXDg0.jpg" alt="Фотография 2" width="120" height="120" title="Азя Азиров"></a>
	
    <a href="http://cpcp.com.ua/user/4"><img src="assets-front/img/profile/sskkv2-yandex-ru/0oqxiwgn2P0TzLO.jpg" alt="Фотография 3" width="120" height="120" title="Ёзик Ёзикевич-Бронштейн"></a>
	
    <a href="http://cpcp.com.ua/user/16"><img src="assets-front/img/profile/test-mail-kl/iZ14Vpt3hwSVEp9.jpg" alt="Фотография 4" width="120" height="120" title="Bohdan"></a>
	
	<a href="http://cpcp.com.ua/user/41"><img src="/assets-front/img/profile/nvmartinenko-gmail-com/xGyjL7du1RRM5qs.jpg" alt="Фотография 4" width="120" height="120" title="Надежда Мартыненко"></a>
		
	<a href="http://cpcp.com.ua/user/14"><img src="/assets-front/img/profile/almp-i-ua/pm4pmr4jedISQml.jpg" alt="Фотография 4" width="120" height="120" title="Александр Мартыненко"></a>
			
	<a href="http://cpcp.com.ua/user/5"><img src="/assets-front/img/profile/almp1-i-ua/bOaYT2OVtYGgU4n.jpg" alt="Фотография 4" width="120" height="120" title="василий фамин"></a>
	
	<a href="http://cpcp.com.ua/user/19"><img src="/assets-front/img/profile/developer-gmail-com/BVs0hOQc6QcdLMe.jpg" alt="Фотография 4" width="120" height="120" title="Богдан"></a>
	
	</center>
	
  </p>
					<br>
                    
                    <a href="/posts"
                       style="position:relative;left:537px;top:-340px;">Войти</a>
                </center>

                <a href="{{ url('/posts') }}">
                    <img src="{{asset('assets-front/img/login.png')}}" width="50" style="position:relative;left:1079px;top:-415px;">
                </a>



                <div class="header-top">


                    <div class="h_menu4"><!-- start h_menu4 -->
                        <a class="toggleMenu" href="#">Menu</a>
                        <ul class="nav">
                            <li><a href="#">Наука</a>
                                <ul>
                                    <li><a href="posts-for-cat/25">Наука</a></li>
                                    <li><a href="posts-for-cat/24">Наука и исследования</a></li>
                                    <li><a href="posts-for-cat/1">Общественные и гуманитарные науки</a></li>
                                    <li><a href="posts-for-cat/2">Естественные науки</a></li>
                                    <li><a href="posts-for-cat/3">Технические науки</a></li>
                                    <li><a href="posts-for-cat/4">Технические эксперименты, прикладные исследования</a></li>
                                    <li><a href="posts-for-cat/5">Исследования, эксперименты</a></li>
                                </ul>
                            <li><a href="#">Энергия</a>
                                <ul>
                                    <li><a href="posts-for-cat/6">Энергосберегающие технологии</a></li>
                                </ul>
                            <li><a href="#">Быт</a>
                                <ul>
                                    <li><a href="posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Стройка</a>
                                <ul>
                                    <li><a href="posts-for-cat/8">Капитальное строительство</a></li>
                                    <li><a href="posts-for-cat/9">Ландшафтное строительство</a></li>
                                    <li><a href="posts-for-cat/1">Ландшафтный дизайн</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Культура</a>
                                <ul>
                                    <li><a href="posts-for-cat/11">Искусство</a></li>
                                    <li><a href="posts-for-cat/12">Религия</a></li>
                                </ul>
                            <li><a href="#">Экология</a>
                                <ul>
                                    <li><a href="posts-for-cat/13">Лес, парковое хозяйство</a></li>
                                    <li><a href="posts-for-cat/14">Реки, водные системы</a></li>
                                    <li><a href="posts-for-cat/15">Природные ресурсы</a></li>
                                </ul>
                            <li><a href="#">Общество</a>
                                <ul>
                                    <li><a href="posts-for-cat/16">Модели коммуникации</a></li>
                                    <li><a href="posts-for-cat/22">Информационные технологии</a></li>
                                    <li><a href="posts-for-cat/17">Национальная идея, формирование национальной идеи</a></li>
                                    <li><a href="posts-for-cat/18">Система общественного самоуправления (СиОС)</a></li>
                                </ul>

                            <li><a href="#">Образование</a>
                                <ul>
                                    <li><a href="posts-for-cat/19">Образование, самообразование</a></li>
                                </ul>
                            <li><a href="#">Идеи</a>
                                <ul>
                                    <li><a href="posts-for-cat/20">Идеи, Предложения, Решения</a></li>
                                </ul>

                                <script type="text/javascript" src="{{asset('assets-front/css/js/nav.js')}}"></script>
                    </div><!-- end h_menu4 -->

                    <div class="clearfix"> </div>

                </div><!-- end header_main4 -->

            </div>
        </div>
    </div>
    <div class="for-large-screens">
        <img src="{{asset('assets-front/css/images/background.jpg ')}} " width="1680" alt=""/>
    </div>

    <!---//End-da-features----->
    <div class="latest-works">
        <div class="container">

        </div>
    </div>
</div>
<!----/start-footer---->

{{--

--}}

<?php
            //$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");
/*
            $mysqli = new mysqli("localhost", "root", "", "test");


            if ($mysqli->connect_errno) {
            printf("Соединение не удалось: %s\n", $mysqli->connect_error);
            exit();
            }

            $query = "SELECT * FROM users_profiles";

            if ($result = $mysqli->query($query)) {

            while ($row = $result->fetch_assoc())
        
		if($row['photo']!='/assets-front/img/no-avatar.jpg'){
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="'.$row['photo'].'" class="img2">';
		}

            $result->free();
            }

            $mysqli->close();
*/
     ?>


<div class="footer">
    <div class="container">
        <div class="footer-grid">

            <h3><a href="{{url('groups/create')}}">Создать группу</a></h3>
            <p class="size">Создавайте группы по интересам. Вы можете создавать как открытые, так и приватные группы.</p>
        </div>


        <div class="footer-grid footer-grid_last">


            <h3><a href="{{url('groups/create')}}">Создать проект</a></h3>
            <p class="size">Создавайте и участвуйте в проектах по интересам. Создав проект, вы можете потом из него сформировать реальный. Участвуя в нем, вы можете делиться своими наработками, комментировать и оценивать материалы других участников, а также обсуждать материалы и проекты с участниками и  друзьями в чате.</p>


        </div>


        <div class="footer-grid">
            <h3><a href="{{url('user/create')}}">Создать профиль</a></h3>
            <p class="size">Создав профиль в Спильной справе, вы можете создавать группы, проекты, общаться с друзьями, ставить оценки, публиковать материалы по темам, комментировать свои и материалы других.</p>
        </div>
        <div class="footer-grid">
            <h3><a href="{{url('post/create')}}">Добавить материал</a></h3>
            <p class="size">Публикуйте блоги, статьи, видео, фото и т.д. по интересующим вас темам.</p>
        </div>


        <div class="footer-grid">
            <h3><a href="{{url('/')}}">Опубликовать текст</a></h3>
            <p class="size">Публикуйте блоги, статьи по интересующим вас темам.</p>
        </div>

    </div>
</div>

<div class="for-large-screens">
<br><br><br><br>
<p class="thumb">
	 <center>
<div style="position:relative; top:50px; left:-487px;"><img src="/assets-front/img/message.png" width="200"></div>
<div style="position:relative; top:-60px; left:133px;">
<b>Общение.</b>
Общайтесь с друзья, коллегами, партнерами, одноклассниками,одногруппниками, соседями и просто с хорошими людьми.
</div>
<a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="position:relative; top:-27px; left:-280px; padding:10px;">Зарегистрироваться</a>
</center>
</p>



<div style="position:relative; top:70px; left:1140px;">
<a href="http://cpcp.com.ua/group/1"><img src="/assets-front/img/group/YX1EYSFKcpRBAPa.jpg" width="150" title="Философский клуб"></a>
<a href="http://cpcp.com.ua/group/2"><img src="/assets-front/img/group/AHWMfYa9Nd79QGz.jpg" width="150" title="Мой Чернигов"></a><br>
<a href="http://cpcp.com.ua/group/3"><img src="/assets-front/img/group/DkTAaStoY0yyggt.jpg" width="150" title="Универсология"></a>
<a href="http://cpcp.com.ua/group/4"><img src="/assets-front/img/group/kDBEkCUfU8zXZ8r.jpg" width="150" title="Предназначение человека"></a>

</div>
<div style="position:relative; top:-40px; left:270px;">
<b>Группы и проекты.</b>
Создавайте собственные публичные и частные группы по вашим интересам, создавайте<br>проекты из ваших идей и формируйте из них реальные проекты.
</div>
<a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="position:relative; top:-10px; left:271px; padding:10px;">Зарегистрироваться и создать группу или проект</a>
</center>
</p>
</div>

<div style="position:relative; top:210px; left:270px;">
<img src="/assets-front/img/1f590.png" width="170">
</div>

<div style="position:relative; top:70px; left:522px;">
<b>Есть ли у вас что-то интересное?</b>
У нас есть много разного. Общение, группы, проекты, справочники и многое другое.
</div>
<a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="position:relative; top:100px; left:1320px; padding:10px;">Присоединиться</a>
</center>
</p>
</div>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<center><a href="{{url('/conception')}}">Концепция Спільной справи</a></center>

<br>
</div>





</body>
</html>