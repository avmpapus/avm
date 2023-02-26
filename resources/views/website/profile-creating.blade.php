@extends('layouts.main-front')

@section('content')
		
<div class="clearfix"></div>

<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    @include('website.left-menu-sk')
</div>


<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div style="background:#ffffff;padding:20px;margin:20px;">
            @if(isset($user_profile->photo))
            <img src="{{$user_profile->photo}}" class="img-responsive" alt="">
            @else
            <img src="{{asset('assets-front/img/no-avatar.jpg')}}" class="img-responsive" alt="">
            @endif
            <br>

            Загрузить фото профиля
            <br><br>
            <form action="{{action('UserProfileController@uploadImg')}}" method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="InputFileProfile">
                        Изображение должно быть формата jpg,<br/>gif или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="imgUpload" id="InputFileProfile">

                    @if(Session::has('message'))
                    <p class="help-block">{{Session::get('message')}}</p>
                    @endif

                    @if ($errors->has('imgUpload'))
                        <span class="help-block">
                            <strong>{{ $errors->first('imgUpload') }}</strong>
                        </span>
                    @endif

                </div>

                <button type="submit" class="btn btn-primary btn-sm center-block">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    Сохранить
                </button>

            </form>
        </div>

        <form action="{{action('UserProfileController@store')}}" method='post' role="form">
        {{ csrf_field() }}
        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
                <label>Логин:</label>
                <input type="text" class="form-control" name="login" value="{{Auth::user()->name}}" disabled>
            </div>

            <div class="form-group">
                <label>Имя:*</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>Фамилия:</label>
                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>

        </div>


        <div class="form-inline" role="form"
            style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
            <label class=""> Дата : </label>
            <select name="day" class="form-control">
                <option value="">--</option>
                @for ($i = 1; $i < 32; $i++)
                <option value="{{$i}}" {{ (old('day')==$i) ? 'selected' : '' }}>
                    {{$i}}
                </option>
                @endfor
            </select>
            </div>

            <div class="form-group">
            <label class=""> Месяц : </label>
            <select name="month" class="form-control">
                <option value="">--</option>
                <option value="Января" {{ (old('month')=="Января") ? 'selected' : '' }}>Января</option>
                <option value="Февраля" {{ (old('month')=="Февраля") ? 'selected' : '' }}>Февраля</option>
                <option value="Марта" {{ (old('month')=="Марта") ? 'selected' : '' }}>Марта</option>
                <option value="Апреля" {{ (old('month')=="Апреля") ? 'selected' : '' }}>Апреля</option>
                <option value="Мая" {{ (old('month')=="Мая") ? 'selected' : '' }}>Мая</option>
                <option value="Июня" {{ (old('month')=="Июня") ? 'selected' : '' }}>Июня</option>
                <option value="Июля" {{ (old('month')=="Июля") ? 'selected' : '' }}>Июля</option>
                <option value="Августа" {{ (old('month')=="Августа") ? 'selected' : '' }}>Августа</option>
                <option value="Сентября" {{ (old('month')=="Сентября") ? 'selected' : '' }}>Сентября</option>
                <option value="Октября" {{ (old('month')=="Октября") ? 'selected' : '' }}>Октября</option>
                <option value="Ноября" {{ (old('month')=="Ноября") ? 'selected' : '' }}>Ноября</option>
                <option value="Декабря" {{ (old('month')=="Декабря") ? 'selected' : '' }}>Декабря</option>

            </select>
            </div>

            <div class="form-group" >
                <label class="">Год : </label>
                <select name="year" class="form-control">
                    <option value="">--</option>
                    @for ($ii = 1930; $ii < 2012; $ii++)
                    <option value="{{$ii}}" {{ (old('year')==$ii) ? 'selected' : '' }}>
                        {{$ii}}
                    </option>
                    @endfor
                </select>
            </div>


            <div class="form-group" >
                <label class="">Знак Зодиака</label>
                <select name="zodiak" class="form-control">
                    <option value="">--</option>
                    <option value="Овен" {{ (old('zodiak')=="Овен") ? 'selected' : '' }}>Овен</option>
                    <option value="Телец" {{ (old('zodiak')=="Телец") ? 'selected' : '' }}>Телец</option>
                    <option value="Близнецы" {{ (old('zodiak')=="Близнецы") ? 'selected' : '' }}>Близнецы</option>
                    <option value="Рак" {{ (old('zodiak')=="Рак") ? 'selected' : '' }}>Рак</option>
                    <option value="Лев" {{ (old('zodiak')=="Лев") ? 'selected' : '' }}>Лев</option>
                    <option value="Дева" {{ (old('zodiak')=="Дева") ? 'selected' : '' }}>Дева</option>
                    <option value="Весы" {{ (old('zodiak')=="Весы") ? 'selected' : '' }}>Весы</option>
                    <option value="Скорпион" {{ (old('zodiak')=="Скорпион") ? 'selected' : '' }}>Скорпион</option>
                    <option value="Стрелец" {{ (old('zodiak')=="Стрелец") ? 'selected' : '' }}>Стрелец</option>
                    <option value="Козерог" {{ (old('zodiak')=="Козерог") ? 'selected' : '' }}>Скорпион</option>
                    <option value="Водолей" {{ (old('zodiak')=="Водолей") ? 'selected' : '' }}>Водолей</option>
                    <option value="Рыбы" {{ (old('zodiak')=="Рыбы") ? 'selected' : '' }}>Рыбы</option>
                </select>
            </div>

        </div>


        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
                <label>
                    <i class="fa fa-skype fa-lg" aria-hidden="true"></i>
                    введите свой логин skype
                </label>
                <input type="text" class="form-control" name="skype" value="{{ old('skype') }}">
                @if ($errors->has('skype'))
                    <span class="help-block">
                        <strong>{{ $errors->first('skype') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label>
                    <i class="fa fa-phone fa-lg" aria-hidden="true"></i>
                    введите свой номер телефона
                </label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>


        </div>

        <div style="background:#ffffff;padding:20px;margin:20px;">
            <label>
                <i class="fa fa-street-view fa-lg" aria-hidden="true"></i>
                чем я занят последнее время:
            </label>
            <textarea class="form-control" name="article" rows="3" style="resize: none;">{{old('article')}}</textarea>
                @if ($errors->has('article'))
                    <span class="help-block">
                        <strong>{{ $errors->first('article') }}</strong>
                    </span>
                @endif
            <br>

            <label>
                <i class="fa fa-heartbeat fa-lg" aria-hidden="true"></i>
                мои увлечения:
            </label>
            <textarea class="form-control" name="hobby" rows="3" style="resize: none;">{{old('hobby')}}</textarea>
                @if ($errors->has('hobby'))
                    <span class="help-block">
                        <strong>{{ $errors->first('hobby') }}</strong>
                    </span>
                @endif
            <br>

            <label>
                <i class="fa fa-bullseye fa-lg" aria-hidden="true"></i>
                моя цель:
            </label>
            <textarea class="form-control" name="my_target" rows="3" style="resize: none;">{{old('my_target')}}</textarea>
                @if ($errors->has('my_target'))
                    <span class="help-block">
                        <strong>{{ $errors->first('my_target') }}</strong>
                    </span>
                @endif
            <br>


            <button type="submit" class="btn btn-primary btn-sm center-block">
                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                Сохранить
            </button>

        </div>


        </form>


    </div>
</div>



<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div class="rightcolm">

        @include('website.right-menu-sk')

    </div>
</div>

		
@endsection
         
			
	
		
