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
<script src="public/assets-front/js/autocomplete_employee.js"></script>


<style type='text/css'>
div#block1 {
	width: 95%;
	max-width: 800px;
	bottom: 75px;
	margin: 200px auto 0;
	padding: 20px;
	background-color: #ffffff;
	display: block;
	border: 1px solid #000000;
}
div#buttons {
	margin: 20px 0 10px 0;
	text-align: center;
}
div#resultbut {
	width: 150px;
	height: 25px;
	padding: 5px 10px;
	display: inline-block;
	border: 1px solid #000000;
}
div#resultbut:hover {
	cursor: pointer;
}
div#result1 {
	display: none;
	margin: 15px 0 0 0;
}
</style>
<script type='text/javascript'>
function showRes(result_id) {
	var res = document.getElementById(result_id);
	if (res.style.display == "block") { 
		res.style.display = "none";
	} else {
		res.style.display = "block";
	};
};
</script>



<!--------предпросморт фото--------->
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $('#img').change(function () {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log('ошибка, не изображение');
            }
        } else {
            console.log('хьюстон у нас проблема');
        }
    });
 
    $('#reset-img-preview').click(function() {
        $('#img').val('');
        $('#img-preview').attr('src', 'default-preview.jpg');
    });
 
    $('#form').bind('reset', function () {
        $('#img-preview').attr('src', 'default-preview.jpg');
    });
</script>


<style>
#img-preview{
    width: 300px;
    height: 100px;
}
</style>

<!--------предпросморт фото--------->
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

<style>
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
</style>



<style>


/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1;
  background: #f1f1f1;
}

input[type=file] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
	</style>

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
</div>
		<script>
$("#sub_toggle").click(function() {
  $('#sub_modal').slideToggle();
});
</script>

   
  </header>
 @if(auth::id())
  {{-----<a href="theme">Добавить вопрос без фото</a>----}}
  
  {{---------{{route('addimage')}}---------}}
  <center>
  <div class="containet">

<form id="form" action="{{action('LikesController@store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <input type="text" name="user_id" class="form-control" placeholder="Email" value="{{auth::id()}}">

    <input type="text" name="post_id" class="form-control" placeholder="Ваш логин" value="{{$user->id}}">
    </div>

    <input type="text" name="name" class="form-control" placeholder="Название сайта или поста" autofocus>
  </div>


    <textarea name="like" class="form-group"  placeholder="Описание" cols="109" rows="5" style="display: inline-block;
  background: #f1f1f1; border-radius:2%; border: 1px solid #BDBDBD;"></textarea>

    <div class="form-group">

    <input type="text" name="url" class="form-control"  placeholder="Адрес сайта (если вы пишете пост, то адрес сайта не нужен)">
  </div>
  <div class="form-group">


 
	@if($user -> post!='Нет категории')
    <input type="text" name="post" id="tags" class="form-control"  placeholder="Категория темы - начните вводить и выплывит подсказка" onclick="document.getElementById('tags').value = ''" value="Нет категории">
  </div>
    @endif
    	@if($user -> post=='Нет категории')
    <input type="text" name="post" id="tags" class="form-control"  placeholder="Категория темы - начните вводить и выплывит подсказка" onclick="document.getElementById('tags').value = ''">
  </div>
    @endif


  
			<div>
				<input type="file" id="img" name="image"/>
			</div>
			<div>
				<img id="img-preview" src="public/assets-front/img/upload_photo.png" />
				<br />
				<a href="#" id="reset-img-preview">удалить изображения</a>
			</div>
			<div>
				<input type="reset" value="Отмена"/>
				
			</div>


		<style>
		#img-preview{
			width: 300px;
			height: 100px;
		}
		</style>
		
		<script>
			$('#img').change(function() {
				var input = $(this)[0];
				if (input.files && input.files[0]) {
					if (input.files[0].type.match('image.*')) {
						var reader = new FileReader();
						reader.onload = function(e) {
							$('#img-preview').attr('src', e.target.result);
						}
						reader.readAsDataURL(input.files[0]);
					} else {
						console.log('ошибка, не изображение');
					}
				} else {
					console.log('хьюстон у нас проблема');
				}
			});
			
			$('#reset-img-preview').click(function() {
				$('#img').val('');
				$('#img-preview').attr('src', 'default-preview.jpg');
			});
			
			$('#form').bind('reset', function() {
				$('#img-preview').attr('src', 'default-preview.jpg');
			});
			
		</script>
  
  

    <div id="result1">
		<h2>Материал добавлен!</h2>
	</div>

  
  <button type="submit" name="submit" class="registerbtn" onclick="showRes('result1')" id="resultbut">Submit</button>
</form>
</center>
</div>

@endif


   <br><br><br>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!------Здесь пользователь вводит запрос----->
<center>
<br><br>

 </body>
</html>