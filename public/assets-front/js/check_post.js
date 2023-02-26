function inputValidate(){

var val = document.getElementById("chp").value.toLowerCase(),

questions = [" на Украине ","телефон","samsung gal"];
  
 for (var i = 0; i < questions.length; i++){ 
    if(~val.indexOf(questions[i])){
      return document.getElementById("error2").innerHTML = "!!!!!!!!!!!!!!!!!!!!!!!";
    }
 }
