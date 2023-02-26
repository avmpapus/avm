<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('assets-front/c.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <title>
        Регистрация
    </title>

    <link rel="stylesheet" href="{{asset('assets-front/bootstrap/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-front/css/primero.css')}}">
    <link rel="stylesheet" href="{{asset('assets-front/css/style-sk.css')}}">

</head>

<body>
    <div class="container container-login">
    <div class="row">

        @yield('content')

    </div>
    </div>

<!-- 2. Подключаем библиотеку jQuery, необходимую для работы скриптов Bootstrap 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- 3. Подключаем скомпилированный и минимизированный файл JavaScript платформы Bootstrap 3 -->
<script src="{{asset('assets-front/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
