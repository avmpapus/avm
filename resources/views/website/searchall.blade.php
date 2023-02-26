<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as input;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

use App\UserProfile;

use DB;

use File;

use PDO;

use Storage;
?>


<?php
$user = User::where('id', Auth::id())->first();
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
?>

<?php
/*проверка устройства с которого пользователь зашел на сайт*/
$tablet_browser = 0;
$mobile_browser = 0;
 
if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $tablet_browser++;
}
 
if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
    $mobile_browser++;
}
 
if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
    $mobile_browser++;
}
 
$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
$mobile_agents = array(
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
    'newt','noki','palm','pana','pant','phil','play','port','prox',
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
    'wapr','webc','winw','winw','xda ','xda-');
 
if (in_array($mobile_ua,$mobile_agents)) {
    $mobile_browser++;
}
 
if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
    $mobile_browser++;
    //Check for tablets on opera mini alternative headers
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}
  
 
?>


<!DOCTYPE html>
<html>
 <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title><?php echo $searchString=htmlspecialchars($_GET['searchString']);?> - Поиск в Go3</title>
<link rel="shortcut icon" href="{{asset('/images/go3_.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/assets-front/css/welcome.css')}}">
	{{---<script type="text/javascript" src="/assets-front/js/synonyms.js"></script>---}}
{{--<script src='https://code.jquery.com/jquery-latest.js'></script>--}}

<!-------------автозаполнение строки ввода запроса--------------->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  {{---<script src="https://code.jquery.com/jquery-1.12.4.js"></script>---}}
  <script src="/assets-front/js/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  {{-------пока список подсказок не нужен, я изменил конфигурацию поиска, нужно заполнить базу данных-------}}
  {{---<script src="/assets-front/js/autocomplete.js"></script>---}}
	  {{---
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  ---}}
  <script src="/public/assets-front/js/autocomplete.js"></script>
  {{---<script src="/public/assets-front/js/autocomplete_auth.js"></script>---}}
  {{--- <script src="/assets-front/js/jquery-1.12.4.js"></script>--}}
<!----<script src="/assets-front/js/universology.js"></script>--->

<script src="/assets-front/js/myprojects.js"></script>
<script type="text/javascript" src="/public/assets-front/js/jquery.mark.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var find_property = $('[name="searchString"]').val();
  //  find_property = find_property.replace(/и|с/gi);
  //  find_property = find_property.replace(/на|не|во|в|и|от|как|с|еще|за/gi);
   find_property = find_property.replace(/\s[^\d](?=\s)/gi, "");
	//find_property.regex = /[0-9]/gi;
	//find_property = find_property.replace(/[0-9]/gi);
  
    $('#print_found').mark(find_property, 
	{
		separateWordSearch: true, wordBoundary: true
		});
    $('#print_found2').mark(find_property, 
	{
		separateWordSearch: true, wordBoundary: true
		});
  });

/*
    $(document).ready(function() { 
    var find_property = $('[name="searchString"]').val();
    $('#print_found').mark(find_property, 
	{
		separateWordSearch: true,
		wordBoundary: true
		});
    $('#print_found2').mark(find_property, 
	{
		separateWordSearch: true,
		wordBoundary: true
		});
});
*/
</script>



<!------------------------------>
<?php
if (!$mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('/assets-front/css/auth_modal.css')}}">
<link rel="stylesheet" href="{{asset('/assets-front/css/searchall.css')}}">
<?php
}
?>
<?php
if ($mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('/assets-front/css/auth_modal_mob.css')}}">
<link rel="stylesheet" href="{{asset('/assets-front/css/searchall_mob.css')}}">
<?php
}
?>

<style>
#footer {
    position: fixed; /* Фиксированное положение */
    left: 0; bottom: 0; /* Левый нижний угол */
    padding: 10px; /* Поля вокруг текста */
    background: #39b54a; /* Цвет фона */
    color: #fff; /* Цвет текста */
    width: 100%; /* Ширина слоя */
   }

  .svetlyi 
  { 
  background-color: #ccc; 
  width: 100%; 
  position:fixed; 
  top:733px;
  }
  
  
a.button8 {
  font-weight: 700;
  color: white;
  text-decoration: none;
  padding: .8em 1em calc(.8em + 3px);
  border-radius: 3px;
  background: gray;
  box-shadow: 0 -3px rgb(53,167,110) inset;
  transition: 0.2s;
} 
a.button8:hover { background: rgb(53, 167, 110); }
a.button8:active {
  background: gray;
  box-shadow: gray;
}
.wrap {
/*white-space: nowrap; /* Отменяем перенос текста */
    overflow: hidden; /* Обрезаем содержимое */
    /*padding: 5px; /* Поля */
    text-overflow: ellipsis; /* Многоточие */
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
</style>
 </head>
 <body>

		

  
 
 
  <header>
  <img src="/public/images/line2.png" width="100%" height="44px" class="header">
   <div class="header">
   @if (Auth::id())




<div class="message">
{{---
<img src="/assets-front/img/mess2.png" width="30" id="sub_toggle">

<a href="/profile"><font color="white">Мой профиль</font></a>
---}}								 
<?php
/*
$str = Auth::user()->name;
   $str =  ucwords($str);
   echo $str;
   */
?>

						<?php
                      if($user_profile['photo']){
                      ?>
                                    <a href="/profile"><img src="/{{$user_profile->photo}}" width="30" style="border-radius:50px;"></a>
                        <?php
                        }
                        ?>
                            <?php
                      if(!$user_profile['photo']){
                      ?>
                                    <a href="/profile"><img src="/assets-front/img/no-avatar.jpg" width="30" style="border-radius:50px;"></a>
                        <?php
                        }
                        ?>
                     

                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
                                              

                                
                                @endif		


@if(!$mobile_browser > 0)
@if (!Auth::id())
<div style="position:relative; left:1px; top:10px;">
<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchString=htmlspecialchars($_GET['searchString']);?>" style="width:400px;">
  
  <button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#openModal"><font color="white">Войти/Добавить сайт</font></a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reg"><font color="white">Зарегистрироваться</font></a> 
</form>
</div>
@endif
@endif

   @if(!$mobile_browser > 0)
@if (Auth::id())
   <div style="position:relative; left:-605px; top:-29px;">
<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  <input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchString=htmlspecialchars($_GET['searchString']);?>" style="width:400px;">&nbsp;<button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
</form>


<span id="id"></span>
    
{{-----если запрос больше нужной длины, то выводится сообщение-----}}
<script>
      function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(0 + len);
		  if (val.value.length == 20) {
		  document.getElementById("charNum1").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='blue'>Запроса такой длины достаточно для точного поиска!</font>";
		  }
		  if (val.value.length > 30) {
		  document.getElementById("charNum1").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>Ваш запрос слишком длинный для точного поиска!</font>";
		  }
		  if (val.value.length < 20) {
			  document.getElementById("charNum1").innerHTML = "";
		  }
        }
      };
</script>
{{----если запрос больше нужной длины, то выводится сообщение-----}}
</div>
@endif
@endif

{{-----------------------}}

@if($mobile_browser > 0)
@if (!Auth::id())
<div style="position:relative; left:-8px; top:10px;">
<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchString=htmlspecialchars($_GET['searchString']);?>" style="width:312px;">
  
  <button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
</form>
</div>
@endif
@endif

   @if($mobile_browser > 0)
@if (Auth::id())
   <div style="position:relative; left:10px; top:-10px;">
<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" onchange="verifySynonyms(this)" value="<?php echo $searchString=htmlspecialchars($_GET['searchString']);?>" style="width:140%;">
  <div style="position:relative; left:300px; top:-24px;">
  <button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
  </div>
</form>
</div>
@endif
@endif

<div id="sub_modal">
Уведомления
<hr>
<?php
/*
$host='localhost';
$dbname='gbua_x_otvet';
$dbUsername='root';
$dbPassword='root';

try {
    $dbcon = new PDO('mysql:host=mysql316.1gb.ua;dbname=gbua_x_go3', $dbUsername, $dbPassword);
    $data = $dbcon->prepare('SELECT * FROM comments WHERE user_id="'.Auth::id().'" limit 10');
    $data->execute(array('user_id' => Auth::id()));
 
    $result = $data->fetchAll();
 
    if (count($result)) {

        foreach($result as $row) {

			echo '<a href="/post/'.$row['id'].'">'.$row['title'].'</a><br><br>';
        }
    } else {
        echo "Нет записей для вывода";
    }
 
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
*/
?>
</div>
</div>

		<script>
$("#sub_toggle").click(function() {
  $('#sub_modal').slideToggle();
});
</script>

   
  </header>

     </div>

   <br><br><br>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!------Здесь пользователь вводит запрос----->

{{---
@if(!auth::id())
<a href="#openModal" class="button8">Войти</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reg" class="button8">Зарегистрироваться</a> 
<br><br><br>
@endif
--}}




{{---здесь был инпут поиска----}}
	{{--------если запрос больше нужной длины, то выводится сообщение------}}
    <div id="charNum1"></div>
	{{--------если запрос больше нужной длины, то выводится сообщение------}}


@foreach ($posts as $post)   

	    @endforeach 
 
	
@include('check_lat')

@if(preg_match('#[а-яё]+#i',$searchString))
@include('grammatic')


   @if(!$mobile_browser > 0)
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@include('spelling')
   <br>
   @endif
      @if($mobile_browser > 0)
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@include('spellingmob')
   <br>
   @endif

@endif

<?php
/*
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Может Вы имели ввиду <b><a href="http://go3.com.ua/public/search?_token=72x4ZFfJdwuRaCsO4dVm0sJ4Ut2tcEaO8GdXWHGs&searchString='.translit($searchString).'">'.translit($searchString).'</a></b>?';
*/
?>

<div id="myproject_hint"></div>
<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label id="myprojects" onmouseenter="myproject_hint()" onmouseleaver="myproject_hint()">Мои проекты</label>&nbsp;&nbsp;|&nbsp;&nbsp;Искать на
  <?
  echo"<a href='https://www.google.com.ua/maps/search/".$_GET['searchString']."/@51.51864,31.3137312,14z/data=!3m1!4b1' target='_blank'>Карте</a>";
  echo"
  <a href='https://www.google.com/search?q=".$_GET['searchString']."&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjO1sLvnZPiAhXv-ioKHfc6BxIQ_AUIDigB&biw=1680&bih=909'' target='_blank'>Фото</a>/
<a href='https://www.google.com/search?q=".$_GET['searchString']."&tbm=vid&source=lnms&sa=X&ved=0ahUKEwjp9o_ynZPiAhVS0aYKHf5hBC8Q_AUIDCgD&biw=1680&bih=909&dpr=1'' target='_blank'>Видео</a>
<a href='https://www.youtube.com/results?search_query=".$_GET['searchString']."'' target='_blank'>в YouTube</a>
&nbsp;&nbsp;|&nbsp;&nbsp;
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=ru&tl=en&text=".$_GET['searchString']."' target='_blank'>Перевод</a>:
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=uk&tl=en&text=".$_GET['searchString']."' target='_blank'>укр->анг</a>
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=en&tl=ru&text=".$_GET['searchString']."' target='_blank'>анг->рус</a>
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=en&tl=uk&text=".$_GET['searchString']."' target='_blank'>анг->укр</a>
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=ru&tl=uk&text=".$_GET['searchString']."' target='_blank'>рус->укр</a>
<a href='https://translate.google.com.ua/#view=home&op=translate&sl=uk&tl=ru&text=".$_GET['searchString']."' target='_blank'>укр->рус</a>
  ";
  ?>
<div><img src="https://neaktor.com/support/wp-content/uploads/2016/07/Neaktor-ALL-projects-My-projects-Projects-with-updates-2-1156x788.png" id="image" style="display:none;" width="10%"></div>
           <br><br> 
            @if(!auth::id())				
                <!----Войдите или зарегистрируйтесь чтобы опубликовать вопрос--->





           
         
<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Закрыть" class="close">X</a>
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
                                        <input type="checkbox" checked="" name="remember"> Запомнить меня
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
                
          								 
                
			    @endif 
                
                
                
                {{---------вывод файла через jquery--------}}
											  
											  
											  
<!------											    
<script>
   $(document).ready(function(){
      $( "#result" ).load( "employ" );
   });
</script>
----->
<div>




<?php
       if(strpos($searchString,'венероло')!==false)
  {
  ?>
<div style='width:700px;solid #000;border: 1px solid #D8D8D8; padding:5px; border-radius:4px;' align='justify'><div style='background-color:red;width:201px;height:24px;solid #000;border: 1px solid #D8D8D8; border-radius:4px;'>&nbsp;<img src="{{asset('/assets-front/img/risk.png')}}" width="21">&nbsp;<font color="white">Оповещение о COVID-19</font></div>Если чувствуете себя плохо, оставайтесь дома. Если у вас повышенная температура, кашель и затруднение дыхания, обратитесь к врачу. Следуйте рекомендациям местных органов здравоохранения.</div>
  <?php
  }
  ?>
<!---
<style>
  mark, #print_found{
    /*background-color: #fff; /* Фон */
    /*font: 1em bold Times New Roman, cursive;/* Шрифт */
    color: black; /* Цвет текста */
  }
</style>
--->
<!---
<script type="text/javascript" src="/public/assets-front/js/jquery.mark.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() { /*Загрузка DOM дернева*/  
    var find_property = $('[name="searchString"]').val();//$('#find_res_of').text();  /*Переменая с присвоением поискового текста */
    $('#print_found').mark(find_property, {
        "accuracy": "exactly",

accuracy: "partially",
separateWordSearch: false,
ignoreJoiners: false,
ignorePunctuation: []
    });
    $('#print_found2').mark(find_property, {
        "accuracy": "exactly",

accuracy: "partially",
separateWordSearch: false,
ignoreJoiners: true,
ignorePunctuation: []
    });
  });
</script>
-->
<script type="text/javascript">
function toggleImage(){
  var div = document.getElementsByClassName('sidebar-follow-icon')[0];

  if (!div.style.display || div.style.display === 'block') div.style.display = 'none';
  else div.style.display = 'block';
}
</script>

{{-----
   @if(!$mobile_browser > 0)
   @include('rightpanel')
   @endif
---}}


<!---альт поиск---->

	<div class="for-large-screens">
	@foreach ($similar as $pos)
@endforeach
@if(!empty($pos))
<div style="background: #fff;
    position:absolute;
	padding:10px;
	color:black;
	width:800px;
    left: 845px;
	top:87px;
    border-radius:4px;
	border: 1px double #D8D8D8;">

	<div style="margin:0px;">
Похожее содержание по запросу <b>{{$searchString}}</b>
</div>
	<br><br>
	<div id="print_found2">

@foreach ($similar as $pos)
	<hr>
@if($pos->url!='Нет адреса')
<a href='{{$tit = $pos->url}}' target='_blank'>
		  {{mb_strimwidth($pos->title, 0, 70, " ...")}}
		  </a><font color="white">{{$des = $pos->id }}</font>

		  @endif
  @if($pos->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$pos->title}}'>
  {{mb_strimwidth($pos->title, 0, 70, " ...")}}
  </a><font color="white">{{$des = $pos->id }}</font>
  @endif
  @if($pos->url!='Нет адреса')
  <a href='{{$pos->url}}' target='_blank' ></a>
  @endif
  <br>
  {{mb_strimwidth($pos->email, 0, 90, " ...")}}

@endforeach
	</div>
<br><br><br>
</div>

@endif
	</div>
<!-------->	
	
   @foreach ($posts as $post)
@endforeach


    @if(!empty($post))
   <?php
$line_text=$searchString;
     $line = explode(" ", $line_text);
     array_pop($line);
     $line_text = implode(" ", $line);



	 if($line_text){

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-warning'></i>&nbsp;Чем короче запрос, тем точнее результат<br><br>";
	 }
?> 
   @endif


	@if(empty($post))
		@if($searchString!=='porno')
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div style="position:relative; left:20px; width:700px;">Ничего не найдено по вашему запросу. Если у вас есть вопросы или предложения по улучшению поисковой сети, пишите в поле ввода запроса, оно является средством общения сети с ее пользователями. Пишите туда свой вопрос или предложение, а также ел. почту, по которой с вами можно связаться.</div>
		<br><br>
		<?php
$line_text=$searchString;
     $line = explode(" ", $line_text);
     array_pop($line);
     $line_text = implode(" ", $line);



	 if($line_text){

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-warning'></i>&nbsp;Чем короче запрос, тем точнее результат<br><br>";
	 }
?> 
		
		

	{{--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;По вашему запросу ничего не найдено. Команда Go3 работает над пополнением сети.--}}
	
	

	



	{{-----
<div style="margin:20px;">
<b>Похожие ссылки</b>
</div>


<div style="margin:20px;">
@foreach ($similar as $pos)
 @if($pos->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$pos->title}}'>
  @endif
  @if($pos->url!='Нет адреса')
  <a href='{{$pos->url}}' target='_blank' >
  @endif
    @if($pos->url=='Нет адреса')
 <i class="fa fa-book"></i>&nbsp;
  @endif
   @if($pos->url!='Нет адреса')
 <i class="fa fa-globe"></i>&nbsp;
  @endif
  {{mb_strimwidth($pos->title, 0, 70, " ...")}}</a>
  <br>
  {{mb_strimwidth($pos->email, 0, 90, " ...")}}
  <br>
  @if(!$pos->htmlpost=='-')
  {!!mb_strimwidth($myHtmlString=$pos->htmlpost, 0, 80, " ...")!!}
  @endif
<br>

@endforeach
  </div>
	--}}


    @endif

	   @endif





	@if(!empty($post))

	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.getElementById('target-id').style.display = 'block'; return false;">Показать краткое содержание результатов</a>&nbsp;/&nbsp;<a href="#" onclick="document.getElementById('target-id').style.display = 'none'; return false;">Скрыть краткое содержание результатов</a>
<div id="target-id" style="display: none; width:800px;">
	    @foreach ($posts as $post)   

   @if($post->url!='Нет адреса')
 
   <br>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='{{$tit = $post->url}}' target='_blank'>{{$tit = $post->title}}</a>
		  <br>
		  @endif
	    @endforeach    
	   </div>

	   @endif
	   

	   <br>

<?
$previous = "javascript:history.go(-1)"; if(isset($_SERVER['HTTP_REFERER'])) { $previous = $_SERVER['HTTP_REFERER']; }
?>
   <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= $previous ?>">Назад к предыдущему запросу</a>
   
   
   
   @include('ArtificialIntelligenceZoryana')
   <br>

   
   
   @if(auth::id())
						 
			

                     	<?php
if (!$mobile_browser > 0) {
	?>
                                        <form id="logout-form" action="{{ url('/logout') }}"
                                          method="POST"style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
<form role="form" id="form-post-sk" action="employee"
                                            method='get' enctype='multipart/form-data'>
											
											

                {{ csrf_field() }}

					{{----
                        <input type="text" id="content_post" name="tem" 
                        onclick="return location.href = '/employee'" placeholder="Нажмите сюда и на следующей странице можете ввести вопрос или создать пост"> 
					---}}

            </form>
            
            
            <?php
}
            ?>
            
                                 	<?php
if ($mobile_browser > 0) {
	?>
            
            
            <form id="logout-form" action="{{ url('/logout') }}"
                                          method="POST"style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
<form role="form" id="form-post-sk" action="theme"
                                            method='get' enctype='multipart/form-data'>

                {{ csrf_field() }}


                      <input type="text" id="content_post" class="form-control" name="tem" style="width:83%">  

                
                    <button type="submit">
                       
                 
                        Сохранить
                        

                    </button>
        

            </form>
            
            <?php
            }
            ?>
            
            
            
            @endif
   

  @if($searchString=='универсол')
    @include('universology')
  @endif

   
   @if($mobile_browser > 0)
	   @include('topcontentmob')
	   @endif
	   
	   
       @if(!$mobile_browser > 0)
	   @include('topcontent')
	   @endif
   
   
   @include('similar_topics')



     <div id="print_found">
   @foreach ($posts as $post)


	
<?php
if (!$mobile_browser > 0) {
	?>
  <div class='block1'>
  <?php
}
	?>
	<?php
if ($mobile_browser > 0) {
	?>
  <div style='
   background: #fff;
    margin:10px;
	padding:10px;
	color:black;
	width:95%;
    text-align: left;
    border-radius:4px;
  '>
  
  <?php
}

	?>

  <b>
  @if($post->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $post->title}}'>
  @endif
  @if($post->url!='Нет адреса')
  <a href='{{$tit = $post->url}}' target='_blank'>
  @endif
    @if($post->url=='Нет адреса')
 <i class="fa fa-book"></i>&nbsp;
  @endif
   @if($post->url!='Нет адреса')
 <i class="fa fa-globe"></i>&nbsp;
  @endif
  {{$tit = $post->title}}</a></b>	  

	  <div class='wrap_email'>

	  </div>
	  	  <div class='wrap' id="error2">
		  @if($post->url!='Нет адреса')
		  <a href='{{$tit = $post->url}}' target='_blank'>{{mb_strimwidth($tit = $post->url, 0, 77, " ...")}}</a>
			  {{---<a href='{{$tit = $post->url}}' target='_blank'>{{$tit = $post->url}}</a>---}}
	      @endif
		  @if($post->image)
			  <br>
		  @if(File::exists('/public/assets-front/img/post/{{$tit = $post->image}}'))
		  <a href='{{$tit = $post->url}}' target='_blank'><img src="/public/assets-front/img/post/{{$tit = $post->image}}" width="200"></a>
	      @endif
		  @endif
		  @if(!$post->image)
		  @endif
		  </div>
          @if($post->email!=null)


          {{mb_strimwidth($post->email, 0, 1000, " ...")}}

			  {{---{{$post->email}}--}}
		  <br>
		  
          @endif
		  
		  @if($post->htmlpost!='-')
          {!!$myHtmlString=$post->htmlpost!!}
	      <br>
		  @endif  
		  @if($post->htmlpost=='-')
			  <font color="white">{{$post->htmlpost}}</font>
		  <br>
		  @endif  
		  @if($post->email==null)
          @endif
          
		  
		  @if(strpos($post->htmlpost,'font color="gray"')!==false)
					
		  @endif

		  
		  @if(strpos($post->url,'http://go3.com.ua/public/searchuni')!==false)
			<font color="gray">
		Данный пункт относится к разделу Go3 - Универсология<br>Искать также в разделе Универсология:<br> <a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=капсид">КаПсиД</a>&nbsp;<a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=универсология">Универсология</a>
		&nbsp;<a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=Метод+КаПСиД+в+психотерапии">Метод КаПСиД в психотерапии</a>
		&nbsp;<a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=дух+новой+эпохи">дух новой эпохи</a>
		<a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=Путь+Души">Путь Души</a>
		</font>
		<br>
		  @endif
		  
		  <font color="gray">
	  Вывести информацию по категории:
	  <a href='/category/{{$tit = $post->post}}'>{{$des = $post->post }}</a>
	  </font>
	  <br>
	  <font color="gray">Поиск по словам:
	  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $post->post}}'>{{$des = $post->post }}</a>
	  </font>
	  <br>
	  <a href="/post/{{$tit = $post->id}}">Посмотреть страницу</a> <font color="white">{{$des = $post->id }}</font>
      
      
                @if(strpos($post->email,' на Украине ')!==false)
					<br><br>
			  &nbsp;<i class="fa fa-warning"></i>&nbsp;<font color="grey"><i><a href="/predlog_na_ili_v_ukraine" target="_blank">Предлог "на" по отношению к Украине не является правильным</i></a>
		  @endif
		  
    </div>



	  
  <?php
if ($mobile_browser > 0) {
	?>
<br>
<?php
}
	?>



	 
@endforeach  

  <?php
if (!$mobile_browser > 0) {
	?>
<br><br><br><br>
<?php
}
	?>







	
<?
/*
$myvalue = $post->spelling;;
$arr = explode(' ',trim($myvalue));
echo $arr[1];




preg_match('/^([^ ]+ +[^ ]+) +(.*)$/', $string);
if($line_text==preg_match('/^([^ ]+ +[^ ]+) +(.*)$/', $string))
{
	echo $line_text;
}
if($line_text!=preg_match('/^([^ ]+ +[^ ]+) +(.*)$/', $string))
{
	echo $string;
}
*/
?>

  </div>


<?php
/*отключен, чтобы не записывал в удаленную базу данных*/
/*
if(gethostbyname($_SERVER['REMOTE_ADDR'])!='37.115.148.230'){
$hosts=gethostbyname($_SERVER['REMOTE_ADDR']);
$date=date('Y-m-d H:i:s');
if(!isset($_SERVER['HTTP_REFERER'])){
$from_user=$_SERVER['HTTP_REFERER'];
}
if(isset($_SERVER['HTTP_REFERER'])){
$from_user=$_SERVER['REMOTE_ADDR'];
}
$hosts=gethostbyname($_SERVER['REMOTE_ADDR']);
DB::insert('insert into query (date,hosts,qsearch,from_user) values (?,?,?,?)', [$date,$hosts,$searchString,$from_user]);
}
*/
   ?>

  {{---
  <div class="svetlyi"><a href="/about">Концепция Go3</a>
  --}}
  </div>
  <br>
  	      @if(!empty($post))


   <?php
   
$line_text=$searchString;
     $line = explode(" ", $line_text);
     array_pop($line);
     $line_text = implode(" ", $line);
	 
	 if(preg_match('#[а-яё]+#i',$searchString))
{
	 if(!preg_match("/[0-9]/",$searchString) ){

	 if((strpos($searchString,' в')!==false)||(strpos($searchString,' с')!==false)
	   ||(strpos($searchString,' это')!==false)||(strpos($searchString,' под')!==false)
	   ||(strpos($searchString,' над')!==false))
  {

	 if($line_text){

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Если результат не оправдал ваши ожидания, предлагаем вам<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='http://go3.com.ua/public/search?_token=h7WrBlDMfVkzV7Trzl4rLYLowUl7PncxvxVCvTtG&searchString=$line_text'>$line_text</a>";
	 }
	 

	 
	 if(substr(strstr($searchString," "), 1)){
	 echo ' или <a href="http://go3.com.ua/public/search?_token=h7WrBlDMfVkzV7Trzl4rLYLowUl7PncxvxVCvTtG&searchString='.substr(strstr($searchString," "), 1).'">'.substr(strstr($searchString," "), 1).'</a>';
	 }
	 }
	 }
	 if(preg_match("/[0-9]/",$searchString) ){
	 }
}
?>

@endif
@if($mobile_browser > 0)
@foreach ($similar as $pos)
@endforeach

@if(empty($pos))
<br>
<div style="margin:20px;">
<b>Похожие ссылки</b>
</div>
@foreach ($similar as $pos)
<div style="margin:20px;">
  @if($pos->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $pos->title}}'>
  @endif
  @if($pos->url!='Нет адреса')
  <a href='{{$tit = $pos->url}}' target='_blank' >
  @endif
    @if($pos->url=='Нет адреса')
 <i class="fa fa-book"></i>&nbsp;
  @endif
   @if($pos->url!='Нет адреса')
 <i class="fa fa-globe"></i>&nbsp;
  @endif
  {{mb_strimwidth($pos->title, 0, 70, " ...")}}</a>
  </div>
@endforeach
@endif
@endif




<!---альтер тпоиск если пустой результат--->
<div class="for-small-screens">
    @if(!$mobile_browser > 0)
@foreach ($similar as $pos)
@endforeach
   @if(!empty($pos))

<br><br>

	<div id="print_found2">

<div style='
   background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:44.30%;
    text-align: left;
    border-radius:4px;
  '>

  <!----
  <div style="background: #fff;
    position:absolute;
	padding:10px;
	color:black;
	width:800px;
    left: 845px;
	top:87px;
    border-radius:4px;
	border: 1px double #D8D8D8;">
  --->
  
  Похожее содержание по запросу <b>{{$searchString}}</b>

@foreach ($similar as $pos)
	<hr>
@if($pos->url!='Нет адреса')
<a href='{{$tit = $pos->url}}' target='_blank'>
		  {{mb_strimwidth($pos->title, 0, 70, " ...")}}
		  </a><font color="white">{{$des = $pos->id }}</font>

		  @endif
  @if($pos->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$pos->title}}'>
  {{mb_strimwidth($pos->title, 0, 70, " ...")}}
  </a><font color="white">{{$des = $pos->id }}</font>
  @endif
  @if($pos->url!='Нет адреса')
  <a href='{{$pos->url}}' target='_blank' ></a>
  @endif
  <br>
  {{mb_strimwidth($pos->email, 0, 90, " ...")}}

@endforeach


</div>
</div>
<br><br><br>
@endif
@endif
   </div>
   
   <!---->
  
  
  <div id="footer">
   &nbsp;&nbsp;<a href="rules">Условия использования</a>
  </div>
  




 </body>
</html>





	   