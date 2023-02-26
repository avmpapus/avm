<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Поиск в Go3</title>
<link rel="stylesheet" href="/style.css" />
<link rel="shortcut icon" href="/go3icon.jpg" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/my.css">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<script type="text/javascript" src="jquery.js"></script> 


  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js" charset="UTF-8"></script>
  

<link rel="stylesheet" type="text/css" href="styles.css" />



<!-- Put the following javascript before the closing </head> tag. -->
<script>
  (function() {
    var cx = '016502598781164285691:zujlgceea58';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>

<style>
@media(max-width:1200px) {
            .for-large-screens {
                display:none;
            }
        }


        @media(min-width:1200px) {
            .for-small-screens {
                display:none;
            }
        }
		
		body{
background-color:#F2F2F2;
}



  mark, #find_res_of{
    background-color: #fff; /* Фон */
    font: 1em bold Times New Roman, cursive;/* Шрифт */
    color: black; /* Цвет текста */
  }


html { overflow-x: hidden; }

   .size {
    white-space: nowrap; /* Отменяем перенос текста */
    overflow: hidden; /* Обрезаем содержимое */
    padding: 5px; /* Поля */
    text-overflow: ellipsis; /* Многоточие */
   }
   .size:hover {
    background: #f0f0f0; /* Цвет фона */
    white-space: normal; /* Обычный перенос текста */
   }




 TABLE {
   /* width: 300px; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   TD, TH {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid #D8D8D8; /* Параметры рамки */
   }
   TH {
    background: #b0e0e6; /* Цвет фона */
   }


		
		.video {
  width: 100%;
  position: relative;
  padding-top: 56.25%;
}
.video iframe, .video object, .video embed{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}



/*результаты поиска в белом блоке*/
.block1 {
    background: #fff;
    padding:10px;
   }
   
   .block2 {
    border: 1px solid #00FF00;
	background: #fff;
	padding:10px;
   }
   
   /*Выпадающее по клику меню по клику на ссылку*/
   .sub-menu 
{ 
   display: none; 
} 
.main-item:focus ~ .sub-menu, 
.main-item:active ~ .sub-menu, 
.sub-menu:hover 
{ 
   display: block; 
} 




/************************************/




table {
  font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
  border-collapse: collapse;
  color: #686461;
}
caption {
  padding: 10px;
  color: white;
  background: #8FD4C1;
  font-size: 18px;
  text-align: left;
  font-weight: bold;
}
th {
  /*border-bottom: 3px solid #B9B29F;*/
  padding: 10px;
  text-align: left;
}
td {
  padding: 10px;
}
tr:nth-child(odd) {
  /*background: white;*/
}
tr:nth-child(even) {
  /*background: #E8E6D1;*/
}


/******************/


.leftimg {
    float:left; /* Выравнивание по левому краю */
    margin: 7px 7px 7px 0; /* Отступы вокруг картинки */
   }
   
   
 
</style>



</head>
<body>







<!------------insert query----->
<?php 
/*
if(gethostbyname($_SERVER['REMOTE_ADDR'])!='5.248.209.0'){
$connect=mysql_connect('mysql316.1gb.ua','gbua_x_go3','29db39bf3iwp')or die(mysql_error());
mysql_select_db('gbua_x_go3');


$date=date('Y-m-d H:i:s');
$hosts=gethostbyname($_SERVER['REMOTE_ADDR']);
$qsearch=(htmlspecialchars($_GET['qsearch']));
$from_user=$_SERVER['HTTP_REFERER'];
$_SESSION['login']=$_GET['user'];

mysql_query("INSERT INTO query (visit_id, date, hosts, qsearch, from_user, user) VALUES ('$visit_id', '$date', '$hosts', '$search', '$from_user', '$login')");
}
*/
?>
<!------------insert query----->


<?php
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
    $stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
    if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
      $tablet_browser++;
    }
}

?>

<img src="/public/images/line2.png" width="100%" height="44px">
<div class="menu">
		<a href="/">Главная</a>
		</div>
{{-----
   <hr style="position:fixed;
    background-color: #47A475;
    width: 100%;
    height: 43px; z-index:3;" />
<div style="position:fixed; top:0px; left: 2px; font-size:40px; z-index:3;">
<font color="blue">G</font><a href="http://go3.com.ua"><img src="/icon.png" width="30" style="position:relative; top:1px;"></a><font color="red">3</font>
---}}



</div>
</font>
</div>

<div class="gcse-search"></div>
<main>
		<gcse:searchresults-only></gcse:searchresults-only>
	</main>



</body>
</html>