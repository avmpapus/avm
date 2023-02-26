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
  <title>Поиск в Go3</title>
<link rel="shortcut icon" href="{{asset('/images/go3_.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/assets-front/css/welcome.css')}}">
<script type="text/javascript" src="/assets-front/js/synonyms.js"></script>
<script src='https://code.jquery.com/jquery-latest.js'></script>
<!-------------автозаполнение строки ввода запроса--------------->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/assets-front/js/autocomplete.js"></script>
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
<?php
}
?>

<style>
  .svetlyi 
  { 
  background-color: #ccc; 
  width: 100%; 
  position:fixed; 
  top:670px;
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
</style>
 </head>
 <body>
<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
		


 
 
  <header>
  <img src="/public/images/line2.png" width="100%" height="40px" class="header">
   <div class="header">
   @if (Auth::id())




<div class="message">
<img src="/assets-front/img/mess2.png" width="30" id="sub_toggle">
<a href="profile"><font color="white">Мой профиль</font></a>
								 <?php
$str = Auth::user()->name;
   $str =  ucwords($str);
   echo $str;
?>

						<?php
                      if($user_profile['photo']){
                      ?>
                                    <img src="/{{$user_profile->photo}}" width="30" style="border-radius:50px;">
                        <?php
                        }
                        ?>
                            <?php
                      if(!$user_profile['photo']){
                      ?>
                                    <img src="/assets-front/img/no-avatar.jpg" width="30" style="border-radius:50px;">
                        <?php
                        }
                        ?>
                     

                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
                                              

                                
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
<center>

@if(!auth::id())
<a href="#openModal" class="button8">Войти</a>
<!----
&nbsp;&nbsp;<a href="/employee" class="button8">Добавить сайт</a>
&nbsp;&nbsp;<a href="/addpost.php" class="button8">Добавить пост</a>
----->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reg" class="button8">Зарегистрироваться</a> 
<br><br><br>
@endif

<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" size="40" onchange="verifySynonyms(this)">
  <button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
</form>
<span id="id"></span>
<script>
const translate = document.querySelector('#tags')
const id = document.querySelector('#id')

const rusLower = 'абвгдеёжзийклмнопрстуфхцчшщъыьэюя'
const rusUpper = rusLower.toUpperCase()
const enLower = 'abcdefghijklmnopqrstuvwxyz'
const enUpper = enLower.toUpperCase()
const rus = rusLower + rusUpper
const en = enLower + enUpper

const getChar = (event) => String.fromCharCode(event.keyCode || event.charCode)

translate.addEventListener('keypress', function (e) {
	const char = getChar(e)
  if (rus.includes(char)) {
  	id.innerHTML = 'Вы вводите текст русскими буквами'
  } else if (en.includes(char)) {
  	id.innerHTML = 'Вы вводите текст английскими буквами'
  } else {
  	id.innerHTML = 'Вы вводите текст украинскими буквами'
  }
})
</script>



</center>




@if(auth::id())
						 
<center>				
<br><br>
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


                        <input type="text" id="content_post" name="tem" 
                        onclick="return location.href = '/employee'" placeholder="Нажмите сюда и на следующей странице можете ввести вопрос или создать пост"> 


        

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
    </center>
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


{{---
<script>
document.write("<br><br>");  

//определяем день недели
var now = new Date();
var dayNames = new Array("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота");

//определяем месяц
var now = new Date();
var textout;
var month = now.getMonth();
var date = now.getDate();
textout = date;

if (month==0) textout+=" января <a href='http://go3.com.ua/zodiak/kozerog.html'>(козерог - 22 декабря — 19 января)</a>";
if (month==1) textout+=" февраля <a href='http://go3.com.ua/zodiak/kozerog.html'>(водолей - 20 января — 18 февраля)</a>";
if (month==2) textout+=" марта <a href='http://go3.com.ua/zodiak/ribi.html'>(рыбы - 19 февраля — 20 марта)</a>";
if (month==3) textout+=" апреля <a href='http://go3.com.ua/zodiak/oven.html'>(овен - 21 марта — 19 апреля)</a>";
if (month==4) textout+=" мая <a href='http://go3.com.ua/zodiak/telez.html'>(телец - 20 апреля — 20 мая)</a>";
if (month==5) textout+=" июня <a href='http://go3.com.ua/zodiak/blizneci.html'>(близнецы - 21 мая — 20 июня)</a>";
if (month==6) textout+=" июля <a href='http://go3.com.ua/zodiak/rak.html'>(рак - 21 июня — 22 июля)</a>";
if (month==7) textout+=" августа <a href='http://go3.com.ua/zodiak/lev.html'>(лев - 23 июля — 22 августа)</a>";
if (month==8) textout+=" сентября <a href='http://go3.com.ua/zodiak/deva.html'>(дева - 23 августа — 22 сентября)</a>";
if (month==9) textout+=" октября <a href='http://go3.com.ua/zodiak/vesi.html'>(весы - 23 сентября — 22 октября)</a>";
if (month==10) textout+=" ноября <a href='http://go3.com.ua/zodiak/scorpion.html'>(скорпион - 23 октября — 21 ноября)</a>";
if (month==11) textout+=" декабря <a href='http://go3.com.ua/zodiak/strelec.html'>(стрелец - 22 ноября — 21 декабря)</a>, <a href='http://go3.com.ua/zodiak/zmeenosec.html'>(змееносец - 30 ноября — 17 декабря)</a>";

//выводим месяц и день недели
document.write ("<br><div id='gdata' style='padding-top: 4px;'> " + textout + ", " + dayNames[now.getDay()] + "</div>");


if(date=='10' || month==6){
	document.write ("<div style='width:700px;solid #000;border: 1px solid #D8D8D8; padding:5px; border-radius:4px;' align='justify'>Если чувствуете себя плохо, оставайтесь дома. Если у вас повышенная температура, кашель и затруднение дыхания, обратитесь к врачу. Следуйте рекомендациям местных органов здравоохранения.</div>");
}

if(date=='1' && month==4){
	document.write ("<br><div id='gdata' style='position:relative; top: 0px; left: 172px;'>Сегодня День труда</div>");
}
if(date=='9' && month==4){
	document.write ("<br><div id='gdata' style='position:relative; top: 0px; left: 172px;'>Сегодня День победы над нацизмом во Второй мировой войне</div>");
}
if(date=="22" && month==4){
	document.write ("<br><div id='gdata' style='position:relative; top: 0px; left: 172px;'>В Украине Сегодня<br>день чудотворца<br>Николая Угодника</div>");
}


if(date>"22" && date<"23" && month==4){
	document.write ("<br><div id='gdata' style='position:relative; top: 0px; left: 172px;'><img src='leto/leto.png' width='150'></div>");
}



if(date>"23" && date<"24" && month==4){
	document.write ("<br><div id='gdata' style='position:relative; top: 0px; left: 172px;'><a href=='http://go3.com.ua/search/?search=тополь&submit=OK'><img src='leto/topol.jpg' width='150'></a></div>");
}

if(date>"25" && date<"31" && month==4){
	document.write ("<br><div id='gdata'><a href='http://go3.com.ua/search/?search=калина&submit=OK'><img src='leto/cvetenie_kalini.JPG' width='150'></a></div>");
}

if(date=='24' && month==4){
	document.write ("<br><div id='gdata'><a href='http://go3.com.ua/search/?search=24+мая&submit=OK'><img src='leto/den_slavyanskoy_pismennosti.jpg' width='150'></a></div>");
}

if(date=='25' && month==4){
	document.write ("<br><div id='gdata'><a href='http://go3.com.ua/search/?search=собор+новомучеников&submit=OK'><img src='leto/sobor_novomuchenikov.jpg' width='150'></a></div>");
}
if(date=='1' && month==5){
	document.write ("<br><div id='gdata'>Сегодня День защиты детей</div>");
}

if(date=='28' && month==5){
	document.write ("<br><div id='gdata'>Сегодня День Конституции Украины</div>");
}
if(date=='24' && month==7){
	document.write ("<br><div id='gdata' >Сегодня День независимости Украины</div>");
}
if(date=='14' && month==9){
	document.write ("<br><div id='gdata' >Сегодня День защитника Украины</div>");
}
if(date=='25' && month==11){
	document.write ("<br><div id='gdata'>Сегодня Рождество Христово</div>");
}
if(date=='12' && month==4){
	document.write ("<br><div id='gdata' ><a href='http://go3.com.ua/search/?search=go3&submit=OK'><img src='leto/start_go3.png' width='150'></a></div>");
}
if(date=='10' && month==6){
	document.write ("<br>Если чувствуете себя плохо, оставайтесь дома. Если у вас повышенная температура, кашель и затруднение дыхания, обратитесь к врачу. Следуйте рекомендациям местных органов здравоохранения.");
}

   </script>   
---}}
<br>

<!---
<style>
  mark, #print_found{
    /*background-color: #fff; /* Фон */
    /*font: 1em bold Times New Roman, cursive;/* Шрифт */
    color: black; /* Цвет текста */
  }
</style>
--->
<script type="text/javascript" src="/public/assets-front/js/jquery.mark.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() { /*Загрузка DOM дернева*/  
    var find_property = $('[name="searchString"]').val();//$('#find_res_of').text();  /*Переменая с присвоением поискового текста */
    $('#print_found').mark(find_property, {
        "accuracy": "exactly"
    });
  });
</script>
<!---
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js" charset="UTF-8"></script>



   <script>
  $(document).ready(function(){//Загруза DOM дерева
    // Функция для проверки введеного текста на киллирцу
     function isCyrillic(str) {
          return /[а-я]/i.test(str);
        }
    $("#ResFind").hide();//Скрываем подскаски
    $("#ResFind").css('width', $("#print_found").width());//Ширина блока с подсказками такя же, как и ширина поля для ввода поискового з ширинойп5оля для ввода поиского запроса
    $("#print_found").keyup(function() {//Ввод поискового заброса 
      var dataFind = $(this).val().toLowerCase();//Переменая с значением ввода поискового запроса
      $("#ResFind").show();//Показ подсказок
      // Проверка ввода запроса
      // Если была введена киллирца или сначала киллирца и потом латиница
      if (isCyrillic(dataFind) || isCyrillic(dataFind) && !isCyrillic(dataFind)) {
        // Фильтрация данных для вывода подсказок
        $("#ResFind li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(dataFind) > - 1).addClass('item-suggestion');
        });
      } else if (!isCyrillic(dataFind)) { /*Если сначала была введена латиница*/
        // Массив для генерации с латиницы в киллирцу
        var map = {
              'q' : 'й', 'w' : 'ц', 'e' : 'у', 'r' : 'к', 't' : 'е', 'y' : 'н', 'u' : 'г', 'i' : 'ш', 'o' : 'щ', 'p' : 'з', '[' : 'х', ']' : 'ъ', 'a' : 'ф', 's' : 'ы', 'd' : 'в', 'f' : 'а', 'g' : 'п', 'h' : 'р', 'j' : 'о', 'k' : 'л', 'l' : 'д', ';' : 'ж', '\'' : 'э', 'z' : 'я', 'x' : 'ч', 'c' : 'с', 'v' : 'м', 'b' : 'и', 'n' : 'т', 'm' : 'ь', ',' : 'б', '.' : 'ю','Q' : 'Й', 'W' : 'Ц', 'E' : 'У', 'R' : 'К', 'T' : 'Е', 'Y' : 'Н', 'U' : 'Г', 'I' : 'Ш', 'O' : 'Щ', 'P' : 'З', '{' : 'Х', '}' : 'Ъ', 'A' : 'Ф', 'S' : 'Ы', 'D' : 'В', 'F' : 'А', 'G' : 'П', 'H' : 'Р', 'J' : 'О', 'K' : 'Л', 'L' : 'Д', ':' : 'Ж', '"' : 'Э', 'Z' : '?', 'X' : 'ч', 'C' : 'С', 'V' : 'М', 'B' : 'И', 'N' : 'Т', 'M' : 'Ь', '<' : 'Б', '>' : 'Ю',
           };
        var r = ''; /*Переменая с значением генерации*/
        // Генерация с латиницы в киллирцу
        for (var i = 0; i < dataFind.length; i++) {
          r += map[dataFind.charAt(i)] || dataFind.charAt(i);
        }
        $("#translator").show().html('<b>' + r + '</b>');/* Показ переменой с значением генерации в подсказке*/
        // Фильтрация данных для вывода подсказок
        $("#ResFind li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(r) > - 1);
        });
      }
      var junk = $('.item-suggestion:hidden'); /*Переменая с ненужными подсказка*/
      // Если пользователь ввел поисковый запрос, удаляем ненужные подсказки
      if (dataFind !== '') {
        junk.detach();
      }
      // При клике на подсказку её прячем и делаем её значение значением поискового поля 
      $("#ResFind li").click(function(event) {
        $(this).each(function() {
          if (dataFind !== '') {
             $("#print_found").val('');
             $("#print_found").val($(this).text());
             $("#ResFind").hide();
          }
        });
      });
      // Если поля для поиска пустое
      if (!dataFind) {
        $("#ResFind").hide();
        window.location.reload();
      }
    });
    // Управление подсказками с помощью стрелок
    $(document).bind("keydown",function (e) {
        var $prev, $next, $current = $("#ResFind .item-suggestion.activeItem"),
        list_item = $('#ResFind .item-suggestion'); /*Переменые для управление подсказками*/
        // Нажата клавиша вниз и нет активной подсказки
        if (e.which === 40 && !$current.length) {
            list_item.first().addClass("activeItem"); // Первую подсказку делаем активной
        }
        // Нажата клавиша вниз и есть активная подсказка. Делаем её не активной и активипруем следующу пподсказку
        if (e.which === 40){
            $("#print_found").blur();//Удаления фокуса с поля поиска
            $next = $current.next(".item-suggestion");
            if ($next.length) {
              $current.removeClass("activeItem");
              $next.addClass("activeItem");
            } else {
              list_item.first().addClass("activeItem");
              list_item.last().removeClass("activeItem");
            }
        } else if (e.which === 38) {// Нажата клавиша вверх и есть активная подсказка. Делаем её не активной и активипруем преведущую пподсказку
          $("#print_found").blur();//Удаления фокуса с поля поиска
            $prev = $current.prev(".item-suggestion");
            if ($prev.length) {
              $current.removeClass("activeItem");
              $prev.addClass("activeItem");
            } else {
              list_item.first().removeClass("activeItem");
              list_item.last().addClass("activeItem");
            }
        } else if (e.which === 13) { // Нажата клавиша ENTER и есть активная подсказка. Делаем её текст значением поискового поля
          $("#print_found").val('');
          $('#print_found').val($('.activeItem').text()+' ');
          $('#ResFind').hide();
        }
    });
    // Чистка поискового поля и скрываем подсказки
    $('#clearFindField').click(function(event) {
      $("#ResFind").hide();
      window.location.reload();        
    });
  });
  </script>
-->
   


<iframe src="/map/<?php echo $searchString;?>,+14000/@51.4957591,31.220499,12z/data=!3m1!4b1!4m5!3m4!1s0x46d5488971ee3597:0x2a2348d3e76038b5!8m2!3d51.4982!4d31.2893499" width="468" height="60" align="left">
</iframe>
<?php
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
   ?>
  <br><br><br>

  <div class="svetlyi"><a href="/about">Концепция</a><a href="<?php echo '/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString='.$searchString;?>">Карта</a></div>
 </body>
</html>