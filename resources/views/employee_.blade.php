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
  border: none;
  background: #f1f1f1;
}

input[type=file] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
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

<form action="{{action('EmployeeController@store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
     <input type="text" name="user_id" class="form-control" placeholder="Email" value="{{auth::id()}}">
    <label for="exampleInputEmail1">my Name</label>
    <input type="text" name="name" class="form-control" placeholder="Ваш логин" value="{{$user->name}}">
    
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="title" class="form-control" placeholder="Тема вопроса" autofocus>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control"  placeholder="Текст">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name="post" id="tags" class="form-control"  placeholder="Категория темы - начните вводить и выплывит подсказка">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="image" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  
  
  {{-----
 <b>Выберите категорию</b>
 <br><br><br><br>
 Авто, мото<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Автоспорт</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Автострахование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Выбор машины, мотоцикла</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ГИБДД, обучение, права</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ПДД, Вождение</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Оформление авто-мото сделок</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сервис, Обслуживние, Тюнинг</a></span>&nbsp;&nbsp;
<br /><br />



Бизнес, Финансы<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Банки и Кредиты</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Долги, Коллекторы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Бухгалтерия, Кредит, Налоги</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Макроэкономика</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Недвижимость, Ипотека</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Производственные предприятия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Собственный бизнес</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Страхование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Остальные сферы бизнеса</a></span>&nbsp;&nbsp;
<br /><br />


Города и страны<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Вокруг света</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Карты, Транспорт, GPS</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Климат, Погода, Часовые пояса</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Коды, Индексы, Адреса</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ПМЖ, Недвижимость</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее о городах и странах</a></span>&nbsp;&nbsp;
<br /><br />



Гороскопы, Магия, Гадания<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Гадания</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Гороскопы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Магия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сны</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие предсказания</a></span>&nbsp;&nbsp;
<br /><br />


Домашние задания<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Русский язык</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Литература</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Математика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Алгебра</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Геометрия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Иностранные языки</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Химия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Физика</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Биология</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">История</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обществознание</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">География</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Информатика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Экономика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другие предметы</a></span>&nbsp;&nbsp;
<br /><br />


Досуг, Развлечения<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Игры без компьютера</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Клубы, Дискотеки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Концерты, Выставки, Спектакли</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Охота и Рыбалка</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Рестораны, Кафе, Бары</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Советы, Идеи</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Восьмое марта</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">День Святого Валентина</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Новый Год</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Хобби</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие развлечения</a></span>&nbsp;&nbsp;
<br /><br />



Еда, Кулинария<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Вторые блюда</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Готовим в ...</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Готовим детям</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Десерты, Сладости, Выпечка</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Закуски и Салаты</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Консервирование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">На скорую руку</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Напитки</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Первые блюда</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Покупка и выбор продуктов</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Торжество, Праздник</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее кулинарное</a></span>&nbsp;&nbsp;
<br /><br />
Животные, Растения<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Дикая природа</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домашние животные</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Комнатные растения</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сад-Огород</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочая живность</a></span>&nbsp;&nbsp;
<br /><br />

Знакомства, Любовь, Отношения<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Дружба</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Знакомства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Любовь</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отношения</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Расставания</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие взаимоотношения</a></span>&nbsp;&nbsp;
<br /><br />


Искусство и Культура<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Архитектура, Скульптура</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Живопись, Графика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Кино, Театр</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Литература</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Музыка</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие искусства</a></span>&nbsp;&nbsp;
<br /><br />


Компьютерные и Видео игры<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Браузерные</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Клиентские</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Консольные</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мобильные</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие</a></span>&nbsp;&nbsp;
<br /><br />

Компьютеры, Связь<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Железо</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Интернет</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мобильная связь</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мобильные устройства</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Офисная техника</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Программное обеспечение</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее компьютерное</a></span>&nbsp;&nbsp;
<br /><br />


Красота и Здоровье<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Баня, Массаж, Фитнес</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Болезни, Лекарства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Врачи, Клиники, Страхование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Детское здоровье</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Здоровый образ жизни</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Коррекция веса</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Косметика, Парфюмерия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Маникюр, Педикюр</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Салоны красоты и СПА</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Уход за волосами</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее о здоровье и красоте</a></span>&nbsp;&nbsp;
<br /><br />



Наука, Техника, Языки<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Гуманитарные науки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Естественные науки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Лингвистика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Техника</a></span>&nbsp;&nbsp;
<br /><br />




Образование<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ВУЗы, Колледжи</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Детские сады</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Школы</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Дополнительное образование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Образование за рубежом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее образование</a></span>&nbsp;&nbsp;
<br /><br />



Общество, Политика, СМИ<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Общество</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Политика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Средства массовой информации</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие социальные темы</a></span>&nbsp;&nbsp;
<br /><br />



Программирование<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Java</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">JavaScript</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">JQuery</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">MySQL</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Perl</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">PHP</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Python</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Веб-дизайн</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Верстка, CSS, HTML, SVG</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Системное администрирование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другие языки и технологии</a></span>&nbsp;&nbsp;
<br /><br />


Путешествия, Туризм<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Документы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдых в России</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдых за рубежом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Самостоятельный отдых</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее туристическое</a></span>&nbsp;&nbsp;
<br /><br />


Работа, Карьера<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Кадровые агентства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Написание резюме</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обстановка на работе</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдел кадров, HR</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Подработка, временная работа</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Профессиональный рост</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Смена и поиск места работы</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Трудоустройство за рубежом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие карьерные вопросы</a></span>&nbsp;&nbsp;
<br /><br />


Семья, Дом, Дети<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Беременность, Роды</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Воспитание детей</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домашняя бухгалтерия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домоводство</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Загородная жизнь</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мебель, Интерьер</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Организация быта</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Свадьба, Венчание, Брак</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Строительство и Ремонт</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие дела домашние</a></span>&nbsp;&nbsp;
<br /><br />


Спорт<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Футбол</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Хоккей</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Зимние виды спорта</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Экстрим</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другие виды спорта</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Занятия спортом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">События, результаты</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Спортсмены</a></span>&nbsp;&nbsp;
<br /><br />


Стиль, Мода, Звезды<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мода</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Светская жизнь и Шоубизнес</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Стиль, Имидж</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие тенденции стиля жизни</a></span>&nbsp;&nbsp;
<br /><br />



<span><a name="menu-title" href="#" onclick="Zack(this);return false">Темы для взрослых</a></span><br /><br />



Товары и Услуги<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Идеи для подарков</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Техника для дома</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие промтовары</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сервис, уход и ремонт</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие услуги</a></span>&nbsp;&nbsp;
<br /><br />


Философия, Непознанное<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мистика, Эзотерика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Психология</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Религия, Вера</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Философия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее непознанное</a></span>&nbsp;&nbsp;
<br /><br />


Фотография, Видеосъемка<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Выбор, покупка аппаратуры</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обработка видеозаписей</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обработка и печать фото</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Уход за аппаратурой</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Техника, темы, жанры съемки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее фото-видео</a></span>&nbsp;&nbsp;
<br /><br />


Юридическая консультация<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Административное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Военная служба</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Гражданское право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Жилищное право</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Конституционное право</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Паспортный режим, регистрация</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Право социального обеспечения</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Семейное право</a></span><br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Трудовое право</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Уголовное право</a></span>
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Финансовое право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие юридические вопросы</a></span>&nbsp;&nbsp;
<br /><br />



<span><a name="menu-title" href="#" onclick="Zack(this);return false">Юмор</a></span><br /><br />


<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другое</a></span><br /><br />




<script type="text/javascript">
var First = true;
function Zack (MenuTitl) {
    var post = document.getElementsByName('post')[0];
    
     if(First) {First=false;dop="";}
    post.value = dop + MenuTitl.innerHTML;            
}

</script>
  
  ----}}
  
  <button type="submit" name="submit" class="registerbtn">Submit</button>
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