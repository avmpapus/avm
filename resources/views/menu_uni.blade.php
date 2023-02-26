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
Универсология
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
<li><a href="https://gotskaya.livejournal.com/7020.html">Универсология...Наука? - LiveJournal</a></li>
<li><a href="https://www.yakaboo.ua/book_series/view/Universologija/">Серия книг Универсология - YAKABOO.UA</a></li>
</ul>



<ul id="myList" style="display:none;">
<li><a href="https://gotskaya.livejournal.com/7020.html">Универсология...Наука? - LiveJournal</a></li>
<li><a href="https://www.yakaboo.ua/book_series/view/Universologija/">Серия книг Универсология - YAKABOO.UA</a></li>
<li><a href="https://www.trn.ua/companies/5984/">Международная научная школа универсологии</a></li>
<li><a href="https://ua.linkedin.com/in/%D0%B2%D0%B8%D1%82%D0%B0%D0%BB%D0%B8%D0%B9-%D0%BF%D0%BE%D0%BB%D1%8F%D0%BA%D0%BE%D0%B2-25a2537a">Виталий Поляков - Организатор Межд. Научной Школы Универсология и её руководитель - МаЭД | LinkedIn</a></li>
<li><a href="https://www.livelib.ru/book/1000106797-universologiya-v-a-polyakov">В. А. Поляков - Универсология - LiveLib</a></li>
<li><a href="https://universology.at.ua/index/zdorove_i_zdorovyj_obraz_zhizni_chast_3/0-41">Универсология Кировоград - Здоровье и Здоровый образ жизни ...</a></li>
<li><a href="https://ckr.ucoz.com/index/0-5">Грани жизни - КП "Баланс Здоровья" - Универсология</a></li>
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