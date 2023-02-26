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
  
 



use App\User;

use App\UserProfile;

use App\PostProbe;


$user = User::where('id', Auth::id())->first();
    $user_profile = UserProfile::where('user_id')->first();
    //$posts = PostProbe::where('user_id', Auth::id())->first();
    //$posts = PostProbe::all();

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
</head>
<body>

<?php

if (!$mobile_browser > 0) {
	?>
  @foreach ($posts as $post)
  <div class='block1'>
  
  <a href="post/{{$des = $post->id}}">{{$post->title}}</a>
	  <br>
      <font color="gray">{{$post->id}},{{$post->user_id}}, {{$post->name}},  категория: {{$des = $post->category }}</font>
      </div>

      <br>
              
@endforeach   
<img src="" width="50">
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
      <font color="gray">Категория:  {{$des = $post->category }}</font>
      </div>
      <br>
@endforeach   
<?php
}
	?>






</body>
</html>




  
