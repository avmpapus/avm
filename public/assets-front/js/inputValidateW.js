function inputValidateW(){

var val = document.getElementById("tagw").value.toLowerCase(),



questions = ["кто","что","почему","для чего","зачем", "почем", "где", "чего", "когда"];
 for (var i = 0; i < questions.length; i++){ 
    if(~val.indexOf(questions[i])){
      return document.getElementById("error2").innerHTML = "<br><br><font color='red'>Если хотите получить конкретный ответ на ваш вопрос,<br>"+
		  " вам необходимо <a href='reg'>зарегистрироваться</a> или <a href='/#openModal'>войти на сайт</a>,"+
		  " чтобы система могла его отправить на вашу почту.</font>";
    }
 }
 badWords = ["хуй","блядь","сука","ебать","пизда", "пидор", "пидарас", "нахуй", "ибать"];
  for (var i = 0; i < badWords.length; i++){ 
    if(~val.indexOf(badWords[i])){
      return document.getElementById("error2").innerHTML = "<br><br>Это плохие слова<br><br>"+
	  "<img src='https://blood5.ru/wp-content/uploads/2019/08/unnamed.jpg' width='100'>";
    }
 }
 mobDevice = ["смартфон","телефон","samsung gal"];
   for (var i = 0; i < mobDevice.length; i++){ 
    if(~val.indexOf(mobDevice[i])){
      return document.getElementById("error2").innerHTML = "<br><br>"+
	  "Что-то не так с вашим мобильным устройством?";
    }
 }
 
 

      
 
 ecologiya = ["экология","реки","озера","река","речка"];
  
 for (var i = 0; i < ecologiya.length; i++){ 
    if(~val.indexOf(ecologiya[i])){
return document.getElementById("error2").innerHTML = "<br><br><div style='width:1000px;'><p align='left'><img src='https://vokrugsveta.ua/wp-content/uploads/2018/07/shutterstock_730964005.jpg' width='132' style='float:left;margin: 7px 7px 7px 0;'>Что вы хотите знать об этом? "+
"Днепр - самая большая река Украины, которая дает нам 80% водных ресурсов и обеспечивает водой 2/3 территории, – сегодня в критическом состоянии. Надо честно признать, что изменения в ее экосистеме зашли слишком далеко и требуют немедленного реагирования на высшем государственном уровне. Три угрозы – химическое загрязнение воды, обмеление и потеря биологического разнообразия – самые большие вызовы, стоящие перед Госэкоинспекцией и всеми неравнодушными к экологии людьми. В прошлом году в Днепр только в пределах Киева сбросили 723 200 000. куб м сточных вод, из которых 40% были неочищенными. Более половины – это сбросы промышленных предприятий.<br><br><a href='https://www.pravda.com.ua/rus/columns/2020/08/12/7262708/'>Что убивает главную реку Украины и как это предотвратить</a></p></div>";
   }
 }
 
 
 document.getElementById("error2").innerHTML = "Ну что ж, Go3 постарается вам помочь<br><br>"
 +"<img src='https://e7.pngegg.com/pngimages/702/840/png-clipart-emoji-"
 +"emoji-emoticon-smiley-emoji-face-smiley.png' width='200'>"; 
}




 