@extends('layouts.main-front')

@section('content')

    <?php

    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();

    ?>
    <br><br>


    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <?php

        if($user_profile->language=='ua'){
        ?>
        @include('website.ua-right-menu-sk')
        <?php
        }
        if($user_profile->language!='ua'){
        ?>
        @include('website.ru-right-menu-sk')
        <?php
        }

        ?>
    </div>




<div class="col-md-6 col-sm-6 col-xs-12 sk-block">
    <div class="midcont">

        <div id="myDiv"></div>


        <div style="margin:-10px;padding:10px;">
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
            </script>


            <?php
            echo $_SERVER['REQUEST_URI']
            ?>

        </div>

{{--
        <div style="margin:10px;padding:10px;background:white;">
        
            <a href="/">Актуальное</a>
                &nbsp;&nbsp;<b>Подтемы</b>
                <br />
        

            @foreach($subcategories as $category)
            <a href="" style="text-decoration: none;">
                <font color="">
                    {{ $category->page }}
                    &diams;
                </font>
            </a>
            @endforeach


        </div>
--}}

        {{--var_dump(is_int((int)'55*1'))--}}

        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <?php

                if($user_profile->language!='ua'){
                ?>
                <i>Добавление нового материала</i>
                <?php
                    }
                    else
                    {
                    ?>
                    <i>Додавання нового матеріалу</i>
                    <?php
                    }
                    ?>
            </h4>
            <br>

            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif



            <?php

            ?>


            <form role="form" id="form-post-sk" action="{{action('PostController@store')}}"
                                            method='post' enctype='multipart/form-data'>

                {{ csrf_field() }}

                {{--
                <div class="form-group">
                <label class="">
                    Основная ТЕМА для Вашего материала &rArr;
                    <a href="{{ url('post/create') }}" >
                        <i>изменить</i>
                    </a>
                </label>
                <select name="category" class="form-control" >

                    <option value="{{$categories[0]->id}}">{{$categories[0]->category}}</option>

                </select>

                </div>
                --}}

<input type="hidden" name="last_name" value="<?php echo auth::user()->name ?>">
                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label class="">Категория для Вашего материала*</label>
                    <?php
                    }
                    else
                    {
                    ?>
                        <label class="">Категорія для Вашого матеріала*</label>
                    <?php
                    }
                    ?>

                <select name="subcategory" class="form-control">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <option value="">-- Выберите категорию из списка --</option>
                    <?php
                    }
                    else
                    {
                    ?>
                        <option value="">-- Выберіть категорію з переліку --</option>
                    <?php
                    }
                    ?>

                @foreach($categories as $value)
                    <option class="category-disabled" disabled>
                        &bull; {{$value->category}} &bull;
                    </option>
                    @foreach($value->subcategoriesOfCategory as $sub_value)
                    <option value="{{$sub_value->id}}">
                        {{$sub_value->page}}
                    </option>
                    @endforeach
                @endforeach
                </select>
                    @if ($errors->has('subcategory'))
                        <span class="help-block">
                            <strong>{{ $errors->first('subcategory') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label>Заглавие</label>
                    <?php
                    }
                    else
                    {
                    ?>
                        <label>Заголовок</label>
                    <?php
                    }
                    ?>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                        placeholder="Заголовок">
                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">


                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label>
                            Загрузить изображение <br>
                            Изображение должно быть формата jpg или png. Изменить аватар:<br>
                        </label>
                    <?php
                    }
                    else
                    {
                    ?>
                        <label>
                            Завантажити світлину <br>
                            Світлина повинна бути формату jpg або png. Змінити аватар:<br>
                        </label>
                    <?php
                    }
                    ?>

                    <input type="file" name="img2">
                    @if ($errors->has('img2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <div class="ajax-respond"></div>
                <br>
                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label>
                            Добавьте ссылку на видео в YouTube
                            <br>
                            и видео будет отображаться в Вашем посте
                        </label>
                    <?php
                    }
                    else
                    {
                    ?>
                        <label>
                            Додайте посилання на відео в YouTube
                            <br>
                            і відео буде відображатися у Вашому пості
                        </label>
                    <?php
                    }
                    ?>


                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                               placeholder="ссылка YouTube">
                        @if ($errors->has('video_link'))
                            <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                        @endif
                        <?php
                        }
                        else
                        {
                        ?>
                        <input type="text" name="video_link" class="form-control" value="{{ old('video_link') }}"
                               placeholder="посилання YouTube">
                        @if ($errors->has('video_link'))
                            <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                        @endif
                        <?php
                        }
                        ?>




                </div>

                {{--Сессия - Session::get('root_name')--}}

                <div class="form-group">
                    {{--<label>Содержание новости*</label>--}}
                    <textarea class="form-control" name="content_post" rows="5" placeholder="Текст">{{ old('content') }}</textarea>
                    {{--
                    @if ($errors->has('content_post'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content_post') }}</strong>
                        </span>
                    @endif
                    --}}

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm center-block">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        Сохранить
                        <?php
                        }
                        else
                        {
                        ?>
                        Зберегти
                        <?php
                        }
                        ?>

                    </button>
                </div>

            </form>



        </div>



    </div>
</div>


<?php  
$url = $_SERVER['REQUEST_URI'].'?lang=eng&type=set';
            $a = explode('?', $url);
            $a = $a[0];
//if($a!='/posts'){
if($user_profile->language!='ua'){
?>


<br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div style="margin-left: -40px;background-color:#fff;padding:10px;">
	Наука
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/25">Наука</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/24">Наука и исследования</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/1">Общественные и гуманитарные науки</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/2">Естественные науки</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/3">Технические науки</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/4">Технические эксперименты, прикладные исследования</a>
	<br>
    <a href="http://cpcp.com.ua/posts-for-cat/5">Исследования, эксперименты</a>
	<br><br>
    Энергия
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/6">Энергосберегающие технологии</a>
	<br><br>
        Быт
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/7">Бытовые, технические эксперименты, самоделки</a>
	<br><br>
    Строительство
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/8">Капитальное строительство</a>
	<br>
        <a href="http://cpcp.com.ua/posts-for-cat/9">Ландшафтное строительство</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/10">Ландшафтный дизайн</a>
		<br><br>
        Культура
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/11">Искусство</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/12">Религия</a>
		<br><br>
        Экология
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/13">Лес, парковое хозяйство</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/14">Реки, водные системы, береговые зоны</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/15">Природные ресурсы</a>
		<br><br>
    Общество
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/16">Модели коммуникации</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/22">Информационные технологии</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/17">Национальная идея, формирование национальной идеи</a>
		<br>
        <a href="http://cpcp.com.ua/posts-for-cat/18">Система общественного самоуправления (СиОС)</a>
		<br><br>
        Образование
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/19">Образование, самообразование</a>
		<br><br>
        Идеи
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/20">Идеи, предложения, решения</a>
	
	
    </div>
</div>
<?php
//}
}
//if($a!='/posts'){
if($user_profile->language=='ua'){
?>
<br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">
    <div style="margin-left: -40px;background-color:#fff;padding:10px;">

        Наука
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/25">Наука</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/24">Наука і дослідження</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/1">Громадські та гуманітарні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/2">Природні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/3">Технічні науки</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/4">Технічні експерименти, прикладні дослідження</a><br>
    <a href="http://cpcp.com.ua/posts-for-cat/5">Дослідження, експерименти</a><br><br>
    Энергія
    <br>
    <a href="http://cpcp.com.ua/posts-for-cat/6">Енергозберігаючі технології</a><br><br>
        Побут
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/7">Побутові, технічні експерименти, саморобки</a><br><br>
        Будівництво
        <br>
    <a href="http://cpcp.com.ua/posts-for-cat/8">Капітальне будівництво</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/9">Ландшафтне будівництво</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/10">Ландшафтний дизайн</a><br><br>
        Культура
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/11">Искусство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/12">Религия</a><br><br>
        Экологія
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/13">Ліс, паркове господарство</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/14">Річки, водні системи, берегові зони</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/15">Природні ресурси</a><br><br>
        Суспільство
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/16">Моделі комунікації</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/22">Інформаційні технології</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/17">Національна ідея, формування національної ідеї</a><br>
        <a href="http://cpcp.com.ua/posts-for-cat/18">Система громадського самоврядування (СіОС)</a><br><br>
        Освіта
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/19">Освіта, самоосвіта</a><br><br>
        Ідеї
        <br>
        <a href="http://cpcp.com.ua/posts-for-cat/20">Ідеї, Пропозиції, Рішення</a><br>

    </div>
	<?php
		//	}
}
?>




<script>
    // Переменная куда будут располагаться данные файлов
    //var file;

    // Вешаем функцию на событие
    // Получим данные файлов и добавим их в переменную

    $('#form-post-sk input[type=file]').change(function(){
        //file = $(this).val();

        // получить форму, а НЕ input
        var aaa = $("#form-post-sk");

        // files - массив с данными о выбранных файлах
        //file = this.files;

        var formData = new FormData(aaa[0]);


        $('.ajax-respond').html( "<img src='/assets-front/img/30.gif' class='img-responsive'>" );

        /*
         $.each( files, function( key, value ){
         data.append( key, value );
         });
         */


        console.log("Форма "+aaa[0]);

        $.ajax({
            url: "/img-store",
            type: "POST",
            data : formData,
            dataType: 'json',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function(data){

                console.log('Результат - ' + data.response);

                var html = "<img src=\"" + data.response + "\" class=\"img-responsive\"> ";

                $('.ajax-respond').html( html );
            },
            error: function(err){

                $('.ajax-respond').html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                + " Допустимый формат jpeg/png, размер до 4Мб.<br> "
                + " Выберите другое изображение. </span>");
            }
        });
    });

</script>

@endsection