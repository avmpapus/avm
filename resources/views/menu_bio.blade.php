<style>
/* Стиль окна поиска */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Стиль меню навигации */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Стиль навигационных ссылок */


#myMenu li a:hover {
  background-color: #eee;
}
</style>
Биология
<hr>
<input type="text" id="mySearch"
    onkeypress="noDigits(event); showdiv();" placeholder="Введите текст" size="23"
    onkeydown="myFunction()" autocomplete="off">

<script>
    function noDigits(event) {
  if (".\/,$@#$%^&*()!?-;:_`'№+=<>".indexOf(event.key) != -1)
    event.preventDefault();
}



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
    </script>

<ul id="myList2">
<li><a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B5%D0%B7%D0%BE%D0%BA%D1%81%D0%B8%D1%80%D0%B8%D0%B1%D0%BE%D0%BD%D1%83%D0%BA%D0%BB%D0%B5%D0%B8%D0%BD%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BA%D0%B8%D1%81%D0%BB%D0%BE%D1%82%D0%B0">Дезоксирибонуклеиновая кислота</a></li>
<li><a href="https://www.dnk-lab.com.ua/ru/spisok-analizov/">Анализы крови - прайс и цена в Киеве - ДНК-Лаборатория</a></li>
</ul>



<ul id="myList" style="display:none;">
<li><a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B5%D0%B7%D0%BE%D0%BA%D1%81%D0%B8%D1%80%D0%B8%D0%B1%D0%BE%D0%BD%D1%83%D0%BA%D0%BB%D0%B5%D0%B8%D0%BD%D0%BE%D0%B2%D0%B0%D1%8F_%D0%BA%D0%B8%D1%81%D0%BB%D0%BE%D1%82%D0%B0">Дезоксирибонуклеиновая кислота</a></li>
<li><a href="https://www.dnk-lab.com.ua/ru/spisok-analizov/">Анализы крови - прайс и цена в Киеве - ДНК-Лаборатория</a></li>


<li><a href="https://www.youtube.com/watch?v=c9vX8i_OI9o">"ДНК": "Нашла чужого папу?" - YouTube</a></li>
<li><a href="https://www.youtube.com/watch?v=7OkptTZoyNk">"ДНК": "Родила после изнасилования или измены?"</a></li>
<li><a href="https://www.youtube.com/watch?v=kgxVEPxuSN8">"Украденный 20 лет назад сын? Тесты ДНК!" - YouTube</a></li>
<li><a href="https://www.youtube.com/watch?v=wy84zoqfzBs">"ДНК": "Считала мертвой или сама отказалась?" - YouTube</a></li>
<li><a href="https://www.youtube.com/watch?v=uFnO0lv8dDw">"ДНК": "Экзамен на отцовство!" - YouTube</a></li>
<li><a href="https://www.youtube.com/watch?v=UykpyBAj5O8">"ДНК": "Совратил мачеху?" - YouTube</a></li>
<li><a href="https://www.youtube.com/watch?v=EvG4lPi0kBk">Тайны ДНК 2021 – Выпуск 4 от 19.09.2021 - YouTube</a></li>
</ul>


<script>
function myFunction() {
  // Объявить переменные
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myList");
  li = ul.getElementsByTagName("li");

  // Перебирайте все элементы списка и скрывайте те, которые не соответствуют поисковому запросу
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";

    }

  }

}
function showdiv() {
  //document.getElementById("myMenu2").style.display = "none";
    document.getElementById("myList2").style.display = "none";
    document.getElementById("myList").style.display = "block";
}


</script>