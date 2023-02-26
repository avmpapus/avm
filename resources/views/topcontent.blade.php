
  <style>
  
   
   
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
  </style>
  <style>
   .tab input, .tab-content { display: none; }
   .tab {
    /*font: 0.8rem/1.2 Arial, sans-serif; /* Параметры шрифта */
    border: 1px solid #e9eaec; /* Параметры рамки */
    border-radius: 3px; /* Скругляем уголки */
    color: #848994; /* Цвет текста */
    margin-bottom: 10px; /* Расстояние между пунктами */
   }
   .tab-title {
    padding: 10px; /* Поля вокруг текста */
    display: block; /* Блочный элемент */
    /*text-transform: uppercase; /* Все буквы заглавные */
    font-weight: bold; /* Жирное начертание */
    cursor: pointer; /* Вид курсора */
   }
   .tab-title::after {
    content: '+'; /* Выводим плюс */
    float: right; /* Размещаем по правому краю */
   }
   .tab-content {
    padding: 10px 20px; /* Поля вокруг текста */
   }
   .tab :checked + .tab-title {
    /*background-color: #50a2de; /* Цвет фона */
    border-radius: 3px 3px 0 0; /* Скругляем уголки */
    /*color: #fff; /* Цвет текста */
   }
   .tab :checked + .tab-title::after {
    content: '−'; /* Выводим минус */
   }
   .tab :checked ~ .tab-content {
    display: block; /* Показываем содержимое */
   }
  </style>

  <!--[if lt IE 9]>
   <script>
    document.createElement('figure');
    document.createElement('figcaption');</script>
  <![endif]-->


	   @foreach ($posts as $post)
	   @endforeach  
	   
	   @if((strpos($searchString,'психологическая ')!==false)or(strpos($searchString,' CSS ')!==false)
	   or
	   (strpos($searchString,' JS, ')!==false)
	   or
	   (strpos($searchString,' Python ')!==false)
	   or
	   (strpos($searchString,' Python, ')!==false)
	   or
	   (strpos($searchString,' живописи ')!==false)
	   or
	   (strpos($searchString,' живопись ')!==false)
	  or
	   (strpos($searchString,' рисованию ')!==false)
	   or
	   (strpos($searchString,' рисования ')!==false)
	   or
	   (strpos($searchString,' рисование ')!==false)
	   or
	   (strpos($searchString,' рисовании ')!==false)
	  or
	   (strpos($searchString,' JavaScript ')!==false))
		   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
		   <i class="fa fa-warning"></i>&nbsp;Некоторые здесь пункты не соответствуют данному запросу
		   </div>
		   @endif
		   


         @if(($searchString=='почему современная молодежь выглядит старше своих лет')or($searchString=='в 12 лет выглядит на 16'))
		   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
			<i class="fa fa-warning"></i>&nbsp;Некоторые здесь пункты не соответствуют данному запросу
		   </div>

  @endif
  
  
  @if($searchString=='весна месяца')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
			<i class="fa fa-warning"></i>&nbsp;Некоторые здесь пункты не соответствуют данному запросу, предлагаем вам вместо "весна месяца" ввести "<a href="http://go3.com.ua/public/search?_token=JzIavgrNcLZfCERTYNWC8y6x5vS6Jh5QIsnlvUqx&searchString=календарная+весна">календарная весна</a>"
		   </div>
	  @endif
  
  
  @if(($searchString=='CentOS скачать')or($searchString=='centos скачать'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
			<i class="fa fa-warning"></i>&nbsp;Некоторые здесь пункты не соответствуют данному запросу
		   </div>
	  @endif
  
  
  
  
  @if($searchString=='точки')
		   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
			Ближайшие варианты по запросу точки<br><br>
			<a href="https://ru.wiktionary.org/wiki/%D1%82%D0%BE%D1%87%D0%BA%D0%B0"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/SunflowerModel.svg/1200px-SunflowerModel.svg.png" width="143"></a>
			
			<a href="https://ru.wikipedia.org/wiki/%D0%A2%D0%BE%D1%87%D0%BA%D0%B8_(%D0%B8%D0%B3%D1%80%D0%B0)"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Dots_game.jpg/274px-Dots_game.jpg" width="190"></a>
			
			<a href="https://ru.freepik.com/free-vector/circular-halftone-dots-vector-background_1725109.htm"><img src="https://image.freepik.com/free-vector/circular-halftone-dots-vector-background_1017-12226.jpg" width="140"></a>
			
			
			<a href="https://pointsgame.net/site/rules"><img src="https://pointsgame.net/site/sites/default/files/game_rules.png" width="190"></a>
		   </div>

  @endif
  
  
  
  @if($searchString=='сигна')
		   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
			Сигна<br><br>
			<a href="https://ru.wiktionary.org/wiki/%D1%81%D0%B8%D0%B3%D0%BD%D0%B0"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f6/%D0%A1%D0%B8%D0%B3%D0%BD%D0%B0_%D0%BE%D1%82_%D1%81%D0%B5%D0%BB%D0%B5%D0%BD%D0%B0_%D0%B3%D0%B3.jpg/1200px-%D0%A1%D0%B8%D0%B3%D0%BD%D0%B0_%D0%BE%D1%82_%D1%81%D0%B5%D0%BB%D0%B5%D0%BD%D0%B0_%D0%B3%D0%B3.jpg" width="175"></a>
			
			<a href="https://sig-na.ru/signa-girls/signa-s-imenem-andrej-14/"><img src="https://sig-na.ru/wp-content/uploads/signa-s-imenem-andrei-7265401.jpg" width="131"></a>
			
			<a href="https://sig-na.ru/signa-girls/signa-s-imenem-semyon-6/"><img src="https://sig-na.ru/wp-content/uploads/signa-s-imenem-semen-5318832.jpg" width="174"></a>
			
			
			<a href="http://wikireality.ru/wiki/%D0%A1%D0%B8%D0%B3%D0%BD%D0%B0"><img src="https://lh3.googleusercontent.com/proxy/pYgyDGmG-SEf_AqIV-Sl24ORVMPYZoODzsBcMsZXZ2YwWGsULChoYVN7YOEnzZo0jtwatK_MzDRErscOXlZdDwrHfyr36_8i6ZlZoSjk6xJnPAUWDJPAISpJ8tG5Vx9bBKwSfTdY" width="186"></a>
		   </div>
            
  @endif


<div id="result"></div>
   </div>

   <?php
if((strpos($searchString,'сегодн')!==false)||(strpos($searchString,'текущая дат')!==false)
	  ||(strpos($searchString,'точное врем')!==false))
  {
	  
 ?>

 <script type="text/javascript">
function clock() {
var d = new Date();
var month_num = d.getMonth()
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();
 
month=new Array("января", "февраля", "марта", "апреля", "мая", "июня",
"июля", "августа", "сентября", "октября", "ноября", "декабря");
 
if (day <= 9) day = "0" + day;
if (hours <= 9) hours = "0" + hours;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;
 
if(day==28){
	seconds = "<br>День Конституции Украины";
} 
 
 
date_time = "Сегодня - " + day + " " + month[month_num] + " " + d.getFullYear() +
" г.&nbsp;&nbsp;&nbsp;Текущее время - "+ hours + ":" + minutes + ":" + seconds;
if (document.layers) {
 document.layers.doc_time.document.write(date_time);
 document.layers.doc_time.document.close();
}
else document.getElementById("doc_time").innerHTML = date_time;
 setTimeout("clock()", 1000);
}
</script>

 <div class='block1'>
<span id="doc_time"></span>
</div>
<script type="text/javascript">
 clock();
</script>
   <?php
  }
   ?>
   

   <?php
       if((strpos($searchString,'велосип')!==false)||(strpos($searchString,'велоспор')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
  <a href="https://klubok.com/item-skorostnoy-velosiped-hammer-extrime-s800-19818948" target="_blank">
  <img src="https://img.klubok.com/img/used/2018/12/15/19818/19818948_2.jpg" width="109">
  </a>&nbsp;
  <a href="https://interbike.com.ua/velosiped-titan-tank-26-2018/" target="_blank">
  <img src="https://interbike.com.ua/wa-data/public/shop/products/29/41/4129/images/12290/12290.970.jpg" width="200">
  </a>
  &nbsp;
    <a href="https://velolod.com/p740337884-gornyj-velosiped-titan.html" target="_blank">
  <img src="https://images.ua.prom.st/1241418546_gornyj-velosiped-titan.jpg" width="110">
  </a>&nbsp;
  <a href="http://www.velik.in.ua/internet-magazin-detskih-velosipedov/detskij-velosiped-flora-20/" target="_blank">
  <img src="https://www.velik.in.ua/wp-content/uploads/2017/02/2540.970-510x510.jpg.pagespeed.ce.6hGeHh-AbZ.jpg" width="112">
  </a>
  &nbsp;
  <a href="https://ru.made-in-china.com/co_hbtxbike/product_Mountain-Electric-Bike_enonengiy.html" target="_blank">
  <img src="https://image.made-in-china.com/202f0j10WdGQesLJEPzM/Mountain-Electric-Bike.jpg" width="120"></a>
  </div>
  
  
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Велосипеды</p>
  <iframe width="699" height="334" src="https://www.youtube.com/embed/z6jgAyq8vEs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <?php
  }
  ?>
  
  
     <?php
       if((strpos($searchString,'аладди')!==false)||(strpos($searchString,'джафа')!==false)
	   ||(strpos($searchString,'аллади')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Аладдин</p>
  <a href="https://www.kinopoisk.ru/film/1007049/" target="_blank">
  <img src="https://www.kinopoisk.ru/images/film_big/1007049.jpg" width="105">
  </a>&nbsp;
  <a href="https://itc.ua/articles/reczenziya-na-film-aladdin-aladdin/" target="_blank">
  <img src="https://i1.wp.com/itc.ua/wp-content/uploads/2019/05/Aladdin_i02.jpg?fit=770%2C546&quality=100&strip=all&ssl=1" width="218">
  </a>
  &nbsp;
    <a href="https://www.kinopoisk.ru/film/2361/" target="_blank">
  <img src="https://st.kp.yandex.net/images/film_iphone/iphone360_2361.jpg" width="103">
  </a>&nbsp;
  <a href="https://www.film.ru/news/sbory-aladdina" target="_blank">
  <img src="https://www.film.ru/sites/default/files/styles/thumb_1024x450/public/filefield_paths/review-of-aladdin-2019_0.jpg" width="236">
  </a>
  </div>
  
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Аладдин</p>
	<div class='video'>
  <iframe width="699" height="334" src="https://www.youtube.com/embed/ufLWk-4tQ-o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>
  <?php
  }
  ?>
  
  
  <?php
       if((strpos($searchString,'дуб грюн')!==false)||(strpos($searchString,'дуб грюнев')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Дуб грюневальда</p>
  <a href="https://ecoclubua.com/2010/09/najkrasyvishe-derevo-ukrajiny-900-richnyj-dub-hryunvalda/" target="_blank">
  <img src="https://i0.wp.com/ecoclubua.com/wp-content/uploads/dub-225x300.jpg?resize=225%2C300" width="118">
  </a>&nbsp;
  <a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D0%B9%D0%BB:%D0%94%D1%83%D0%B1_%D0%93%D1%80%D1%8E%D0%BD%D0%B5%D0%B2%D0%B0%D0%BB%D1%8C%D0%B4%D0%B0.JPG" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/%D0%94%D1%83%D0%B1_%D0%93%D1%80%D1%8E%D0%BD%D0%B5%D0%B2%D0%B0%D0%BB%D1%8C%D0%B4%D0%B0.JPG/1200px-%D0%94%D1%83%D0%B1_%D0%93%D1%80%D1%8E%D0%BD%D0%B5%D0%B2%D0%B0%D0%BB%D1%8C%D0%B4%D0%B0.JPG" width="105">
  </a>
  &nbsp;
    <a href="http://wikimapia.org/21937186/ru/%D0%94%D1%83%D0%B1-%D0%93%D1%80%D1%8E%D0%BD%D0%B5%D0%B2%D0%B0%D0%BB%D1%8C%D0%B4%D0%B0" target="_blank">
  <img src="https://photos.wikimapia.org/p/00/06/17/11/19_big.jpg" width="105">
  </a>&nbsp;
  <a href="https://www.segodnya.ua/kiev/kommunalka/derevya-starozhily-kieva-dub-na-kostylyah-i-s-dyroy-v-serdce-mat-shelkovica-i-lekarstva-dlya-bolnyh-1024051.html" target="_blank">
  <img src="https://www.segodnya.ua/img/forall/users/576/57688/new/4_13.jpg" width="105">
  </a>
  &nbsp;
  <a href="http://ecoethics.ru/nagrazhdenie-duba-gryunevalda/" target="_blank">
  <img src="https://ecoethics.ru/wp-content/gallery/grunevald/dscf1911.jpg" width="210">
  </a>
  </div>
  <?php
  }
  ?>
  
  
    <?php
       if(strpos($searchString,'художни')!==false)
  {
  ?>
   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Художники</p>
  <a href="https://www.5.ua/kultura/den-khudozhnyka-ukrainy-top10-naividomishykh-u-sviti-ukrainskykh-myttsiv-127914.html" target="_blank">
  <img src="https://www.5.ua/media/pictures/original/85057.jpg" width="196">
  </a>&nbsp;
    <a href="https://sites.google.com/site/gordistukraieni/vidomi-ukraienski-hudozniki" target="_blank">
  <img src="https://sites.google.com/site/vidomiukraienskihudozniki/_/rsrc/1367859261021/home/%D1%857.jpg" width="179">
  </a>&nbsp;
      <a href="https://sverediuk.com.ua/tag/narodni-hudozhniki-ukrayini/" target="_blank">
  <img src="https://ams3.digitaloceanspaces.com/sverediuk-space/wp-content/uploads/2018/01/17232703/Obiystya-lisnika.jpg" width="122">
  </a>&nbsp;
  <a href="https://sites.google.com/site/gordistukraieni/vidomi-ukraienski-hudozniki" target="_blank">
  <img src="https://sites.google.com/site/vidomiukraienskihudozniki/_/rsrc/1367859864181/home/12.jpg" width="144">
  </a>
  </div>
    <?php
  }
  ?>
  
      <?php
       if(strpos($searchString,'декоративно-прикладно')!==false)
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
  Декоративно-прикладное искусство - Презентация
  </div>
  <?php
  }
  ?>

      <?php
       if(strpos($searchString,'суффик')!==false)
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Суффиксы</p>
  <a href="https://www.youtube.com/watch?v=ZGT03Phybfc" target="_blank">
  <img src="https://i.ytimg.com/vi/ZGT03Phybfc/maxresdefault.jpg" width="177">
  </a>&nbsp;
    <a href="https://www.youtube.com/watch?v=ISh-TblPysM" target="_blank">
  <img src="https://i.ytimg.com/vi/ISh-TblPysM/maxresdefault.jpg" width="177">
  </a>&nbsp;
      <a href="https://lusana.ru/presentation/23163" target="_blank">
  <img src="https://lusana.ru/files/23163/653/1.jpg" width="132">
  </a>&nbsp;
  <a href="https://www.youtube.com/watch?v=ZOsb2Jz3wKI" target="_blank">
  <img src="https://i.ytimg.com/vi/ZOsb2Jz3wKI/maxresdefault.jpg" width="177">
  </a>
  </div>
  <?php
  }
  ?>
  
  
        <?php
       if(strpos($searchString,'домашний дже')!==false)
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Домашний джем</p>
  <a href="https://suseky.com/klubnichnyj-dzhem-iz-viktorii/" target="_blank">
  <img src="https://suseky.com/wp-content/uploads/2017/04/36-1024x640.jpg" width="184">
  </a>
    <a href="https://otzovik.com/reviews/dzhem_domashniy_krasnaya_cena_klubnichniy/" target="_blank">
  <img src="https://i.otzovik.com/objects/b/180000/175792.png" width="116">
  </a>
      <a href="https://home-restaurant.ru/zagotovki-na-zimu/slivovy-j-dzhem-osobenny-j/" target="_blank">
  <img src="https://home-restaurant.ru/wp-content/uploads/2014/10/Slivovy-j-dzhem.jpg" width="167">
  </a>
  <a href="https://suseky.com/domashnij-dzhem-iz-boyaryshnika-s-yablokami/" target="_blank">
  <img src="https://suseky.com/wp-content/uploads/2015/10/122.jpg" width="99">
  </a>
  
  <a href="https://alimero.ru/blog/recepti/domashniy-dzhem-iz-ezheviki-prostoy-i-bistriy-retsept.169643.html" target="_blank">
  <img src="https://alimero.ru/uploads/images/18/76/55/2019/08/26/e2e900.jpg" width="118">
  </a>
  </div>
  <?php
  }
  ?>
  
 
  
  
    <?php
       if((strpos($searchString,'тенденции')!==false)||(strpos($searchString,'тенденция')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Тенденция</p>
  <a href="https://en.ppt-online.org/471180" target="_blank">
  <img src="https://cf2.ppt-online.org/files2/slide/k/k2JTaqtzi4D39jlo6QUcOFn5PrRpGYEZ0IxwgdK8NV/slide-1.jpg" width="188">
  </a>&nbsp;
    <a href="https://ppt-online.org/436119" target="_blank">
  <img src="https://cf2.ppt-online.org/files2/slide/z/ZJX7Oxv1aw2eTYHFt3S6p5IyCjEzWRigPBmblnAsq/slide-1.jpg" width="188">
  </a>
  &nbsp;
    <a href="https://www.docsity.com/ru/tendencii-razvitiya-sovremennoy-semi/1063476/" target="_blank">
  <img src="https://static.docsity.com/documents_pages/referat/b2705e8d7f28d4cbfa2faca34373d3c1.png" width="99">
  </a>
  &nbsp;
    <a href="https://en.ppt-online.org/471180" target="_blank">
  <img src="https://cf2.ppt-online.org/files2/slide/k/k2JTaqtzi4D39jlo6QUcOFn5PrRpGYEZ0IxwgdK8NV/slide-6.jpg" width="188">
  </a>
  </div>
  <?php
  }
  ?>
  
  
      <?php
       if((strpos($searchString,'замок')!==false)||(strpos($searchString,'замки')!==false)
		   ||(strpos($searchString,'Замки')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Замки</p>
  <a href="https://dveridoma.net/zamok-dlya-mezhkomnatnyx-dverej/" target="_blank">
  <img src="https://dveridoma.net/wp-content/uploads/2015/10/zamok-vreznoj-s-ruchkoj-dlya-mezhkomnatnyx-dverej.jpg" width="133">
  </a>&nbsp;
    <a href="http://remoo.ru/okna-i-dveri/zamok-dlya-mezhkomnatnyh-dverej" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/D76IOYuyaolIdWGSpEIyGk77ib8yFdInJkH2tRpfnrk5Wp1U_OWIeoP5XwhBfqmhh8Jvh5ryZCw4C3buPE42_bCBEkTbfOjWYl_fRwYAgcp8x791NnXseJUYjHcXUzciea5zQb2P87ko" width="163">
  </a>
  &nbsp;
    <a href="https://dveridoma.net/zamok-dlya-mezhkomnatnyx-dverej/" target="_blank">
  <img src="https://dveridoma.net/wp-content/uploads/2015/10/zamok-vreznoj-dlya-mezhkomnatnyx-dverej.jpg" width="233">
  </a>
  &nbsp;
    <a href="http://remoo.ru/okna-i-dveri/zamok-dlya-mezhkomnatnyh-dverej" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/8pWWxhMbFZbphXE2DP5MdrdbrWFB0QBFG4-fMwsUAvMZCwf8cdlwl4hlJgZVYuyWXNOilgCRqgr381pjRPoWOvGbS8lk8U9TawNWcv91NdNLlwptrfT4khhuw762E1aV4uza4nxmfuHY" width="133">
  </a>
  </div>
  <?php
  }
  ?>
  
  
  
        <?php
       if((strpos($searchString,'assassin')!==false)||(strpos($searchString,'assassi')!==false)
		   ||(strpos($searchString,'Assassin')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Assassin's creed</p>
  <a href="https://www.ubisoft.com/ru-ru/game/assassins-creed-rogue-remastered" target="_blank">
  <img src="https://ubistatic19-a.akamaihd.net/ubicomstatic/ru-ru/global/game-info/boxshotru_mobile_316967.jpg" width="133">
  </a>&nbsp;
    <a href="https://ru.wikipedia.org/wiki/Assassin%E2%80%99s_Creed_II" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/ru/e/ee/%D0%9E%D0%B1%D0%BB%D0%BE%D0%B6%D0%BA%D0%B0_Assassins_Creed_2.jpg" width="117">
  </a>
  &nbsp;
    <a href="https://kanobu.ru/games/assassins-creed/" target="_blank">
  <img src="https://i09.kanobu.ru/c/82d3f1599f27983964a66922777c6a34/200x284/u.kanobu.ru/games/42/fa25aa62047b4d95a2c8d690f815fd74" width="117">
  </a>
  &nbsp;
    <a href="https://assassinscreed.ubisoft.com/game/ru-ru/home" target="_blank">
  <img src="https://ubistatic19-a.akamaihd.net/marketingresource/ru-ru/assassins-creed/assassins-creed-odyssey/assets/images/ack_announce-slide_keyart_361691.jpg" width="295">
  </a>
  </div>
  <?php
  }
  ?>
  
  
          <?php
       if((strpos($searchString,'far cr')!==false)||(strpos($searchString,'far cry')!==false)
		   ||(strpos($searchString,'Far cry')!==false))
  {
  ?>

  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Far Cry</p>
  <a href="https://ru.wikipedia.org/wiki/Far_Cry" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/ru/4/42/Far_Cry_%D0%BE%D0%B1%D0%BB%D0%BE%D0%B6%D0%BA%D0%B0.png" width="162">
  </a>&nbsp;
    <a href="https://ru.wikipedia.org/wiki/Far_Cry_3" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/ru/a/a0/Far_Cry_3_Box_Art_PC.jpeg" width="163">
  </a>&nbsp;
    <a href="https://ru.wikipedia.org/wiki/Far_Cry_4" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/ru/1/1a/Far_Cry_4_Box_Art_PC.jpg" width="163">
  </a>&nbsp;
    <a href="https://ru.wikipedia.org/wiki/Far_Cry_5" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/ru/thumb/4/42/Far_Cry_5_cover.png/274px-Far_Cry_5_cover.png" width="173">
  </a>
  </div>
    <?php
  }
  ?>
  
  
  <?php
       if((strpos($searchString,'far cry primal ')!==false)||(strpos($searchString,'far cry primal')!==false))
  {
  ?>

  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Far Cry</p>
  <a href="https://gamedoza.net/1714-01-far-cry-primal-v133-na-russkom.html" target="_blank">
  <img src="https://gamedoza.net/uploads/posts/2017-10/1507044471_screenshot18-26-24.jpeg" width="14.2%">
  </a>&nbsp;
    <a href="https://torrent-igruga.ucoz.org/load/ehkshen/far-cry-primal/2-1-0-9" target="_blank">
  <img src="https://torrent-igruga.ucoz.org/_ld/0/30959128.jpg" width="18.4%">
  </a>&nbsp;
    <a href="https://goodtorr.ru/far-cry-primal" target="_blank">
  <img src="https://goodtorr.ru/wp-content/uploads/2018/07/Far-Cry-Primal.jpg" width="18.4%">
  </a>
  </div>
    <?php
  }
  ?>
  
            <?php
       if((strpos($searchString,' рек')!==false)||(strpos($searchString,'реки ')!==false)
	   ||(strpos($searchString,'реки')!==false))
  {
	   if(!preg_match('# рек[а-яё]+#i',$searchString))
{
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Реки</p>
  <a href="https://tsn.ua/ru/ukrayina/top-5-samyh-gryaznyh-rek-ukrainy-ukraincy-pyut-iz-vodoemov-gde-gibnet-dazhe-ryba-316191.html" target="_blank">
  <img src="https://img.tsn.ua/cached/1518092914/tsn-1ebf7e0831dcb00a7ce65c0ae2fc892d/thumbs/1200x630/78/5f/9e0ee78ad5b6b3fda305dd1b14485f78.jpg" width="207">
  </a>&nbsp;
  
  
    <a href="https://dic.academic.ru/dic.nsf/ruwiki/686135" target="_blank">
  <img src="https://dic.academic.ru/pictures/wiki/files/80/PietinisBugas.png" width="155">
  </a>&nbsp;
  
  
    <a href="https://www.slideshare.net/ssuser82a8a0/ss-67922918" target="_blank">
  <img src="https://image.slidesharecdn.com/random-161031142159/95/-1-638.jpg?cb=1477923752" width="148">
  </a>&nbsp;
  
  
    <a href="https://www.imbf.org/karty/podrobnaja-karta-rek-ukrainy.html" target="_blank">
  <img src="https://www.imbf.org/karty/images/podrobnaja-karta-rek-ukrainy-hq.jpg" width="151">
  </a>
  </div>
    <?php
}
  }
  ?>
  
  
  <?php
       if((strpos($searchString,'window')!==false)||(strpos($searchString,'win 1')!==false)
		   ||(strpos($searchString,'Window')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Windows 10</p>
  <a href="https://msreview.net/windows-10/42-sborka-windows-10-14291-dlya-pk-vse-chto-nuzhno-znat.html" target="_blank">
  <img src="https://msreview.net/uploads/posts/2016-03/1459118778_1458342651_windows-10-build-14291.jpg" width="160.7">
  </a>&nbsp;
  
  
    <a href="https://msreview.net/windows-10/321-instrukciya-po-vnedreniyu-wim-fayla-sborki-windows-10-build-15002.html" target="_blank">
  <img src="https://msreview.net/uploads/posts/2017-01/1483888886_15002_winverjpg.jpg" width="160.7">
  </a>&nbsp;
  
  
    <a href="https://msreview.net/windows-10/1915-windows-10-build-18895-dostupna-dlya-zagruzki.html" target="_blank">
  <img src="https://msreview.net/uploads/posts/2019-05/1557517204_1542287346_screenshot-1770_png_pagespeed_ce_hg7ansyo4g.png" width="159.7">
  </a>&nbsp;
  
  
    <a href="https://ichip.ru/sovety/luchshie-sborki-windows-10-sravnivaem-testiruem-304512" target="_blank">
  <img src="https://ichip.ru/blobimgs/uploads/2018/07/timeline-windows-10-spring-creators-update.jpg" width="160.7">
  </a>
  </div>
    <?php
  }
  ?>
  
  
  
    <?php
       if((strpos($searchString,'живопис')!==false)||(strpos($searchString,'живопись')!==false)
		   ||(strpos($searchString,'Живопис')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Живопись</p>
  <a href="http://museum.net.ua/afisha/zhivopis-i-grafika-georgiya-chernyavskogo-do-95-richchya-vid-dnya-narodzhennya/" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/lV2oq_FbjIzcuv2gg9u97QMxwcL2SheYo-UgupqvM5dVZDf80kY_MwcvKovkA6wzQ5CHWpSlfUipc7thUcR1WVf6FzkAfG8Vbgt_AoH6cNOT0cRyEq0" width="241">
  </a>&nbsp;
  
  
    <a href="https://www.pinterest.com/pin/329818372687499826/" target="_blank">
  <img src="https://i.pinimg.com/originals/66/5b/1a/665b1a6d67bba698b2eb4076b3a9a35f.jpg" width="191">
  </a>&nbsp;
  
  
    <a href="https://espreso.tv/article/2014/12/13/ukrayinskyy_zhyvopys_pislya_maydanu_yak_revolyuciyni_podiy_vidznachylys_na_ukrayinskomu_mystectvi"_blank">
  <img src="https://espreso.tv/uploads/article/102481/images/im578x383-%D1%84%D1%80%D0%B0%D0%BD%D1%87%D1%83%D0%BA2.jpg" width="127">
  </a>&nbsp;
  
  
    <a href="https://www.pinterest.com/pin/812970170205172305/" target="_blank">
  <img src="https://i.pinimg.com/originals/48/fe/4e/48fe4e5ba78cefa3f629685e19b82549.jpg" width="102">
  </a>
  </div>
    <?php
  }
  ?>
  
  
  
  
  <?php
       if((strpos($searchString,'психология')!==false)||(strpos($searchString,'психолог')!==false)
		   ||(strpos($searchString,'Психологи')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Психология</p>
  <a href="https://4brain.ru/blog/%D0%BF%D0%BE%D0%B7%D0%B8%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F-%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F/" target="_blank">
  <img src="https://4brain.ru/blog/wp-content/uploads/2017/11/%D0%BF%D0%BE%D0%B7%D0%B8%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F-%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F.jpg" width="193">
  </a>&nbsp;
  
  
    <a href="https://4brain.ru/blog/%D0%B4%D0%B8%D1%84%D1%84%D0%B5%D1%80%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F/" target="_blank">
  <img src="https://4brain.ru/blog/wp-content/uploads/2018/08/%D0%B4%D0%B8%D1%84%D1%84%D0%B5%D1%80%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F.jpg" width="193">
  </a>&nbsp;
  
  
    <a href="https://www.psychologos.ru/articles/view/psihologiya-cheloveka"_blank">
  <img src="https://www.psychologos.ru/images/vnutrenniy_chelovek_1374466608.jpeg" width="138">
  </a>&nbsp;
  
  
    <a href="http://vstup.kpi.kharkov.ua/edprogram/psykholohiia-bakalavr/" target="_blank">
  <img src="https://vstup.kpi.kharkov.ua/wp-content/uploads/2018/01/psykholohiya-bakalavr1.jpg-.jpg" width="139">
  </a>
  </div>
    <?php
  }
  ?>
  
    <?php
	  if(($searchString=='unity')or($searchString=='Unity'))
	  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Unity</p>
  <a href="https://www.youtube.com/watch?v=m5gK5udB5OU" target="_blank">
  <img src="https://i.ytimg.com/vi/m5gK5udB5OU/maxresdefault.jpg" width="215">
  </a>
  
    <a href="https://www.youtube.com/watch?v=pJNPBW4QGhg" target="_blank">
  <img src="https://i.ytimg.com/vi/pJNPBW4QGhg/maxresdefault.jpg" width="215">
  </a>
  
    <a href="https://itproger.com/course/unity" target="_blank">
  <img src="https://itproger.com/img/courses/1556199232.png" width="240">
  </a>

  </div>
      <?php
  }
  ?>
  
  <?php
       if((strpos($searchString,'ДНУ')!==false)||(strpos($searchString,'ДНУ им. О.Гончара')!==false)
		   ||(strpos($searchString,'ДНУ ')!==false)||(strpos($searchString,'ДНУ им')!==false)
	   ||(strpos($searchString,'дну им')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
  <a href="http://www.dnu.dp.ua/ru" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/WTDcQ2kMB97TzkrIZr5C-6asEVA0di7R3VbDCbqlomE-0m2w5qtvnzyKXvKrd33j3UU3q0EtZNydoAVEaj1oY8KmeWClWBp1bblF8SkeRg" width="154">
  </a>&nbsp;
  
    <a href="https://www.education.ua/universities/42/" target="_blank">
  <img src="https://www.education.ua/upload/i/00001843_b.jpg" width="164">
  </a>&nbsp;
  
    <a href="https://www.education.ua/universities/42/" target="_blank">
  <img src="https://www.education.ua/upload/i/00000092_b.jpg" width="154">
  </a>&nbsp;
  
    <a href="https://most-dnepr.info/news/society/171551_dnu_imogonchara_uluchshil_pokazateli.htm" target="_blank">
  <img src="https://i.most-dnepr.info/004/07/5c5423846151e.jpeg" width="184">
  </a>
  </div>
      <?php
  }
  ?>
  
  
  
    <?php
       if((strpos($searchString,'wds')!==false)||(strpos($searchString,'wds окна')!==false)
		   ||(strpos($searchString,'окна')!==false)||(strpos($searchString,'вдс окна')!==false)
	   ||(strpos($searchString,'WDS окна')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>WDS</p>
  <a href="http://wds.dp.ua/index.php?route=information/information&information_id=12" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/ry7hogYzG7OAR12gIkoNB1q5_YSQM5jJr7oTg2JRuWA69bPiL_QWW0uJeaYapSJZq6sJZ4hiXNlcHPIV727lrbacMkeZJ6Z7" width="174">
  </a>&nbsp;
  
    <a href="https://dvernoy-donetsk.com/shop/okna-wds-KOXYebH.html" target="_blank">
  <img src="https://dvernoy-donetsk.com/image/cache/catalog/pht/wds-1-2000x1200.jpg" width="192">
  </a>&nbsp;
  
    <a href="https://www.tp-link.com/ru-ua/support/faq/227/" target="_blank">
  <img src="https://www.tp-link.com/resources/images/faq/2010121415049967.jpg" width="108">
  </a>&nbsp;
  
    <a href="http://wds.dp.ua/index.php?route=information/information&information_id=12" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/HWqt0ZB_5pTz3_NsZUWqDTurL-_WjMqBGBBqacLNKrL2sL-XCn_6RHJxYXoZHZRrwQ7ybvqcY35B3WreZtH-swRUOeBDPVM0k1wpKg" width="183">
  </a>
  </div>
      <?php
  }
  ?>
  
  
  
      <?php
       if((strpos($searchString,' культуры')!==false)||(strpos($searchString,'памятники культур')!==false)
		   ||(strpos($searchString,'памятник')!==false)||(strpos($searchString,'Памятник')!==false)
	   ||(strpos($searchString,'Памятники культур')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Памятники культуры</p>
    <a href="http://www.muzzeum.net/pamyatniki-arhitekturyi-ukrainyi-opisanie-i-fotografii/" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/Zn4440WBF_CiB1aiX9ohePEka-ikJoh6gt6PD3hmwT0RPb-Fq-9T7Sq0d04eKIuz3XlI-HF8D3Z0x_igawmCQl6MC1dJfrYvPcIhmNgo" width="128">
  </a>&nbsp;
  
    <a href="https://aif.ua/culture/events/v_ukraine_poyavitsya_elektronnaya_baza_dannyh_pamyatnikov_kultury" target="_blank">
  <img src="https://aif-s3.aif.ru/images/007/457/17053130112ad5674728e5cd4d7942fd.jpg" width="161">
  </a>&nbsp;
  
    <a href="https://www.unn.com.ua/ru/news/1411965-top-10-naykraschikh-svitlin-pamyatok-kulturi-ukrayini" target="_blank">
  <img src="https://www.unn.com.ua/uploads/media/photo/2014/11/29/71c6067f88529b810a94d317a15f9e750b05db96.jpg" width="149">
  </a>&nbsp;
  
    <a href="http://historyuroki.ru/interaktivnyj-trenazher-2/pamyatniki-kultury-podgotovka-k-zno/zno-pamyatniki-kultury-pervoj-poloviny-19-veka.html" target="_blank">
  <img src="https://lh3.googleusercontent.com/proxy/_ikF5vy8Isa7ymAZ-WQwHrFffdcYRWcWwYt9Ncpx6FghI3T5gkgCZv7axpRdeJ_lYOGGxUxmeAiqjWx3QFJzktwXua-JQsc6VbWhlwTHnI8aBfWe_3TC-SGyRdXREiN47UasfJBT8A4" width="213">
  </a>
  </div>
        <?php
  }
  ?>
  
  
  <?php
       if((strpos($searchString,' вырубк')!==false)||(strpos($searchString,'вырубка дер')!==false)
		   ||(strpos($searchString,'вырубка лес')!==false)||(strpos($searchString,'Памятник')!==false)
	   ||(strpos($searchString,'Вырубка лес')!==false))
  {
  ?>
  {{---<img src="{{asset('/assets-front/img/risk.png')}}" width="20">---}}
  <div style='width:700px;solid #000;border: 1px solid #D8D8D8; margin:20px; padding:10px; border-radius:4px;' align='justify'><div style='background-color:red;width:323px;height:24px;solid #000;border: 1px solid #D8D8D8; border-radius:4px;'>&nbsp;<i class="fa fa-warning"></i>&nbsp;<font color="white">Вырубка лесов — экологическая катастрофа</font></div>Итак, очевидно, что простая привычка к личному удобству, чрезмерному документообороту и гонка за деньгами вскоре может очень плохо обернуться для самих же жителей Планеты, поэтому применение срочных мер необходимо. Для начала нужно взрастить осознанное понимание потребления ресурсов и делиться ним с сотрудниками и знакомыми людьми. Затем стоит ввести меры по экономии бумаги, предотвращению ее бессмысленных расходов, ввести применение эквивалентных альтернатив.<br><a href="http://ecobeing.ru/articles/deforestation-is-loss-of-life/">http://ecobeing.ru/articles/deforestation-is-loss-of-life/</a></div>
  
  <?php
  }
  ?>
  
  
        <?php
       if((strpos($searchString,'mafia')!==false)||(strpos($searchString,'mafia 2')!==false)
		   ||(strpos($searchString,'Mafia')!==false)||(strpos($searchString,'Mafia 2')!==false)
	   ||(strpos($searchString,'mafia 3')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Mafia</p>
    <a href="https://www.epicgames.com/store/ru/bundles/mafia-trilogy" target="_blank">
  <img src="https://cdn2.unrealengine.com/Diesel%2Fbundles%2Fmafia-trilogy%2FEGS_MafiaTrilogy_Hangar13_G1A_00-1920x1080-bb8a4c86ab5c03c1759842bd9db6a22a58bf4305.jpg?h=1080&resize=1&w=1920" width="167">
  </a>&nbsp;
  
    <a href="https://www.igromania.ru/news/93670/2K_Games_gotovit_trilogiyu_Mafia-pohozhe_budet_remeyk_pervoy_chasti.html" target="_blank">
  <img src="https://cdn.igromania.ru/mnt/news/9/e/5/a/6/4/93670/053637ca9d838f67_1920xH.jpg" width="159">
  </a>&nbsp;
  
    <a href="https://www.overclockers.ua/news/games/2020-05-19/126898/" target="_blank">
  <img src="https://www.overclockers.ua/news/games/126898-Mafia-1.jpg" width="167">
  </a>&nbsp;
  
    <a href="https://www.overclockers.ua/news/games/2020-05-14/126860/" target="_blank">
  <img src="https://www.overclockers.ua/news/games/126860-Mafia-3-big.jpg" width="167">
  </a>
  </div>
        <?php
  }
  ?>
  
  
  
          <?php
       if((strpos($searchString,'дамские сумки')!==false)||(strpos($searchString,'женские сумки')!==false)
		   ||(strpos($searchString,'дамские сумки ')!==false)||(strpos($searchString,'женские сумки ')!==false)
	   ||(strpos($searchString,'Женские сумки')!==false)||(strpos($searchString,'Женские сумки ')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Женские сумки</p>
  <a href="https://beautylooks.ru/modnye-zhenskiye-sumki-foto-obzor/" target="_blank">
  <img src="https://beautylooks.ru/wp-content/uploads/2018/08/modnye_sumki-35.jpg" width="147">
  </a>&nbsp;
  
    <a href="https://www.youtube.com/watch?v=LQsgw1ZpvUU" target="_blank">
  <img src="https://i.ytimg.com/vi/LQsgw1ZpvUU/maxresdefault.jpg" width="181">
  </a>&nbsp;
  
    <a href="https://fashion-journal.ru/87-modnyye-sumki-foto.html" target="_blank">
  <img src="https://fashion-journal.ru/uploads/posts/2018-12/medium/1544453849_modnye-sumki.jpg" width="181">
  </a>&nbsp;
  
    <a href="https://www.newwoman.ru/letter.php?id=8503" target="_blank">
  <img src="https://www.newwoman.ru/userimg/1911/wm1-511003_e6dd611f3f843e6c2159fc35023e03e6-sm.jpg" width="154">
  </a>
  </div>
        <?php
  }
  ?>
  

  <?php
       if((strpos($searchString,'карта украины')!==false)||(strpos($searchString,'Карта Украины')!==false)
		   ||(strpos($searchString,'карта украина')!==false))
  {
  ?>
<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Карта Украины</p>
<a href="https://www.google.com/maps/place/%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/data=!4m2!3m1!1s0x40d1d9c154700e8f:0x1068488f64010?sa=X&ved=2ahUKEwjjm4HhqInqAhXz8KYKHfkpB-EQ8gEwAHoECAsQAQ" target="_blank">
  <img src="https://www.google.com/maps/vt/data=G3oHeMpQO1f6vgifvQGPYTav6s6niKXbwNXThbI7lKpy9TRZElLZpcVWGKLoNJNGQZVPOaoDv7Ws8PutOGEsxUNmrkNXyXeqkQhKYc9R_cAD7a9r0AzupPMKoGHIwTpeFlros77jyJlxGyam9g" width="697">
  </a>
  </div>
        <?php
  }
  ?>
  
  
  
  <?php
       if($searchString=='карта')
  {
  ?>
<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Карта</p>
<a href="https://www.google.com/maps/place/%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0/data=!4m2!3m1!1s0x40d1d9c154700e8f:0x1068488f64010?sa=X&ved=2ahUKEwjjm4HhqInqAhXz8KYKHfkpB-EQ8gEwAHoECAsQAQ" target="_blank">
  <img src="https://www.google.com/maps/vt/data=G3oHeMpQO1f6vgifvQGPYTav6s6niKXbwNXThbI7lKpy9TRZElLZpcVWGKLoNJNGQZVPOaoDv7Ws8PutOGEsxUNmrkNXyXeqkQhKYc9R_cAD7a9r0AzupPMKoGHIwTpeFlros77jyJlxGyam9g" width="100%">
  </a>
  </div>
        <?php
  }
  ?>
  
  
  
            <?php
       if((strpos($searchString,'природа украины')!==false)||(strpos($searchString,'Природа Украины')!==false)
		   ||(strpos($searchString,'Природа україни')!==false)||(strpos($searchString,'природа україни')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Природа Украины</p>
<a href="https://www.youtube.com/watch?v=wXQotPuPb0s" target="_blank">
  <img src="https://i.ytimg.com/vi/wXQotPuPb0s/maxresdefault.jpg" width="190">
  </a>&nbsp;
  
    <a href="https://natworld.info/raznoe-o-prirode/dikaya-priroda-ukrainy" target="_blank">
  <img src="https://natworld.info/wp-content/uploads/2015/09/%D0%BF%D1%80%D0%B8%D1%80%D0%BE%D0%B4%D0%B0-%D1%83%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B.jpg" width="142">
  </a>&nbsp;
  
    <a href="https://xn----8sbiecm6bhdx8i.xn--p1ai/%D0%BF%D1%80%D0%B8%D1%80%D0%BE%D0%B4%D0%B0%20%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B.html" target="_blank">
  <img src="https://сезоны-года.рф/sites/default/files/images/okruzhayushhij_mir/Ukraine.jpg" width="142">
  </a>&nbsp;
  
    <a href="https://www.pinterest.com/pin/498984833693356288/" target="_blank">
  <img src="https://i.pinimg.com/originals/72/6b/73/726b7360adbf665dd7dd66de559c0d3b.jpg" width="189">
  </a>
  </div>
        <?php
  }
  ?>
  
  

              <?php
       if((strpos($searchString,'путешествия во времени')!==false)||(strpos($searchString,'Путешествия во времени')!==false)
		   ||(strpos($searchString,'путешествие во времени')!==false)||(strpos($searchString,'Путешествие во времени')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Путешествия во времени</p>
  <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%83%D1%82%D0%B5%D1%88%D0%B5%D1%81%D1%82%D0%B2%D0%B8%D0%B5_%D0%B2%D0%BE_%D0%B2%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%B8" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/Time_travelling_cool_dude.png/300px-Time_travelling_cool_dude.png" width="117">
  </a>&nbsp;
  
    <a href="https://pikabu.ru/story/puteshestviya_vo_vremeni_faktyi_i_dokazatelstva_6819632" target="_blank">
  <img src="https://cs10.pikabu.ru/post_img/2019/07/18/7/1563447374110746972.png" width="163">
  </a>&nbsp;
  
    <a href="https://www.youtube.com/watch?v=q1gz6zHSndE" target="_blank">
  <img src="https://i.ytimg.com/vi/q1gz6zHSndE/hqdefault.jpg" width="164">
  </a>&nbsp;
  
    <a href="https://www.mirf.ru/worlds/puteshestviya-vo-vremeni-sposoby-paradoksy/" target="_blank">
  <img src="https://www.mirf.ru/wp-content/uploads/2018/08/time-travel.jpg" width="219">
  </a>
  </div>
          <?php
  }
  ?>
  
  
                <?php
       if((strpos($searchString,'при диабете пить нельзя')!==false)||(strpos($searchString,'диабет и алкоголь')!==false)
		   ||(strpos($searchString,'диабет')!==false)||(strpos($searchString,'диабет и алкоголь')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Диабет</p>
  <a href="https://zen.yandex.ru/media/id/59634c9a57906a9cc714bd54/chto-mojno-est-pri-saharnom-diabete-59f03538256d5cc869fd470a" target="_blank">
  <img src="https://avatars.mds.yandex.net/get-zen_doc/248942/pub_59f03538256d5cc869fd470a_59f035771410c37324605bee/scale_1200" width="204">
  </a>&nbsp;
  
    <a href="https://endocrin-patient.com/dieta-diabet-1-tipa/" target="_blank">
  <img src="https://endocrin-patient.com/wp-content/uploads/2017/07/dieta-pri-diabete-1-tip-a.jpg" width="155">
  </a>&nbsp;
  
    <a href="https://www.kleo.ru/items/zdorovie/dieta-pri-diabete-2-tipa.shtml" target="_blank">
  <img src="https://www.kleo.ru/img/articles/2U4i1.jpg" width="131">
  </a>&nbsp;
  
    <a href="https://zen.yandex.ru/media/id/5ac4cf077ddde81950d11482/pitanie-pri-saharnom-diabete-spisok-razreshennyh-i-zaprescennyh-produktov-pri-povyshennom-sahare-v-krovi--5b3a0564bbe87d00a89b2521" target="_blank">
  <img src="https://avatars.mds.yandex.net/get-zen_doc/230233/pub_5b3a0564bbe87d00a89b2521_5b3a0567b6b15700ac7d319f/scale_1200" width="172">
  </a>
  </div>
            <?php
  }
  ?>
  
  
  
                  <?php
       if((strpos($searchString,'днк')!==false)||(strpos($searchString,'ДНК')!==false)
		   ||(strpos($searchString,'Дезоксирибонуклеиновая кислот')!==false)||(strpos($searchString,'дезоксирибонуклеиновая кислот')!==false))
  {
  ?>
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>ДНК</p>
  <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B5%D0%B7%D0%BE%D0%BA%D1%81%D0%B8%D1%80%D0%B8%D0%B1%D0%BE%D0%BD%D1%83%D0%BA%D0%BB%D0%B5%D0%B8%D0%BD%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BA%D0%B8%D1%81%D0%BB%D0%BE%D1%82%D0%B0" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/DNA_Structure%2BKey%2BLabelled.pn_NoBB.png" width="109">
  </a>&nbsp;
  
    <a href="https://habr.com/ru/post/520332/" target="_blank">
  <img src="https://habrastorage.org/webt/tl/ss/-9/tlss-9hfeuo9_qegjgxv4umifpq.jpeg" width="161">
  </a>&nbsp;
  
    <a href="https://www.ferra.ru/news/techlife/uchyonye-izobreli-dnk-robota-dlya-borby-s-rakom-02-02-2020.htm" target="_blank">
  <img src="https://www.ferra.ru/thumb/1800x0/filters:quality(75):no_upscale()/imgs/2020/02/02/15/3759136/749b3767a95c447d595313ef878157c53edb4dfc.jpg" width="154">
  </a>&nbsp;
  
    <a href="https://www.iguides.ru/main/other/chetyre_novye_bukvy_dnk_udvaivayut_alfavit_zhizni/" target="_blank">
  <img src="https://www.iguides.ru/upload/medialibrary/053/05304c6e57e931af1c2519ae9ddd039b.png" width="216">
  </a>
  </div>
            <?php
  }
  ?>
  
  
  
  <?php
       if((strpos($searchString,'день ивана купала')!==false)||(strpos($searchString,' ивана купала')!==false))
  {
  ?>
  <div style='width:700px;solid #000;border: 1px solid #D8D8D8; padding:10px; margin:20px; border-radius:4px;' align='justify'>
  Иван Купала 2020 (Украина). С вечера:<br>
  <font size="5">понедельник, 6 июля</font><br><br>
  До вечера:<br>
  <font size="5">вторник, 7 июля</font>
  </div>
              <?php
  }
  ?>
  
  
  
  @if($searchString=='хэллоуин')
	  <div style="background: #FAFAFA;
    margin:10px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <font size="6">суббота, 31 октября</font>
      <br>
      Хэллоуин 2020
	  <br>
	  <br>
	  <a href="https://1000.menu/holidays/catalog/mezhdunarodnye">Международные праздники</a>
	  </div>
	   @endif
	   
	   
	   
	   @if($searchString=='как правильно бриться')
	  <div style="background: #fff;
    margin:10px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <b>10 советов как правильно бриться</b>
	  <br>
	  1. Используйте крем или гель для бритья
	  <br>
	  2. Изучите направление роста волос
	  <br>
	  3. Ополосните лицо, подбородок и шею
	  <br>
	  4. Обработайте кожу лица маслом
	  <br>
	  5. Используйте холодную воду для бритья
	  <br>
	  6. Используйте станок для бритья с несколькими лезвиями
	  <br>
	  7. Вытягивайте некоторые труднодоступные участки кожи
	  <br>
	  8. Не прилагайте большого усилия, иначе поранитесь
	  <br>
	  <a href="https://bowandtie.ru/10-sovetov-kak-pravilno-britsya/" target="_blank">Еще</a>
	  <br><br>
	  <a href="https://bowandtie.ru/10-sovetov-kak-pravilno-britsya/">10 советов как правильно бриться мужчине - Bowandtie.ru</a>
	  </div>
	   @endif
	   
	   
	   
	   @if($searchString=='диета для похудения на 10 кг')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <b>Похудеть на 10 кг правильно</b>
	  <br>
	  1. Не ешь мучного. Если ты не можешь отказаться от хлеба вообще, выбирай черный и зерновой. ...
	  <br>
	  2. Не ешь сахар. Трудно? ...
	  <br>
	  3. Ешь как можно меньше жареной, острой, жирной пищи. Рыбу и мясо готовь на пару, это совсем не сложно.
	  <br>
	  4. Плотно завтракай и легко ужинай. ...
	  <br>
	  5. Не пей газировку и соки с сахаром.
	  <br>
	  <br>
	  <a href="https://www.cosmo.ru/health/diets/dieta-minus-10-kg/" target="_blank">Диета - как похудеть за месяц на 10 кг - Cosmopolitan</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if((strpos($searchString,'se окно ')!==false)or
	  (strpos($searchString,'se окно')!==false)
	   or
	   (strpos($searchString,'se размеры')!==false)
	   or
	   (strpos($searchString,'s размеры')!==false)
	   or
	   (strpos($searchString,'se окно')!==false))
		   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
		   <i class="fa fa-warning"></i>&nbsp;Некоторые здесь пункты не соответствуют данному запросу 
		   </div>
		   @endif
		   
		   
		   
		   
		   @if(($searchString=='Call of Duty: Black Ops Cold War')or($searchString=='Call of Duty Black Ops Cold War'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <a href="index#gsc.tab=1&gsc.q=Call of Duty Black Ops Cold War&gsc.sort=" target="_blank"><img src="https://www.overclockers.ua/news/games/127949-Call-of-Duty-Black-Ops-Cold-War-1.jpg" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a><b>Call of Duty: Black Ops Cold War</b>&nbsp;
	  можно будет ставить частями: вся игра весит 175 ГБ, а мультиплеер только 50 ГБ. ... ОЗУ: 8 ГБ; Видеокарта: GeForce GTX 670/GTX 1650 или Radeon HD 7950; Место на диске (на старте): 50 Гб (175 Гб все режимы).
	  <br>
	  <br>
	  <a href="https://www.overclockers.ua/news/games/2020-10-30/127949/#:~:text=Call%20of%20Duty%3A%20Black%20Ops%20Cold%20War%20%D0%BC%D0%BE%D0%B6%D0%BD%D0%BE%20%D0%B1%D1%83%D0%B4%D0%B5%D1%82%20%D1%81%D1%82%D0%B0%D0%B2%D0%B8%D1%82%D1%8C,%D0%B0%20%D0%BC%D1%83%D0%BB%D1%8C%D1%82%D0%B8%D0%BF%D0%BB%D0%B5%D0%B5%D1%80%20%D1%82%D0%BE%D0%BB%D1%8C%D0%BA%D0%BE%2050%20%D0%93%D0%91.&text=%D0%9E%D0%97%D0%A3%3A%208%20%D0%93%D0%91%3B,(175%20%D0%93%D0%B1%20%D0%B2%D1%81%D0%B5%20%D1%80%D0%B5%D0%B6%D0%B8%D0%BC%D1%8B)." target="_blank">Activision опубликовала системные требования Call of Duty: Black Ops Cold War</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='философия бытия')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <b>Бытие</b> — это философская категория, обозначающая независимое от сознания существование объективной реальности — космоса, природы, человека.
	  <br>
	  <br>
	  <a href="https://www.grandars.ru/college/filosofiya/filosofiya-bytiya.html#:~:text=%D0%91%D1%8B%D1%82%D0%B8%D0%B5%20%E2%80%94%20%D1%8D%D1%82%D0%BE%20%D1%84%D0%B8%D0%BB%D0%BE%D1%81%D0%BE%D1%84%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BA%D0%B0%D1%82%D0%B5%D0%B3%D0%BE%D1%80%D0%B8%D1%8F%2C%20%D0%BE%D0%B1%D0%BE%D0%B7%D0%BD%D0%B0%D1%87%D0%B0%D1%8E%D1%89%D0%B0%D1%8F,%E2%80%94%20%D0%BA%D0%BE%D1%81%D0%BC%D0%BE%D1%81%D0%B0%2C%20%D0%BF%D1%80%D0%B8%D1%80%D0%BE%D0%B4%D1%8B%2C%20%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0." target="_blank">Философия бытия. Понятие и суть бытия. Проблема бытия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='как сохранить фото в облаке айфон')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  На устройстве <b>iPhone</b>, iPad или iPod touch перейдите в iCloud.com, нажмите «<b>Фотографии</b>», «Выбрать». Затем выберите <b>фотографии</b> и видео, которые требуется загрузить, и нажмите «Еще» ( ). Выберите «Загрузить», и <b>фотографии</b> и видео будут загружены в виде файла . zip на iCloud Drive.
	  <br>
	  <br>
	  <a href="https://support.apple.com/ru-ru/HT204055#:~:text=%D0%9D%D0%B0%20%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B5%20iPhone%2C%20iPad%20%D0%B8%D0%BB%D0%B8%20iPod%20touch%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B9%D0%B4%D0%B8%D1%82%D0%B5%20%D0%B2%20iCloud,zip%20%D0%BD%D0%B0%20iCloud%20Drive." target="_blank">Архивирование или создание копий данных, хранящихся в iCloud</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='беременный папа')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.u-tv.ru/shows/beremenniy-papa/"><img src="https://www.u-tv.ru/upload/iblock/158/3+.jpg" width="153px"></a> <a href="https://www.youtube.com/watch?v=t4112hWYpXE"><img src="https://i.ytimg.com/vi/t4112hWYpXE/maxresdefault.jpg" width="209px"></a> <a href="https://www.u-tv.ru/shows/beremenniy-papa/hero/213329/"><img src="https://www.u-tv.ru/upload/medialibrary/001/pd_01.jpg" width="209px"> <a href="https://schlock.ru/beremennyj-papa-dmitrenko.html"><img src="https://schlock.ru/wp-content/uploads/2018/03/sshot-973-2.jpg" width="93px"></a>
	<h3>Беременный папа</h3>
	  «<b>Беременный папа</b>» — реалити-шоу о перевоспитании будущих горе-отцов. У них есть всего 10 недель, чтобы понять, что чувствуют их беременные жены, и выиграть 500 тысяч рублей. Герои проекта ― 6 совершенно непохожих друг на друга пар, которых объединяет одно: они все ждут ребенка.
	  <br>
	  <br>
	  <a href="https://www.u-tv.ru/shows/beremenniy-papa/#:~:text=%C2%AB%D0%91%D0%B5%D1%80%D0%B5%D0%BC%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9%20%D0%BF%D0%B0%D0%BF%D0%B0%C2%BB%20%E2%80%94%20%D1%80%D0%B5%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%2D,%D0%BE%D0%B4%D0%BD%D0%BE%3A%20%D0%BE%D0%BD%D0%B8%20%D0%B2%D1%81%D0%B5%20%D0%B6%D0%B4%D1%83%D1%82%20%D1%80%D0%B5%D0%B1%D0%B5%D0%BD%D0%BA%D0%B0." target="_blank">Беременный папа - Телеканал Ю</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='сигнатура')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  «<b>Сигнатура</b>» (алгебра и математическая логика) — набор операций, предикатов и отношений, принятых в данной алгебраической системе. Сигнатура (линейная алгебра) — числовая характеристика квадратичной формы или псевдоевклидова пространства.
	  <br>
	  <br>
	  <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%B8%D0%B3%D0%BD%D0%B0%D1%82%D1%83%D1%80%D0%B0#:~:text=%D0%A1%D0%B8%D0%B3%D0%BD%D0%B0%D1%82%D1%83%D1%80%D0%B0%20(%D0%B0%D0%BB%D0%B3%D0%B5%D0%B1%D1%80%D0%B0%20%D0%B8%20%D0%BC%D0%B0%D1%82%D0%B5%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BB%D0%BE%D0%B3%D0%B8%D0%BA%D0%B0,%D0%BA%D0%B2%D0%B0%D0%B4%D1%80%D0%B0%D1%82%D0%B8%D1%87%D0%BD%D0%BE%D0%B9%20%D1%84%D0%BE%D1%80%D0%BC%D1%8B%20%D0%B8%D0%BB%D0%B8%20%D0%BF%D1%81%D0%B5%D0%B2%D0%B4%D0%BE%D0%B5%D0%B2%D0%BA%D0%BB%D0%B8%D0%B4%D0%BE%D0%B2%D0%B0%20%D0%BF%D1%80%D0%BE%D1%81%D1%82%D1%80%D0%B0%D0%BD%D1%81%D1%82%D0%B2%D0%B0." target="_blank">Сигнатура — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='как очистить внутреннюю память на планшете хуавей')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  «<b>Как очистить внутреннюю память на планшете Хуавей вручную</b>»
	  <br>
	  1. избавьтесь от приложений, которыми не пользуетесь или запускаете редко;
	  <br>
	  2. удалите аудио, видео, фото, которые больше не пригодятся;
	  <br>
	  3. удалите вручную кэш приложений в разделе настройки;
	  <br>
	  <a href="https://device-wiki.com/kak-ochistit-pamyat-na-planshete-huavey.html">Еще</a>
	  <br>
	  <br>
	  <a href="https://device-wiki.com/kak-ochistit-pamyat-na-planshete-huavey.html" target="_blank">Как очистить память на планшете Huawei: внутреннюю и оперативную</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='вечность')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Вечность<br><br>
	  <a href="https://www.kinopoisk.ru/series/823594/" target="_blank"><img src="https://avatars.mds.yandex.net/get-kinopoisk-image/1600647/2849cc6f-c0ce-4203-9a14-6b84930345c1/600x900" width="14%"></a> <a href="https://www.ivi.ru/watch/forever" target="_blank"><img src="https://thumbs.dfs.ivi.ru/storage32/contents/c/6/fb0b234e80ffc4b28cebca337f1609.jpg" width="37.1%"></a> <a href="https://mychaos.ru/obzoryi-filmov/retsenziya-vechnost" target="_blank"><img src="https://mychaos.ru/pic/obzoryi-filmov/vechnost/forever-recenzia.jpg" width="32.2%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D1%87%D0%BD%D0%BE%D1%81%D1%82%D1%8C_%D0%BC%D0%B5%D0%B6%D0%B4%D1%83_%D0%BD%D0%B0%D0%BC%D0%B8" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/ru/e/e0/Endless_film_poster_ru.jpg" width="14.4%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='весна')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Весна 2021 (Украина). Начало:
	<p><font size="5">понедельник, 1 марта</font></p>
	Окончание:
	<p><font size="5">понедельник, 31 мая</font></p>
	  </div>
	  @endif
	  
	  
	  @if($searchString=='весна')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Весна
	<br><br>
	<a href="https://travelcrimea.com/chem-zanyatsya/20200301/912503.html" target="_blank"><img src="https://travelcrimea.com/images/91/26/912621.jpg" width="35.9%"></a> <a href="https://uk.wikipedia.org/wiki/%D0%92%D0%B5%D1%81%D0%BD%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/92/Colorful_spring_garden.jpg" width="31.3%"></a> <a href="https://www.nippon.com/ru/japan-glances/jg00128/" target="_blank"><img src="https://www.nippon.com/ru/ncommon/contents/japan-glances/187347/187347.jpg" width="31.2%"></a>
	  </div>
	  @endif
	  
	  
	  @if(($searchString=='весна месяца')or($searchString=='календарная весна')or($searchString=='Календарная весна'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Календарная <b>весна</b>
	<br><br>
	<a href="index#gsc.tab=1&gsc.q=весна месяца&gsc.sort=" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Isaak_Levitan_-_March.jpg/240px-Isaak_Levitan_-_March.jpg" width="200" style="float:right;margin: -40px 1px 70px 10px; border-radius:5px;"></a>Состоит из трёх <b>месяцев</b>: в Северном полушарии — марта, апреля и мая, в Южном — сентября, октября и ноября.
	<br><br><br><br><p>
	<a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D1%81%D0%BD%D0%B0#:~:text=%D0%9A%D0%B0%D0%BB%D0%B5%D0%BD%D0%B4%D0%B0%D1%80%D0%BD%D0%B0%D1%8F%20%D0%B2%D0%B5%D1%81%D0%BD%D0%B0,-%D0%9B%D0%B5%D0%B2%D0%B8%D1%82%D0%B0%D0%BD%20%D0%98.&text=%D0%A1%D0%BE%D1%81%D1%82%D0%BE%D0%B8%D1%82%20%D0%B8%D0%B7%20%D1%82%D1%80%D1%91%D1%85%20%D0%BC%D0%B5%D1%81%D1%8F%D1%86%D0%B5%D0%B2%3A%20%D0%B2,%E2%80%94%20%D1%81%D0%B5%D0%BD%D1%82%D1%8F%D0%B1%D1%80%D1%8F%2C%20%D0%BE%D0%BA%D1%82%D1%8F%D0%B1%D1%80%D1%8F%20%D0%B8%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F.">Весна — Википедия</a></p>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='весна месяца')or($searchString=='календарная весна')or($searchString=='Календарная весна'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Календарная весна
	<br><br>
	<a href="https://tepka.ru/okruzhayuschij_mir/6.html" target="_blank"><img src="https://tepka.ru/okruzhayuschij_mir/28.jpg" width="100%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='прямые волосы характер')or($searchString=='определить характер по типу волос')or($searchString=='черты характера по типу волос'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Прямые волосы характер<br><br>
	<a href="https://supersmall.ru/chertyi-haraktera-po-tipu-tsvetu-volos-i-pricheskam/" target="_blank"><img src="https://supersmall.ru/wp-content/uploads/2017/07/long2.jpg" width="24%"></a> <a href="https://www.schwarzkopf-professional.ru/ru/home/products/care/mad-about/mad-about-textures.html" target="_blank"><img src="https://www.schwarzkopf-professional.ru/content/dam/skp/ru/ru/mad-about/lengths-superfood/SKP_ICT_MadAbout_Techniques_9Types_460x500_RU.jpg" width="33.9%"></a> <a href="https://englhouse.ru/grammatika/harakter-kakoj-byvaet-prilagatelnye.html" target="_blank"><img src="https://englhouse.ru/wp-content/uploads/2020/05/cfeb68eb64923a49b9210646fb940f1b-400x300.jpg" width="22.8%"></a> <a href="https://www.facebook.com/airanata.krasnodar/posts/2342569216066667/" target="_blank"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHkjM4QAkYTnuHwLuGi8mCvN9Kg8-k565MDw&usqp=CAU" width="17.4%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='физиогномика')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=физиогномика&gsc.sort=" target="_blank"><img src="https://blog.wikium.ru/wp-content/uploads/2020/06/shutterstock_1425560930.jpg" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a><b>физиогномика</b> – это наука, изучающая черты и выражения лица, обусловленные физиологическим строением, с целью определения типа личности, характера человека и особенностей его здоровья.
	<br><br><br><br>
	<a href="https://blog.wikium.ru/fiziognomika-kak-opredelit-tip-lichnosti-po-chertam-litsa.html#:~:text=%D0%A4%D0%B8%D0%B7%D0%B8%D0%BE%D0%B3%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0%20%E2%80%93%20%D1%8D%D1%82%D0%BE%20%D0%BD%D0%B0%D1%83%D0%BA%D0%B0%2C%20%D0%B8%D0%B7%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B0%D1%8F%20%D1%87%D0%B5%D1%80%D1%82%D1%8B,%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0%20%D0%B8%20%D0%BE%D1%81%D0%BE%D0%B1%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B5%D0%B9%20%D0%B5%D0%B3%D0%BE%20%D0%B7%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D1%8C%D1%8F.">Физиогномика: как определить тип личности по чертам лица</a>
	  </div>
	  
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Физиогномика
	<br><br>
	<a href="https://krytilin.ru/fiziognomika/" target="_blank"><img src="https://krytilin.ru/wp-content/uploads/2020/02/original-1.jpg" width="43.5%"></a> <a href="https://pikabu.ru/story/fiziognomicheskie_priznaki_dlya_opredeleniya_tipov_lichnosti_i_tipov_kharaktera_5070926" target="_blank"><img src="https://cs8.pikabu.ru/post_img/big/2017/05/23/7/1495534966149510029.jpg" width="20.2%"></a> <a href="https://zen.yandex.ru/media/id/5c524545c9fd5600ae4622c1/znaki-sos-nashego-lica-fiziognomika-kak-skoraia-pomosc-5d9b075c6d29c100ade3b1e4" target="_blank"><img src="https://avatars.mds.yandex.net/get-zen_doc/1712971/pub_5d9b075c6d29c100ade3b1e4_5d9b089a1febd400b191e924/scale_1200" width="33%"></a>
	  </div>
	  @endif
	  
	  
	  @if($searchString=='небо славян')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<div class='video'>
	<iframe width="859" height="483" src="https://www.youtube.com/embed/mbEzDxbOyZ0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br>
	<a href="https://www.youtube.com/watch?v=mbEzDxbOyZ0">Дарья Волосевич (13 лет) - "Небо славян" - www.ecoleart.ru</a>
	<br><br>
	<h3>Текст песни</h3>
Звездопад дорог от зарниц<br>
Грозы седлают коней<br>
Но над землей тихо льется покой монастырей<br>
А поверх седых облаков<br>
Синь, соколиная высь<br>
Здесь, под покровом небес мы родились<br><br>
След оленя лижет мороз<br>
Гонит добычу весь день<br>
Но стужу держит в узде дым деревень<br>
Намела сугробов пурга<br>
Дочь белозубой зимы<br>
Здесь, в окаеме снегов выросли мы<br>
Нас точит семя орды<br>
Нас гнет ярмо басурман<br>
Но в наших венах кипит небо славян<br>
И от Чудских берегов<br>
До ледяной Колымы<br>
Всё это наша земля, всё это мы<br><br>
А за бугром куют топоры<br>
Буйные головы сечь<br>
Но инородцам кольчугой звенит русская речь<br>
И от перелеска до звезд<br>
Высится белая рать<br>
Здесь, на родной стороне, нам помирать<br><br>
Нас точит семя орды<br>
Нас гнет ярмо басурман<br>
Но в наших венах кипит небо славян<br>
И от Чудских берегов<br>
До ледяной Колымы<br>
Всё это наша земля, всё это мы<br><br>
Нас точит семя орды<br>
Нас гнет ярмо басурман<br>
Но в наших венах кипит небо славян<br>
И от Чудских берегов<br>
До ледяной Колымы<br>
Всё это наша земля, всё это мы<br>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='небо славян коловрат')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<div class='video'>
	<iframe width="859" height="483" src="https://www.youtube.com/embed/XpVC7QT6egQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br>
	<a href="https://www.youtube.com/watch?v=XpVC7QT6egQ">Коловрат - Небо славян</a>
	  </div>
	  @endif
	  
	  
	  @if($searchString=='ping сайта cmd')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p>Чтобы проверить сетевое соединение:</p></b>
	1. На панели задач нажмите значок и наберите в поисковой строке командная строка или <b>cmd</b>.exe . Нажмите Enter.
	<br>
	2. Введите в окне команду <b>ping</b> &lt;адрес <b>сайта</b>&gt; -n 10 и нажмите Enter.
	<br>
	3. Чтобы скопировать информацию, выделите текст левой кнопкой мыши и нажмите Enter.
	<br><br>
	<a href="https://yandex.ru/support/common/troubleshooting/ping-procedures.html">Как проверить сетевое соединение</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='как проверить пинг в играх')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Для <b>проверки пинга</b> используется командная строка. Открыть ее можно различными способами. Например, нажать на кнопку «Пуск» и ввести в поисковой строке команду «cmd», либо нажать на комбинацию клавиш «Win + R», а затем прописать ту же команду, а затем «Enter».
	<br><br>
	<a href="https://hd01.ru/info/kak-proverit-ping-v-igrah/#:~:text=%D0%94%D0%BB%D1%8F%20%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D1%80%D0%BA%D0%B8%20%D0%BF%D0%B8%D0%BD%D0%B3%D0%B0%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D1%83%D0%B5%D1%82%D1%81%D1%8F%20%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%BD%D0%B0%D1%8F,%2C%20%D0%B0%20%D0%B7%D0%B0%D1%82%D0%B5%D0%BC%20%C2%ABEnter%C2%BB.">Как проверить пинг в играх</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='tracert cmd')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=tracert cmd&gsc.sort=" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/pVpFjbdX7xDv8EZRE8lH_2RNgO3u7niawwUhYePT_vhXL8Wt1R4Gjv7Pjf9kvYAxYTTaEsKPa1bSp8MqA8wOqQlVX85FyxrmLopRGdl9KGrG" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a>
	<p><b>Примеры команды TRACERT</b></p>&bull;Чтобы отобразить справку в командной строке по команде введите: tracert /?;
	<br>
	&bull;Чтобы выполнить трассировку пути к узлу, введите команду: tracert ya.ru;
	<br>
	&bull;Чтобы выполнить трассировку пути к узлу и предотвратить разрешение каждого IP-адреса в имя, введите: tracert -d ya.ru.
	<br><br>
	<a href="http://cmd4win.ru/administrirovanie-seti/diagnostika-sety/51-tracert">TRACERT - определение маршрута прохождения пакетов ICMP</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='tracert linux')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=tracert linux&gsc.sort=" target="_blank"><img src="https://i1.wp.com/blog.listratenkov.com/wp-content/uploads/2019/02/traceroutesyntax.jpg?resize=825%2C475&ssl=1" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a>
	Команда <b>traceroute</b> используется в <b>Linux</b> для отображения пути прохождения пакета информации от его источника к месту назначения. Одним из способов использования <b>traceroute</b> является обнаружение случаев потери данных по всей сети, что может указывать на то, что узел не работает.
	<br><br>
	<a href="https://blog.listratenkov.com/traceroute-kak-ispolzovat-v-linux/#:~:text=%D0%9A%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D0%B0%20traceroute%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D1%83%D0%B5%D1%82%D1%81%D1%8F%20%D0%B2%20Linux,%D1%82%D0%BE%2C%20%D1%87%D1%82%D0%BE%20%D1%83%D0%B7%D0%B5%D0%BB%20%D0%BD%D0%B5%20%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%D0%B5%D1%82.">Traceroute, как использовать в Linux | IT-блог</a>
	  </div>
	  @endif
	  
	  
	  @if(($searchString=='centos скачать')or($searchString=='CentOS скачать'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>As you download and use CentOS Linux, the CentOS Project invites you to <a href="http://wiki.centos.org/Contribute">be a part of the community as a contributor</a>. There are many ways to contribute to the project, from documentation,
           QA, and testing to coding changes for <a href="http://wiki.centos.org/SpecialInterestGroup">SIGs</a>, providing mirroring or hosting, and helping other users.</p>
        <p>ISOs are also available <a href="http://isoredirect.centos.org/centos/8/isos/x86_64/">via Torrent</a>.<br></p>
        <p>How to <a href="https://wiki.centos.org/TipsAndTricks/sha256sum">verify</a> your iso<br></p>
        <p>If you plan to create USB boot media, please <a href="https://wiki.centos.org/HowTos/InstallFromUSBkey">read this first</a> to avoid damage to your system.<br></p>
        <p>If the above is not for you, <a href="http://wiki.centos.org/Download">alternative downloads</a> might be.<br></p>
        <p>The <a href="http://wiki.centos.org/Manuals/ReleaseNotes/CentOSLinux8">CentOS Linux 8 release notes</a> and <a href="https://wiki.centos.org/Manuals/ReleaseNotes/CentOSStream">CentOS Stream release notes</a> are continuously updated to include issues and incorporate feedback from users.<br></p>
	<br><br>
	<a href="https://www.centos.org/download/" target="_blank">Download - CentOS</a>
	  </div>
	  
	  
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Пожалуйста, обратите внимание на политику Red Hat в отношении поддержки продуктивной фазы 3 для EL6 (действует с 10 мая 2017 года). Будут выпускаться только критические обновления безопасности в продуктивной фазе 3 для EL6 (так же и для CentOS 6). Пожалуйста прочитайте в этой <a href="http://lists.centos.org/pipermail/centos/2014-November/148008.html" target="_blank">почтовой рассылке</a> для более подробной информации. Команда CentOS рекомендует начать перемещение рабочих нагрузок с CentOS 6 на CentOS 7.
	<br><br>
	<a href="https://wiki.centos.org/ru/Download" target="_blank">ru/Download - CentOS Wiki</a>

	  </div>	
	  
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Помимо основных DVD и CD ISO образов, проект CentOS выпускает специальные ISO образы:</p>

<ul>
	<li>LiveCD - загрузочный диск запускающий готовую рабочую систему непосредственно с компакт диска</li>
	<li>ServerCD - инсталяционный диск с необходимым только набором пакетов для установки сервера</li>
	<li>netinstall - минимальный CD образ для запуска установки через сеть (&lt;10M)</li>
</ul>
	<br><br>
	<a href="https://centos.name/?page/download" target="_blank">Загрузить ISO образы CentOS</a>

	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	CentOS – операционная система с открытым исходным кодом на ядре Linux, основанная на проекте Red Hat Enterprise Linux. Дистрибутив подходит для долговременного использования в производственных средах в качестве серверной ОС
	<br><br>
	  <a href="https://www.comss.ru/page.php?id=2928" target="_blank">CentOS - Скачать бесплатно. Операционные системы</a>
	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Centos Linux - популярный дистрибутив, который является свободно распространяемым аналогом коммерческого Red Hat Enterprise. Операционная система поддерживает все пакеты, предназначенные для Linux, стабильно работает на машинах как с 32-битной, так и 64-битной архитектурой.
	<br><br>
	  <a href="https://www.softprime.net/distributivy-linux/1335-centos-linux.html" target="_blank">Скачать Centos Linux бесплатно (для 64-bit и 32-bit)</a>
	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	0_README.txt 06-Nov-2020 14:32 2495 CentOS-7-x86_64-DVD-2009.iso 04-Nov-2020 11:37 4G CentOS-7-x86_64-DVD-2009.torrent 06-Nov-2020 14:44 ...
	<br><br>
	  <a href="https://mirror.yandex.ru/centos/7/isos/x86_64/" target="_blank">Index of /centos/7/isos/x86_64/ - mirror</a>
	  </div>
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	CentOS 7 дистрибутивы и torrent доступны для скачивания на официальном сайте CentOS и на Яндекс зеркале.
	<br><br>
	  <a href="http://integrator.adior.ru/index.php/linux-install/379-centos-7-skachat-torrent" target="_blank">CentOS 7 скачать torrent - Системный интегратор - Linux</a>
	  </div>
	  
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  Особенности и основные отличия от RHEL 7:

Возможность установки альтернативного ядра CentOSPlus, поставляемого в дополнение к ядру из состава RHEL. Ядро CentOSPlus является расширенной сборкой штатного ядра RHEL, в которую включены некоторые дополнительные возможности и исправления. Например, в CentOSPlus включена поддержка TOMOYO и AppArmor (в дополнение к SELinux), активированы дополнительные сетевые драйверы (в том числе драйвер ath5k), возвращена поддержка BusLogic, IPX, Appletalk и ReiserFS;

Поддержка миграции установок CentOS 6.5 до CentOS 7;

Изменено содержимое 29 пакетов, среди которых: yum, PackageKit, ntp, httpd, dhcp, firefox, glusterfs, grub2, anaconda;

Удалены специфичные для RHEL пакеты, такие как redhat-* и subscription-manager-migration-data;
<br><br>
                        <a href="https://freesoftrus.ru/operacionnye-sistemy/3245-centos-70-linux.html" target="_blank">CentOS 7.0 Linux >> Скачать программы для Windows по прямым ссылкам бесплатно</a>
	  </div>
	  
	  
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	The following mirrors in your region should have the ISO images available: ... + others, see the full list of mirrors: https://www.centos.org/download/mirrors/
	<br><br>
	<a href="http://isoredirect.centos.org/centos/8/isos/x86_64/" target="_blank">CentOS 8 ISO - CentOS Mirrors List</a>
	  </div>
	  {{---
	  <div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="gray">Найдено только слово "скачать"</font>
			</div>
	  ---}}
	  @endif
	  
	  
	  
	  
	  
	  @if($searchString=='лето')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	
	

<a href="https://www.google.com/search?rlz=1C1CHBD_ruUA890UA890&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk03vNXz5IDXignb7S17nL9T8pORkHA:1605806970534&q=%D0%BB%D0%B5%D1%82%D0%BE&rflfq=1&num=10&ved=2ahUKEwijwLmQkY_tAhXQ-ioKHerXAakQtgN6BAgMEAc#rlfi=hd:;si:;mv:[[54.289326599999995,36.777064599999996],[48.2036369,26.8624945]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank">
<img src="/public/images/leto.png" width="100%"></a>
<br><br>

Cтудия-дизайна "зима-лето" (Магазин Декора, Цветов, Подарков И Предметов Интерьера)
<br>
<font color="gray">Цветочный магазин в Чернигове
<br>вулиця Генерала Бєлова, 28</font><br>093 207 0283
<br><br>
<span>СПД КОЛЕЙЧИК ОКСАНА СЕРГЕЕВНА</span>
<br><a href="https://vzuto.com.ua/">Сайт</a>
<font color="gray">вулиця Рокоссовського, 70</font><br>
099 628 7041
<br><br>
<span>Супермаркет Лето 4 Сад-Огород, Цветы, Зоотовары</span>
<br><a href="https://leto4.business.site/?utm_source=gmb&utm_medium=referral">Сайт</a><br>
<font color="gray">Супермаркет<br><span>вулиця Микільська, 1</span></font><br>068 205 9585</div></div>
	</div>
	@endif
	
	
	
	
	@if($searchString=='осень')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Осень 2020 (Украина). Начало:
	<p><font size="5">вторник, 1 сентября</font></p>
	Окончание:
	<p><font size="5">понедельник, 30 ноября</font></p>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='зима')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Зима 2020 (Украина). Начало:
	<p><font size="5">вторник, 1 декабря</font></p>
	Окончание:
	<p><font size="5">воскресенье, 28 февраля 2021 г.</font></p>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='климат')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B8%D0%BC%D0%B0%D1%82" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/MonthlyMeanT.gif/330px-MonthlyMeanT.gif" width="35.9%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BB%D0%B8%D0%BC%D0%B0%D1%82" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Alisov%27s_classification_of_climate_ru.jpg/470px-Alisov%27s_classification_of_climate_ru.jpg" width="33.4%"></a> <a href="https://xn----8sbiecm6bhdx8i.xn--p1ai/%D0%BA%D0%BB%D0%B8%D0%BC%D0%B0%D1%82%20%D0%97%D0%B5%D0%BC%D0%BB%D0%B8.html" target="_blank"><img src="https://сезоны-года.рф/sites/default/files/images/okruzhayushhij_mir/climat_Zemli.jpg" width="29.5%"></a>
	<br>
	<b>Климат</b> — многолетний режим погоды, характерный для конкретной территории. В глобальном смысле <b>климат</b> описывает состояние географических оболочек Земли на протяжении нескольких десятилетий.
	<br><br>
	<a href="https://indicator.ru/label/klimat#:~:text=%D0%9A%D0%BB%D0%B8%D0%BC%D0%B0%D1%82%20%E2%80%94%20%D0%BC%D0%BD%D0%BE%D0%B3%D0%BE%D0%BB%D0%B5%D1%82%D0%BD%D0%B8%D0%B9%20%D1%80%D0%B5%D0%B6%D0%B8%D0%BC%20%D0%BF%D0%BE%D0%B3%D0%BE%D0%B4%D1%8B%2C%20%D1%85%D0%B0%D1%80%D0%B0%D0%BA%D1%82%D0%B5%D1%80%D0%BD%D1%8B%D0%B9,%D0%97%D0%B5%D0%BC%D0%BB%D0%B8%20%D0%BD%D0%B0%20%D0%BF%D1%80%D0%BE%D1%82%D1%8F%D0%B6%D0%B5%D0%BD%D0%B8%D0%B8%20%D0%BD%D0%B5%D1%81%D0%BA%D0%BE%D0%BB%D1%8C%D0%BA%D0%B8%D1%85%20%D0%B4%D0%B5%D1%81%D1%8F%D1%82%D0%B8%D0%BB%D0%B5%D1%82%D0%B8%D0%B9.">Климат — все статьи и новости - Индикатор - Indicator.Ru</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='кол')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Кол
	<br><br>
	<a href="https://dnpmag.com/2018/07/05/za-chto-v-drevnosti-sazhali-na-kol/" target="_blank"><img src="https://dnpmag.com/wp-content/uploads/2018/07/39.jpg" width="29.9%"></a> <a href="https://weekend.rambler.ru/other/40145040-komu-na-rusi-vbivali-kol-v-serdtse/" target="_blank"><img src="https://img02.rl0.ru/da953c5571f47a0d74aae178a316c2d0/c615x400i/https/store.rambler.ru/news/img/735222854b67bde12240a95e2e4423f4" width="30.7%"></a> <a href="https://pikabu.ru/story/posazhenie_na_kol_4610683" target="_blank"><img src="https://cs8.pikabu.ru/post_img/2016/11/11/6/og_og_147885580826929657.jpg" width="38.1%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='закон ома для полной цепи')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Закон Ома</b>: Сила тока в <b>цепи</b> постоянного тока прямо пропорциональна ЭДС источника тока и обратно пропорциональна полному сопротивлению электрической <b>цепи</b>.
	<br>
	<br>
	<a href="https://www.eduspb.com/node/1767#:~:text=%D0%97%D0%B0%D0%BA%D0%BE%D0%BD%20%D0%9E%D0%BC%D0%B0%3A%20%D0%A1%D0%B8%D0%BB%D0%B0%20%D1%82%D0%BE%D0%BA%D0%B0%20%D0%B2,%D0%BF%D1%80%D0%BE%D0%BF%D0%BE%D1%80%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%20%D0%BF%D0%BE%D0%BB%D0%BD%D0%BE%D0%BC%D1%83%20%D1%81%D0%BE%D0%BF%D1%80%D0%BE%D1%82%D0%B8%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E%20%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9%20%D1%86%D0%B5%D0%BF%D0%B8.">Электродвижущая сила. | Объединение учителей Санкт-Петербурга</a>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='как можно определить силу тока')or($searchString=='как можно определить силу тока?'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Она имеет вид: I=P/U (<b>сила тока</b> равна электрическая мощность деленная на напряжение). То есть, 1 ампер равен 1 ватт деленный на 1 вольт. Две других формулы, выходящие из этой, имеют такой вид: P=U*I и U=P/I. Если вам известны любые две величины из <b>тока</b>, напряжения и мощности, всегда <b>можно</b> вычислить третью.
	<br>
	<br>
	<a href="https://electrohobby.ru/kak-opr-sil-tok-llp.html#:~:text=%D0%9E%D0%BD%D0%B0%20%D0%B8%D0%BC%D0%B5%D0%B5%D1%82%20%D0%B2%D0%B8%D0%B4%3A%20I%3DP,%D0%BC%D0%BE%D1%89%D0%BD%D0%BE%D1%81%D1%82%D0%B8%2C%20%D0%B2%D1%81%D0%B5%D0%B3%D0%B4%D0%B0%20%D0%BC%D0%BE%D0%B6%D0%BD%D0%BE%20%D0%B2%D1%8B%D1%87%D0%B8%D1%81%D0%BB%D0%B8%D1%82%D1%8C%20%D1%82%D1%80%D0%B5%D1%82%D1%8C%D1%8E.">Как определить силу тока. Как узнать, вычислить какой ток в схеме, цепи.</a>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='закон ома')or($searchString=='Закон Ома')or($searchString=='Закон ома')or($searchString=='закон Ома'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Закон Ома
	<br><br>
	<a href="https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%BA%D0%BE%D0%BD_%D0%9E%D0%BC%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Vir_ru.png" width="21%"></a> <a href="https://fishki.net/2315059-razjasnjaem-zakon-oma-bukvalyno-na-palycah-i-kartinkah.html" target="_blank"><img src="https://cdn-tn.fishki.net/20/upload/post/2017/06/15/2315059/3a644d647a9cc256e6774b698d933a88.jpg" width="33.4%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%97%D0%B0%D0%BA%D0%BE%D0%BD_%D0%9E%D0%BC%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/%D0%97%D0%B0%D0%BA%D0%BE%D0%BD_%D0%9E%D0%BC%D0%B0_%28%D0%BF%D0%B5%D1%80%D0%B5%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9%29.png/250px-%D0%97%D0%B0%D0%BA%D0%BE%D0%BD_%D0%9E%D0%BC%D0%B0_%28%D0%BF%D0%B5%D1%80%D0%B5%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D1%8B%D0%B9%29.png" width="17%"></a> <a href="http://electricalschool.info/main/osnovy/1227-zakon-oma-dlja-uchastka-cepi.html" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/bF61NJTBxfgDOpJcU8kfqazBaKO0JCm8sUn6t1AMj6RvurDtRcYezKkSjELmcizYjnbDBSQDaBhNpTtPkxSAt8SCqDT1uSiQtbMKvOYfZ5WkBhLwskt_y4qF6Q" width="26.8%"></a>
	  </div>
	  @endif
	  
	 
	 
	 @if($searchString=='как сделать лук')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Как сделать лук
	<br><br>
	<a href="https://www.pinterest.ru/pin/387520742914416291/" target="_blank"><img src="https://i.pinimg.com/originals/e5/aa/f9/e5aaf92b187db46f66d6e1806df603af.jpg" width="31.2%"></a> <a href="https://zetsila.ru/%D0%BA%D0%B0%D0%BA-%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D0%BB%D1%83%D0%BA-%D0%B8-%D1%81%D1%82%D1%80%D0%B5%D0%BB%D1%8B-%D1%81%D0%B2%D0%BE%D0%B8%D0%BC%D0%B8-%D1%80%D1%83%D0%BA%D0%B0%D0%BC%D0%B8/" target="_blank"><img src="https://zetsila.ru/wp-content/uploads/2018/07/kak-sdelat-luk-i-streli-600x400.jpg" width="46%"></a> <a href="http://goodcrafts.blogspot.com/2014/10/kak-sdelat-luk-svoimi-rukami.html" target="_blank"><img src="https://1.bp.blogspot.com/-u-HOw5a5Ngo/VFKZLnD5CoI/AAAAAAAAAc0/HDN4cllj-tw/s1600/pvc-bow-1.jpg" width="21.6%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='бой мечом')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Бой мечом
	<br><br>
	<a href="https://zen.yandex.ru/media/dnevnik_rolevika/zapiski-mechnika-kak-rubitsia-dvuruchnym-mechom-5bc820b8f7863000ab595b67" target="_blank"><img src="https://avatars.mds.yandex.net/get-zen_doc/59126/pub_5bc820b8f7863000ab595b67_5bc824bf61665700ac4963e3/scale_1200" width="31.4%"></a> <a href="https://kanobu.ru/news/gajd-po-boevoj-sisteme-kingdom-come-deliverance-402708/" target="_blank"><img src="https://u.kanobu.ru/editor/images/32/aaee8926-a83f-4b97-9c39-282588ad9fa0.jpg" width="41.8%"></a> <a href="https://zen.yandex.ru/media/dnevnik_rolevika/zapiski-mechnika-kak-rubitsia-dvuruchnym-mechom-5bc820b8f7863000ab595b67" target="_blank"><img src="https://avatars.mds.yandex.net/get-zen_doc/1132604/pub_5bc820b8f7863000ab595b67_5bc825907d295600af276d1f/scale_1200" width="25.6%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='виды ударов мечом')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p>+Базовые удары одноручным мечом:</p></b>
    <p>
	&bull;&nbsp;+ ...
	<br>
	&bull;&nbsp;Кроме того, по способу нанесения - удары лезвием и спинкой.
	<br>
	&bull;&nbsp;1) Рубящий сверху нисходящий. ...
	<br>
	&bull;&nbsp;2) Рубящий горизонтально.
	<br>
	&bull;&nbsp;3) Рубящий снизу восходящий. ...
	<br>
	&bull;&nbsp;4) Кастетный удар – удар кулаком с зажатым мечом в грудь.
	<br>
	&bull;&nbsp;По этой классификации требуется отработать всего 33 удара.
	</p>
	
	<p><a href="https://studfile.net/preview/7001210/page:4/">Еще</a></p>
	<br>
	<a href="https://studfile.net/preview/7001210/page:4/">Базовые удары одноручным мечом:</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='как убрать наружный геморрой')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Как убрать наружный геморрой</p>
    <a href="https://medongroup-spb.ru/blog/gemorroy/" target="_blank"><img src="https://medongroup-spb.ru/upload/dictionary/gem1.jpg" width="39.8%"></a> <a href="https://md-clinica.com.ua/service/proctologist/lechenie-naruzhnogo-gemorroja" target="_blank"><img src="https://md-clinica.com.ua/files/images/naruzhnyj-gemorroj-ru.jpg" width="27.4%"></a> <a href="https://onclinic.ua/blog/hemorrhoidal-nodes" target="_blank"><img src="https://moygemorroy.ru/wp-content/uploads/2018/02/svechi-ot-gemorroya2-600x544.jpg" width="31.5%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='лечение геморроя')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Лечение геморроя</p>
    <a href="https://medongroup-spb.ru/blog/gemorroy/" target="_blank"><img src="https://medongroup-spb.ru/upload/dictionary/gem1.jpg" width="41.2%"></a> <a href="https://viva.clinic/proktologiya/lechenie-gemorroya/" target="_blank"><img src="https://viva.clinic/img/news/gemoroy2.jpg.pagespeed.ce.bDmZ27E8Hl.jpg" width="58%"></a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='правильное лечение геморроя')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Правильное лечение геморроя</p>
    <a href="https://medcity.ua/patient/section/lechenie-gemorroya---effektivnye-metody/" target="_blank"><img src="https://medcity.ua/upload/medialibrary/83a/83a1325b7f1d3bd3f1b211c9254b25ad.jpg" width="46%"></a> <a href="https://medongroup-spb.ru/blog/skleroterapiya-pri-gemorroe/" target="_blank"><img src="https://medongroup-spb.ru/upload/dictionary/s1.jpg" width="22%"></a> <a href="https://probolezny.ru/vnutrenniy-gemorroy/" target="_blank"><img src="https://probolezny.ru/media/bolezny/vnutrenniy-gemorroy/459_s.jpg" width="30.5%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='сюрикен')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Сюрикен</p>
    <a href="https://ru.wikipedia.org/wiki/%D0%A1%D1%8E%D1%80%D0%B8%D0%BA%D1%8D%D0%BD" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Shaken.JPG" width="34.4%"></a> <a href="https://wellgo.ua/suriken-grand-way-bf005/" target="_blank"><img src="https://wellgo.ua/content/images/39/suriken-grand-way-bf005-61080912558418_small11.jpg" width="30%"></a> <a href="https://fonarevka.ua/product/sjuriken-metatelnaja-zvezdochka-semikonechnaja-65-1003/" target="_blank"><img src="https://fonarevka.ua/tmp/cache/images/2c/85c/00-sjuriken-metatelnaja-zvezdochka-semikonechnaja-65-1003-1000x1000-jpg" width="34.4%"></a>
	<a href="https://wellgo.ua/suriken-grand-way-bf004-1/" target="_blank"><img src="https://wellgo.ua/content/images/41/suriken-grand-way-bf004-1-39128510688492_small11.jpg" width="30.5%"></a>
	
	<a href="https://www.pinterest.ru/pin/743727325938215927/" target="_blank"><img src="https://i.pinimg.com/736x/1d/55/7b/1d557b9ae2b3842cf08a3b224c0aa40b.jpg" width="17%"></a>
	
	<a href="https://www.olx.ua/obyavlenie/syuriken-2sht-metatelnyy-nozh-plastina-6-luchevaya-zvezdochka-nindzya-IDESevr.html" target="_blank"><img src="https://ireland.apollo.olxcdn.com/v1/files/c509gqcaw143-UA/image" width="20%"></a>
	
	
	<a href="http://www.catraider.com/cold-arms/shuriken" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/M7qvfZnzPndkqDZNgJsd1aNX4xUT69JjqiyXk7HvavZ0xL46_fE6dDcnq6MUMPwxzqJNZSI099LFW17omkCCJkP9Zcvw1uvUZoYuRd5_Q7Mlbu8qJJ_ObQnptMnho-8z_oIIvjhsMx7_" width="30%"></a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='сюрикен размеры')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Уличные <b>сюрикены</b> или метательные звезды чаше всего имеют форму 6—8 лучевой звезды. Их диаметр находится в пределах 5—12 см, толщина 0,3—0,4 см, вес до 0,3 кг.
	<br>
	<br>
	<a href="https://orujie-holodnoe.ru/en/hurl/one-component/264-syurikeny-ili-metatelnye-zvezdy.html#:~:text=%D0%A3%D0%BB%D0%B8%D1%87%D0%BD%D1%8B%D0%B5%20%D1%81%D1%8E%D1%80%D0%B8%D0%BA%D0%B5%D0%BD%D1%8B%20%D0%B8%D0%BB%D0%B8%20%D0%BC%D0%B5%D1%82%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%B7%D0%B2%D0%B5%D0%B7%D0%B4%D1%8B,%D0%B2%D0%B5%D1%81%20%D0%B4%D0%BE%200%2C3%20%D0%BA%D0%B3.">Сюрикены или метательные звезды - Холодное оружие</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='сюрикен размеры')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Сюрикен размеры</p>
    <a href="https://pikabu.ru/story/kak_sdelat_syuriken_svoimi_rukami_4971413" target="_blank"><img src="https://i.ytimg.com/vi/7ezwzDuS9HQ/maxresdefault.jpg" width="46.1%"></a> <a href="https://militaryarms.ru/oruzhie/holodnoe/syurikehn/" target="_blank"><img src="https://militaryarms.ru/wp-content/uploads/2017/06/syakehny-raznovidnost-syurikehnov.jpg" width="34.6%"></a> <a href="https://diletant.media/articles/29857026/" target="_blank"><img src="https://diletant.media/upload/medialibrary/224/224ef51235008504148a7330911921c9.jpg" width="18.1%"></a>
	  </div>
	  
	  
	  <div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="gray">Найдено только слово <b>размеры</b>, мы предлагаем Вам перейти по ссылке <a href="http://go3.com.ua/public/search?_token=Jg9808XgMZgACULv3rDlXu88c4HdoWqniYzdd5mU&searchString=сюрикен">сюрикен</a></font>
			</div>
	  @endif
	  
	  
	  
	  @if($searchString=='джиу джитсу')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Джиу джитсу</p>
	<a href="https://ru.wikipedia.org/wiki/%D0%91%D1%80%D0%B0%D0%B7%D0%B8%D0%BB%D1%8C%D1%81%D0%BA%D0%BE%D0%B5_%D0%B4%D0%B6%D0%B8%D1%83-%D0%B4%D0%B6%D0%B8%D1%82%D1%81%D1%83" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/ROBERTO_CYBORG_ABREU_2009_BJJ_Championships.jpg" width="33.1%"></a>
	
	<a href="https://dou.ua/lenta/articles/brazilian-jiu-jitsu/" target="_blank"><img src="https://s.dou.ua/storage-files/jjb-1.jpg" width="32.5%"></a>
	
	<a href="https://fightfamily.com.ua/training/jiu-jitsu-training" target="_blank"><img src="https://fightfamily.com.ua/assets/img/trainings/djiu_djitsu_1.jpg" width="33.1%"></a>
	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.google.com/search?rlz=1C1CHBD_ruUA890UA890&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk03ZPN-aX-TLtEbpuIz4LIrYScIOFQ:1605975161112&q=%D0%B4%D0%B6%D0%B8%D1%83+%D0%B4%D0%B6%D0%B8%D1%82%D1%81%D1%83&rflfq=1&num=10&ved=2ahUKEwimyPvXg5TtAhXyoosKHTXSBg8QtgN6BAgTEAc#rlfi=hd:;si:;mv:[[52.547625599999996,31.421751099999998],[50.2175422,29.921776199999996]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank">
<img src="/public/images/djiudjitsu.png" width="100%"></a>
<br><br>
<span>Кик-джицу</span>
<br>Спортивный зал в Чернигове<br>
<font color="gray">вулиця Захисників України, 17a</font>
<br>066 723 8500
<br><br>
<span>BLAKZ BJJ - Бразильское Джиу-Джитсу в Киеве</span>
<br><a href="http://jiu-jitsu.in.ua/">Сайт</a><br>
<font color="gray">вулиця Бастіонна, 7/18</font>
<br>050 469 5290
<br><br>
<span>Dzhyu-Dzhyt·su Kyyivsʹka Federatsiya</span>
<br><font color="gray">Спортивная школа в Киеве</font>
<br>
<font color="gray">Контрактова площа, 10Г</font>
<br>067 760 5781
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='карате')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Карате</p>
	<a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%80%D0%B0%D1%82%D0%B5" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/YokoTobi_Dietl.jpg/300px-YokoTobi_Dietl.jpg" width="29.6%"></a>
	
	<a href="https://www.ukrinform.ua/rubric-sports/2876906-terluga-vigrala-persu-v-istorii-ukraini-olimpijsku-licenziu-z-karate.html" target="_blank"><img src="https://static.ukrinform.com/photos/2020_02/thumb_files/630_360_1581757417-212.jpg" width="34.3%"></a>
	
	<a href="https://srrb.ru/%D0%B7%D0%B0%D0%BC%D0%B5%D1%82%D0%BA%D0%B8/%D0%BE%D0%B1%D0%B7%D0%BE%D1%80%D1%8B-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC-%D1%80%D1%83%D0%BA%D0%BE%D0%BF%D0%B0%D1%88%D0%BD%D0%BE%D0%B3%D0%BE-%D0%B1%D0%BE%D1%8F/karate/kata/vse-kata-karate-oficialnye-spiski-kata-po-versii-vsemirnogo-soyuza-federacij-karate-do-wukf-world-union-of-karate-do-federations.html" target="_blank"><img src="https://i1.wp.com/srrb.ru/wp-content/uploads/2019/01/kata-WOMEN-e1546456963549.jpg?resize=650%2C367&ssl=1" width="34.7%"></a>
	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.google.com/search?sa=X&bih=649&biw=1376&rlz=1C1CHBD_ruUA890UA890&hl=ru&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk00dAvLgY_xOi4NQJIZpia6bBWVfMw:1605982542379&q=%D0%BA%D0%B0%D1%80%D0%B0%D1%82%D0%B5&rflfq=1&num=10&ved=2ahUKEwjou9CXn5TtAhXmk4sKHeCXDXEQtgN6BAgeEAc#rlfi=hd:;si:;mv:[[52.554228699999996,31.979279000000002],[50.286279699999994,30.2917765]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank">
<img src="/public/images/karate.png" width="100%"></a>
<br><br>
<span>Спортивный клуб смешанных единоборств и рукопашного боя в Чернигове "Стрит Файт"</span>
<br>Секция восточных единоборств в Чернигове<br>
<font color="gray">вулиця П'ятницька, 49/7</font>
<br>093 371 4260
<br><br>
<span>Кик-джицу</span>
<br>
<font color="gray">Спортивный зал в Чернигове</font>
<br>вулиця Захисників України, 17a
<br>066 723 8500
<br><br>
<span>Nizhynsʹka Shkola Karate-Do</span>
<br><font color="gray">Спортивный зал в Нежине</font>
<br>
<font color="gray">вулиця Об'їжджа, 120</font>
<br>04633 72035
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='каратэ шотокан')or($searchString=='карате шотокан'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Каратэ шотокан</p>
	<a href="https://karate.ru/Karate_shotokan/" target="_blank"><img src="https://karate.ru/media/images/2014/7/18/56101.jpg" width="32.3%"></a>
	
	<a href="https://ru.wikipedia.org/wiki/%D0%A1%D1%91%D1%82%D0%BE%D0%BA%D0%B0%D0%BD" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Shotokan_karate.jpg" width="23.6%"></a>
	
	<a href="https://otzovik.com/reviews/karate_shotokan/" target="_blank"><img src="https://i.otzovik.com/objects/b/250000/241431.png" width="25.1%"></a>
	
	<a href="http://karatekos.ru/funakoshi-shotokan" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/RfuPoJ-FA_7eTxB1Ws86JXU_vw4ZakVmAl4cs_XRbMxVWd58TvhCqYu4qt23JUwXyU5n5t8g9U7BHUimQMG4opqHKIyRECWlaAxUeAQIgD1gH9lrC7egpD89FkabPchC752wMbuSzg-dY6LLvvJebdQpzAuyBC-1s-gXdLqSHPB-TpySHM3RwkrqFOY8mC6_EcK__gQp5JG5Fl6Kib-oYrIRmn9A" width="17.1%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='бокс')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  
	  
	  <p>Бокс</p>
	  <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%BE%D0%BA%D1%81" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/0/04/JonesvsTrinidad.jpg" width="18.8%"></a> <a href="https://lenta.ru/articles/2019/08/20/box_losers/" target="_blank"><img src="https://icdn.lenta.ru/images/2019/08/13/12/20190813123747849/pwa_list_rect_1280_779ef9a2e643654c52b7785cd55ae673.jpg" width="24.3%"></a> <a href="https://xsport.ua/boxing_s/news/lopes-eshche-ne-gotov-k-boyu-s-lomachenko-zvezdy-boksa-opasayutsya-za-amerikantsa-v-boyu-s-ukraintse_2250039/" target="_blank"><img src="https://xsport.ua/upload/iblock/be4/be4d53a4410223d27ba5eb47bfab92a2.jpg" width="24.3%"></a>
	  <a href="https://sport.ua/news/512994-promouter-kak-tolko-dzhoshua-pobedit-puleva-srazu-zhe-poyavitsya-usik" target="_blank"><img src="https://pic.sport.ua/images/news/0/12/164/social_512994.jpg" width="30.8%"></a>
	  </div>
	  
	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.google.com/search?bih=649&biw=1376&rlz=1C1CHBD_ruUA890UA890&hl=ru&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=ALeKk03355f9SgkcESykl8Hk1GH5VxIHiQ:1606033681324&q=%D0%B1%D0%BE%D0%BA%D1%81&rflfq=1&num=10&ved=2ahUKEwje8cnY3ZXtAhWns4sKHQT3DQAQtgN6BAgVEAc#rlfi=hd:;si:;mv:[[52.540720699999994,31.3962145],[50.3090439,30.372922499999998]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" target="_blank">
<img src="/public/images/boks.png" width="100%"></a>
<br><br>
<span>Клуб Бокса "ринг" (ДЮСШ "атлет"), Клуб Единоборств</span>
<br><font color="gray">Зал для бокса в Чернигове</font><br>
<font color="gray">вулиця Шевченка, 61</font>
<br>0462 930 948
<br><br>
<span>Кик-джицу</span>
<br><font color="gray">Спортивный зал в Чернигове</font><br>
<font color="gray">вулиця Захисників України, 17a</font>
<br>066 723 8500
<br><br>
<span>БОКС</span>
<br><font color="gray">Тараса, вулиця Шевченка, 7</font>
<br>063 887 6338
	  </div>
	  @endif
	  
	  
	  
	  
	  @if(($searchString=='как с вами общается природа')or($searchString=='как общаться с природой')or
	  ($searchString=='Как с вами общается природа')or($searchString=='Как общаться с природой'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Как общаться с природой</p>
      <a href="https://life-with-dream.org/kak-ya-obshhayus-s-vidimym-i-nevidimym-mirom-vokrug/" target="_blank"><img src="https://life-with-dream.org/wp-content/uploads/2014/04/DSC_3773.jpg" width="32.9%"></a> <a href="https://life-with-dream.org/kak-ya-obshhayus-s-vidimym-i-nevidimym-mirom-vokrug/" target="_blank"><img src="https://life-with-dream.org/wp-content/uploads/2014/08/DSC_4865.jpg" width="32.9%"></a> <a href="https://life-with-dream.org/kak-ya-obshhayus-s-vidimym-i-nevidimym-mirom-vokrug/" target="_blank"><img src="https://life-with-dream.org/wp-content/uploads/2014/08/DSC_9817.jpg" width="32.9%"></a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='одинцова')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Улица Защитников Украины, Чернигов<br><font color="gray">Черниговская область, 14000</font></p>
	<a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%97%D0%B0%D1%89%D0%B8%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+14000/@51.513008,31.3400294,17z/data=!3m1!4b1!4m5!3m4!1s0x46d54848f0a57707:0xd9d1776f0c0a185!8m2!3d51.513008!4d31.3422181?hl=ru" target="_blank">
<img src="/public/images/odincova.png" width="100%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='улица шевченко')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>улица Шевченко<br><font color="gray">Чернигов, Черниговская область, 14000</font></p>
	<a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%BE,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+14000/data=!4m2!3m1!1s0x46d5484f02008e83:0xd8b57727f749dc7d?sa=X&hl=ru&ved=2ahUKEwjE1_PTtJbtAhXnBhAIHWaiDBIQ8gEwAHoECAgQAQ" target="_blank">
<img src="/public/images/shevchenko.png" width="100%"></a>
	</div>
	@endif
	
	
	@if($searchString=='улица шевченко, 9, чернигов, черниговская область')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>улица Шевченко, 9<br><font color="gray">Чернигов, Черниговская область, 14000</font></p>
	<a href="https://www.google.com/maps/place/%D1%83%D0%BB%D0%B8%D1%86%D0%B0+%D0%A8%D0%B5%D0%B2%D1%87%D0%B5%D0%BD%D0%BA%D0%BE,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+14000/data=!4m2!3m1!1s0x46d5484f02008e83:0xd8b57727f749dc7d?sa=X&hl=ru&ved=2ahUKEwjE1_PTtJbtAhXnBhAIHWaiDBIQ8gEwAHoECAgQAQ" target="_blank">
<img src="/public/images/shevchenko.png" width="100%"></a>
	</div>
	@endif
	
	
	
	@if(($searchString=='улица щорса')or($searchString=='улица ивана мазепы')or($searchString=='улица мазепы'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>ул. Ивана Мазепы<br><font color="gray">Чернигов, Черниговская область, 14000</font></p>
	<a href="https://www.google.com/maps/place/%D1%83%D0%BB.+%D0%98%D0%B2%D0%B0%D0%BD%D0%B0+%D0%9C%D0%B0%D0%B7%D0%B5%D0%BF%D1%8B,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,+%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+14000/@51.4828588,31.2702341,17z/data=!3m1!4b1!4m5!3m4!1s0x46d548bb0916d1d3:0x7df28c8b567165e6!8m2!3d51.4828588!4d31.2724228?hl=ru" target="_blank">
<img src="/public/images/shorsa.png" width="100%"></a>
	</div>
	@endif
	
	
	
	@if(($searchString=='харли квинн')or($searchString=='Харли Квинн')or($searchString=='харли квин'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Харли квинн</p>
	<a href="https://suicide-squad.fandom.com/ru/wiki/%D0%A5%D0%B0%D1%80%D0%BB%D0%B8_%D0%9A%D0%B2%D0%B8%D0%BD%D0%BD" target="_blank"><img src="https://vignette.wikia.nocookie.net/suicide-squad/images/8/82/%D0%A5%D0%B0%D1%80%D0%BB%D0%B8_%D0%9A%D0%B2%D0%B8%D0%BD%D0%BD.jpg/revision/latest/scale-to-width-down/340?cb=20160714215334&path-prefix=ru" width="15.8%"></a> <a href="https://www.film.ru/news/harli-v-otryade" target="_blank"><img src="https://www.film.ru/sites/default/files/styles/thumb_1024x450/public/filefield_paths/irfsmpqmmj4q1qktvpz7ykroc3kwplgq6woqlaieuet1phsa1udvytrzkj4ugv5m.jpg" width="46.3%"></a> <a href="https://karavan.ua/krasota/figura/margo-robbi-harli-kvinn-fitnes/" target="_blank"><img src="https://karavan.ua/wp-content/uploads/2016/12/3By3jORvDLE.jpg" width="36.7%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='полдень')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Полдень</p>
	<a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BB%D0%B4%D0%B5%D0%BD%D1%8C" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Klodt_lesnaya_dal_v_polden.jpg" width="33.9%"></a> <a href="https://weather.fandom.com/ru/wiki/%D0%9F%D0%BE%D0%BB%D0%B4%D0%B5%D0%BD%D1%8C" target="_blank"><img src="https://vignette.wikia.nocookie.net/pogod/images/a/a3/%D0%9F%D0%BE%D0%BB%D0%B4%D0%B5%D0%BD%D1%8C.jpg/revision/latest?cb=20200607095932&path-prefix=ru" width="37.7%"></a> <a href="https://vijivaka.com/orienting/sun/gde-naxoditsya-solnce-v-polden.html" target="_blank"><img src="https://vijivaka.com/wp-content/uploads/2018/01/gde-naxoditsya-solnce-v-polden-1.jpg" width="27.2%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='полудень')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Полудень</p>
	<a href="https://uk.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BB%D1%83%D0%B4%D0%B5%D0%BD%D1%8C" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/Klodt_lesnaya_dal_v_polden.jpg" width="33.2%"></a> <a href="https://kyiv.gallery/korinok-viktor/kartyna-poluden-v-krynychnomu-7813" target="_blank"><img src="https://kyiv.gallery/images/pictures_large/limg_7813.jpg" width="26%"></a> <a href="https://kyiv.gallery/nataliia-bahatska/kartyna-poluden-10934" target="_blank"><img src="https://kyiv.gallery/images/pictures_large/limg_10934.jpg" width="39.6%"></a>
	</div>
	@endif
	
	
	@if(($searchString=='гримм')or($searchString=='гримм фильм'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Гримм<br><font color="gray">2011 г. &middot; Детектив &middot; 6 сезонов</font></p>
	<a href="https://grimm-serial.ru/" target="_blank"><img src="https://grimm-serial.ru/wp-content/uploads/2018/04/1season.jpg" width="23.9%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B8%D0%BC%D0%BC_(3-%D0%B9_%D1%81%D0%B5%D0%B7%D0%BE%D0%BD)" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/ru/thumb/5/58/Grimm3.jpg/1200px-Grimm3.jpg" width="25.1%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B8%D0%BC%D0%BC_(6-%D0%B9_%D1%81%D0%B5%D0%B7%D0%BE%D0%BD)" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/ru/0/00/Grimm6.jpg" width="25.1%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B8%D0%BC%D0%BC_(4-%D0%B9_%D1%81%D0%B5%D0%B7%D0%BE%D0%BD)" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/ru/thumb/8/8c/Grimm4.jpg/274px-Grimm4.jpg" width="24%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='пчелиный яд')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Пчелиный яд</p>
	<a href="http://www.pchelovodstvo.ru/2009/05/pchyoly-v-meditsine-pchelinyj-yad/" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/UnnwO_-7v7QtXlhEAqY7xwIpV6pVuGYdothRuy-LPzUxrnW9PG3SwfANDaBNlhfDVWT0lVT3XEZoN4lCInP2Fjntzi6Kn5NpPKThBPc9Fxjv0dXz_0dOVwXH1Ly0MCLvIJMZiiAd1PeN5sNCsdgAVoZvzN4" width="31.6%"></a> <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%87%D0%B5%D0%BB%D0%B8%D0%BD%D1%8B%D0%B9_%D1%8F%D0%B4" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Bee-sting-abeille-dard-2.jpg/235px-Bee-sting-abeille-dard-2.jpg" width="19.6%"></a> <a href="https://kladzdor.ru/articles/poleznye-zametki-o-zdorove/yad-pchely-polza-ili-vred/" target="_blank"><img src="https://kladzdor.ru/upload/medialibrary/041/yadpchely.jpg" width="47.5%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='пчелиный яд противопоказания')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Противопоказания</b> к применению
Выраженные нарушения функции печени и почек, туберкулез, новообразования, надпочечниковая недостаточность, сепсис и острые гнойные процессы, повышенная чувствительность к компонентам <b>пчелиного яда</b>.
	<br>
	<br>
	<a href="https://www.vidal.ru/drugs/molecule/1547#:~:text=%D0%BF%D0%BE%D0%B2%D1%8B%D1%88%D0%B5%D0%BD%D0%B8%D0%B5%20%D1%82%D0%B5%D0%BC%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D1%83%D1%80%D1%8B%20%D1%82%D0%B5%D0%BB%D0%B0).-,%D0%9F%D1%80%D0%BE%D1%82%D0%B8%D0%B2%D0%BE%D0%BF%D0%BE%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%D0%B8%D1%8F%20%D0%BA%20%D0%BF%D1%80%D0%B8%D0%BC%D0%B5%D0%BD%D0%B5%D0%BD%D0%B8%D1%8E,%D1%87%D1%83%D0%B2%D1%81%D1%82%D0%B2%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D1%8C%20%D0%BA%20%D0%BA%D0%BE%D0%BC%D0%BF%D0%BE%D0%BD%D0%B5%D0%BD%D1%82%D0%B0%D0%BC%20%D0%BF%D1%87%D0%B5%D0%BB%D0%B8%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%8F%D0%B4%D0%B0.">Описание ЯД ПЧЕЛИНЫЙ показания, дозировки ... - Видаль</a>
	  </div>
	  @endif
	  
	  
	  @if(($searchString=='ведьма Адалинда')or($searchString=='ведьма адалинда'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=ведьма Адалинда&gsc.sort=" target="_blank"><img src="https://media.kg-portal.ru/tv/g/grimm/images/grimm_21.jpg" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a>
	<b>Адалинда</b> Шейд (род. 14 апреля 1985 года) — <b>ведьма</b>. Стала первым существом, которое увидел Ник Беркхард. Была юристом, но уволилась прежде, чем покинуть Портленд.
	<br>
	<br>
	<br>
	<br>
	<a href="https://grimm.fandom.com/ru/wiki/%D0%90%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B4%D0%B0_%D0%A8%D0%B5%D0%B9%D0%B4#:~:text=%D0%90%D0%B4%D0%B0%D0%BB%D0%B8%D0%BD%D0%B4%D0%B0%20%D0%A8%D0%B5%D0%B9%D0%B4%20(%D1%80%D0%BE%D0%B4.,%D1%83%D0%B2%D0%BE%D0%BB%D0%B8%D0%BB%D0%B0%D1%81%D1%8C%20%D0%BF%D1%80%D0%B5%D0%B6%D0%B4%D0%B5%2C%20%D1%87%D0%B5%D0%BC%20%D0%BF%D0%BE%D0%BA%D0%B8%D0%BD%D1%83%D1%82%D1%8C%20%D0%9F%D0%BE%D1%80%D1%82%D0%BB%D0%B5%D0%BD%D0%B4.">Адалинда Шейд | Гримм вики | Fandom</a>
	  </div>
	  
	  
	  
	  	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p><a href="http://go3.com.ua/public/index#gsc.tab=1&gsc.q=ведьма Адалинда&gsc.sort=">Ведьма Адалинда</a></p> 
	
    <a href="https://grimm-serial.ru/news/kto-takaya-adalinda-shejd-iz-seriala-grimm/" target="_blank"><img src="https://grimm-serial.ru/wp-content/uploads/2018/05/grimm-0.jpg" width="47.2%"></a>
	
	<a href="https://screenfiction.org/ru/character/adalind-schade" target="_blank"><img src="https://screenfiction.org/content/image/0/26/94/c8cdd693-full.webp" width="20%"></a>
	
	<a href="https://zen.yandex.ru/media/crocodile/chem-seichas-zaniaty-aktery-seriala-grimm-chast-3-final-5ec52217d921c9187a770b17" target="_blank"><img src="https://avatars.mds.yandex.net/get-zen_doc/2380471/pub_5ec52217d921c9187a770b17_5ec5226be5a7137a07daccad/scale_1200" width="31.5%"></a> 
	</p>
	  </div>
	  @endif
	  
	  
	  
	 @if($searchString=='вампиры')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;"> 
	<p>Вампиры</p>
     <a href="https://www.tvc.ru/channel/brand/id/3021/show/news/news_id/2061" target="_blank"><img src="https://cdn.tvc.ru/pictures/o/296/232.jpg" width="25.9%"></a> 
	 
	 <a href="https://swrolevie.fandom.com/ru/wiki/%D0%92%D0%B0%D0%BC%D0%BF%D0%B8%D1%80%D1%8B" target="_blank"><img src="https://vignette.wikia.nocookie.net/swrolevie/images/4/40/Top-10-Vampire-Movies-of-All-Time-982x1024.png/revision/latest/scale-to-width-down/340?cb=20180709091702&path-prefix=ru" width="18.6%"></a> 
	 
	 <a href="https://www.film.ru/articles/smert-im-k-licu" target="_blank"><img src="https://www.film.ru/img/afisha/BEHUMAN/450/08.jpg" width="29.1%"></a>
	 
	 <a href="https://www.rbc.ru/society/18/02/2002/5703b6aa9a7947783a5a6004" target="_blank"><img src="https://s0.rbk.ru/v6_top_pics/media/img/7/37/754598611618377.jpeg" width="24.4%"></a>
	 </div>
	 @endif
	 
	 
	 @if(($searchString=='как избавиться от тяжести в желудке')or($searchString=='Как избавиться от тяжести в желудке'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p>Как избавиться от тяжести в желудке?</p></b>
    <p>
	1.&nbsp;ешьте медленно и небольшими порциями;
	<br>
	2.&nbsp;избегайте жирной и острой пищи, кофеиносодержащих напитков и алкоголя, добавленного сахара;
	<br>
	3.&nbsp;контролируйте стресс;
	<br>
	4.&nbsp;больше двигайтесь: 15-минутная прогулка после еды улучшает пищеварение.
	</p>
	<br>
	<a href="https://www.rennie.ru/stati/kak-izbavitsya-ot-tyazhesti-v-zheludke/">Тяжесть в желудке – причины и симптомы: как избавиться ...</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='хеш')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Хеш</b> — структура данных «<b>хеш</b>-таблица», вариант реализации ассоциативного массива. <b>Хеш</b> — жаргонное название гашиша.
    <br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%A5%D0%B5%D1%88#:~:text=%D0%A5%D0%B5%D1%88%20%E2%80%94%20%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D1%83%D1%80%D0%B0%20%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85%20%C2%AB%D1%85%D0%B5%D1%88%2D,%D0%A5%D0%B5%D1%88%20%E2%80%94%20%D0%B6%D0%B0%D1%80%D0%B3%D0%BE%D0%BD%D0%BD%D0%BE%D0%B5%20%D0%BD%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B3%D0%B0%D1%88%D0%B8%D1%88%D0%B0.">Хеш — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='глина')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;"> 
	<p>Глина</p>
     <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%BB%D0%B8%D0%BD%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Clay-ss-2005.jpg" width="31.4%" onerror = "this.style.display = 'none'"></a> 
	 
	 <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%BB%D0%B8%D0%BD%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Clay%27s_Texture_%2829309859%29.jpg/220px-Clay%27s_Texture_%2829309859%29.jpg" width="31.3%" onerror = "this.style.display = 'none'"></a> 
	 
	 <a href="http://stroyres.net/kamennye-materialy/glina" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/Lbm7rp_sCR-vA7q7Z07Br1AXGCyTg0dM7ZV-ZErBRb9cENzxsyLsWSIUlWUH0DL7x7_qh9K12s8dfnuHMFJne1iAaZIwMCYIep0vVfbFb_oHMpuARYGX_hxPdeLqaSw" width="36.1%" onerror = "this.style.display = 'none'"></a>
	 
	 <a href="http://stroyres.net/kamennye-materialy/glina" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/aYgXWEi_Ltymzh9MezyKKmlh08JwUF5Egi0HCetVHJnskzfpTjCaT2Dl7U-RfJQ5wPJymAD7wBvsM7Eqm-ptJF9j1p8Gu80huAhIMzi9OucKsUu8T-B9RHamrY8n-4M" width="36.1%" onerror = "this.style.display = 'none'"></a>
	 </div>
	 @endif
	 
	 
	 
	 @if(($searchString=='герб')or($searchString=='герб украины'))
	 
	 
	 <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;"> 
	<p>Герб</p>
     <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B5%D1%80%D0%B1_%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D1%8B" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Lesser_Coat_of_Arms_of_Ukraine.svg/1200px-Lesser_Coat_of_Arms_of_Ukraine.svg.png" width="21.5%"></a> 
	 
	 <a href="https://www.bbc.com/ukrainian/ukraine_in_russian/2013/08/130822_ru_s_coat_of_arms_ukraine" target="_blank"><img src="https://ichef.bbci.co.uk/news/640/amz/worldservice/live/assets/images/2013/08/20/130820092304_big_coat_of_arms_ukraine_project_224x280_unian.jpg" width="24%"></a> 
	 
	 <a href="https://www.gazeta.ru/politics/2020/11/26_a_13375489.shtml" target="_blank"><img src="https://img.gazeta.ru/files3/495/13375495/ak-pic4_zoom-1500x1500-61265.jpg" width="53%"></a>
	 </div>
	 
	 
	 
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;"> 
     <b>Герб</b> Чернигова — <b>герб</b> города Чернигов, утверждённый 1 декабря 1992 года Черниговским городским советом. Он состоит из серебряного щита, на котором расположен чёрный коронованный орёл с золотым клювом и лапами. Орёл держит левой лапой по диагонали золотой крест.
	 <br>
	 <br>
	 <a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B5%D1%80%D0%B1_%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2%D0%B0#:~:text=%D0%93%D0%B5%CC%81%D1%80%D0%B1%20%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%CC%81%D0%B3%D0%BE%D0%B2%D0%B0%20%E2%80%94%20%D0%B3%D0%B5%D1%80%D0%B1%20%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B0%20%D0%A7%D0%B5%D1%80%D0%BD%D0%B8%D0%B3%D0%BE%D0%B2,%D0%BB%D0%B0%D0%BF%D0%BE%D0%B9%20%D0%BF%D0%BE%20%D0%B4%D0%B8%D0%B0%D0%B3%D0%BE%D0%BD%D0%B0%D0%BB%D0%B8%20%D0%B7%D0%BE%D0%BB%D0%BE%D1%82%D0%BE%D0%B9%20%D0%BA%D1%80%D0%B5%D1%81%D1%82.">Герб Чернигова — Википедия</a>
	 </div>
	 @endif
	 
	 
	 
	 @if(($searchString=='hirens boot cd')or($searchString=='хиренс бут сд'))
	 <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;"> 
	<p>Hirens boot cd</p>
     <a href="https://chip-centr.ru/cto-takoe-i-kak-polzovatsa-hirens-boot-cd" target="_blank"><img src="https://chip-centr.ru/wp-content/uploads/2012/11/hiren_01.jpg" width="37.2%"></a> 
	 
	 <a href="https://activator-microsoft.ru/hirens-bootcd-17/" target="_blank"><img src="https://activator-microsoft.ru/wp-content/uploads/2019/03/hirens-bootcd-11441-511.jpg" width="33%"></a> 
	 
	 <a href="https://www.malavida.com/ru/soft/hirens-bootcd/#gref" target="_blank"><img src="https://imag.malavida.com/mvimgbig/download-fs/hirens-bootcd-11441-1.jpg" width="28.5%"></a>
	 </div>
	 @endif
	 
	 
	 
	 
	 
	 @if((strpos($searchString,'универсология')!==false)or(strpos($searchString,'моделирование здорово')!==false)
   or(strpos($searchString,' психодиагн')!==false)or(strpos($searchString,'психодиагн')!==false))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">

<div id="menu_uni"></div>
<div id="loading">
  <p><img src="https://dinosa.ru/local/templates/dinosa/images/loading--big.gif" /></p>
</div>
<script>

window.onload = function() {
  if($("menu_uni").load("/menu_uni")){
        $("#menu_uni").load("/menu_uni");
    $('#loading').hide();
  }
  else
  {
    $('#loading').show();
  }

}
//document.querySelector('.out').innerHTML = html;
</script>
    <hr>
		
	          <a href="http://go3.com.ua/public/searchuni?_token=Ks938li92sMDM2eOdCWh65wVTE0zXjvMtSH0wBKO&searchString=%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F">Перейти к разделу Универсология</a>
	      <hr>
	      <p><font color="gray">Универсологические темы:</font></p>
		 
			  <a href="http://go3.com.ua/public/searchuni?_token=iqGDmWVdJ28vGTG6G7EQjvitXdUQlecL5xUyz8Ys&searchString=%D0%BA%D0%B0%D0%BF%D1%81%D0%B8%D0%B4">капсид</a><br>
		  КаПсиД - является экспресс-методом позволяющим без значительного оснащения и за короткий промежуток времени осуществить психологическое исследование личности. ...
          <br><br>
		  <a href="http://go3.com.ua/public/searchuni?_token=Ks938li92sMDM2eOdCWh65wVTE0zXjvMtSH0wBKO&searchString=%D1%83%D0%BD%D0%B8%D0%B2%D0%B5%D1%80%D1%81%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%8F">универсология</a><br>
		  Универсология как научная ПАРАДИГМА ПЕРЕХОДА от прежней эпохи к новой ... Универсология – учение о Причинности и Синтезе.
		  <br><br>
		  <a href="http://go3.com.ua/public/searchuni?_token=Ks938li92sMDM2eOdCWh65wVTE0zXjvMtSH0wBKO&searchString=%D0%BC%D0%BE%D0%B4%D0%B5%D0%BB%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5+%D0%B7%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE+%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%B0+%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8">моделирование здорового образа жизни</a><br>
		  УДК 371.487.37.52 АШ. Рустамов МОДЕЛИРОВАНИЕ ФОРМИРОВАНИЯ У СТАРШИХ ШКОЛЬНИКОВ ПРЕДСТАВЛЕНИЙ О ЗДОРОВОМ ОБРАЗЕ ЖИЗНИ Аннотация. ...
		  
		  <br><br>
		  <a href="http://go3.com.ua/public/searchuni?_token=ynV6JOTEMsQdsToS4K7AP0xTSHcQtrrt8t2C6R9Q&searchString=%D0%9A%D0%B0%D1%80%D0%B4%D0%B8%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F+%D0%BF%D1%81%D0%B8%D1%85%D0%BE%D0%B4%D0%B8%D0%B0%D0%B3%D0%BD%D0%BE%D1%81%D1%82%D0%B8%D0%BA%D0%B0">кардинальная психодиагностика</a><br>
		  Кардинальная психодиагностика - метод психологического исследования : Метод КАПСИД в психотерапии и акмеологическом психофьючеринге. Психология управления системными ...

		  <br><br>
		  <hr>
		  <p><i><font color="gray">Картинки по теме:</font></i></p>
		  <a href="https://new-age-spirit.my1.ru/publ/otvety_na_voprosy/put_uchenika_i_obraz_ego_zhizni_obmen_opytom/4-1-0-31"><img src="http://new-age-spirit.my1.ru/_pu/0/s60932989.jpg" width="58.2%"></a>
		  <a href="https://new-age-spirit.my1.ru/publ/otvety_na_voprosy/put_uchenika_i_obraz_ego_zhizni_obmen_opytom/4-1-0-31"><img src="http://new-age-spirit.my1.ru/_pu/0/s97653464.jpg" width="40.9%"></a><br><br>
          <a href="https://present5.com/mezhdunarodnaya-nauchnaya-shkola-universologii-mnshu-shkola-sistemnogo-mirovozzreniya/"><img src="https://present5.com/presentation/-134373583_439582874/image-8.jpg" width="49.6%"></a>
		  <a href="https://present5.com/mezhdunarodnaya-nauchnaya-shkola-universologii-mnshu-shkola-sistemnogo-mirovozzreniya/"><img src="https://present5.com/presentation/-134373583_439582874/image-12.jpg" width="49.5%"></a>
	</div>
	@endif
	
	
	
<!-----part biology----->

  @if((strpos($searchString,'биология')!==false)or(strpos($searchString,'организм чел')!==false)or(strpos($searchString,'система организма чел')!==false)or(strpos($searchString,'днк')!==false))
  <div style="background: #fff;
    margin:20px;
  padding:10px;
  color:black;
  width:700px;
    text-align: left;
    border-radius:4px;
  border: 1px double #D8D8D8;">

    <div id="menu_bio"></div>
<div id="loading">
  <p><img src="https://dinosa.ru/local/templates/dinosa/images/loading--big.gif" /></p>
</div>

<script>

window.onload = function() {
  if($("menu_bio").load("/menu_bio")){
        $("#menu_bio").load("/menu_bio");
    $('#loading').hide();
  }
  else
  {
    $('#loading').show();
  }

}
//document.querySelector('.out').innerHTML = html;
</script>

    <hr>
            <a href="http://go3.com.ua/public/searchbio?_token=Ks938li92sMDM2eOdCWh65wVTE0zXjvMtSH0wBKO&searchStringBio=биология">Перейти к разделу Биология</a>
        <hr>
        <p><font color="gray">Биологические темы:</font></p>

        <a href="https://www.youtube.com/watch?v=c9vX8i_OI9o">"ДНК": "Нашла чужого папу?" - YouTube</a><br>
      Женщина привела в свой дом пенсионера, ведущего аморальный образ жизни. Отмыла, откормила, восстановила документы, потому
          <br><br>
      <a href="https://www.youtube.com/watch?v=7OkptTZoyNk">"ДНК": "Родила после изнасилования или измены?"</a><br>
      Бывший муж заявляет, что жена ему изменяла и требует тест ДНК на дочь. Жена в ответ обвиняет его в изнасиловании.
      <br><br>
      <a href="https://www.youtube.com/watch?v=kgxVEPxuSN8">"Украденный 20 лет назад сын? Тесты ДНК!" - YouTube</a><br>
      Родители, у которых 20 лет назад в Кургане украли 3-летнего сына Андрюшу, встретились в студии программы «ДНК» с 22-летним

      <br><br>
      <a href="https://www.youtube.com/watch?v=wy84zoqfzBs">"ДНК": "Считала мертвой или сама отказалась?" - YouTube</a><br>
      Во время поиска работы жительница Братска с ужасом узнала, что она не родная дочь своим родителям. Предполагаемая биологическая

      <br><br>
      <hr>
      <p><i><font color="gray">Картинки по теме:</font></i></p>
      <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B5%D0%B7%D0%BE%D0%BA%D1%81%D0%B8%D1%80%D0%B8%D0%B1%D0%BE%D0%BD%D1%83%D0%BA%D0%BB%D0%B5%D0%B8%D0%BD%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BA%D0%B8%D1%81%D0%BB%D0%BE%D1%82%D0%B0"><img src="https://upload.wikimedia.org/wikipedia/commons/4/4c/DNA_Structure%2BKey%2BLabelled.pn_NoBB.png" width="39.50%"></a>
      <a href="https://udpu.edu.ua/vstup/speciality/pgf/091-biolohiia"><img src="https://udpu.edu.ua/images/public/centers/897/091.jpg" width="59.50%"></a><br><br>
          <a href="https://www.opiq.ee/kit/73/chapter/3621"><img src="https://astrablobs.blob.core.windows.net/kitcontent/b3cf9336-9f54-4b00-8a51-5702ee7b6297/4e54fe47-1bba-43c8-8fce-0f716954c044/9d9603f0-5646-4418-9be9-1404b70e1746_m.jpg" width="52%"></a>
      <a href="https://www.27gp.by/informatsiya/sovety-dlya-patsientov/1173-vliyanie-kureniya-na-organizm-cheloveka"><img src="https://www.27gp.by/images/news/100.jpg" width="47%"></a>

  </div>
  @endif


  <!---------port biology----------->



	@if((strpos($searchString,'joomla')!==false)or(strpos($searchString,'джумла')!==false))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Joomla! Downloads</p>
    Скачайте бесплатно CMS с открытым исходным кодом <b>Joomla</b>! и начните строить ваш удивительный сайт.
	<br><br>
	<a href="https://downloads.joomla.org/ru/cms/joomla3/3-9-23/Joomla_3-9-23-Stable-Full_Package.zip?format=zip">Скачать Joomla! 3.9.23. English (UK), 3.9.23 Полный пакет, ZIP
	 </a><br>
	<a href="https://downloads.joomla.org/ru/cms/joomla3/3-9-23">Пакеты обновления. Joomla! 3 - пакеты обновления
	 </a>
	</div>
	@endif
	
	
	
	@if(($searchString=='хостинги')or($searchString=='хостинг'))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Хостинги</p>
     <a href="https://ktonanovenkogo.ru/vokrug-da-okolo/hosting/xosting-chto-eto-takoe-kakoj-hosting-vybrat.html" target="_blank"><img src="https://ktonanovenkogo.ru/image/hosting-chto-eto-takoe.jpg" width="30%"></a> 
	 
	 <a href="https://uguide.ru/zarubezhnyj-hosting-nezavisimyj-obzor-inostrannyh-hosting-provajderov" target="_blank"><img src="https://uguide.ru/_nw/3/65157966.png" width="31.4%"></a> 
	 
	 <a href="https://impossible-studio.com/%D1%80%D0%B5%D0%B9%D1%82%D0%B8%D0%BD%D0%B3-%D1%85%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B3%D0%BE%D0%B2-2020/" target="_blank"><img src="https://impossible-studio.com/wp-content/uploads/2018/09/%D1%80%D0%B5%D0%B9%D1%82%D0%B8%D0%BD%D0%B3-%D1%85%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B3%D0%BE%D0%B2.jpg" width="37.3%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='опд расшифровка')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
     Организационно-правовые документы (<b>ОПД</b>) являются правовой основой деятельности организации и содержат положения, основанные на нормах административного права и обязательные для исполнения.
	 <br><br>
	 <a href="https://documentolog.kz/faq/show/4#:~:text=%D0%9E%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%2D%D0%BF%D1%80%D0%B0%D0%B2%D0%BE%D0%B2%D1%8B%D0%B5%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D1%8B%20(%D0%9E%D0%9F%D0%94),%D0%BF%D1%80%D0%B0%D0%B2%D0%B0%20%D0%B8%20%D0%BE%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%B4%D0%BB%D1%8F%20%D0%B8%D1%81%D0%BF%D0%BE%D0%BB%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F." target="_blank">Что такое ОРД и ОПД? — Documentolog</a>
	</div>
	@endif
	
	
	
	@if($searchString=='украинский язык исторические факты появления')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<table style="border: 1px solid #F2F2F2;" width="100%" cellpadding="5">
   <tr>
    <th style="padding:10px;"><p>исторические факты появления</p><font color="gray">istoricheskiye fakty poyavleniya</font></th>
    <th style="padding:10px; background: #FAFAFA;"><p>історичні факти появи</p><font color="gray">istorychni fakty poyavy</font></th>
   </tr>
 </table>
     
	 <br><br>
	 <a href="https://translate.google.com/?rlz=1C1CHBD_ruUA890UA890&sxsrf=ALeKk015f1EEtcBbcewZ1cPOg6j4QeGFYw:1606724465140&um=1&ie=UTF-8&hl=ru&client=tw-ob#ru/uk/%D0%B8%D1%81%D1%82%D0%BE%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5%20%D1%84%D0%B0%D0%BA%D1%82%D1%8B%20%D0%BF%D0%BE%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F" target="_blank">Открыть переводчик</a>
	</div>
	@endif
	
	
	@if($searchString=='как изменился украинский язык')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<table style="border: 1px solid #F2F2F2;" width="100%" cellpadding="5">
   <tr>
    <th style="padding:10px;"><p>как изменился</p><font color="gray">kak izmenilsya</font></th>
    <th style="padding:10px; background: #FAFAFA;"><p>як змінився</p><font color="gray">yak zminyvsya</font></th>
   </tr>
 </table>
     
	 <br><br>
	 <a href="https://translate.google.com/?rlz=1C1CHBD_ruUA890UA890&sxsrf=ALeKk015f1EEtcBbcewZ1cPOg6j4QeGFYw:1606724465140&um=1&ie=UTF-8&hl=ru&client=tw-ob#ru/uk/%D0%BA%D0%B0%D0%BA+%D0%B8%D0%B7%D0%BC%D0%B5%D0%BD%D0%B8%D0%BB%D1%81%D1%8F" target="_blank">Открыть переводчик</a>
	</div>
	@endif
	
	
	
	@if($searchString=='украинский язык был искусственно создан в 1794 году')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<table style="border: 1px solid #F2F2F2;" width="100%" cellpadding="5">
   <tr>
    <th style="padding:10px;"><p>был искусственно создан в 1794 году.</p><font color="gray">byl iskusstvenno sozdan v 1794 godu</font></th>
    <th style="padding:10px; background: #FAFAFA;"><p>був штучно створений в 1794 році.</p><font color="gray">buv shtuchno stvorenyy v 1794 rotsi</font></th>
   </tr>
 </table>
     
	 <br><br>
	 <a href="https://translate.google.com/?rlz=1C1CHBD_ruUA890UA890&sxsrf=ALeKk015f1EEtcBbcewZ1cPOg6j4QeGFYw:1606724465140&biw=1376&bih=699&um=1&ie=UTF-8&hl=ru&client=tw-ob#ru/uk/%D0%B1%D1%8B%D0%BB+%D0%B8%D1%81%D0%BA%D1%83%D1%81%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE+%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D0%BD+%D0%B2+1794+%D0%B3%D0%BE%D0%B4%D1%83" target="_blank">Открыть переводчик</a>
	</div>
	@endif
	
	
	
	@if($searchString=='missing')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<table style="border: 1px solid #F2F2F2;" width="100%" cellpadding="5">
   <tr>
    <th style="padding:10px;"><p>missing</p><font color="gray">mising</font></th>
    <th style="padding:10px; background: #FAFAFA;">отсутствует</p><font color="gray">otsutstvuyet</font></th>
   </tr>
 </table>
     <br><font color="gray"><i>Синонимы <b>missing</b>:</i><p>lost &middot; mislaid &middot; misplaced <br> nowhere to be found &middot; absent &middot; not present &middot; gone &middot; gone astray <br> unaccounted for</p></font>
	 <br><br>
	 <a href="https://translate.google.com.ua/?sl=en&tl=ru&text=missing&op=translate" target="_blank">Открыть переводчик</a>
	</div>
	@endif
	
	
	
	@if(($searchString=='снек')or($searchString=='снэк'))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<table style="border: 1px solid #F2F2F2;" width="100%" cellpadding="5">
   <tr>
    <td colspan="2"><a href="https://cookpad.com/ru/recipes/9190865-sniek-iz-polufabrikata" target="_blank"><img src="https://img-global.cpcdn.com/recipes/78c7fd71c1414af0/751x532cq70/sniek-iz-polufabrikata-%D0%BE%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D0%BE%D0%B5-%D1%84%D0%BE%D1%82%D0%BE-%D1%80%D0%B5%D1%86%D0%B5%D0%BF%D1%82%D0%B0.jpg" width="35%"></a> <a href="https://lvkava.com.ua/p735383436-snek-snack-smazenia.html" target="_blank"><img src="https://images.ua.prom.st/1233333595_snek-snack-do.jpg" width="28%"></a> <a href="https://bigl.ua/p1044950374-snek-dlya-zharki" target="_blank"><img src="https://images.ua.prom.st/2449371752_w640_h640_2449371752.jpg" width="16.5%"></a> <a href="https://zakaz.ua/ru/products/04820073100430/%D1%81%D0%BD%D0%B5%D0%BA-%D1%82%D0%BE%D0%BF_%D1%81%D0%BD%D0%B5%D0%BA-30%D0%B3-%D1%83%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0" target="_blank"><img src="https://img3.zakaz.ua/eepc.1304518915.20690e31@110526/eepc.1304518915.SNB6D069.obj.0.4.jpg.oe.jpg.pf.jpg.1350x.jpg" width="18.5%"></a></td>
   </tr>
   <tr>
     <td colspan="2"><h3>Снэк</h3><font color="gray">Тип блюда</font></td>
    </tr>
 </table>
     <br>Снэ́ки или снеки — в англоязычных странах общее название лёгких блюд, предназначенных для «перекуса» — утоления голода между основными приёмами пищи.
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BD%D1%8D%D0%BA" target="_blank">Википедия</a>
	</div>
	
	
	
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p>Популярные виды снеков</p></b>
    <p>
	&bull;&nbsp;Сухарики;
	<br>
	&bull;&nbsp;Крекеры;
	<br>
	&bull;&nbsp;Орехи;
	<br>
	&bull;&nbsp;Кондитерская соломка (сладкая и солёная);
	<br>
	&bull;&nbsp;Кукурузные палочки;
	<br>
	&bull;&nbsp;Шоколадные батончики;
	<br>
	&bull;&nbsp;Конфеты;
	<br>
	&bull;&nbsp;Чипсы;
	</p>
	<a href="http://kladovka.top/news?news_id=23" target="_blank">Ещё</a>
	<br><br>
	<a href="http://kladovka.top/news?news_id=23">Популярные виды снеков - Интернет магазин Кладовка</a>
	  </div>
	@endif
	
	
	
	@if($searchString=='девушка в юбке рисунок')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Девушка в юбке рисунок</p>
	<a href="https://ru.dreamstime.com/%D1%80%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA-%D1%81-%D0%B2%D0%BE%D0%B4%D0%BE%D0%BF%D0%BB%D0%B0%D1%81%D1%82%D0%BE%D0%BC-%D0%BC%D0%B8%D0%BB%D0%B5%D0%BD%D1%8C%D0%BA%D0%B0%D1%8F-%D0%B1%D0%B0%D0%BB%D0%B5%D1%80%D0%B8%D0%BD%D0%B0-%D0%BC%D0%BE%D0%BB%D0%BE%D0%B4%D0%B0%D1%8F-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0-%D0%B2-%D1%8E%D0%B1%D0%BA%D0%B5-%D1%82%D1%83%D1%82%D1%83-image156254778" target="_blank">
	<img src="https://thumbs.dreamstime.com/z/%D1%80%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA-%D1%81-%D0%B2%D0%BE%D0%B4%D0%BE%D0%BF%D0%BB%D0%B0%D1%81%D1%82%D0%BE%D0%BC-%D0%BC%D0%B8%D0%BB%D0%B5%D0%BD%D1%8C%D0%BA%D0%B0%D1%8F-%D0%B1%D0%B0%D0%BB%D0%B5%D1%80%D0%B8%D0%BD%D0%B0-%D0%BC%D0%BE%D0%BB%D0%BE%D0%B4%D0%B0%D1%8F-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0-%D0%B2-%D1%8E%D0%B1%D0%BA%D0%B5-%D1%82%D1%83%D1%82%D1%83-156254778.jpg" width="16.5%"></a> <a href="https://www.pinterest.co.uk/pin/527836018818323360/" target="_blank"><img src="https://i.pinimg.com/originals/7c/b8/4b/7cb84b3de5cefeeff315d1b0c459aff7.jpg" width="16.5%"></a> <a href="https://ru.pngtree.com/freepng/cute-girl-pink-skirt-girl-illustration-character-illustration-girl-in-pink-skirt_3932610.html" target="_blank"><img src="https://png.pngtree.com/png-clipart/20190120/ourlarge/pngtree-cute-girl-pink-skirt-girl-illustration-character-illustration-girl-in-pink-png-image_492549.jpg" width="23.5%"></a> <a href="https://www.pinterest.ru/pin/658088564288506763/" target="_blank"><img src="https://i.pinimg.com/originals/51/7d/bb/517dbbb2fc35ebee35b7646aa916dc36.png" width="16.5%"></a> <a href="http://www.youloveit.ru/creative/uroki_risovaniya/12387-kak-narisovat-yubku-iz-tyulya.html" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/-0CEEmdggGRufkxLqgHGymxRKxOET0PCwbdco2ITs_5mbmZtM2fB4o47XWj2HGtBMnaUPT0A7lGhDBjB6qV8GmH8pQcWveW5jXyd2sOIxC9bFcDrc5T33kb3wtKashiZjIQMAy7InXYG9QWvxC2A627lRp_TGdgFf4oANlU" width="24%"></a>
	
	
	
	<a href="https://ru.dreamstime.com/%D1%80%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA-%D1%81-%D0%B2%D0%BE%D0%B4%D1%8F%D0%BD%D1%8B%D0%BC-%D1%86%D0%B2%D0%B5%D1%82%D0%BE%D0%BC-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0-%D0%B2-%D1%80%D0%BE%D0%B7%D0%BE%D0%B2%D0%BE%D0%B9-%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%B5%D0%B9-%D0%B8-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B9-%D1%8E%D0%B1%D0%BA%D0%B5-image156254129" target="_blank">
	<img src="https://thumbs.dreamstime.com/b/%D1%80%D0%B8%D1%81%D1%83%D0%BD%D0%BE%D0%BA-%D1%81-%D0%B2%D0%BE%D0%B4%D1%8F%D0%BD%D1%8B%D0%BC-%D1%86%D0%B2%D0%B5%D1%82%D0%BE%D0%BC-%D0%B4%D0%B5%D0%B2%D1%83%D1%88%D0%BA%D0%B0-%D0%B2-%D1%80%D0%BE%D0%B7%D0%BE%D0%B2%D0%BE%D0%B9-%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%B5%D0%B9-%D0%B8-%D0%B7%D0%B5%D0%BB%D0%B5%D0%BD%D0%BE%D0%B9-%D1%8E%D0%B1%D0%BA%D0%B5-156254129.jpg" width="20.6%"></a> <a href="https://pikabu.ru/story/kak_risovat_skladki_na_yubkakh_pixiv_4298607" target="_blank"><img src="https://cs4.pikabu.ru/post_img/2016/06/26/11/146696641913899936.jpg" width="19.5%"></a> <a href="https://purmix.ru/urok/kak_narisovat_devushku_v_yubke_karandashom_pojetapno.html" target="_blank"><img src="https://purmix.ru/images/uroki/karand/chelovek/kak_narisovat_devushku_v_yubke_karandashom-step-4.jpg" width="19.6%"></a> <a href="https://www.pngwing.com/ru/free-png-shezp" target="_blank"><img src="https://w7.pngwing.com/pngs/722/70/png-transparent-waist-skirt-top-sleeve-pattern-dress-blue-girl-top.png" width="19.4%"></a> <a href="https://bipbap.ru/kartinki-dlya-srisovki/risunki-devushek-v-platyah-karandashom-32-foto.html" target="_blank"><img src="https://bipbap.ru/wp-content/uploads/2020/03/Risunki-devushek-karandashom-v-polnyj-rost-v-platyah-23.jpg" width="18.3%"></a>
	</div>
	@endif
	
	
	
	
	@if($searchString=='как скачать все версии windows 10 с сайта майкрософт')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Как скачать Windows 10 ISO старых версий (оригинальные от Майкрософт)</p>
	<div class='video'>
	<iframe width="859" height="483" src="https://www.youtube.com/embed/-pIR8aZMnAE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br>
	<p>
	Способ загрузить оригинальные ISO образы Windows 10 x64 и 32-бит старых версий — 1507, 1511, 1607, 1703, 1709, 1803, 1809, 1903, 1909, 2004 с помощью утилиты Media Creation Tool
https://remontka.pro/download-old-win... — пошаговая текстовая инструкция
https://gist.github.com/AveYo/c74dc77... — страница загрузки BAT-файла
	</p>
	<a href="https://www.youtube.com/watch?v=-pIR8aZMnAE" target="_blank">Как скачать Windows 10 ISO старых версий (оригинальные от Майкрософт)</a>
	</div>
	
	
	
	
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Как скачать Windows 10 1903 прямо с сайта Майкрософт</p>
	<div class='video'>
	<iframe width="885" height="483" src="https://www.youtube.com/embed/I6oU5pgv5lc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br>
	<p>
	Простая и понятная инструкция: как скачать Windows 10 Майское Обновление 2019 года Русскую версию 1903 прямо с сайта Майкрософт. Нажми https://goo.gl/zTd1vQ подпишись на канал и включи колокольчик, чтобы не пропустить новое видео.
	</p>
	<a href="https://www.youtube.com/watch?v=I6oU5pgv5lc" target="_blank">Как скачать Windows 10 1903 прямо с сайта Майкрософт</a>
	</div>
	
	
	
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Скачать Windows 10 БЕСПЛАТНО с официального сайта на русском</p>
	<div class='video'>
	<iframe width="859" height="483" src="https://www.youtube.com/embed/YpW87I6XcSI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br>
	<p>
	Хотите скачать Windows 10 оригинальный бесплатно? Пошагово покажу и расскажу, как правильно скачать 10 на русском языке бесплатно, 64-х битный и 32-х битный, любой версии (выпуска). Кроме того, мы сразу запишем его на флешку, средствами Майкрософт.
	</p>
	<a href="https://www.youtube.com/watch?v=YpW87I6XcSI" target="_blank">Скачать Windows 10 БЕСПЛАТНО с официального сайта на русском</a>
	</div>
	
	
	
	
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Как скачать Windows 10 Pro и Home x64 и 32-бит ISO с официального сайта (новое)</p>
	<div class='video'>
	<iframe width="859" height="483" src="https://www.youtube.com/embed/ZYUHN7_Q_n4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br>
	<p>
	4 способа скачать Windows 10 64-бит и 32-бит (оригинальный образ ISO) Профессиональная (Pro) или Домашняя (Home) с официального сайта Майкрософт, при необходимости - с записью на флешку.
	</p>
	<a href="https://www.youtube.com/watch?v=ZYUHN7_Q_n4" target="_blank">Как скачать Windows 10 Pro и Home x64 и 32-бит ISO с официального сайта (новое)</a>
	</div>
	@endif
	
	
	
	@if($searchString=='нервная система человека')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://science.wikia.org/ru/wiki/%D0%9D%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank"><img src="https://static.wikia.nocookie.net/science/images/4/4e/File_TE-Nervous_system_diagram-ru%2B.jpg/revision/latest/scale-to-width-down/340?cb=20130604184445&path-prefix=ru" width="21.2%"></a>
	
	<a href="https://www.psychologos.ru/articles/view/nervnaya-sistema" target="_blank"><img src="https://www.psychologos.ru/images/1_1431676283.jpg" width="37.6%"></a>
	
	<a href="http://koi.tspu.ru/koi_books/sedokova/3.2.htm" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/hmnGvjni6nRcd-dpBrwO59W0KripVWAg2UYE4d3-Y_eVeVYsTsS3JSm9VDwu_bb7rCQm2lbPm7q5jFUVWtFxo0_LNIYXkbZq5BoS0Ho4E0WwoO2D" width="39.8%"></a>
	
	
	<b>Нервная система человека</b> часто делится на центральную <b>нервную систему</b> (ЦНС) и периферическую <b>нервную систему</b> (ПНС). ЦНС состоит из головного и спинного мозга. ПНС состоит из всех других нервов и нейронов, которые не лежат в пределах ЦНС. Преобладающее большинство нервов принадлежит ПНС.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0_%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0#:~:text=%D0%9D%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%20%D1%87%D0%B5%D0%BB%D0%BE%D0%B2%D0%B5%D0%BA%D0%B0%20%D1%87%D0%B0%D1%81%D1%82%D0%BE%20%D0%B4%D0%B5%D0%BB%D0%B8%D1%82%D1%81%D1%8F,%D0%9F%D1%80%D0%B5%D0%BE%D0%B1%D0%BB%D0%B0%D0%B4%D0%B0%D1%8E%D1%89%D0%B5%D0%B5%20%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B8%D0%BD%D1%81%D1%82%D0%B2%D0%BE%20%D0%BD%D0%B5%D1%80%D0%B2%D0%BE%D0%B2%20%D0%BF%D1%80%D0%B8%D0%BD%D0%B0%D0%B4%D0%BB%D0%B5%D0%B6%D0%B8%D1%82%20%D0%9F%D0%9D%D0%A1.">Нервная система человека — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='периферическая нервная система')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://uchitel.pro/%D0%BF%D0%B5%D1%80%D0%B8%D1%84%D0%B5%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F-%D0%B8-%D0%B2%D0%B5%D0%B3%D0%B5%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F/" target="_blank"><img src="https://uchitel.pro/wp-content/uploads/2018/07/pereferiya.jpg" width="39.3%"></a>
	
	<a href="https://studme.org/103912/meditsina/perifericheskaya_nervnaya_sistema" target="_blank"><img src="https://studme.org/htm/img/14/1218/101.png" width="28.20%"></a>
	
	<a href="https://dr-zavalishin.ru/services/porajenii-perifericheskoi-ns/" target="_blank"><img src="https://dr-zavalishin.ru/upload/medialibrary/57e/57ee49865456dbe212389093073e0c6a.jpg" width="31.3%"></a>
	
	
	<b>Периферическая нервная система</b> — условно выделяемая часть <b>нервной</b> системы, находящаяся за пределами головного и спинного мозга. Она <b>состоит</b> из черепных и спинальных нервов, а также нервов и сплетений вегетативной <b>нервной</b> системы, соединяя центральную <b>нервную систему</b> с органами тела.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D0%B8%D1%84%D0%B5%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0#:~:text=%D0%9F%D0%B5%D1%80%D0%B8%D1%84%D0%B5%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%20%E2%80%94%20%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%BD%D0%BE%20%D0%B2%D1%8B%D0%B4%D0%B5%D0%BB%D1%8F%D0%B5%D0%BC%D0%B0%D1%8F,%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D1%83%D1%8E%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%83%20%D1%81%20%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B0%D0%BC%D0%B8%20%D1%82%D0%B5%D0%BB%D0%B0.">Периферическая нервная система — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  
	  
	  @if($searchString=='соматическая нервная система')
      <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.yaklass.ru/p/biologia/chelovek/nervnaia-sistema-16071/stroenie-nervnoi-sistemy-i-ee-znachenie-16072/re-549a1504-fec2-4f48-9d98-a5dffbec41b0" target="_blank"><img src="https://ykl-res.azureedge.net/f66e753b-637a-4bf3-b47b-4c4d70a4530b/nervnaia-systema.jpg" width="37.60%"></a>
	
	<a href="https://www.yaklass.ru/p/biologia/chelovek/nervnaia-sistema-16071/stroenie-nervnoi-sistemy-i-ee-znachenie-16072/re-549a1504-fec2-4f48-9d98-a5dffbec41b0" target="_blank"><img src="https://ykl-res.azureedge.net/9e94d47e-44fb-4a6d-8176-fe095da8b7f2/somatoformnaya-disfunktsiya-vegetativnoj-nervnoj-sistemy1.png" width="30.60%"></a>
	
	<a href="https://mega-talant.com/biblioteka/prezentaciya-perifericheskaya-nervnaya-sistema-85355.html" target="_blank"><img src="https://mega-talant.com/uploads/files/130595/85355/90193_images/7.jpg" width="30.60%"></a>
	
	
	Соматическая нервная система — часть нервной системы человека, представляющая собой совокупность афферентных и эфферентных нервных волокон, иннервирующих мышцы, кожу, суставы.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0">Википедия</a>
	  </div>

	  
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p><a href="https://www.yaklass.ru/p/biologia/chelovek/nervnaia-sistema-16071/stroenie-nervnoi-sistemy-i-ee-znachenie-16072/re-549a1504-fec2-4f48-9d98-a5dffbec41b0" target="_blank">Отделы нервной системы — урок. Биология, Человек (8 класс).</a></p>
	Соматическая нервная система регулирует работу скелетных мышц, осуществляя связь организма с внешней средой (посредством соматической ...
	<br><br>
	<h4>Похожие запросы</h4>
  <div class="accordion"> 
   <div class="tab">
    <input type="checkbox" id="tab1" name="tab-group">
    <label for="tab1" class="tab-title">Чем управляет соматическая нервная система?</label> 
    <section class="tab-content"> 
     Функции соматической нервной <b>системы</b>

<b>Соматический</b> отдел, регулирующий деятельность и поведение организма в соответствие с условиями внешней среды и степени её воздействия, осознанно <b>управляет</b> нашим организмом. <b>Соматическая нервная система</b> регулирует работу поперечнополосатой мышечной ткани скелетных мышц.
<br><br>
<a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank">Соматическая нервная система — Википедия</a>
    </section> 
   </div> 
   <div class="tab">
    <input type="checkbox" id="tab2" name="tab-group">
    <label for="tab2" class="tab-title">Что такое вегетативная?</label> 
    <section class="tab-content"> 
     <b>Вегетативная</b> нервная система — отдел нервной системы, регулирующий деятельность внутренних органов, желёз внутренней и внешней секреции, кровеносных и лимфатических сосудов. Играет ведущую роль в поддержании постоянства внутренней среды организма и в приспособительных реакциях всех позвоночных.
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D0%B3%D0%B5%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank">Вегетативная нервная система — Википедия</a>
    </section> 
   </div> 
   <div class="tab">
    <input type="checkbox" id="tab3" name="tab-group">
    <label for="tab3" class="tab-title">Что такое парасимпатический отдел нервной системы?</label>
    <section class="tab-content">
     <b>Парасимпатическая нервная система</b> — часть вегетативной <b>нервной системы</b>, связанная с симпатической <b>нервной системой</b> и функционально ей противопоставляемая, поддерживает гомеостаз. В <b>парасимпатической нервной системе</b> находятся ганглии (<b>нервные</b> узлы).
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B0%D1%80%D0%B0%D1%81%D0%B8%D0%BC%D0%BF%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank">Парасимпатическая нервная система — Википедия</a>
    </section>
   </div>
   <div class="tab">
    <input type="checkbox" id="tab3" name="tab-group">
    <label for="tab3" class="tab-title">Что относится к периферической нервной системе?</label>
    <section class="tab-content">
     <b>Периферическая нервная система</b> — условно выделяемая часть <b>нервной системы</b>, находящаяся за пределами головного и спинного мозга. Она состоит из черепных и спинальных <b>нервов</b>, а также <b>нервов</b> и сплетений вегетативной <b>нервной системы</b>, соединяя центральную <b>нервную систему</b> с органами тела.
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%80%D0%B8%D1%84%D0%B5%D1%80%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank">Периферическая нервная система — Википедия</a>
    </section>
   </div>
   <div class="tab">
    <input type="checkbox" id="tab3" name="tab-group">
    <label for="tab3" class="tab-title">В чем разница между симпатической и парасимпатической?</label>
    <section class="tab-content">
     <b>Парасимпатический</b> отдел имеет более ограниченную область иннервации, иннервируя только внутренние органы. <b>Симпатический</b> же отдел иннервирует все органы и ткани.
	 <br><br>
	 <a href="https://znanija.com/task/30129312" target="_blank">Чем симпатический отдел автономной нервной системы - Знания</a>
    </section>
   </div>
  </div>
</div>

@endif




@if($searchString=='автономная нервная система')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D0%B3%D0%B5%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Gray839.png/350px-Gray839.png" width="17%"></a>
	
	<a href="https://www.psychologos.ru/articles/view/vegetativnaya-nervnaya-sistema" target="_blank"><img src="https://www.psychologos.ru/images/1_1431675943.jpg" width="47%"></a>
	
	<a href="https://www.wellcomclub.ru/blog/vopros-5-vegetativnaya-nervnaya-sistema-metody-raboty-s-vegetatikami/" target="_blank"><img src="https://www.wellcomclub.ru/upload/medialibrary/4a4/4a445b76e3b14883071a43f1afb550c8.jpg" width="34%"></a>
	
	
	Вегетативная <b>нервная система</b> — отдел <b>нервной системы</b>, регулирующий деятельность внутренних органов, желёз внутренней и внешней секреции, кровеносных и лимфатических сосудов. Играет ведущую роль в поддержании постоянства внутренней среды организма и в приспособительных реакциях всех позвоночных.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B5%D0%B3%D0%B5%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F_%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0#:~:text=%D0%92%D0%B5%D0%B3%D0%B5%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%B0%D1%8F%20%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%B0%D1%8F%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0%20%E2%80%94%20%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%20%D0%BD%D0%B5%D1%80%D0%B2%D0%BD%D0%BE%D0%B9,%D0%B2%20%D0%BF%D1%80%D0%B8%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D1%85%20%D1%80%D0%B5%D0%B0%D0%BA%D1%86%D0%B8%D1%8F%D1%85%20%D0%B2%D1%81%D0%B5%D1%85%20%D0%BF%D0%BE%D0%B7%D0%B2%D0%BE%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D1%85.">Вегетативная нервная система — Википедия</a>
	  </div>
	  @endif
	  
	  
	  @if($searchString=='пищеварительная система животных')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
     К аппарату пищеварения относятся: ротовая полость, глотка, верхний пищевод, зоб, нижний пищевод, железистая часть желудка, мышечная часть желудка, тонкий отдел кишечника, слепые отростки, прямая кишка и клоака. Сюда же относятся застойные <b>пищеварительные</b> железы — печень и поджелудочная железа.
	 <br><br>
	 <a href="https://studref.com/340456/agropromyshlennost/pischevaritelnaya_sistema#:~:text=%D0%9A%20%D0%B0%D0%BF%D0%BF%D0%B0%D1%80%D0%B0%D1%82%D1%83%20%D0%BF%D0%B8%D1%89%D0%B5%D0%B2%D0%B0%D1%80%D0%B5%D0%BD%D0%B8%D1%8F%20%D0%BE%D1%82%D0%BD%D0%BE%D1%81%D1%8F%D1%82%D1%81%D1%8F%3A%20%D1%80%D0%BE%D1%82%D0%BE%D0%B2%D0%B0%D1%8F,%D0%B6%D0%B5%D0%BB%D0%B5%D0%B7%D1%8B%20%E2%80%94%20%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D1%8C%20%D0%B8%20%D0%BF%D0%BE%D0%B4%D0%B6%D0%B5%D0%BB%D1%83%D0%B4%D0%BE%D1%87%D0%BD%D0%B0%D1%8F%20%D0%B6%D0%B5%D0%BB%D0%B5%D0%B7%D0%B0." target="_blank">ПИЩЕВАРИТЕЛЬНАЯ СИСТЕМА - Анатомия животных</a>
	</div>
	@endif
	
	
	
	
	@if($searchString=='пищеварительная система беспозвоночных')
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <a href="index#gsc.tab=1&gsc.q=пищеварительная система беспозвоночных&gsc.sort=" target="_blank"><img src="https://www.booksite.ru/fulltext/1/001/009/001/221417987.jpg" width="140" style="float:right;margin: 4px 1px 70px 15px; border-radius:5px;"></a><b>беспозвоночных</b>, наряду с передней и средней кишкой, имеется задняя эктодермальная кишка с анальным отверстием. У моллюсков глотка снабжена роговыми челюстями, тёркой (радулой) и слюнными железами, имеются пищевод, желудок с объёмистой <b>пищеварительной</b> железой (печенью), тонкая и задняя кишка.
	  <br>
	  <br>
	  <br>
	  <br>
	  <a href="https://www.booksite.ru/fulltext/1/001/008/089/454.htm#:~:text=%D0%B1%D0%B5%D1%81%D0%BF%D0%BE%D0%B7%D0%B2%D0%BE%D0%BD%D0%BE%D1%87%D0%BD%D1%8B%D1%85%2C%20%D0%BD%D0%B0%D1%80%D1%8F%D0%B4%D1%83%20%D1%81%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B4%D0%BD%D0%B5%D0%B9%20%D0%B8,)%2C%20%D1%82%D0%BE%D0%BD%D0%BA%D0%B0%D1%8F%20%D0%B8%20%D0%B7%D0%B0%D0%B4%D0%BD%D1%8F%D1%8F%20%D0%BA%D0%B8%D1%88%D0%BA%D0%B0." target="_blank">Пищеварительная система</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='эпителий')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://ru.wikipedia.org/wiki/%D0%AD%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D0%B8%D0%B9" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Epithelial_Tissues_Stratified_Squamous_Epithelium_%2840230842160%29.jpg/350px-Epithelial_Tissues_Stratified_Squamous_Epithelium_%2840230842160%29.jpg" width="35.4%"></a>
	
	<a href="https://biocpm.ru/tkani-cheloveka" target="_blank"><img src="https://drive.tiny.cloud/1/mpxctvrfs7bgdjjq4lp96063c8c19wp62cy7linqdkyij4ht/8b25f1f0-9806-497b-81db-14cd4ecb961e" width="47.4%"></a>
	
	<a href="http://koi.tspu.ru/koi_books/kayumova/lb1hod.htm" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/RS_xDC8S7qh73UVBDRJmNIT_nP08gvpfAkwYnmGdUHnlzMj31kn1-2Zyh9oP90sSKlBkP27SyXk-FxcLNho_vgFWYpJr5VZMJGYNZ5G9e_E" width="15.8%"></a>
	ἐπι- — «сверх-» и θηλή — «сосок молочной железы»), или эпителиа́льная ткань — совокупность полярных дифференцированных клеток, тесно прилегающих друг к другу в виде пласта, лежащего на базальной мембране. <b>Эпителий</b> лежит на границе внешней или внутренней среды организма и образует большую часть желёз.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%AD%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D0%B8%D0%B9#:~:text=%E1%BC%90%CF%80%CE%B9%2D%20%E2%80%94%20%C2%AB%D1%81%D0%B2%D0%B5%D1%80%D1%85%2D%C2%BB,%D0%B8%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D0%B5%D1%82%20%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D1%83%D1%8E%20%D1%87%D0%B0%D1%81%D1%82%D1%8C%20%D0%B6%D0%B5%D0%BB%D1%91%D0%B7.">Эпителий — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  
	  @if($searchString=='сердечно сосудистая')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://www.tromboza.net/vsyo-o-tromboze/cardiovascular-system" target="_blank"><img src="https://www.tromboza.net/-/media/EMS/Conditions/Generics/Brands/Lovenox/LovenoxRU/450534929%20jpg.jpg?h=533&w=400&hash=2E0BB62590873B2BDFE08F166AAF9038C0CD0459&hash=2E0BB62590873B2BDFE08F166AAF9038C0CD0459&la=ru-RU" width="17.2%"></a>
	
	<a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%B5%D1%80%D0%B4%D0%B5%D1%87%D0%BD%D0%BE-%D1%81%D0%BE%D1%81%D1%83%D0%B4%D0%B8%D1%81%D1%82%D0%B0%D1%8F_%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Grafik_blutkreislauf.jpg/369px-Grafik_blutkreislauf.jpg" width="14.2%"></a>
	
	<a href="https://monolith.in.ua/pomosh-pri-dtp/serdechno-sosudistaja-sistema-cheloveka/" target="_blank"><img src="https://monolith.in.ua/wp-content/themes/monolith/images/need-dir/med/glava1/serdce-cheloveka.jpg" width="31.8%"></a>
	
	<a href="https://www.pinterest.ru/pin/472315079646688960/" target="_blank"><img src="https://i.pinimg.com/originals/0c/96/cd/0c96cd0a615c7741399c7e1a2c7c3812.jpg" width="34.7%"></a>
	<b>Сердечно-сосудистая система — система</b> органов, обеспечивающая циркуляцию крови в организме человека и животных.
	<br>
	<br>
	<a href="https://ru.wikipedia.org/wiki/%D0%AD%D0%BF%D0%B8%D1%82%D0%B5%D0%BB%D0%B8%D0%B9#:~:text=%E1%BC%90%CF%80%CE%B9%2D%20%E2%80%94%20%C2%AB%D1%81%D0%B2%D0%B5%D1%80%D1%85%2D%C2%BB,%D0%B8%20%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D1%83%D0%B5%D1%82%20%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D1%83%D1%8E%20%D1%87%D0%B0%D1%81%D1%82%D1%8C%20%D0%B6%D0%B5%D0%BB%D1%91%D0%B7.">Сердечно-сосудистая система — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if(($searchString=='arm')or($searchString=='фкь'))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
     <b>ARM</b> (архитектура) — микропроцессорная архитектура с сокращённым набором команд (RISC), разрабатываемая <b>ARM</b> Limited. <b>ARM</b> (компания) — британская компания, один из крупнейших разработчиков лицензиаров и производителей архитектуры 32-разрядных RISC-процессоров.
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/ARM#:~:text=ARM%20(%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0)%20%E2%80%94%20%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%BD%D0%B0%D1%8F%20%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0,32%2D%D1%80%D0%B0%D0%B7%D1%80%D1%8F%D0%B4%D0%BD%D1%8B%D1%85%20RISC%2D%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%BE%D0%B2." target="_blank">ARM — Википедия</a>
	</div>
	@endif
	
	
	@if(($searchString=='arm-процессоры')or($searchString=='arm процессоры'))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://itc.ua/articles/protsessoryi-arm-osobennosti-arhitekturyi-otlichiya-i-perspektivyi/" target="_blank"><img src="https://i0.wp.com/itc.ua/wp-content/uploads/2013/03/ARM_SOC_A15.jpg" width="34.3%"></a>
	
	<a href="https://www.ixbt.com/td/arm_and_mac.shtml" target="_blank"><img src="https://www.ixbt.com/td/arm_and_mac/Apple-A5-processor.jpg" width="33%"></a>
	
	<a href="https://www.iguides.ru/main/other/chem_razlichayutsya_arkhitektury_arm_i_x86/" target="_blank"><img src="https://www.iguides.ru/upload/iblock/7b1/7b15b00bdca54fedeffb4b7fa2190b38.jpg" width="31.4%"></a>
	

     Архитектура <b>ARM</b> (от англ. Advanced RISC Machine — усовершенствованная RISC-машина; иногда — Acorn RISC Machine) — система команд и семейство описаний и готовых топологий 32-битных и 64-битных микропроцессорных/микроконтроллерных ядер, разрабатываемых компанией <b>ARM</b> Limited.
	 <br><br>
	 <a href="https://ru.wikipedia.org/wiki/ARM#:~:text=ARM%20(%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0)%20%E2%80%94%20%D0%BC%D0%B8%D0%BA%D1%80%D0%BE%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%BD%D0%B0%D1%8F%20%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D0%B0,32%2D%D1%80%D0%B0%D0%B7%D1%80%D1%8F%D0%B4%D0%BD%D1%8B%D1%85%20RISC%2D%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D1%80%D0%BE%D0%B2." target="_blank">ARM (архитектура) — Википедия</a>
	</div>
	@endif
	
	
	@if($searchString=='список материнские платы асус 775 сокет')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p>Лучшие материнские платы для 775 сокета</p></b>
	<a href="index#gsc.tab=1&gsc.q=список материнские платы асус 775 сокет&gsc.sort=" target="_blank"><img src="https://te4h.ru/wp-content/uploads/2020/02/Luchshie-materinskie-platy-dlya-soketa-775-3.jpg" width="170" style="float:right;margin: -39px 1px 70px 10px; border-radius:5px;"></a>
    <p>
	&bull;&nbsp;<b>Asus</b> RAMPAGE EXTREME.
	<br>
	&bull;&nbsp;<b>Asus</b> P5E3 PRO. <b>Плата</b> является бюджетным вариантом материнки от фирмы <b>Asus</b> с использованием стандарта памяти DDR3. ...
	<br>
	&bull;&nbsp;<b>Asus</b> RAMPAGE FORMULA. ...
	<br>
	&bull;&nbsp;<b>Asus</b> P5E Deluxe. ...
	<br>
	&bull;&nbsp;MSI X48C Platinum. ...
	<br>
	&bull;&nbsp;Gigabyte GA-X48T-DQ6. ...
	<br>
	&bull;&nbsp;Gigabyte GA-X48-DQ6. ...
	<br>
	&bull;&nbsp;<b>Asus</b> P5Q3 Deluxe/WiFi-AP @n.
	</p>
	<a href="https://te4h.ru/luchshie-materinskie-platy-na-775-soket" target="_blank">Ещё</a>
	<br><br>
	<a href="https://te4h.ru/luchshie-materinskie-platy-na-775-soket">Лучшие материнские платы на 775 сокет | Te4h</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='gigabyte ga-g41m-combo поддерживаемые процессоры')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
     Материнская плата <b>GIGABYTE GA-G41M-COMBO поддерживает</b> память DDR2 и DDR3, высокоскоростной интерфейс Gigabit Ethernet, запатентованную технологию Dual BIOS. Плата <b>поддерживает</b> многоядерные <b>процессоры</b> Intel Core 2 и 45нм <b>процессоры</b> с частотой системной шины 1333 МГц.
	 <br><br>
	 <a href="https://fixer.com.ua/motherboards/gigabyte-ga-g41m-combo-v2.0_736913.html#:~:text=%D0%9C%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F%20%D0%BF%D0%BB%D0%B0%D1%82%D0%B0%20GIGABYTE%20GA%2DG41M%2DCOMBO%20%D0%BF%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%B8%D0%B2%D0%B0%D0%B5%D1%82%20%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C%20DDR2%20%D0%B8,%D1%87%D0%B0%D1%81%D1%82%D0%BE%D1%82%D0%BE%D0%B9%20%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D0%BD%D0%BE%D0%B9%20%D1%88%D0%B8%D0%BD%D1%8B%201333%20%D0%9C%D0%93%D1%86." target="_blank">GigaByte GA-G41M-COMBO V2.0, купить материнская плата в Киеве | FIXER</a>
	</div>
	  @endif
	  
	  
	  
	  @if($searchString=='gigabyte ga-g41m-combo оперативная память')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
     Ее максимальный объем <b>оперативной памяти</b> составляет 8 Гб. Для удобства пользователей имеется возможность выбрать двухканальный режим работы <b>оперативной памяти</b>. Частота <b>памяти</b> равна 1066 мегагерц. DDR3, DDR2 2 слота PC2-5300 (DDR2-667), PC2-6400 (DDR2-800), PC2-8500 (DDR2-1066).
	 <br><br>
	 <a href="https://www.oldi.ru/catalog/element/0147567/#:~:text=%D0%95%D0%B5%20%D0%BC%D0%B0%D0%BA%D1%81%D0%B8%D0%BC%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9%20%D0%BE%D0%B1%D1%8A%D0%B5%D0%BC%20%D0%BE%D0%BF%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D0%BE%D0%B9%20%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%B8,%D0%A7%D0%B0%D1%81%D1%82%D0%BE%D1%82%D0%B0%20%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D0%B8%20%D1%80%D0%B0%D0%B2%D0%BD%D0%B0%201066%20%D0%BC%D0%B5%D0%B3%D0%B0%D0%B3%D0%B5%D1%80%D1%86.&text=DDR3%2C%20DDR2%202%20%D1%81%D0%BB%D0%BE%D1%82%D0%B0%20PC2,8500%20(DDR2%2D1066)." target="_blank">Мат. плата GIGABYTE GA-G41M-COMBO — купить по лучшей цене в интернет-магазине OLDI в Москве — отзывы, характеристики, фото</a>
	</div>
	  @endif
	  
	  
	  @if($searchString=='подключение передней панели к материнской плате msi')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Подключение передней панели к материнской плате msi</p>
	<a href="index#gsc.tab=1&gsc.q=подключение передней панели к материнской плате msi&gsc.sort=" target="_blank"><img src="/public/images/motherboard.JPG" width="100%"></a>
	</div>
	@endif
	
	
	@if($searchString=='подключение передней панели к материнской плате asus')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Подключение передней панели к материнской плате asus</p>
	<a href="index#gsc.tab=1&gsc.q=подключение передней панели к материнской плате asus&gsc.sort=" target="_blank"><img src="/public/images/motherboard_connect.JPG" width="100%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='hdd led')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>hdd led</p>
	<a href="index#gsc.tab=1&gsc.q=hdd led&gsc.sort=" target="_blank"><img src="/public/images/hdd_led.JPG" width="100%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='micro-atx размеры')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=micro-atx размеры&gsc.sort=" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/%D0%9C%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%BF%D0%BB%D0%B0%D1%82%D0%B0_%D1%84%D0%BE%D1%80%D0%BC-%D1%84%D0%B0%D0%BA%D1%82%D0%BE%D1%80%D0%B0_MicroATX.jpg" width="170" style="float:right;margin: 1px 1px 70px 10px; border-radius:5px;"></a>
    <b>MicroATX</b> (µATX, <b>mATX</b>, uATX) — форм-фактор материнской платы 9,6х9,6" (244х244 мм), разработан Intel в 1997 году.
	<br><br><br><br><br><br><br><br><br>
	<a href="https://ru.wikipedia.org/wiki/MicroATX#:~:text=MicroATX%20(%C2%B5ATX%2C%20mATX%2C%20uATX,%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%D0%BD%20Intel%20%D0%B2%201997%20%D0%B3%D0%BE%D0%B4%D1%83.">microATX — Википедия</a>
	  </div>
	  @endif
	  
	  
	  @if($searchString=='atx размеры отверстий')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;">
	<table width="100%" cellpadding="5">
	<p>Размеры плат</p>
   <tr style="border: 1px double #D8D8D8;margin:20px;">
    <th style="padding:5px;">Название размера</th>
    <th>Размер в мм</th>
	<th>Размер в дюймах</th>
   </tr>
   <tr style="border: 1px double #D8D8D8;">
    <td style="padding:5px;"><b>ATX</b></td>
    <td>305 × 244</td>
	    <td>12 × 9,6</td>
  </tr>
     <tr style="border: 1px double #D8D8D8;">
    <td style="padding:5px;">Mini-<b>ATX</b></td>
    <td>284 × 208</td>
	    <td>11,2 × 8,2</td>
  </tr>
       <tr style="border: 1px double #D8D8D8;">
    <td style="padding:5px;">Micro-<b>ATX</b></td>
    <td>244 × 244</td>
	    <td>9,6 × 9,6</td>
  </tr>
       <tr style="border: 1px double #D8D8D8;">
    <td style="padding:5px;">Flex-<b>ATX</b></td>
    <td>229—244 × 190,5—244</td>
	    <td>9—9,6 × 7,5—9,6</td>
  </tr>
      
 </table>
	<br><br>
	<a href="https://ru.wikipedia.org/wiki/ATX">ATX — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='atx размеры отверстий')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>atx размеры отверстий</p>
	<a href="index#gsc.tab=1&gsc.q=atx размеры отверстий&gsc.sort=" target="_blank"><img src="/public/images/atx_size.JPG" width="100%"></a>
	</div>
	@endif
	
	
	
	@if($searchString=='atx блок питания размеры')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=atx блок питания размеры&gsc.sort=" target="_blank"><img src="/public/images/atx_blok_pitaniya_size.JPG" width="100%"></a>
	<br><br>
	Стандарт <b>ATX</b> и первоначальная версия EPS имеют 86 мм в высоту и 150 мм в ширину при глубине 140 мм - это те же самые <b>размеры</b>, что использовались в <b>БП</b> стандартов LPX и PS/2. Позднее спецификация EPS допустила возможность использования более крупного <b>блока питания</b> с глубиной корпуса 180 мм и 230 мм.
	<br><br><br>
	<a href="http://www.thg.ru/howto/obzor_blokov_pitaniya/onepage.html#:~:text=%D0%A1%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%20ATX%20%D0%B8%20%D0%BF%D0%B5%D1%80%D0%B2%D0%BE%D0%BD%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F%20%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F,180%20%D0%BC%D0%BC%20%D0%B8%20230%20%D0%BC%D0%BC.">Блоки питания: конструкция, форм-факторы и ... - THG.ru</a>
	</div>
	@endif
	
	
	
	
	@if($searchString=='atx и microatx разница')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=atx и microatx разница&gsc.sort=" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/f/ff/%D0%9C%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B0%D1%8F_%D0%BF%D0%BB%D0%B0%D1%82%D0%B0_%D1%84%D0%BE%D1%80%D0%BC-%D1%84%D0%B0%D0%BA%D1%82%D0%BE%D1%80%D0%B0_MicroATX.jpg" width="170" style="float:right;margin: 1px 1px 70px 10px; border-radius:5px;"></a>
    Материнские платы формата <b>MicroATX</b> могут использоваться в корпусах формата <b>ATX</b> (но не наоборот). Основные различия в форматах состоят в том, что на платах формата <b>MicroATX</b> сокращено количество разъемов PCI Express, а так же разъемов оперативной памяти. Это заготовка статьи о форм-факторах материнской платы.
	<br><br><br><br><br><br>
	<a href="https://ru.wikipedia.org/wiki/MicroATX#:~:text=%D0%9C%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%B8%D0%B5%20%D0%BF%D0%BB%D0%B0%D1%82%D1%8B%20%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B0%20MicroATX%20%D0%BC%D0%BE%D0%B3%D1%83%D1%82,%D0%BE%20%D1%84%D0%BE%D1%80%D0%BC%2D%D1%84%D0%B0%D0%BA%D1%82%D0%BE%D1%80%D0%B0%D1%85%20%D0%BC%D0%B0%D1%82%D0%B5%D1%80%D0%B8%D0%BD%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BF%D0%BB%D0%B0%D1%82%D1%8B.">microATX — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='matx это микро или мини')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=matx это микро или мини&gsc.sort=" target="_blank"><img src="https://procompy.ru/wp-content/uploads/2019/02/atx-vs-micro-atx-vs-mini-atx-1.jpg" width="230" style="float:right;margin: 1px 1px 70px 10px; border-radius:5px;"></a>
    <b>MicroATX</b> (µATX, <b>mATX</b>, uATX) — форм-фактор материнской платы 9,6х9,6" (244х244 мм), разработан Intel в 1997 году. Используется как для процессоров архитектуры x86, так и архитектуры x64.
	<br><br><br><br>
	<a href="https://4systems.ru/inf/matx-jeto-mini-ili-mikro/#:~:text=MicroATX%20(%C2%B5ATX%2C%20mATX%2C%20uATX,x86%2C%20%D1%82%D0%B0%D0%BA%20%D0%B8%20%D0%B0%D1%80%D1%85%D0%B8%D1%82%D0%B5%D0%BA%D1%82%D1%83%D1%80%D1%8B%20x64.">Matx это мини или микро</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='сборка пк с нуля')
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Сборка пк с нуля</p>
	<a href="http://www.compbegin.ru/articles/view/_95" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/8Yv96R6KbufiKQuHIikilSTpho4U4vjmAlnkYLrXyzPvNPqmYn_bGATjRKwcgOufghqI3qNkjn4hJ6QH-Y-8LADYqoQtEag" width="29.3%"></a>
	
	<a href="https://www.youtube.com/watch?v=hr-siRhvApM" target="_blank"><img src="https://i.ytimg.com/vi/hr-siRhvApM/maxresdefault.jpg" width="36%"></a>
	
	<a href="https://comptrick.ru/hardware/byudzhetnaya-sborka-pc-2020.html" target="_blank"><img src="https://comptrick.ru/wp-content/uploads/2020/01/byudzhetnaya-sborka-pc-2020.jpg" width="33.5%"></a>
	</div>
	@endif
	
	


	@if($searchString=='флеш память')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	
	<a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%BB%D0%B5%D1%88-%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/USB_flash_drive.JPG" width="29.5%"></a>
	
	<a href="https://www.cnews.ru/news/top/razrabotana_vechnaya_fleshpamyat" target="_blank"><img src="https://filearchive.cnews.ru/img/cnews/2012/12/04/440_e53ec.jpg" width="36%"></a>
	
	<a href="https://3dnews.ru/990629" target="_blank"><img src="https://3dnews.ru/assets/external/illustrations/2019/07/12/990629/nand2.jpg" width="33%"></a>
	
    В быту это словосочетание закрепилось за широким классом твердотельных устройств хранения информации. Благодаря компактности, дешевизне, механической прочности, большому объёму, скорости работы и низкому энергопотреблению, <b>флеш-память</b> широко используется в цифровых портативных устройствах и носителях информации.
	<br><br>
	<a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%BB%D0%B5%D1%88-%D0%BF%D0%B0%D0%BC%D1%8F%D1%82%D1%8C#:~:text=%D0%92%20%D0%B1%D1%8B%D1%82%D1%83%20%D1%8D%D1%82%D0%BE%20%D1%81%D0%BB%D0%BE%D0%B2%D0%BE%D1%81%D0%BE%D1%87%D0%B5%D1%82%D0%B0%D0%BD%D0%B8%D0%B5%20%D0%B7%D0%B0%D0%BA%D1%80%D0%B5%D0%BF%D0%B8%D0%BB%D0%BE%D1%81%D1%8C,%D0%BF%D0%BE%D1%80%D1%82%D0%B0%D1%82%D0%B8%D0%B2%D0%BD%D1%8B%D1%85%20%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0%D1%85%20%D0%B8%20%D0%BD%D0%BE%D1%81%D0%B8%D1%82%D0%B5%D0%BB%D1%8F%D1%85%20%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8.">Флеш-память — Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  
	  @if($searchString=='убрать автозагрузку виндовс 7')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	
	Для того, чтобы <b>убрать</b> программы из <b>автозагрузки в Windows 7</b>, нажмите клавиши Win + R на клавиатуре, а затем введите в строку «Выполнить» msconfig.exe и нажмите Ок. В открывшемся окне перейдите к вкладке «<b>Автозагрузка</b>».
	<br><br>
	<a href="https://remontka.pro/otklyuchit-avtozagruzku-windows/#:~:text=%D0%94%D0%BB%D1%8F%20%D1%82%D0%BE%D0%B3%D0%BE%2C%20%D1%87%D1%82%D0%BE%D0%B1%D1%8B%20%D1%83%D0%B1%D1%80%D0%B0%D1%82%D1%8C%20%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D1%8B,msconfig.exe%20%D0%B8%20%D0%BD%D0%B0%D0%B6%D0%BC%D0%B8%D1%82%D0%B5%20%D0%9E%D0%BA.&text=%D0%92%20%D0%BE%D1%82%D0%BA%D1%80%D1%8B%D0%B2%D1%88%D0%B5%D0%BC%D1%81%D1%8F%20%D0%BE%D0%BA%D0%BD%D0%B5%20%D0%BF%D0%B5%D1%80%D0%B5%D0%B9%D0%B4%D0%B8%D1%82%D0%B5%20%D0%BA%20%D0%B2%D0%BA%D0%BB%D0%B0%D0%B4%D0%BA%D0%B5%20%C2%AB%D0%90%D0%B2%D1%82%D0%BE%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%C2%BB.">Как отключить программы в автозагрузке Windows и зачем ...</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='папка автозагрузка windows 7')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	%USERPROFILE%\AppData\Roaming\<b>Microsoft</b>\<b>Windows</b>\Start Menu\Programs\Startup - это <b>папка</b>, программы из которой будут запускаться для текущего пользователя.
	<br><br>
	<a href="https://www.securitylab.ru/contest/384245.php#:~:text=%25USERPROFILE%25%5CAppData%5CRoaming%5C,%D0%B1%D1%83%D0%B4%D1%83%D1%82%20%D0%B7%D0%B0%D0%BF%D1%83%D1%81%D0%BA%D0%B0%D1%82%D1%8C%D1%81%D1%8F%20%D0%B4%D0%BB%D1%8F%20%D1%82%D0%B5%D0%BA%D1%83%D1%89%D0%B5%D0%B3%D0%BE%20%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8F.">Автозагрузка в Windows 7 - SecurityLab.ru</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='где находится папка автозагрузки в windows 10')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Папка "Автозагрузка"</b> в новых версиях <b>Windows находится</b> в системном разделе (обычно это диск С) и расположена по пути: Пользователи (Users) ⇒ <b>Папка</b> конкретного пользователя ⇒ AppData ⇒ Roaming ⇒ <b>Microsoft</b> ⇒ <b>Windows</b> ⇒ Главное меню (Start Menu) ⇒ Программы (Programs) ⇒ Атозагрузка (Startup).
	<br><br>
	<a href="https://www.chaynikam.info/avtozagruzka-v-windows-10-gde-nahoditsya.html#:~:text=%D0%9F%D0%B0%D0%BF%D0%BA%D0%B0%20%22%D0%90%D0%B2%D1%82%D0%BE%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%22%20%D0%B2%20%D0%BD%D0%BE%D0%B2%D1%8B%D1%85%20%D0%B2%D0%B5%D1%80%D1%81%D0%B8%D1%8F%D1%85,)%20%E2%87%92%20%D0%90%D1%82%D0%BE%D0%B7%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BA%D0%B0%20(Startup).">Где находится папка Автозагрузка в Windows 8, 10</a>
	  </div>
	  @endif
	  
	  
	  
	  @if($searchString=='штамм коронавируса')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	Новый <b>штамм коронавируса</b> (2019-nCoV) — это <b>штамм</b> поражающего человека <b>вируса</b>, который начал распространяться с декабря 2019 года. Специалисты в области здравоохранения бьют тревогу, поскольку этот новый малоизученный вирус в некоторых случаях может приводить к тяжелой болезни и вызывать пневмонию.
	<br><br>
	<a href="https://www.evergreenhealth.com/documents/Coronavirus/novel-coronavirus-facts-russian.pdf">Новый штамм коронавируса - EvergreenHealth</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if(($searchString=='север')or($searchString=='Север'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p><b>Север</b></p>
	<a href="https://www.google.com/maps/place/%D0%9A%D1%80%D0%B0%D0%B9%D0%BD%D0%B8%D0%B9+%D0%A1%D0%B5%D0%B2%D0%B5%D1%80,+%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F/@45.8944643,52.0245532,3z/data=!3m1!4b1!4m5!3m4!1s0x4464fa92bfc66be1:0x6d767d1832e1e63d!8m2!3d66.7613451!4d124.123753?hl=ru" target="_blank"><img src="/public/images/north.JPG" width="100%"></a>
	</div>
	@endif
	
	
	@if(($searchString=='восток')or($searchString=='Восток'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p><b>Восток</b></p>
	<a href="https://www.google.com/search?bih=752&biw=1440&rlz=1C1CHBD_ruUA890UA890&hl=ru&tbs=lf:1,lf_ui:1&tbm=lcl&sxsrf=ALeKk002Zum4uCpAoqOFTd4pN_y1vGphOQ:1610406395816&q=%D0%B2%D0%BE%D1%81%D1%82%D0%BE%D0%BA&rflfq=1&num=10&ved=2ahUKEwjMhqqp_5TuAhWvl4sKHR7TBj0QtgN6BAgMEAc#rlfi=hd:;si:;mv:[[54.2565214,35.428590899999996],[48.1352536,29.674201]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:1" target="_blank"><img src="/public/images/east.JPG" width="100%"></a>
		</div>
	
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Материалы по запросу <b>{{$searchString}}</b></p>
	<a href="https://ru.wikipedia.org/wiki/%D0%A1%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%8B_%D1%81%D0%B2%D0%B5%D1%82%D0%B0" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Compass_Rose_Russian_North.svg/1200px-Compass_Rose_Russian_North.svg.png" width="34.70%"></a>

	
	
	<a href="https://bmpd.livejournal.com/3330701.html" target="_blank"><img src="https://ic.pics.livejournal.com/imp_navigator/17993765/1912134/1912134_1000.jpg" width="64.70%"></a>
	</div>
	@endif
	
	
	
	@if(($searchString=='rtx 3060')or($searchString=='Rtx 3060')or($searchString=='RTX 3060'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p><b>rtx 3060</b></p>
	<a href="https://www.ixbt.com/news/2021/01/12/gigabyte-geforce-rtx-3060-12-gddr6.html" target="_blank"><img src="https://www.ixbt.com/img/n1/news/2021/0/2/GIGABYTE-GeForce-RTX-3060-12GB-EAGLE-OC1_large.jpg" width="42%"></a>
	
	<a href="https://www.nvidia.com/ru-ru/geforce/news/geforce-rtx-3060-ti-out-december-2/" target="_blank"><img src="https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/news/geforce-rtx-3060-ti-out-december-2/nvidia-geforce-rtx-3060-ti-announcement-article-key-visual.jpg" width="56%"></a>
	</div>
	@endif
	
	
	
	@if(($searchString=='Крис Малаховски')or($searchString=='крис малаховски'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Материалы по запросу <b>{{$searchString}}</b></p>
	<a href="https://techrocks.ru/2019/03/07/why-nvidia-engineer-never-works-on-weekends/" target="_blank"><img src="https://techrocks.ru/wp-content/uploads/2019/03/12552860_10153185744386020_.jpg" width="36.54%"></a>
	
	<a href="https://pikabu.ru/story/ot_videokart_k_iskusstvennomu_intellektu_put_nvidia_4686633" target="_blank"><img src="https://cs8.pikabu.ru/post_img/big/2016/12/15/6/1481789375117575007.jpg" width="36.69%"></a>
	
	<a href="http://www.trust.ua/news/77591-istoriya-brendov-Nvidia.html" target="_blank"><img src="https://lh3.googleusercontent.com/proxy/DMOgkuj_lc_zsj3yaFJaMYUiOzC-Vz9Hzb7uvdQ-yGLg71alVBrMICPveYkPZvYx_SKBzna6SKWGMCDccDkVpoqQN3e3tobjrnYnIDb_KbxBtw" width="25.57%"></a>
	</div>
	@endif
	
	
	
	@if(($searchString=='Кертис Прэм')or($searchString=='кертис прэм'))
	<style>
   .sign {
    float: left;
    border: 1px solid gray;
    padding: 0px;
    margin: 10px 0 5px 5px;
    background: #fff;
   }
   .sign figcaption {
    margin: 0 auto 5px;
   }
  </style>
	<div style="
    margin:15px;
	padding:0px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	">
<p>&nbsp;<a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=nvidia">Nvidia</a> > <a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=nvidia">Основатели</a> > <a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=%D0%BA%D0%B5%D1%80%D1%82%D0%B8%D1%81+%D0%BF%D1%80%D1%8D%D0%BC">Кертис Прэм</a></p>
	
  <figure class="sign">
   <a href="https://t0.gstatic.com/images?q=tbn:ANd9GcTEpH8AgtS8hg3rLNLAiRQ_MFqDvlxvt6lGS-KlEEfZe41Rxf5wUBTbm-fmn-YT"><img src="https://t0.gstatic.com/images?q=tbn:ANd9GcTEpH8AgtS8hg3rLNLAiRQ_MFqDvlxvt6lGS-KlEEfZe41Rxf5wUBTbm-fmn-YT" width="144.91"></a>
   <figcaption>&nbsp;<a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=%D0%94%D0%B6%D0%B5%D0%BD%D1%81%D0%B5%D0%BD+%D0%A5%D1%83%D0%B0%D0%BD%D0%B3">Дженсен Хуанг</a>
</figcaption>
  </figure>
  <figure class="sign">
   <a href="https://www.crunchbase.com/person/curtis-priem"><img src="https://res-1.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/krpbwpg3fbgj0zblddem" width="213.81"></a>
   <figcaption>&nbsp;<a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=%D0%BA%D0%B5%D1%80%D1%82%D0%B8%D1%81+%D0%BF%D1%80%D1%8D%D0%BC">Кертис Прэм</a></figcaption>
  </figure>
  <figure class="sign">
   <a href="https://nvidianews.nvidia.com/bios/chris-a-malachowsky"><img src="https://s3.amazonaws.com/cms.ipressroom.com/219/files/20149/544ace4cf6091d38d0000000_Chris_Malachowsky_6253/Chris_Malachowsky_6253_mid.jpg" width="320.31"></a>
   <figcaption>&nbsp;<a href="http://go3.com.ua/public/search?_token=W64dscdhFgqQ377aF1wqXXb4w5zJ9nDVEVQzl6ZN&searchString=%D0%9A%D1%80%D0%B8%D1%81+%D0%9C%D0%B0%D0%BB%D0%B0%D1%85%D0%BE%D0%B2%D1%81%D0%BA%D0%B8">Крис Малачовски</a></figcaption>
  </figure>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	@endif
	
	

	
	
	
	@if(($searchString=='Псионическая активность')or($searchString=='псионическая активность'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Псионические</b> способности (psionics) — способность силой ума создавать паранормальные явления или управлять ими. Обычно считается, что <b>псионические</b> и экстрасенсорные способности — одно и то же; но слово «экстрасенс» подразумевает мистика или шарлатана, поэтому многим оно не нравится. Иногда используется как средство, позволяющее избежать названия «магия» в (за исключением этого явления) научно-фантастических произведениях, таких как StarCraft.
	<br><br>
	<a href="https://posmotre.li/%D0%9F%D1%81%D0%B8%D0%BE%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5_%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%BD%D0%BE%D1%81%D1%82%D0%B8#:~:text=%D0%9F%D1%81%D0%B8%D0%BE%D0%BD%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B5%20%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%BD%D0%BE%D1%81%D1%82%D0%B8%20(psionics)%20%E2%80%94%20%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%BD%D0%BE%D1%81%D1%82%D1%8C,%D0%BF%D0%BE%D1%8D%D1%82%D0%BE%D0%BC%D1%83%20%D0%BC%D0%BD%D0%BE%D0%B3%D0%B8%D0%BC%20%D0%BE%D0%BD%D0%BE%20%D0%BD%D0%B5%20%D0%BD%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D1%81%D1%8F.">Псионические способности — Posmotre.li</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  
	  @if(($searchString=='вк')or($searchString=='вконтакте')or($searchString=='vk'))
	  <style>
   .sign {
    float: left;
    border: 1px solid gray;
    padding: 0px;
    margin: 10px 0 5px 5px;
    background: #fff;
   }
   .sign figcaption {
    margin: 0 auto 5px;
   }
  </style>
	<div style="
    margin:15px;
	padding:0px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	">
	<p>&nbsp;Материалы по запросу <b>{{$searchString}}</b></p>
	    <figure class="sign">
   <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5"><img src="https://upload.wikimedia.org/wikipedia/commons/2/21/VK.com-logo.svg" width="190"></a>
   <figcaption>&nbsp;<a href="https://ru.wikipedia.org/wiki/%D0%92%D0%9A%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B5">ВКонтакте</a>
</figcaption>
  </figure>
  <figure class="sign">
   <a href="https://twitter.com/vkontakte"><img src="https://pbs.twimg.com/profile_images/1314542259984048131/i9YK5BKr_400x400.jpg" width="190"></a>
   <figcaption>&nbsp;<a href="https://twitter.com/vkontakte">ВКонтакте</a></figcaption>
  </figure>
  <figure class="sign">
   <a href="https://www.iguides.ru/main/other/v_vk_ne_mozhet_byt_konfidentsialnosti/"><img src="https://www.iguides.ru/upload/iblock/e19/e19d6ea90a6b90e7ee7c53f0de2eb400.jpg" width="299"></a>
   <figcaption>&nbsp;<a href="https://www.iguides.ru/main/other/v_vk_ne_mozhet_byt_konfidentsialnosti/">В VK нет и не может<br>&nbsp;быть никакой конфиденциальности.<br>&nbsp;Объясняем, почему</a></figcaption>
  </figure>
  </div>
	<br><br><br><br><br><br><br><br><br><br><br><br>
  @endif
  
  
  
  @if(($searchString=='price list')or($searchString=='прайс лист'))
	  <style>
   .sign {
    float: left;
    border: 1px solid gray;
    padding: 0px;
    margin: 10px 0 5px 5px;
    background: #fff;
   }
   .sign figcaption {
    margin: 0 auto 5px;
   }
  </style>
	<div style="
    margin:15px;
	padding:0px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	">
	<p>&nbsp;Материалы по запросу <b>{{$searchString}}</b></p>
	    <a href="https://edit.org/blog/price-list-templates" target="_blank"><img src="https://edit.org/img/blog/x7pr-price-list-templates-edit-editable-personalize-free-easy-fast-print-bandamp-w-black-white-pricing.jpg.pagespeed.ic.XJ96rr6RYv.jpg" width="43.80%"></a>
	
	<a href="https://ru.postermywall.com/index.php/art/template/70a0083c3eb9baa358f15501c9d1b530/simple-black-and-white-price-list-template-multipurpose-design#.YAqhAnYza2w" target="_blank"><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/simple-black-and-white-price-list-template-multipurpose-design-70a0083c3eb9baa358f15501c9d1b530_screen.jpg?ts=1561394388" width="22%"></a>
	
	<a href="https://www.freepik.com/premium-vector/price-list-collection_3943368.htm" target="_blank"><img src="https://image.freepik.com/free-vector/price-list-collection_23-2148075939.jpg" width="32.80%"></a>
  </div>
  @endif
  
  
  
  @if($searchString=='безумие это выход за благопристойную норму')
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Безумие - это выход за благопристойную норму</b>, но не всегда в худшую сторону. Вы, сударь, недооцениваете преимущества этого пространства, так называемой, свободы. Когда-нибудь, блистая <b>за</b> пределами этого замка, вы будете вспоминать свою молодость и общение со мной, как самую яркую страницу своей жизни.
	<br><br>
	<a href="https://цитаты-из-фильмов.рф/best/363/#:~:text=%D0%91%D0%B5%D0%B7%D1%83%D0%BC%D0%B8%D0%B5%20%2D%20%D1%8D%D1%82%D0%BE%20%D0%B2%D1%8B%D1%85%D0%BE%D0%B4%20%D0%B7%D0%B0%20%D0%B1%D0%BB%D0%B0%D0%B3%D0%BE%D0%BF%D1%80%D0%B8%D1%81%D1%82%D0%BE%D0%B9%D0%BD%D1%83%D1%8E,%D1%81%D0%B0%D0%BC%D1%83%D1%8E%20%D1%8F%D1%80%D0%BA%D1%83%D1%8E%20%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D1%83%20%D1%81%D0%B2%D0%BE%D0%B5%D0%B9%20%D0%B6%D0%B8%D0%B7%D0%BD%D0%B8.">Лучшие цитаты из фильма "Узник замка Иф"</a>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='абьюзер')or($searchString=='абюзер')or($searchString=='аьюзер')or($searchString=='аббюзер')
		  or($searchString=='аююзер')or($searchString=='f,.pth'))
	<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<h4>Похожие запросы</h4>
    <hr>
    
	<p><details><summary style="cursor: pointer;">Что такое мужчина Абьюзер?</summary><p>
    <p>Термин <b>абьюзер</b> употребляется для описания человека, который применяет насильственные методы, это может быть как 
	психологическое, 
	физическое или экономическое насилие, для достижения своей цели.</p>	
	<p><a href="https://ru.wikipedia.org/wiki/%D0%90%D0%B1%D1%8C%D1%8E%D0%B7%D0%B8%D0%B2%D0%BD%D1%8B%D0%B5_%D0%BE%D1%82%D0%BD%D0%BE%D1%88%D0%B5%D0%BD%D0%B8%D1%8F">Абьюзивные отношения — Википедия</a></p>
	</details>
	<hr>
    
	<p><details><summary style="cursor: pointer;">Кто такой Абьюзер простыми словами?</summary><p>
    <p><b>Абьюзер</b> (ударение на «ю») это человек, склонный к агрессивному и диктаторскому поведению по отношению к своим близким. 
	Глагол «abuse» можно перевести с английского как «обижать», поэтому каждый <b>абьюзер</b> — своего рода серийный обидчик. 
	Причём речь здесь идёт скорее о моральном, чем о физическом насилии.</p>	
	<p><a href="https://chto-eto-takoe.ru/abuser">Абьюзер — что это такое? Определение, значение, перевод</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Кого боится Абьюзер?</summary></p>
    <p>Так, один <b>абьюзер</b> может <b>бояться</b>, что партнер уйдет от него, и устраивать безосновательные сцены ревности, но он не будет 
	пилить человека по остальным вопросам. Другой <b>абьюзер</b> не <b>боится</b>, что от него уйдут, но он постоянно хочет изменить, улучшить своего партнера.</p>	
	<p><a href="https://chto-eto-takoe.ru/abuser">Абьюзер — что это такое? Определение, значение, перевод</a></p>
	</details>
		<hr>
	<p><details><summary style="cursor: pointer;">Как отличить Абьюзера?</summary></p>
	<br>
	<b>Как распознать абьюзера</b>
	<br><br>
    <p>
	1. <b>Абьюзер</b> груб по отношению к животным и детям ...<br>
	2. <b>Абьюзер</b> игнорирует личные границы ...<br>
	3. <b>Абьюзер</b> отрицает законность ваших собственных чувств, желаний и просьб ...<br>
	4. <b>Абьюзер</b> всё время критикует ...<br>
	5. <b>Абьюзер</b> контролирует и допрашивает ...<br>
	6. <b>Абьюзер</b> изолирует от других людей ...<br>
	7. <b>Абьюзер</b> убеждает, что любит как никто другой<br>
	</p>	
	<br>
	<p><a href="https://lifehacker.ru/abuse/">7 признаков эмоционального насильника - Лайфхакер</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Кто такой моральный Абьюзер?</summary></p>
    <p>
	<b>Абьюзер</b> – человек, который совершает насилие над своей жертвой. Им может оказаться кто угодно: близкий родственник, коллега на 
	работе, друг. Как правило, насильник хорошо разбирается в людях и знает, как на них воздействовать, подавлять.
	</p>	
	<br>
	<p><a href="https://www.mos.ru/news/item/68711073/">Уйти нельзя остаться: как понять, что вы строите отношения с ...</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Как определить психологическое насилие?</summary></p>
	<br>
	<b>Как распознать психологическое насилие?</b>
	<br><br>
    <p>
	1. постоянная оскорбительная критика, манипулирование, контроль над жизнью жертвы;<br>
	2. обвинения, осуждения, словесные оскорбления;<br>
	3. обзывание нецензурными словами, унижения;<br>
	4. игнорирование как способ «наказания» (как среди взрослых, так и в отношении детей);<br>
	</p>	
	<br>
	<p><a href="https://www.projectkesher.org.ua/ru/news/psykholohycheskoe-nasylye-kak-raspoznat-y-perestat-uprekat-blyzkomu-cheloveku/">Психологическое насилие: как распознать и перестать упрекать ...</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Что такое эмоциональное насилие?</summary></p>
    <p>
	Психологическое <b>насилие</b>, также <b>эмоциональное</b> или моральное <b>насилие</b> — это форма <b>насилия</b>, которая может приводить к 
	психологической травме, в том числе тревожности, депрессии и посттравматическому стрессовому расстройству.
	</p>	
	<br>
	<p><a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%81%D0%B8%D1%85%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5_%D0%BD%D0%B0%D1%81%D0%B8%D0%BB%D0%B8%D0%B5">Психологическое насилие — Википедия</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Что такое Газлайтер?</summary></p>
    <p>
	Эффект газлайтинга, особого вида эмоционального манипулирования, упрощенно выглядит так: <b>газлайтер</b> (манипулятор) доказывает 
	свою правоту и заставляет жертву усомниться в собственной адекватности. Основная цель газлайтера — самоутверждение.
	</p>	
	<br>
	<p><a href="https://www.forbes.ru/forbeslife/387677-mayachok-manipulyatora-kak-raspoznat-i-poborot-gazlayting-na-rabochem-meste">Маячок манипулятора. Как распознать и побороть ... - Forbes.ru</a></p>
	</details>
		<hr>
	<p><details><summary style="cursor: pointer;">Что значит Газлайтинг?</summary></p>
    <p>
	<b>Газлайтинг</b> (от английского названия пьесы «Газовый свет») — форма психологического насилия и социального паразитизма, главная 
	задача которого — заставить собеседника мучиться и сомневаться в адекватности своего восприятия окружающей действительности через постоянные обесценивающие шутки, обвинения и запугивания.
	</p>	
	<br>
	<p><a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B0%D0%B7%D0%BB%D0%B0%D0%B9%D1%82%D0%B8%D0%BD%D0%B3">Газлайтинг — Википедия</a></p>
	</details>
			<hr>
	<p><details><summary style="cursor: pointer;">Какие виды психологического насилия вы знаете?</summary></p>
    <br>
	<b>Давайте посмотрим на виды психологического насилия.</b>
	<br><br>
	<p>
    &bull;&nbsp;&nbsp;Мгновенные переключения на холод. Начнем с безобидного. ...<br>
    &bull;&nbsp;&nbsp;Частичное игнорирование. ...<br>
	&bull;&nbsp;&nbsp;Пристальный взгляд без комментариев. ...<br>
	&bull;&nbsp;&nbsp;Газлайтинг. ...<br>
	&bull;&nbsp;&nbsp;Шантаж, вызывание чувства стыда или вины и соблазнение. ...<br>
	&bull;&nbsp;&nbsp;Игнорирование, исчезновение с целью наказания. ...<br>
	&bull;&nbsp;&nbsp;На самом деле жертва — он.<br>
	</p>	
	<br>
	<p><a href="https://www.forbes.ru/forbes-woman/343011-esli-partner-ne-bet-no-lishaet-voli-7-sposobov-raspoznat-psihologicheskoe">Если партнер не бьет, но лишает воли. 7 способов распознать ...</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Что такое психологическое давление?</summary></p>
    <p>
    Peer pressure) — (<b>психологическое</b>) воздействие коллектива, оказывающее влияние на характер поведения членов группы и приводящее 
	их личные привычки, установки, ценности и нормы поведения в соответствие с групповыми.	
	</p>	
	<br>
	<p><a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5_%D0%B4%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5">Социальное давление — Википедия</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Какая статья за физическое насилие?</summary></p>
    <p>
    причинение физических или психических страданий путем систематического нанесения побоев либо иными насильственными действиями, 
	если это не повлекло тяжкого или среднего вреда здоровью (<b>статья</b> 117 Уголовного кодекса).	
	</p>	
	<br>
	<p><a href="https://ижевск.18.мвд.рф/document/7553809">Памятка для граждан об ответственности за домашнее и ...</a></p>
	</details>
		<hr>
	<p><details><summary style="cursor: pointer;">Что такое психологическое насилие это?</summary></p>
    <p>
    <b>Психологическое насилие</b> – форма воздействия на эмоции или психику партнера с помощью угроз, запугивания, оскорблений, критики, 
	осуждений и т. п. То есть, постоянное вербальное негативное воздействие на другого человека. Чаще такому виду <b>насилия</b> 
	подвергаются жены от своих мужей, намного реже наоборот.	
	</p>	
	<br>
	<p><a href="https://msth.by/polezno-znat/1383-psikhologicheskoe-nasilie-i-sposoby-sovladaniya">Психологическое насилие и способы совладания</a></p>
	</details>
	<hr>
	<p><details><summary style="cursor: pointer;">Что такое финансовое насилие?</summary></p>
    <p>
    Экономическое <b>насилие</b> (или <b>финансовое насилие</b>) является формой <b>насилия</b>, когда один интимный партнёр 
	контролирует доступ другого партнёра к экономическим ресурсам.	
	</p>	
	<br>
	<p><a href="https://ru.wikipedia.org/wiki/%D0%94%D0%BE%D0%BC%D0%B0%D1%88%D0%BD%D0%B5%D0%B5_%D0%BD%D0%B0%D1%81%D0%B8%D0%BB%D0%B8%D0%B5">Домашнее насилие — Википедия</a></p>
	</details>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if(($searchString=='как кормить ребенка')or($searchString=='как кармить ребенка')or($searchString=='каккармить ребенка')
		  or($searchString=='какармить ребенка')or($searchString=='какормить ребенка'))
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	  <a href="index#gsc.tab=1&gsc.q=как кормить ребенка&gsc.sort=" target="_blank"><img src="http://rotunda.ie/wp-content/uploads/2017/04/feeding4.jpg" width="200" style="float:right;margin: 4px 1px 70px 10px; border-radius:5px;"></a>
	  Лицо <b>ребенка</b> должно быть направлено к груди, а голова, плечи и тело должны находиться на одной линии. Носик или верхняя губа крохи должны находиться напротив соска. Важно, чтобы ребенок мог легко дотянуться до груди. Всегда приближайте малыша к груди, а не вытягивайте грудь в его сторону.
	  <br>
	  <br>
	  <a href="https://rotunda.ie/knowledgebase/%D0%B3%D1%80%D1%83%D0%B4%D0%BD%D0%BE%D0%B5-%D0%B2%D1%81%D0%BA%D0%B0%D1%80%D0%BC%D0%BB%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%BF%D0%B5%D1%80%D0%B2%D1%8B%D0%B5-%D0%B4%D0%BD%D0%B8-%D0%BF%D0%BE/?lang=ru#:~:text=%D0%9B%D0%B8%D1%86%D0%BE%20%D1%80%D0%B5%D0%B1%D0%B5%D0%BD%D0%BA%D0%B0%20%D0%B4%D0%BE%D0%BB%D0%B6%D0%BD%D0%BE%20%D0%B1%D1%8B%D1%82%D1%8C%20%D0%BD%D0%B0%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%BE,%D0%B2%D1%8B%D1%82%D1%8F%D0%B3%D0%B8%D0%B2%D0%B0%D0%B9%D1%82%D0%B5%20%D0%B3%D1%80%D1%83%D0%B4%D1%8C%20%D0%B2%20%D0%B5%D0%B3%D0%BE%20%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%83." target="_blank">Грудное вскармливание в первые дни после рождения</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='сумрачный самурай')
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="https://ru.wikipedia.org/wiki/%D0%A1%D1%83%D0%BC%D0%B5%D1%80%D0%B5%D1%87%D0%BD%D1%8B%D0%B9_%D1%81%D0%B0%D0%BC%D1%83%D1%80%D0%B0%D0%B9" target="_blank">
	<img src="https://upload.wikimedia.org/wikipedia/ru/9/99/Tasogare_Seibei_poster.jpg" width="32.80%"></a>
	
		<a href="https://rezka.ag/films/drama/10414-sumrachnyy-samuray-2002.html" target="_blank">
	<img src="https://static.hdrezka.ac/i/2015/6/21/n137f504c756fbo42k71u.jpg" width="32.80%"></a>
	
	<a href="http://baskino.me/films/boevie-iskustva/3178-sumrachnyy-samuray.html" target="_blank">
	<img src="https://lh3.googleusercontent.com/proxy/3HNxJoDct2I_xdtbHJzMpY7-brBXFaXnJLluj4TTvboCOt6g_IXa9ZedIuBNXnreP5Obbq-bKUT_8Jp0u7dSMBpfT5Hq3RWcU-D4n6Q" width="32.80%"></a>
<br><br>
<span>Сумеречный самурай</span>
<br><font color="gray">2002 г.&bull;Романтика/Драма&bull;2 ч 10 мин</font><br>
<br>
История Сэйбэя — скромного самурая низшего ранга и его семьи, живших в эпоху смуты. Сэйбэй победил в поединке противника 
деревянным мечом, и когда об этом распространилась молва, он против воли оказался вовлеченным в конфликт внутри самурайского 
клана и теперь получает приказ сюзерена убить такого же, как и он сам, вассала.
<br>
	  </div>
	  @endif
	  
	  
	  
	  @if(($searchString=='феномен')or($searchString=='фенмен')or($searchString=='фенамен')
		  or($searchString=='феномн')or($searchString=='финомен')or($searchString=='фномен')or($searchString=='atyjvty'))
	  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<h4>Похожие запросы</h4>
    <hr>
    
	<p><details><summary style="cursor: pointer;">Что обозначает феномен?</summary><p>
    <p><b>Феномен</b> (от греч. φαινόμενον — «являющееся, явление») — термин, в общем смысле означающий явление, данное в чувственном 
	созерцании. В естественной науке под <b>феноменом</b> понимается наблюдаемое явление или событие. Также <b>феномен</b> — необычное явление, 
	редкий факт; то, что трудно постичь.</p>	
	<p><a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B5%D0%BD%D0%BE%D0%BC%D0%B5%D0%BD">Феномен — Википедия</a></p>
	</details>
	<hr>
    
	<p><details><summary style="cursor: pointer;">Чем заменить слово феномен?</summary><p>
	<br>
	<h4>Синонимы к слову «феномен»</h4>
    <p>
	<p>
    &bull;&nbsp;&nbsp;чудо<br>
    &bull;&nbsp;&nbsp;диво<br>
	&bull;&nbsp;&nbsp;невидаль<br>
	&bull;&nbsp;&nbsp;невидальщина<br>
	&bull;&nbsp;&nbsp;факт<br>
	&bull;&nbsp;&nbsp;явление<br>
	&bull;&nbsp;&nbsp;исключение<br>
	&bull;&nbsp;&nbsp;игра природы<br>
	</p>	
	<br>	
	<p><a href="https://synonymonline.ru/%D0%A4/%D1%84%D0%B5%D0%BD%D0%BE%D0%BC%D0%B5%D0%BD">
	Синонимы к слову «феномен» и близкие по смыслу выражения</a></p>
	</details>
	<hr>
    
	<p><details><summary style="cursor: pointer;">Что такое феномен простыми словами?</summary><p>
    <p><b>Феномен</b> - Явление, в котором обнаруживается сущность чего-л. ... Редкое, необычное, исключительное явление.</p>	
	<p><a href="http://tolkslovar.ru/f856.html">Феномен - это ... значение слова Феномен</a></p>
	</details>
	<hr>
    
	<p><details><summary style="cursor: pointer;">Какие феномены существуют?</summary><p>
    <p>Это удивительное явление волновало философов на протяжении столетий. Но самый интересный для нас – <b>феномен</b> человеческого мозга.</p>
	<b>...</b>
	<p><b>Феномены человеческого сознания и мозга.</b></p>
	&bull;&nbsp;&nbsp;<b>Феномен</b> веры. Наука требует доказательств, а вера в них не нуждается. ...<br>
    &bull;&nbsp;&nbsp;<b>Феномен</b> одиночества. ...<br>
	&bull;&nbsp;&nbsp;<b>Феномен</b> дежавю. ...<br>
	&bull;&nbsp;&nbsp;<b>Феномен</b> позитивного мышления.<br>
	<p><a href="https://wikigrowth.ru/chto-takoe/fenomen/">Феномен: что это такое, какие бывают и примеры - wikiGrowth</a></p>
	</details>
	<hr>
	</div>
	@endif
	
	
	
	
	@if(($searchString=='инкуб')or($searchString=='инкб')or($searchString=='Инкуб'))
  <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<p>Инкуб</p>
     <a href="https://ru.wikipedia.org/wiki/%D0%98%D0%BD%D0%BA%D1%83%D0%B1" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Incubus.jpg/300px-Incubus.jpg" width="39.8%"></a> 
	 
	 <a href="https://www.pinterest.ru/pin/698691329666630498/" target="_blank"><img src="https://i.pinimg.com/originals/d3/90/ce/d390ce3f3fa19fc32a50c3a06cbf0645.jpg" width="36.9%"></a> 
	 
	 <a href="https://www.spletnik.ru/blogs/chto_chitaem/174886_misticheskiy-chat-kto-takie-inkuby-i-sukkuby" target="_blank"><img src="https://www.spletnik.ru/img/__post/fc/fca82807cbc26ce16a51ffa900dab0a6_370.jpg" width="22%"></a>
	</div>
	@endif
	
	
	
	@if(strpos($searchString,'amp;')!==false)
	   <div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<a href="index#gsc.tab=1&gsc.q=&amp;&gsc.sort=" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Accelerated_Mobile_Pages_logo.svg/1200px-Accelerated_Mobile_Pages_logo.svg.png" width="110" style="float:right;margin: 27px 1px 70px 10px; border-radius:5px;"></a>
	<p><h3>Accelerated mobile pages</h3></p><font color="gray">Веб-сайт</font>
	<br><br><br><br>
	<hr>
	Accelerated Mobile Pages — технология ускоренных мобильных страниц с открытым исходным кодом. Она позволяет при низкой скорости сети выполнить оперативную загрузку веб-страниц. Создана компанией Google в 2015 году.
	<br><br>
	<a href="https://ru.wikipedia.org/wiki/Accelerated_mobile_pages">Википедия</a>
	  </div>
	  @endif
	  
	  
	  
	  
	  @if($searchString=='какой темперамент самый лучший')
		<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p><i class="fa fa-book"></i>&nbsp;Какой темперамент самый лучший</p></b>
		Несуществует лучшего темперамента, потому что каждая ситуация в жизни требует соответствующей способности, и она может быть у любого темперамента. Поэтому, они все важны, помимо этого, у каждого человека есть все четыре темперамента, они проявляются в течение года, плавно переходя из одного в другой,  кроме этого, он может меняться в зависимости от ситуации. Но, они все являются окрасками основного темперамента.
		</div>
	@endif
	
	
	
	@if(($searchString=='хрен')or($searchString=='хрн')or($searchString=='хрнн'))
		<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p><i class="fa fa-book"></i>&nbsp;Хрен</p></b>
		<p>Варианты значений:</p>
		<p>Хрен - ругательное слово;</p>
		<p>Хрен - многолетнее травянистое растение.</p>
		</div>
	@endif
	
	
	
	@if(($searchString=='душа')or($searchString=='дуа')or($searchString=='дша'))
		<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b><p><i class="fa fa-book"></i>&nbsp;Душа</p></b>
		<b>Душа</b> бессмертна, но человеческому телу не нужно бессмертие, оно не для этого создано, тело должно выполнять программу <b>души</b>, и для ее выполнения телу отведено определенное время, по истечению которого тело уходит обратно в землю, а <b>душа</b> получает то, что соответствует опыту, который человек наработал за всю жизнь.
		<br><br>
		<a href="https://go3.com.ua/welcomephilo/dusha">Душа</a>
		</div>
	@endif
	
	
	
	@if($searchString=='как мне добавить в вацап контакт для общения')
		<div style="background: #fff;
    margin:20px;
	padding:10px;
	color:black;
	width:700px;
    text-align: left;
    border-radius:4px;
	border: 1px double #D8D8D8;">
	<b>Чтобы добавить новый контакт из WhatsApp:</b>
	<br>
	<p>
    &bull;&nbsp;&nbsp;1. Нажмите Новый чат > Параметры > <b>Добавить</b> новый <b>контакт</b>. ...<br>
    &bull;&nbsp;&nbsp;2. Введите имя и номер телефона <b>контакта</b> > нажмите СОХРАНИТЬ.<br>
	&bull;&nbsp;&nbsp;3. <b>Контакт</b> будет автоматически добавлен в вашу адресную книгу.<br>
	</p>	
	<br>	
	<a href="https://faq.whatsapp.com/kaios/contacts/how-to-add-a-contact/?lang=ru">
	Справочный центр WhatsApp - Как добавить контакт</a>
	</div>
	@endif

