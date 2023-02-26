<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use Auth;
use Validator;
use Log;

use App\PostProbe;
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
<title>Ответы</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
if (!$mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('assets-front/css/theme_cat.css')}}">
<?php
}
?>
<?php
if ($mobile_browser > 0) {
	?>
<link rel="stylesheet" href="{{asset('assets-front/css/theme_cat_mob.css')}}">
<?php
}
?>
<link rel="stylesheet" href="{{asset('assets-front/css/menu.css')}}">
    <style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

form.example input[type=text] {
    padding: 10px;
    font-size: 17px;
    border: 1px solid grey;
    float: left;
    width: 80%;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #0b7dda;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}
    </style>
</head>
<body>
<img src="{{asset('images/line.png')}}" width="100%">
<center>
<br><br>

<div id="top_menu">
@if (Auth::id())
                                {{ Auth::user()->name }}
                            </a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ url('/') }}">Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{ url('/logout') }}">Выйти</a>
                                @endif
</div>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

{{-------{{action('PostSendController@storesend')}}------}}

<form role="form" id="form-post-sk" action="{{action('EmployeeController@storesend')}}"
                                            method='get' enctype='multipart/form-data'>

                                            
                                            <input type="text" name="content_user_id" value="{{auth::id()}}">
                                            
<?php
if (!$mobile_browser > 0) {
	?>
    
    <input type="text" id="content_name" class="form-control" name="content_name" rows="2" style="width:47%" value="{{auth::user()->name}}">
    
    
    
<input type="text" id="content_text" class="form-control" name="content_text" rows="2" style="width:47%"
placeholder="Тема вопроса" value="" autofocus>



<textarea id="content_post" class="form-control" name="content_post" rows="2" style="width:47%"
placeholder="Текст">
</textarea>
<?php
}
?>

<?php
if ($mobile_browser > 0) {
	?>
<input type="text" id="content_text" class="form-control" name="content_text" rows="2" style="width:85%"
placeholder="Тема вопроса" value="
<?php
$tem = htmlspecialchars($_GET['tem']);
echo  $tem;
?>
">

<br><br>

<textarea id="content_post" class="form-control" name="content_post" rows="2" style="width:85%"
placeholder="Текст">
<?php
if(strpos($tem,'трав')!==false){
    echo'!!!!!!';
}

?>
</textarea>
<?php
}
?>

 
 <br><br>

 {{--
 <select id="content_category" name="content_category" class="form-control">
<option value="">-- Выберите категорию из списка --</option>
         <option value="Авто, мото">Авто, мото</option>           
         <option value="Бизнес, финансы">Бизнес, финансы</option>     
         <option value="Города и страны">Города и страны</option>           
         <option value="Гороскопы, Магия, Гадания">Гороскопы, Магия, Гадания</option>    
         <option value="Домашние задания">Домашние задания</option>           
         <option value="Досуг, Развлечения">Досуг, Развлечения</option>    
         <option value="Еда, Кулинария">Еда, Кулинария</option>           
         <option value="Животные, Растения">Животные, Растения</option>    
         <option value="Знакомства, Любовь, Отношения">Знакомства, Любовь, Отношения</option>           
         <option value="Искусство и Культура">Искусство и Культура</option>    
         <option value="Компьютерные и Видео игры">Компьютерные и Видео игры</option>           
         <option value="Компьютеры, Связь">Компьютеры, Связь</option>    
         <option value="Красота и Здоровье">Красота и Здоровье</option>           
         <option value="Наука, Техника, Языки">Наука, Техника, Языки</option>    
         <option value="Образование">Образование</option>           
         <option value="Общество, Политика, СМИ">Общество, Политика, СМИ</option>    
         <option value="Программирование">Программирование</option>           
         <option value="Путешествия, Туризм">Путешествия, Туризм</option>    
         <option value="Работа, Карьера">Работа, Карьера</option>           
         <option value="Семья, Дом, Дети">Семья, Дом, Дети</option>    
         <option value="Спорт">Спорт</option>           
         <option value="Стиль, Мода, Звезды">Стиль, Мода, Звезды</option>    
         <option value="Темы для взрослых">Темы для взрослых</option>           
         <option value="Товары и Услуги">Товары и Услуги</option>    
         <option value="Философия, Непознанное">Философия, Непознанное</option>           
         <option value="Фотография, Видеосъемка">Фотография, Видеосъемка</option>             
         <option value="Юридическая консультация">Юридическая консультация</option>           
         <option value="Юмор">Юмор</option>
         <option value="О проектах otvet.ltd.ua">О проектах otvet.ltd.ua</option>           
         <option value="Другое">Другое</option>                
 </select>
 ---}}

 <div id="cat">
 <b>Выберите категорию</b>
 <br><br><br><br>
 Авто, мото<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Автоспорт</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Автострахование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Выбор машины, мотоцикла</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ГИБДД, обучение, права</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">ПДД, Вождение</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Оформление авто-мото сделок</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сервис, Обслуживние, Тюнинг</a></span>&nbsp;&nbsp;
<br /><br />



Бизнес, Финансы<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Банки и Кредиты</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Долги, Коллекторы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Бухгалтерия, Кредит, Налоги</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Макроэкономика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Недвижимость, Ипотека</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Производственные предприятия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Собственный бизнес</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Страхование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Остальные сферы бизнеса</a></span>&nbsp;&nbsp;
<br /><br />


Города и страны<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Вокруг света</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Карты, Транспорт, GPS</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Климат, Погода, Часовые пояса</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Алгебра</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Геометрия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Иностранные языки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Химия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Физика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Биология</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">История</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обществознание</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">География</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Информатика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Экономика</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другие предметы</a></span>&nbsp;&nbsp;
<br /><br />


Досуг, Развлечения<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Игры без компьютера</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Клубы, Дискотеки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Концерты, Выставки, Спектакли</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Охота и Рыбалка</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Рестораны, Кафе, Бары</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Советы, Идеи</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Восьмое марта</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">День Святого Валентина</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Новый Год</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Хобби</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие развлечения</a></span>&nbsp;&nbsp;
<br /><br />



Еда, Кулинария<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Вторые блюда</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Готовим в ...</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Готовим детям</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Десерты, Сладости, Выпечка</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Закуски и Салаты</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Консервирование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">На скорую руку</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Напитки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Первые блюда</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Покупка и выбор продуктов</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Торжество, Праздник</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее кулинарное</a></span>&nbsp;&nbsp;
<br /><br />
Животные, Растения<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Дикая природа</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домашние животные</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Комнатные растения</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Сад-Огород</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Литература</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мобильные устройства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Офисная техника</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Программное обеспечение</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее компьютерное</a></span>&nbsp;&nbsp;
<br /><br />


Красота и Здоровье<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Баня, Массаж, Фитнес</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Болезни, Лекарства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Врачи, Клиники, Страхование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Детское здоровье</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Здоровый образ жизни</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Коррекция веса</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Косметика, Парфюмерия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Маникюр, Педикюр</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Школы</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">MySQL</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Perl</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">PHP</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Python</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Веб-дизайн</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Верстка, CSS, HTML, SVG</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Системное администрирование</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другие языки и технологии</a></span>&nbsp;&nbsp;
<br /><br />


Путешествия, Туризм<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Документы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдых в России</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдых за рубежом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Самостоятельный отдых</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее туристическое</a></span>&nbsp;&nbsp;
<br /><br />


Работа, Карьера<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Кадровые агентства</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Написание резюме</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обстановка на работе</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Отдел кадров, HR</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Подработка, временная работа</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Профессиональный рост</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Смена и поиск места работы</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Трудоустройство за рубежом</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие карьерные вопросы</a></span>&nbsp;&nbsp;
<br /><br />


Семья, Дом, Дети<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Беременность, Роды</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Воспитание детей</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домашняя бухгалтерия</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Домоводство</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Загородная жизнь</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Мебель, Интерьер</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Организация быта</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Свадьба, Венчание, Брак</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Строительство и Ремонт</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие дела домашние</a></span>&nbsp;&nbsp;
<br /><br />


Спорт<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Футбол</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Хоккей</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Зимние виды спорта</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Экстрим</a></span>&nbsp;&nbsp;
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
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Обработка и печать фото</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Уход за аппаратурой</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Техника, темы, жанры съемки</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочее фото-видео</a></span>&nbsp;&nbsp;
<br /><br />


Юридическая консультация<br />
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Административное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Военная служба</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Гражданское право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Жилищное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Конституционное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Паспортный режим, регистрация</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Право социального обеспечения</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Семейное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Трудовое право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Уголовное право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Финансовое право</a></span>&nbsp;&nbsp;
<span><a name="menu-title" href="#" onclick="Zack(this);return false">Прочие юридические вопросы</a></span>&nbsp;&nbsp;
<br /><br />



<span><a name="menu-title" href="#" onclick="Zack(this);return false">Юмор</a></span><br /><br />


<span><a name="menu-title" href="#" onclick="Zack(this);return false">Другое</a></span><br /><br />


<input class="foxtext" type="text" onblur="if(this.value=='') this.value=this.title;" onfocus="if(this.value==this.title) this.value='';" name="content_category" style="width:235px !important;" title="Категория вопроса" value="Категория вопроса">
</div>
<script type="text/javascript">
var First = true;
function Zack (MenuTitl) {
    var content_category = document.getElementsByName('content_category')[0];
    
     if(First) {First=false;dop="";}
    content_category.value = dop + MenuTitl.innerHTML;            
}

</script>
 <br><br>
 
 <button type="submit">
Сохранить
</button>
</form>
 <br><br><br><br>

</body>
</html>