<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as input;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

use App\User;

use App\UserProfile;

use DB;

use PDO;
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
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="text/html; charset=windows-1251" />
    <meta name="description" content="Go3 - поисковая сеть, которая понимает ваши интересы" />
	<title>Go3</title>
	




	
	<link rel="shortcut icon" href="{{asset('public/images/go3_.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/assets-front/css/welcome_philo.css')}}">
  <script src="/public/assets-front/js/welcomephilo.js"></script>
<body>

<div id="toplayer">
  <img src="/public/images/line2.png" width="100%" height="44px" class="header">
  </div>
  

		<style>

</style>
		
		
      @if (Auth::id())   

	  <div class="header">

<div class="message">
	  {{--<img src="/public/assets-front/img/mess2.png" width="30" id="sub_toggle">--}}
<a href="profile"><font color="white">Мой профиль</font></a><div id='textlogo'> 
<h3 class='name'>
								 <?php
$str = Auth::user()->name;
   $str =  ucwords($str);
   echo $str;
?>

					
                     

                            &nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
                                              
	</h3>                            
                                @endif	

</div>
     </div>

</header>
<div>





		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/welcomebio"><img src="/public/images/go3_bible.jpg" width="100" style="position:relative;z-index:3;"></a><br>
		
		
		
		<div id="title"></div>
		<div id="menu"></div>
				<script>


</script>
		
		<!----<div style="position:relative; top:100px; left:100px;z-index:2;">dfgdfg</div>--->



<center>
<div style="position:relative;top:-150px; left:10px;">
<a href="/welcomebio/spider"><img src="/public/images/spider.png" width="200" id="sub_toggle"></a>
<img src="/public/images/muha.png" width="200" id="sub_toggle">
<img src="/public/images/komar.png" width="200" id="sub_toggle">
<img src="/public/images/obezyana.png" width="200" id="sub_toggle">
<img src="/public/images/dnk.png" width="200" id="sub_toggle">
</div>


<figure class="sign"><div style="background: #F5A9BC;">Душа</div>
<img src="https://images.wallpaperscraft.com/image/energy_clot_glow_light_shadow_46422_225x300.jpg" width="200" class="rightimg"><figcaption>Образ души, по книге<br>Л. А. Секлитова, ...</figcaption></figure>



<div id="text_rez"></div>

  <script>
var text_pr = '<p style="width:990px;" align="justify"><b style="font-size:20px;">Душа</b><br><br>Душа бессмертна, но человеческому телу не нужно <a href="">бессмертие</a>, оно не для этого создано, тело должно выполнять программу души, и для ее выполнения телу отведено определенное время, по истечению которого тело уходит обратно в землю, а душа получает то, что соответствует опыту, который человек наработал за всю <a href="">жизнь</a>.</p>';

var arr = ["душа", "души", "Душа"];


window.onload=function() {

jQuery.each(arr, function(ind, txt) {
    var re = new RegExp(txt,"g");
    text_pr = text_pr.replace(re, '<b>'+txt+'</b>');
});
  $('#text_rez').html(text_pr);

};
  </script>

</center>


   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



 </body>
</html>