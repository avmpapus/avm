function inputValidate(){

var val = document.getElementById("tags").value.toLowerCase(),
questions = ["кто","что","почему","для чего","зачем", "почем", "где", "чего", "когда", "как"];

badWords = ["хуй","блядь","сука","ебать","пизда", "пидор", "пидарас", "нахуй", "ибать"];

mobDevice = ["смартфон","телефон","samsung gal"];
  
 for (var i = 0; i < questions.length; i++){ 
    if(~val.indexOf(questions[i])){
      return document.getElementById("error2").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color='red'>Если хотите получить конкретный ответ на ваш вопрос<br>"+
		  ", вам необходимо <a href='reg'>зарегистрироваться</a> или <a href='/#openModal'>войти на сайт</a>,"+
		  " чтобы система могла его отправить на вашу почту.</font>";
    }
 }
 
  for (var i = 0; i < badWords.length; i++){ 
    if(~val.indexOf(badWords[i])){
      return document.getElementById("error2").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Это плохие слова";
    }
 }
 
   for (var i = 0; i < mobDevice.length; i++){ 
    if(~val.indexOf(mobDevice[i])){
      return document.getElementById("error2").innerHTML = "<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"+
	  "Что-то не так с вашим мобильным устройством?";
    }
 }
 
 document.getElementById("error2").innerHTML = "Ну что ж, Go3 постарается вам помочь<br><br>"
 +"<img src='https://e7.pngegg.com/pngimages/702/840/png-clipart-emoji-"
 +"emoji-emoticon-smiley-emoji-face-smiley.png' width='200'>"; 
}