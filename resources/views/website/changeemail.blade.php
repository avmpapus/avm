@extends('layouts.main-front')

@section('content')



<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>



<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">




        <div style="margin:-10px;padding:10px;">
Настройки



        </div>


        <form method="POST" action="/create">
            {!! csrf_field() !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="email">
            <input type="submit">
        </form>

{{--
<a href="insertmail">insertmail</a>

                <div class="panel panel-default sk-panel-login">
                    <div class="panel-heading">Смена email</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="insert">





                                <label for="email" class="col-md-4 control-label">Ваш пароль *</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                           placeholder="мин. 6 символов">

                                </div>






                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Сменить пароль
                                    </button>
                                </div>
                            </div>
                        </form>

    --}}




</div>
</div>



{{--отправка материала без перезагрузки--}}

<script type="text/javascript">
/*
    $(document).ready(function() {
        $('#post_form_settings').submit(function(){
            $.post("/insert", $("#post_form_settings").serialize(),  function(response) {
            });
            return false;
        });
    });
    */
</script>




<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
	<div class="rightcolm">
    @include('website.right-menu-sk')
</div>
</div>

{{--
<script src="https://ajax.googleleapis.com/ajax/libs/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/alertifyjs/1.9.0/alertify.min.js"></script>


<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/alertify.min.css/"/>
--}}


{{--
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>

<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.9.0/css/themes.min.css/"/>
--}}



{{--
@if(session('success'))
    <script>
        $(document).ready(function(){
            alertify.success('{{session('success')}}');
        })
    </script>
@endif

@if(session('error'))
    <script>
        $(document).ready(function(){
            alertify.error('{{session('error')}}');
        })
    </script>
@endif
--}}

@endsection