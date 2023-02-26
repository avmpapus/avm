/*
let a=7;
let b=2;
let c=a*b/1;
document.getElementById("teg3").innerHTML = (c+" <b>это хорошо</b>, <font color='green'>но смотря в чем</font>");
*/
/*
$.get('test3', function(data) {

            var lines = data.split("<br>");

            $.each(lines, function(n, elem) {
                $('#teg3').append('<div>' + elem + '</div>');
            });
        });
		*/
//		document.getElementById("teg3").innerHTML ='привет <b>как дела</b>, что делаеш';

/*
$( 'i' ).html(function(index, html) {
  return html + ' привет ворвралваовлв'
});
*/
/*
let a='!!!!!!!!!!!!!да, так при';
let b=' ghj,rf';
let c=1+2;
$( 'p' ).html( 'Новый HTML sdfsdfsdf <b>dfsdf!!!!sdfs</b>'+a+b+' равно '+c );
*/


/*
const courseStatus = 'fail'
if(courseStatus === 'ready'){
$( 'p' ).html( 'Курс готов' );	
}
else
if(courseStatus === 'pending'){
$( 'p' ).html( 'Курс не готов' );	
}
else
{
	$( 'p' ).html( 'Курс не получился' );
}


const isReady = true
if(isReady === true){
	$( 'p' ).html( '11111111' );
}
else
{
	$( 'p' ).html( '22222222' );
}
*/

/*
function calcAge(year){
	return 2020 - year
}

function LogInfoAbout(name, year){
	const age = calcAge(year)

	if(age > 0){	
//$( 'p' ).html('tttrty')
console.log('asdasd '+name+' ssss '+age)
	}
	else
	{
console.log('будущее')
	}
	
	//$( 'p' ).html('tttrty')
}
LogInfoAbout('Максим',1993)
LogInfoAbout('Лена',1995)
LogInfoAbout('Сергей',2022)
*/

/*
const cars = ['mazda','mers','ford']
for(let car of cars){
	
	$( 'p' ).html(car)
}
*/


/*
const person = {
	firstname: 'vlad',
	lastname: 'valya',
	year: 1993,
	languages: ['ru','en','de'],
	hasWife: false,
	greet: function(){
		$( 'p' ).html(greet)
	}
}


$( 'p' ).html(person.firstname)
person.greet()
*/


/*
greet('Лена')
function greet(name){
	console.log('привет - ', name)
}
*/

/*
const timeout = setTimeout(()=>{
	$( 'p' ).html("hello")
	
}, 2500)
*/
//-----------------------------------------
/*
const delay = (wait = 1000) => {
	const promise = new Promise((resolve, reject)=>{
		setTimeout(()=>{
			resolve()
		}, wait)
	})
	return promise
}
/*
delay(2500)
.then(()=>{
	$( 'p' ).html("hello gdfsdfsdf")
})
.catch(err=>$( 'p' ).html('Error',err))
.finally(()=>$( 'p' ).html('Finally'))
*/
/*
const getData = () => new Promise(resolve=>resolve([
1,1,2,3,5,8,13
]))

getData().then(data=>console.log(data))

async function helo(){
	try{
	await delay(3000)
	const data = await getData()
	$( 'p' ).html('data',data)
}
catch(e){
	$( 'p' ).html(e)
}
finally{
	$( 'p' ).html('Finally')
}
}

helo()
*/

//-------------------------------------------------------
/*
if(matchMedia){
	var screen = window.matchMedia("(max-width:768px)");
	screen.addListener(changes);
	changes(screen);
}
function changes(screen){
	var message = (screen.matches ? "less" : "more") + "than 768px";
	document.getElementById("now").firstChild.nodeValue = message;
}
*/


/*
window.onload = function() {  
       var pc = document.getElementById("pic_cntr");
       pc.innerHTML="<a href='https://obrazovaka.ru/biologiya/biologiya-nauka-o-zhivoy-prirode-5-klass.html'><img src='https://obrazovaka.ru/wp-content/images/preview/predmet/biologiya-nauka-o-zhivoy-prirode.jpg' width='40%'></a>";
}
*/

/*
window.onload = function() {  
       var pc = document.getElementById("pic_cntr");
       pc.innerHTML="<h1>Библиотека философии</h1>";
}

onblur=function func() {
  //document.getElementById("helo").style.color = "red";
  helo.innerHTML = '&nbsp;&nbsp;red';

}
*/

//var text = document.querySelector("#helo");

/*
function func() {
	document.getElementById("helo").style.color = 'blue';
}
function func2() {
document.getElementById("wel").style.color = 'green';
}
*/

/*
var obj = new Image();
    obj.src = "http://localhost/public/images/go3_bible.jpg";

if (obj.complete) {
        var title = document.getElementById("title");
       title.innerHTML="<h1>Библиотека<br>философии</h1>";
} else {
    var title = document.getElementById("title");
       title.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;<font size='5' style='position:relative;z-index:3;'>Библиотека<br>&nbsp;&nbsp;&nbsp;&nbsp;философии</font>";
}
*/


/*
window.onload = function() {
var title = document.getElementById("title");
title.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;<font size='5' style='position:relative;z-index:3;'>Библиотека<br>&nbsp;&nbsp;&nbsp;&nbsp;философии</font>";
}
*/

window.onload = function() {
var obj = new Image();
    obj.src = "http://localhost/public/images/go3_bible.jpg";

if (obj.complete) {
        var title = document.getElementById("title");
       title.innerHTML="<h1>Библиотека<br>философии</h1>";
} else {
    var title = document.getElementById("title");
       title.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;<font size='5' style='position:relative;z-index:3;'>Библиотека<br>&nbsp;&nbsp;&nbsp;&nbsp;философии</font>";
}



var menu = document.getElementById("menu");
menu.innerHTML="<div style='position:relative;z-index:3;'>"
+"Душевное равноевесие<br>Матрица</div>";
}





