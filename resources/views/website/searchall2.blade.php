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
<title>Ответы</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/public/assets-front/css/searchall.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets-front/css/menu_searchall.css')}}">
<script type="text/javascript" src="public/assets-front/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/assets-front/js/autocomplete_searchall.js"></script>
<script type="text/javascript" src="public/assets-front/js/synonyms.js"></script>
<script type="text/javascript" src="public/assets-front/js/verifyIts_searchall.js"></script>
<script src='https://code.jquery.com/jquery-latest.js'></script>
<style>
.wrap { 
 white-space: nowrap; /* Отменяем перенос текста */
    overflow: hidden; /* Обрезаем содержимое */
    background: #fff; /* Цвет фона */
    /*padding: 5px; /* Поля */
	text-overflow: ellipsis;
   }
   .wrap_email { 
    overflow: hidden;
    /*height: 80px;*/
    width: 700px;
    /*line-height: 25px;*/
	text-overflow: ellipsis;
   }
</style>
</head>
<body>




<img src="{{asset('public/images/line.png')}}" width="100%">
<?php
if (!$mobile_browser > 0) {
	?>
<div id="top_menu">
@if (Auth::id())
                                {{ Auth::user()->name }}
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/') }}"><font color="white">Главная</font></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
                                @endif
</div>
<?php
}
	?>
	<?php
if ($mobile_browser > 0) {
	?>
<div id="top_menu">
@if (Auth::id())
<br><br>
			   <font color="black">{{ Auth::user()->name }}</font>
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/') }}">Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}">Выйти</a>
                                @endif
</div>
<?php
}
	?>
	
	
	
		<?php
if (!$mobile_browser > 0) {
	?>
<form class="form-wrapper cf" action="{{action('SearchController@searchall')}}" style="margin:10px;max-width:300px">
{{ csrf_field() }}

<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" placeholder="Ваш вопрос...!" name="searchString" id="searchString" style="width:700px"  value="<?php echo $searchString = htmlspecialchars($_GET['searchString']);?>" onchange="verifyIts_searchall(this)">



</form>

<?php
}
?>


		<?php
if ($mobile_browser > 0) {
	?>
<form class="form-wrapper cf" action="{{action('SearchController@searchall')}}" style="margin:10px;max-width:300px">
{{ csrf_field() }}
  <input type="text" placeholder="Ваш вопрос..." name="searchString" style="width:335px">

</form>
<?php
}
?>



	
    <center>
<br><br>
    

</center>
{{---$searchString = htmlspecialchars($_GET['searchString']);---}}
      <h3>Ответы</h3>
<?php
if (!$mobile_browser > 0) {
	?>
  @foreach ($posts as $post)
  <div class='block1'>
  <b>{{$tit = $post->title}}</b>
  <br>
      {{----{{$des = $post->description }}----}}
	  <div class='wrap_email'>
	  {{$tit = $post->email}}
	  </div>
	  	  <div class='wrap'>
		  <a href='{{$tit = $post->url}}' target='_blank'>{{$tit = $post->url}}</a>
		  </div>
      <font color="gray">Категория: 
      <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $post->post}}' target='_blank'>{{$des = $post->post }}</a></font>
	  <br>
	  <a href="/post/{{$tit = $post->id}}">Посмотреть страницу</a>
      </div>
	  
      <br>
@endforeach   
<?php
}
	?>
	
	
	<?php
if ($mobile_browser > 0) {
	?>
  @foreach ($posts as $post)
  <div style='background: #F2F2F2;margin:10px;padding:10px;color:black;'>
  <b>{{$tit = $post->title}}</b><br>
      {{$des = $post->description }}
	  <br>
      <font color="gray">Категория: {{$des = $post->category }}</font>
      </div>
      <br>
@endforeach   
<?php
}
	?>







</body>
</html>




  
