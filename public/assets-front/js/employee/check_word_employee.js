$("#tags").keypress(function() {
	
	 if($(this).val() == "экология") {
		 document.getElementById("teg3").innerHTML = ("Чтобы мы могли найти для вас дополнительный материал и"+
		 " отправить его на вашу почту, вам необходиммо <a href='reg'>зарегистрироваться</a> или "+
		 "<a href='/#openModal'>войти на сайт</a>");
	 }
	 if($(this).val()=="биодобав") {
		 document.getElementById("teg3").innerHTML = ("Лучше кушайте натуральные фрукты и овощи");
	 }
	 
	 if($(this).val()=="смарт") {
		 document.getElementById("teg3").innerHTML = ("а что не так?");
	 }
	 
	 if($(this).val()=="джинс") {
		 document.getElementById("teg3").innerHTML = ("есть такие");
	 }
	 if($(this).val()=="заработ") {
		 document.getElementById("teg3").innerHTML = ("Уважамый поьзователь, а какая у вас специальность,"+
		 " или вы хотите заработать легко и быстро? Таким способом вы никому пользы не принесете."+
		 " Эти деньги как придут, так и уйдут от вас.");
	 }
if(($(this).val()=="слово")||($(this).val()=="слова")) {
	  document.getElementById("teg3").innerHTML = ("Будьте осторожны со словами, - плохие слова збываются быстро");
	 }

});
