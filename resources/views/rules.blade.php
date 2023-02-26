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
  <title><?php echo 'Концепция Go3';?></title>
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
   @if (Auth::id())




<div class="message">

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
</center>

<div style="margin-left:20px;">
<p align="justify">
<h3>Мы знаем, что читать Условия использования не очень интересно.<br>Однако важно, чтобы Вы понимали правила поведения при использовании<br>
наших сервисов, а также права и обязанности Go3.</h3>
</p>
<br><br>

<p align="justify">
Условия использования отражают бизнес-модель Go3, применимое законодательство, а также принципы нашей компании.<br>
Таким образом, эти Условия определяют Ваши взаимоотношения с компанией Go3 при использовании наших сервисов.<br>
Условия включают следующие разделы:
</p>

<br><br>
<ul>
<li>Что мы делаем для Вас. В этом разделе рассказано, как мы предоставляем и развиваем наши сервисы.</li>
<li>Содержание в сервисах Go3. Здесь рассказано о правах на интеллектуальную собственность в отношении контента,<br>опубликованного Вами,
другими пользователями или компанией Go3 в наших сервисах.</li>
</ul>
<br><br><br><br>
<h3>Поставщик услуг</h3>
Сервисы Go3 предоставляет компания Go3. Свою деятельность осуществляет на территории Украины.
<br><br>
<br><br>


<h3>Возрастные ограничения</h3>


Если Вы еще не достигли требуемого возраста для управления аккаунтом Go3, то можете использовать его только 
с разрешения родителя или законного представителя. Для этого родителю или законному представителю нужно прочитать 
эти условия вместе с Вами.
<br><br>
Если Вы являетесь родителем или законным представителем ребенка и позволяете ему использовать сервисы Go3, настоящие условия 
относятся к Вам и Вы несете ответственность за действия ребенка в наших сервисах.
<br><br>
<br><br>


<h3>Что мы делаем для Вас</h3>
Компания Go3 постоянно работает над улучшением поисковой сети, улучшая ее функции поиска искомой информации и внешний 
вид для удобства работы в сети Go3.
<br><br>
<br><br>

<h3>Ваше содержание</h3>
В этом сервисе вы можете быстро сделать свое содержание общедоступным, воспользовавшись формой размещения публикаций, так же,
вы можете опубликовать отзыв о размещенной информации.
<br><br>
<br><br>
</div>
 </body>
</html>