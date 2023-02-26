//определяем день недели

var now = new Date();
var dayNames = new Array("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота");

//определяем месяц
var now = new Date();
var textout;
var month = now.getMonth();
var date = now.getDate();
textout = date;

if (month==0) textout+=" января <a href='http://go3.com.ua/zodiak/kozerog.html'>(козерог - 22 декабря — 19 января)</a>";
if (month==1) textout+=" февраля <a href='http://go3.com.ua/zodiak/kozerog.html'>(водолей - 20 января — 18 февраля)</a>";
if (month==2) textout+=" марта <a href='http://go3.com.ua/zodiak/ribi.html'>(рыбы - 19 февраля — 20 марта)</a>";
if (month==3) textout+=" апреля <a href='http://go3.com.ua/zodiak/oven.html'>(овен - 21 марта — 19 апреля)</a>";
if (month==4) textout+=" мая <a href='http://go3.com.ua/zodiak/telez.html'>(телец - 20 апреля — 20 мая)</a>";
if (month==5) textout+=" июня <a href='http://go3.com.ua/zodiak/blizneci.html'>(близнецы - 21 мая — 20 июня)</a>";
if (month==6) textout+=" июля <a href='http://go3.com.ua/zodiak/rak.html'>(рак - 21 июня — 22 июля)</a>";
if (month==7) textout+=" августа <a href='http://go3.com.ua/zodiak/lev.html'>(лев - 23 июля — 22 августа)</a>";
if (month==8) textout+=" сентября <a href='http://go3.com.ua/zodiak/deva.html'>(дева - 23 августа — 22 сентября)</a>";
if (month==9) textout+=" октября <a href='http://go3.com.ua/zodiak/vesi.html'>(весы - 23 сентября — 22 октября)</a>";
if (month==10) textout+=" ноября <a href='http://go3.com.ua/zodiak/scorpion.html'>(скорпион - 23 октября — 21 ноября)</a>";
if (month==11) textout+=" декабря <a href='http://go3.com.ua/zodiak/strelec.html'>(стрелец - 22 ноября — 21 декабря)</a>, <a href='http://go3.com.ua/zodiak/zmeenosec.html'>(змееносец - 30 ноября — 17 декабря)</a>";

//выводим месяц и день недели
document.write ("<br><div id='gdata' style='padding-top: 4px;'>Сегодня " + textout + ", " + dayNames[now.getDay()] + "</div>");





if(date=='11' && month=='4'){
		/*
		document.write ("<div style='width:700px;solid #000;border: 1px solid #D8D8D8; padding:5px; border-radius:4px;' align='justify'>Международный день освобождения узников фашистских концлагерей</div>");
		*/
	document.write ("<br><a href='https://www.drive2.ru/b/499498512845635639/' target='_blank'><img src='https://a.d-cd.net/e02321ds-1920.jpg' width='300'></a>");
}

if(date!='11' && month!='4'){
	//document.write ("<br><div id='gdata' style='padding-top: 4px;'>Обычный день</div>");
}
