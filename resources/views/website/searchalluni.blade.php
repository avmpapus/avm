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
<script type="text/javascript" src="/assets-front/js/synonyms.js"></script>
<script src='https://code.jquery.com/jquery-latest.js'></script>
<!-------------автозаполнение строки ввода запроса--------------->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/assets-front/js/autocompleteuni.js"></script>
<!------------------------------>

<link rel="stylesheet" href="{{asset('/assets-front/css/auth_modal.css')}}">
<link rel="stylesheet" href="{{asset('/assets-front/css/searchall.css')}}">


<style>
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
</style>
 </head>
 <body>
<div class="menu">
		<a href="/"><font color="white">Главная</font></a>
		</div>
		


 
 
  <header>
  <img src="/public/images/line2.png" width="100%" height="44px" class="header">
   <div class="header">
   @if (Auth::id())




<div class="message">
<img src="/assets-front/img/mess2.png" width="30" id="sub_toggle">
<a href="/profile"><font color="white">Мой профиль</font></a>
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
$dbname='gbua_x_go3';
$dbUsername='root';
$dbPassword='root';

try {
    $dbcon = new PDO('mysql:host=localhost;dbname=gbua_x_go3', $dbUsername, $dbPassword);
    $data = $dbcon->prepare('SELECT * FROM comments WHERE user_id="'.Auth::id().'" limit 10');
    $data->execute(array('user_id' => Auth::id()));
 
    $result = $data->fetchAll();
 
    if (count($result)) {
             echo'Комментарии:<br>';
        foreach($result as $row) {

			echo '<a href="/post/'.$row['id'].'">'.$row['title'].'</a><br><br>';
        }
    } else {
        echo "Нет записей для вывода";
    }
 
} catch(PDOException $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
/****************/
/*
try {
    $dbcon = new PDO('mysql:host=localhost;dbname=gbua_x_go3', $dbUsername, $dbPassword);
    $data = $dbcon->prepare('SELECT * FROM employees where id  order by id desc limit 10');
    $data->execute(array('id' => $user->id));
 
    $result = $data->fetchAll();
 
    if (count($result)) {
             echo'Посты:<br>';
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


@if(!auth::id())
<a href="#openModal" class="button8">Войти</a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="reg" class="button8">Зарегистрироваться</a> 
<br><br><br>
@endif

<form class="example" name="search" action="{{action('SearchUniController@searchalluni')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchString" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchString=htmlspecialchars($_GET['searchString']);?>">
  <button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>
</form>


{{---
<script type="text/javascript">
document.write("<a href='/article/' target='_blank'>Это сообщение написано с помощью Java Script.</a>");
</script>
---}}
<br>







@if(auth::id())
						 
			
<br>
                     	
            
                              
            
            
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
				
											  

<div>


<script type="text/javascript" src="/public/assets-front/js/jquery.mark.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() { /*Загрузка DOM дернева*/  
    var find_property = $('[name="searchString"]').val();//$('#find_res_of').text();  /*Переменая с присвоением поискового текста */
    $('#print_found').mark(find_property, {
        "accuracy": "exactly"
    });
  });
</script>

    @foreach ($posts as $post)
@endforeach 
	@if(empty($post))
&nbsp;&nbsp;&nbsp;&nbsp;По вашему запросу ничего не найдено
	   @endif
	@if(!empty($post))

	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="document.getElementById('target-id').style.display = 'block'; return false;">Показать краткое содержание результатов</a>&nbsp;/&nbsp;<a href="#" onclick="document.getElementById('target-id').style.display = 'none'; return false;">Скрыть краткое содержание результатов</a>
<div id="target-id" style="display: none;">
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
  <div class='block2'>
  <?php
}
	?>
  <b>

  @if($post->url=='Нет адреса')
  <a href='/search?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $post->title}}'>
  @endif
  @if($post->url!='Нет адреса')
  <a href='{{$tit = $post->url}}' target='_blank' >
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
	  	  <div class='wrap'>
		  @if($post->url!='Нет адреса')
		  <a href='{{$tit = $post->url}}' target='_blank'>{{$tit = $post->url}}</a>
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
		  {{----
	  <font color="gray">Вывести информацию по категории:
	  <a href='/category/{{$tit = $post->post}}'>{{$des = $post->post }}</a>
	  </font>
	  <br>
	  <font color="gray">Поиск по словам:
	  <a href='/searchuni?_token=zgFXuIOVjq5LyDCGoKefe5wLXN4YzCBQ293B8ktZ&searchString={{$tit = $post->post}}'>{{$des = $post->post }}</a>
	  </font>
	  <br>
	  <a href="/post/{{$tit = $post->id}}">Посмотреть страницу</a>
		  ----}}
      
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
  </div> 


{{---@include('advertising_content')---}}
				
  </div>


	   
   
  <br><br><br>
  {{---
  <div class="svetlyi"><a href="/about">Концепция Go3</a>
  --}}
  </div>
 </body>
</html>