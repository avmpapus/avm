function sayHello()
{
 var now = new Date();
 var hours = now.getHours()
 var divider = ":";
 if (now.getMinutes()<10) divider = ":0";
 var time = ""+hours + divider + now.getMinutes();
 //document.write( "Сейчас <b>" +  time + "</b> - Доброе утро! :)");
 if(hours<5 || hours>19) document.write(" спокойной ночи!");
 else if (hours<12)

 document.write("Доброе утро! :)");
 else document.write("<br>&nbsp;&nbsp;&nbsp;&nbsp;Добрый день! :)<br>");
}


sayHello();