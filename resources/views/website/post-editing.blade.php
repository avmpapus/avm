@extends('layouts.main-front')

@section('content')

    <?php
    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>

    <div class="clearfix"></div>


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
        <?php

        if($user_profile->language!='ua'){
        ?>
        <script language="JavaScript">
            document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
        </script>
        <?php
        }
        if($user_profile->language=='ua'){
        ?>
        <script language="JavaScript">
            document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Попередня сторінка</a>");
        </script>
        <?php
        }
        ?>




        <?php
        echo $_SERVER['REQUEST_URI']
        ?>



        {{--var_dump(is_int((int)'55*1'))--}}

        <div class="sk-div-post">

            <h4 class="text-center" style="text-decoration: underline;">
                <?php
                if($user_profile->language!='ua'){
                ?>
                    <i>Редактирование материала</i>
                <?php
                }
                if($user_profile->language=='ua'){
                ?>
                    <i>Редагувати матеріал</i>
                <?php
                }
                ?>

            </h4>
            <br>

            @if(Session::has('notice_create_post'))
                <p class="help-block">{{Session::get('notice_create_post')}}</p>
            @endif


            <form role="form" id="form-post-sk" action="{{action('PostController@update',['id'=> $post->id ])}}"
                                            method='post' enctype='multipart/form-data'>
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">

                {{--
                <div class="form-group">
                <label class="">
                    Основная ТЕМА для Вашего материала &rArr;
                    <a href="{{ action('PostController@editMainCategory',['id'=> $post->id ]) }}" >
                        <i>изменить</i>
                    </a>
                </label>
                <select name="category" class="form-control" >

                    <option value="{{$post->categoryForPost->categoryMainForSubcategory->id}}">
                        {{$post->categoryForPost->categoryMainForSubcategory->category}}
                    </option>

                </select>

                </div>
                --}}


				<font color="blue">Статус материала</font>
						<select name="pub" class="form-control" >
                        <option>Опубликовать</option>
                        <option>Личное</option>
                        </select>
				
				<br>
				
                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label class="">Категория для Вашего материала*</label>
                    <?php
                    }
                    if($user_profile->language=='ua'){
                    ?>
                        <label class="">Категорія для Вашого матеріалу*</label>
                    <?php
                    }
                    ?>

                <select name="subcategory" class="form-control" >
                <option value="">--выберите подкатегорию из списка--</option>
                @foreach($categories as $value)
                    <option class="category-disabled" disabled>
                        &bull; {{$value->category}} &bull;
                    </option>

                    @foreach($value->subcategoriesOfCategory as $sub_value)
                    <option value="{{$sub_value->id}}"
                    {{ ($sub_value->id == $post->subcategory_id) ? 'selected' : '' }} >
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
                    if($user_profile->language=='ua'){
                    ?>
                        <label>Заголовок</label>
                    <?php
                    }
                    ?>


                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        <input type="text" name="title" class="form-control" value="{{ $post->title}}"
                               placeholder="Заголовок">
                        <?php
                        }
                        if($user_profile->language=='ua'){
                        ?>
                        <input type="text" name="title" class="form-control" value="{{ $post->title}}"
                               placeholder="Заглавие">
                        <?php
                        }
                        ?>



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
                    if($user_profile->language=='ua'){
                    ?>
                        <label>
                            Завантажити зображення <br>
                            Зображення повинно бути формату jpg або png. Змінити аватар:<br>
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
                <div class="ajax-respond">
                    <img src='{{$post->img}}' class='img-responsive'>
                </div>
                <br>

                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label>
                            Добавьте ссылку на видео в YouTube
                        </label>
                    <?php
                    }
                    if($user_profile->language=='ua'){
                    ?>
                        <label>
                            Додайте посилання на відео в YouTube
                        </label>
                    <?php
                    }
                    ?>


                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        <input type="text" name="video_link" class="form-control" value="{{ $post->video}}"
                               placeholder="ссылка YouTube">
                        <?php
                        }
                        if($user_profile->language=='ua'){
                        ?>
                        <input type="text" name="video_link" class="form-control" value="{{ $post->video}}"
                               placeholder="посилання YouTube">
                        <?php
                        }
                        ?>


                    @if ($errors->has('video_link'))
                        <span class="help-block">
                            <strong>{{ $errors->first('video_link') }}</strong>
                        </span>
                    @endif
                </div>

                @if($post->video)
                <div class="video-sk col-md-12">
                    {!! $post->video !!}
                </div>
                @endif
                {{--
                Сессия - {{Session::get('root_name')}}
                --}}
                <div class="form-group">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <label>Текст*</label>
                    <?php
                    }
                    if($user_profile->language=='ua'){
                    ?>
                        <label>Текст*</label>
                    <?php
                    }
                    ?>

                    <textarea class="form-control" name="content_post" rows="5">{{$post->description}}</textarea>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="form-group text-right">
                    <?php
                    if($user_profile->language!='ua'){
                    ?>
                        <a href="{{ action('PostController@edit', $post->id) }}" class="btn btn-danger btn-sm" role="button">
                            Отмена изменений
                        </a>
                    <?php
                    }
                    if($user_profile->language=='ua'){
                    ?>
                        <a href="{{ action('PostController@edit', $post->id) }}" class="btn btn-danger btn-sm" role="button">
                            Скасування змін
                        </a>
                    <?php
                    }
                    ?>


                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary btn-sm ">
                        <i class="fa fa-external-link-square" aria-hidden="true"></i>
                        <?php
                        if($user_profile->language!='ua'){
                        ?>
                        Сохранить
                        <?php
                        }
                        if($user_profile->language=='ua'){
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



    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">

        <?php
        if($user_profile->language!='ua'){
        ?>

        <div class="rightcolm">
            @include('website.menu')
        </div>
        <?php
        }
        if($user_profile->language=='ua'){
        ?>

        <div class="rightcolm">
            @include('website.ua-menu')
        </div>
        <?php
        }


        if($user_profile->language!='ua'){
            ?>


                <?php
            echo'<br><div class="rightcolm"><a href="ua" id="post_form_language">Українська</a>';
            echo'<br><font color="gray">Русский</font></div>';
        }

        if($user_profile->language=='ua'){
            echo'<br><div class="rightcolm"><font color="gray">Українська</font>';
            echo'<br><a href="ru" id="post_form_language">Русский</a></div>';
        }
        ?>
    </div>



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