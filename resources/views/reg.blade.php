@extends('layouts.main-log-reg')

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    {{--
    @include('website.left-menu-sk')
    --}}
</div>


<?php
   // use App\UserProfile;
  //      use App\User;
    //$user = User::where('id', Auth::id())->first();
    ?>


<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">


            <div class="panel panel-default sk-panel-login">
                <div class="panel-heading">Регистрация</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{action('RegisterController@create')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Ваш логин *</label>

                           
                            
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Ваш E-mail *</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Ваш пароль *</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"
                                placeholder="мин. 6 символов" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль *</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    placeholder="подтвердите пароль" required>


                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="sk-after-login">

                <a href="{{ url('/login') }}">Войти</a>
            </div>

    </div>
</div>


<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    {{--
    <div class="rightcolm">

        @include('website.right-menu-sk')
    --}}
</div>
</div>

