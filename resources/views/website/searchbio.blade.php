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
  <title><?php echo $searchStringBio=htmlspecialchars($_GET['searchStringBio']);?> - Поиск в Go3 | Биология</title>
<link rel="shortcut icon" href="{{asset('/images/go3_.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/assets-front/css/welcome_bio.css')}}">


<!-------------автозаполнение строки ввода запроса--------------->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="/assets-front/js/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="/public/assets-front/js/autocomplete_bio.js"></script>



<script type="text/javascript" src="/public/assets-front/js/jquery.mark.min.js"></script>

<style>
.wrap {
/*white-space: nowrap; /* Отменяем перенос текста */
    overflow: hidden; /* Обрезаем содержимое */
    /*padding: 5px; /* Поля */
    text-overflow: ellipsis; /* Многоточие */
	}
	

  </style>


<script type="text/javascript">
  $(document).ready(function() { /*Загрузка DOM дернева*/  
    var find_property = $('[name="searchStringBio"]').val();//$('#find_res_of').text();  /*Переменая с присвоением поискового текста */
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


<!------------------------------>
<?php
if (!$mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('/assets-front/css/auth_modal.css')}}">
<link rel="stylesheet" href="{{asset('/assets-front/css/searchall_bio.css')}}">
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


 </head>
 <body>

		

  
 
 
  <header>
  <img src="/public/images/line2.png" width="100%" height="44px" class="header">
   <div class="header">


						

</header>
@if(!$mobile_browser > 0)
@if (!Auth::id())
<div style="position:relative; left:1px; top:10px;">
<form class="example" name="search" action="{{action('BiologyController@searchbio')}}">
{{ csrf_field() }}
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchStringBio" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchStringBio=htmlspecialchars($_GET['searchStringBio']);?>" style="width:400px;">
  
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
   <div style="position:fixed; left:30px; top:12px; z-index:2;">
<form class="example" name="search" action="{{action('BiologyController@searchbio')}}">
{{ csrf_field() }}<a href="/">Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" class='search_box zbz-input-clearable zbz-input-clearable--x' placeholder="Что ищете?" name="searchStringBio" id="tags" size="40" onchange="verifySynonyms(this)" value="<?php echo $searchStringBio=htmlspecialchars($_GET['searchStringBio']);?>" style="width:400px;">&nbsp;<button type="submit" id="tags_submit"><i class="fa fa-search"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/logout') }}"><font color="white">Выйти</font></a>
</form>
<script src="assets-front/js/welcome.js"></script>

<span id="id"></span>
    
	
	<script>
	const userRole = {{Auth::id()}};
	if(userRole==={{Auth::id()}}){
		$( 'label' ).html('Вы в сети');
	}
	else
	{
		$( 'label' ).html('Вы не авторизованы');
	}
	</script>
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
<br><br>

 <div id="print_found">
   @foreach ($postsbio as $post)
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

<div id="footer">
   &nbsp;&nbsp;<a href="rules">Условия использования</a>&nbsp;&nbsp;
   <div id="helo" onclick="func()">&nbsp;&nbsp;Поисковая сеть Go3</div><label></label>
  </div>
 </body>
</html>





	   