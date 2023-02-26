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
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('public/assets-front/css/welcome.css')}}">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>{{---------вывод файла через jquery--------}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="public/assets-front/js/synonyms.js"></script>
<!-------------автозаполнение строки ввода запроса--------------->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="public/assets-front/js/autocomplete.js"></script>
<!------------------------------>

<?php
if (!$mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('public/assets-front/css/auth_modal.css')}}">
<link rel="stylesheet" href="{{asset('public/assets-front/css/searchall.css')}}">
<?php
}
?>
<?php
if ($mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('public/assets-front/css/auth_modal_mob.css')}}">
<?php
}
?>


 </head>
 <body>
<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
		


 
 
  <header>
  <img src="public/images/line2.png" width="100%" height="40px" class="header">
   <div class="header">
   @if (Auth::id())




<div class="message">
<img src="/public/assets-front/img/mess2.png" width="30" id="sub_toggle">
<a href="profile"><font color="white">Мой профиль</font></a>
								 <?php
$str = Auth::user()->name;
   $str =  ucwords($str);
   echo $str;
?>

						<?php
                      if($user_profile['photo']){
                      ?>
                                    <img src="public/{{$user_profile->photo}}" width="30" style="border-radius:50px;">
                        <?php
                        }
                        ?>
                            <?php
                      if(!$user_profile['photo']){
                      ?>
                                    <img src="public/assets-front/img/no-avatar.jpg" width="30" style="border-radius:50px;">
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

$host='mysql317.1gb.ua';
$dbname='gbua_x_otvet';
$dbUsername='gbua_x_otvet';
$dbPassword='ec67228eyui';


try {
    $dbcon = new PDO('mysql:host=mysql317.1gb.ua;dbname=gbua_x_otvet', $dbUsername, $dbPassword);
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
   <div class="header">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!------Здесь пользователь вводит запрос----->
<form class="example" name="search" action="{{action('SearchController@searchall')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;<input type="text" placeholder="Ваш вопрос..." name="searchString" id="tags" size="40" onchange="verifyIt(this); verifyCyrillic(this); verifySynonyms(this);">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>



@if(auth::id())
						 
<center>				

                         Вы в системе
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


                        <input type="text" id="content_post" class="form-control" name="tem" style="width:40%" 
                        onclick="return location.href = 'employee'" placeholder="Нажмите сюда и на следующей странице можете ввести вопрос"> 


        

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

            <br><br>
            <a href="#openModal">Войти</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="reg">Зарегистрироваться</a>



            
         
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
											  
											  
											  
											    
                                            <script>
   $(document).ready(function(){
      $( "#result" ).load( "employ" );
   });
</script>
<div>
<div id="result"></div>
   </div>
 </body>
</html>