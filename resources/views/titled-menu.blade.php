
    <style>
      #myList li{ display:none;
}
#loadMore {
    color:green;
    cursor:pointer;
}
#loadMore:hover {
    color:black;
}
#showLess {
    color:red;
    cursor:pointer;
}
#showLess:hover {
    color:black;
}
    </style>

<div style="position:absolute;top:360px;left:30px;z-index:3;">

		
		<input type="text" id="mySearch" onkeyup="myFunction(); countChar(this)" 
		onkeypress="showdiv(); noDigits(event)" placeholder="Искать по меню" size="23" 
		onkeyup="location.href='/post/'+mySearch.value" 
		style="border:0; border-bottom: 1px solid #A4A4A4;"  autocomplete="off"/>
		
		<script>
		function noDigits(event) {
  if (".\/,$@#$%^&*()!?-;:_`'№+=".indexOf(event.key) != -1)
    event.preventDefault();
}
		</script>
		
<br>
<span id="result"></span>

<span id="charNum1"></span>
<span id="charNum"></span>
<div class="myMenu2" id="myMenu2" id="myMenu2">
<ul  id="myList">
<li><a href="/post/анализ" title="Анализ (др.-греч. ἀνάλυσις «разложение, разделение, расчленение, разборка») — метод исследования, ....">Анализ</a></li>
<li><a href="/post/асбук" title="Асбук (англ. сокр. «книга научных и околонаучных знаний») — научная и околоначная книга">Асбук</a></li>
<br><label id="more">....</label>
</ul>
<div id="loadMore">Показать еще</div>
<div id="showLess">Скрыть</div>
</div>
<script>
        /* size_li = $("#myList li").size();
        x = 10;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function () {
            x = (x + 5 <= size_li) ? x + 5 : size_li;
            $('#myList li:lt(' + x + ')').show();
        });
		$('#showLess').click(function () {
            x = (x - 5 < 0) ? 3 : x - 5;
            $('#myList li').not(':lt(' + x + ')').hide();
        }); */

		size_li = $("#myList li").size();
        x = 3;
        $('#myList li:lt(' + x + ')').show();

        $('#loadMore').click(function () {
            x = (x + 5 <= size_li) ? x + 5 : size_li;
            $('#myList li:lt(' + x + ')').show();

			if(x==5){
			$('#loadMore').hide();
			$('#more').hide();
			$('#showLess').show();
		}
        });
		
		$('#showLess').click(function () {
            x = (x - 5 < 0) ? 1 : x - 5;
            $('#myList li').not(':lt(' + x + ')').hide();
			$('#more').show();
			if(x==1){
			$('#showLess').hide();
			$('#loadMore').show();
		}
        });


$(document).keypress(function (e) {
    if (e.which == 13) {
            document.getElementById("mySearch").value = location.href=mySearch.value;
	}
});
$(document).keypress(function (r) {
    if (r.which == 13) {
            document.getElementById("mySearchPost").value = location.href=location.href='/search?_token=LxKKjmpBpR3Um1u5vi1MrkkVH3C9ZivWVizx1uFK&searchString='
+mySearchPost.value;
	}
});



function showdiv() {
	document.getElementById("myMenu2").style.display = "none";
	  document.getElementById("myMenu").style.display = "block";
	  document.getElementById("result").style.display = "block";
}
</script>
<br><br>

<ul id="myMenu" style="display:none;">
<li><a href="/post/анализ" title="Анализ (др.-греч. ἀνάλυσις «разложение, разделение, расчленение, разборка») — метод исследования, ....">Анализ</a></li>
<li><a href="/post/асбук" title="Асбук (англ. сокр. «книга научных и околонаучных знаний») — научная и околоначная книга">Асбук</a></li>
<li><a href="/post/английский_язык" title="Английский язык (самоназвание — English, the English language) — язык англо-фризской подгруппы ....">Английский язык</a></li>
<li><a href="/post/безумие" title="Мономания (от др.-греч. μόνος — один, единственный и μανία — страсть, безумие, ....">Безумие</a></li>
<li><a href="/post/британская_империя" title="Британская империя (англ. British Empire) — крупнейшая империя в истории человечества, в период между Первой и Второй мировыми войнами занимала до четверти всей земной суши. ....">Британская империя</a></li>
</ul>
<br>
<br>
		
</div>

		<script>

  mySearch.oninput = function() {
    result.innerHTML = 'Искать в интернет <a href="http://go3.com.ua/public/search?_token=cTwfjr8WG7zUHzmTd7rudteZYGFHLlQ7V22wuzri&searchString='+mySearch.value+'">'+mySearch.value+'</a><br><br>'+
	'Искать в асбук <a href="/search?_token=Gol7PpOSF0OLEj6nVMGE5znDXsBqdwAmnILpd2IH&searchString='+mySearch.value+'">'+mySearch.value+'</a>'+
	'<hr align="justify">';
  };


  
  //function countChar(val) {
	  function countChar(val) {
        var len = val.value.length;
        if (len >= 41) {
          //val.value = val.value.substring(0, 1);
        } else {
          //$('#charNum').text(0 + len);
		  if (val.value.length > 0) {
		  //document.getElementById("charNum1").innerHTML = "Запроса такой длины достаточно для точного поиска";
		  //charNum1.innerHTML = 'fghfdghf';
		  result.innerHTML = '<br>Искать в интернет <a href="http://go3.com.ua/public/search?_token=cTwfjr8WG7zUHzmTd7rudteZYGFHLlQ7V22wuzri&searchString='+mySearch.value+'">'+mySearch.value+'</a><br><br>'+
	'Искать в асбук <a href="/search?_token=Gol7PpOSF0OLEj6nVMGE5znDXsBqdwAmnILpd2IH&searchString='+mySearch.value+'">'+mySearch.value+'</a>'+
	'<hr align="justify">';
		  }
		  if (val.value.length > 40) {
		  document.getElementById("charNum1").innerHTML = "Ваш запрос слишком длинный для точного поиска";
		  //charNum1.innerHTML = 'fghfdghf';
		  }
		  if (val.value.length == 0) {
			  //document.getElementById("charNum1").innerHTML = "fdf";
			  //charNum1.innerHTML = 'fghfdghf';
			  
			  result.innerHTML = '';
		  }
        }
      };
</script>

