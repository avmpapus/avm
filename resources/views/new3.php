<style>
body {
  padding-left: 10px;
  padding-right: 10px;
}
html body .content-outer {
  max-width: 100%;
}
</style>

<main>
  <div class="pravo"><center><aside><br><br>
  &nbsp;&nbsp;<a href="auth.php" class="button7">Войти</a>
&nbsp;&nbsp;<a href="/addform.php" class="button7">Добавить сайт</a>
&nbsp;&nbsp;<a href="/addpost.php" class="button7">Добавить пост</a>
<br><br><br><br><br>
<div style="font-size:50px;">
<font color="black">G</font><img src="/go3icn.png" width="40" style="position:relative; top:2px;"><font color="black">3</font>
</div>
<br><br>





<form method="get" action="http://go3.com.ua/search/index.php?search=<?=$search?>&id=Искать">
<input type="text" onkeyup="this.value=this.value.replace(/^\s/,'')" name="search" id="search_box" class='search_box zbz-input-clearable zbz-input-clearable--x'  onchange="duble.value = this.value"  placeholder="Что ищете?" style="width:900px;z-index:3;" required/><br><br>
<input type="submit" name="submit" value=" Поиск в Go3" style="width:130px; border:0; font-size:18px; height:40px;z-index:3; background: #BDBDBD;">
</form>
<br>
<form action='https://www.youtube.com/results?search_query=<?=$search?>' method='get'>
    <input type='hidden' name='q' value='<?=$search?>' id="duble"/>
    <input type='submit' value='Поиск в YouTube' style="width:170px; border:0; font-size:18px; height:40px;z-index:3; background: #BDBDBD;"/>
</form>

  </aside></center></div>
</main>