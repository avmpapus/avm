<?php
// Хост (обычно localhost)
$db_host = "127.0.0.1";
// Имя базы данных
$db_name = "gbua_cpil_new";
// Логин для подключения к базе данных
$db_user = "gbua_cpil_new";
// Пароль для подключения к базе данных
$db_pass = "pcDnGDLNwbi9rRVV";

@$db = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("<!--Невозможно подключиться к БД--->");