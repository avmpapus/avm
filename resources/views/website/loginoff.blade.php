
           <div class="panel panel-default sk-panel-login" style="width:296px;">
            <div class="panel-heading">Войти
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
                <a href="{{ url('/') }}">Главная</a>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                        <div class="col-md-6">Ел. почта
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                            style="width:265px;">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                        <div class="col-md-6">Пароль
                            <input id="password" type="password" class="form-control" name="password" style="width:265px;">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>



                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" checked="" name="remember"> Запомнить меня
                                </label>
                            </div>

                    <br>



                            <button type="submit" class="btn btn-success btn-xs" style="padding:10px;width:265px;">
                                <i class="fa fa-btn fa-sign-in"></i> Войти
                            </button>
                            <br>
                            <br>

                            <a href="{{ url('/register') }}"  class="btn btn-success btn-xs" style="padding:10px;width:265px;">Зарегистрироваться</a>

                            <br>
                            <br>
                    {{--
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Забыли пароль?</a>
                            --}}




                </form>
				</div>
				</div>