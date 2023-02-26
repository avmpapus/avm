@extends('layouts.main-front')

@section('content')


        <?php
    use App\UserProfile;
    use App\User;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    $user = User::where('id', Auth::id())->first();


 
        ?>
		
		

<?php
        if($user_profile['photo']){
        ?>
                <a class="sk-popup-link" href="/public/{{$user_profile->photo}}">	
                        <img src="/public/{{$user_profile->photo}}" width="100">
                    </a>    				
<?php
        }
        if(!$user_profile['photo']){
        ?>
                    <img src="{{asset('/public/assets-front/img/no-avatar.jpg')}}" width="100">
            <?php
        }
        ?>
		
		<br><br>


<div class="tabs">
    <input type="radio" name="inset" value="" id="tab_1" checked>
    <label for="tab_1">Общая информация</label>

   
    <input type="radio" name="inset" value="" id="tab_3">
    <label for="tab_3">Редактировать имя, интересы</label>

   <input type="radio" name="inset" value="" id="tab_4">
    <label for="tab_4">Загрузить фото</label>

    <div id="txt_1">
       <?php
	   
				  	if($user_profile['user_id']){
		echo 'Мой логин: '.$user_profile->name;
	}
		if(!$user_profile['user_id']){
		echo 'Мой логин: '.$user->name;
	}
	
	?>
	<br><br>
	Мои увлечения: {{$user_profile->hobby}}
	<br><br>
	Моя специальность: {{$user_profile->specialization}}

    

        </form>
    </div>

    <div id="txt_3">
       <form action="{{action('UserProfileController@create')}}" method='post' role="form">
        {{ csrf_field() }}



        <div style="background:#ffffff;padding:20px;margin:20px;">

            <div class="form-group">
			{{----<label>Логин:</label>----}}
                <input type="hidden" class="form-control" name="login" value="{{Auth::user()->name}}">
            </div>

            <div class="form-group">
                <label>Имя:</label>
                                <input type="hidden" class="form-control" name="user_id"
                    value="{{Auth::id()}}">
     
                  <?php
				  	if($user_profile['user_id']){
		echo'<input type="text" class="form-control" name="name"
                    value="'.$user_profile->name.'">';
	}
		if(!$user_profile['user_id']){
		echo'<input type="text" class="form-control" name="name"
                    value="'.$user->name.'">';
	}
	?>
              
 
<label>Ваши увлечения:</label>
                <input type="text" class="form-control" name="hobby" value="{{$user_profile->hobby}}">
          

            <div class="form-group">
                <label>Ваша специальность:</label>
                                <input type="text" class="form-control" name="specialization"
                    value="{{$user_profile->specialization}} ">

            <button type="submit" class="btn btn-primary btn-sm center-block">
                <i class="fa fa-external-link-square" aria-hidden="true"></i>
                Сохранить
            </button>

        </div>


        </form>	
				</div>
</div></div>
<div id="txt_4">
 @if($user_profile['user_id'])  
        
        
<div>
    <div class="midcont">
        <br>
        <div style="background:#ffffff;padding:20px;margin:20px;">
          
            
            Загрузить фото профиля
            <br><br>
            <form action="{{action('UserProfileController@uploadImg')}}" method='post'
                enctype='multipart/form-data' id="form-post-sk">
                {{ csrf_field() }}
                <input type="hidden" name="angle" value="">

                <div class="form-group">
                    <label for="InputFileProfile">
                        Изображение должно быть формата jpg,<br/>gif или png. Изменить аватар:<br>
                    </label>
                    <input type="file" name="img2" id="InputFileProfile">

                    @if(Session::has('message'))
                    <p class="help-block">{{Session::get('message')}}</p>
                    @endif

                    @if ($errors->has('img2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('img2') }}</strong>
                        </span>
                    @endif
                    <br>

                </div>

                <div class="ajax-respond" style="position:relative;">

                    <div class="div-rotate-img" style="display: none;">
                        <button type="button" class="btn btn-warning btn-sm rotate-img-left">
                            <i class="fa fa-undo fa-lg" aria-hidden="true"></i>
                        </button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning btn-sm rotate-img-right">
                            <i class="fa fa-repeat fa-lg" aria-hidden="true"></i>
                        </button>

                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger btn-sm rotate-img-clear">
                            Сброс
                        </button>

                        &nbsp;&nbsp;&nbsp;
                        
                    </div>

                </div><button type="submit" class="btn btn-primary btn-sm btn-profile-img-submit">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            Сохранить
                        </button>
            </form>
            <hr>

        </div>

      


    </div>
</div>

</div>


@endif
        </div>
<script>
// для изменения фото профиля из папки
$('#modalImgFolder').on('shown.bs.modal', function() {

    // если картинки уже выбраны с сервера, то выход из функ.
    if($('div').is(".carousel-inner .item")){
        return false;
    }

    // текущая картинка в профиле
    var imgCurr = $(".midcont img").attr("src");

    $.ajax({
        type: "POST",
        url: "/profile/request-img-folder",
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data){
            var mB = $("#modalImgFolder div.modal-body .container-fluid .row");
            mB.find(".sk-pre").hide();
            mB.find("#carousel-photo").show();
            $(".sk-bt-img").show();
            for (var i = 0; i < data.response[1].length; ++i) {

                if(i==0){
                    var ac = " active";
                }
                else{
                    var ac = "";
                }

                mB.find(".carousel-inner").append("<div class=\"item" + ac +
                        "\" data-img=\""+ data.response[0][i] + "\">" +
                         "<img class=\"img-responsive center-block\" " +
                        "src=\""  +  data.response[1][i] + "\"></div>");

                /*
                // если картинка равно текущей, то нет кнопки удаления
                if(imgCurr == data.response[1][i]){
                    mB.append("<div class=\"col-md-6\"><a href=\"/user/img-update-folder/" + data.response[0][i]
                                + "\"><img src=\"" +  data.response[1][i] +
                                "\" class=\"img-responsive sk-img-folder\"></a></div>");
                }
                else{
                    mB.append("<div class=\"col-md-6\"><a href=\"/user/img-update-folder/" + data.response[0][i]
                            + "\"><img src=\"" +  data.response[1][i] +
                            "\" class=\"img-responsive sk-img-folder\"></a>" +
                            "<button type=\"button\" class=\"btn btn-danger del-image-folder btn-xs\">" +
                            "<i class=\"fa fa-times fa-lg\"></i> </button></div>");
                }

                if(((i%2) != 0)){
                    mB.append("<div class=\"clearfix\"></div>");
                }
                */
            }
        }
    })

});


// для удаления фото из папки
$('#modalImgFolder').on('click', '.del-image-folder',function(){

    var imgMain = $(".midcont img").first().attr('src');
    var divImg = $(".carousel-inner .active");
    var img = divImg.find("img").attr('src');

    // если текущая картинка равна изображению в профиле, то не удалять
    if(imgMain == img){
        alert("Вы не можете удалить главное изображение профиля !");
        return false;
    }

    // окно подверждения удаления
    var isDel = confirm("Удалить изображение ?");
    if(isDel == true) {

        $.ajax({
            type: "POST",
            url: "/profile/img-del-folder",
            data: {img: img},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data){
                //alert(data.response);
                if(data.response != -1){
                    //divImg.next().addClass("active");
                    divImg.detach();
                    $(".carousel-inner .item").first().addClass("active");

                    //$("#modalImgFolder div.modal-body .clearfix").detach();
                    //var allDivsImg = $("#modalImgFolder div.modal-body .col-md-6");

                    /*
                    // перебор набора элементов(цикл for тут не работает)
                    allDivsImg.each(function(index,val){
                        if(((index%2) != 0)){
                             $(this).after("<div class=\"clearfix\"></div>");
                        }
                    });
                    */
                }
            }
        });
    }
});

$('#modalImgFolder').on('click', '.img-update-folder',function(){

    var divImg = $(".carousel-inner .active");
    var dataImg = divImg.attr('data-img');
    var imgMain = $(".midcont img").first().attr('src');
    var img = divImg.find("img").attr('src');

    // если текущая картинка равна изображению в профиле, то не удалять
    if(imgMain == img){
        return false;
    }
    window.location.href = "/profile/img-update-folder/" + dataImg ;
});


</script>

<script>
// вращение картинок
$(function () {

    // перем. угла поворота
    var rot = 0;

    // Переменная куда будут располагаться данные файлов
    //var file;

    // предзагрузка изображения
    $('#form-post-sk input[type=file]').change(function(){

        // получить форму, а НЕ input
        var aaa = $("#form-post-sk");

        var formData = new FormData(aaa[0]);

        // обновить attr, что бы убрать height
        $('.ajax-respond').attr("style","position:relative;");

        $('.ajax-respond').prepend( "<img src='/assets-front/img/30.gif' class='img-responsive sk-img-pre'>" );

        //console.log("Форма "+aaa[0]);

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

                var html = "<img src=\"" + data.response + "\" class=\"img-responsive\"> <br>";

                $('.ajax-respond .sk-img-pre, .ajax-respond img, .ajax-respond br, .ajax-respond .help-block').detach();
                $('.ajax-respond').prepend( html);
                $('.ajax-respond .div-rotate-img').show();

                // сброс угла вращения в перем. и форме
                rot = 0;
                $("input[name='angle']").val(rot);

            },
            error: function(err){
                $('.ajax-respond .sk-img-pre, .ajax-respond img, .ajax-respond br').detach();
                $('.ajax-respond .div-rotate-img').hide();

                $('.ajax-respond').prepend("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                + " Выберите другое изображение. </span>");
            }
        });
    });


    // вращ. налево
    $(".rotate-img-left").click(function () {

        rot += -90;
        imgRotate(rot);
        $("input[name='angle']").val(rot);

    });

    // вращ. направо
    $(".rotate-img-right").click(function () {

        rot += 90;
        imgRotate(rot);
        $("input[name='angle']").val(rot);

    });

    // сброс манипуляций
    $(".rotate-img-clear").click(function () {
        clearRotate();
        rot = 0;
        $("input[name='angle']").val(0);
    });

    //обработчик события resize
    $(window).resize(function(){
        clearRotate();
        rot = 0;
        $("input[name='angle']").val(0);
    });

});

// функ. сброса всех манипуляций
// с изображением
function clearRotate(){
    // если загружен img
    if($(".ajax-respond img").length){

        $(".ajax-respond img").css("transform", "rotate(0deg)");

        var imgNat_W = $(".ajax-respond img").prop('naturalWidth');
        var imgNat_H = $(".ajax-respond img").prop('naturalHeight');

        var wDiv = $(".ajax-respond").width();

        // если натур. ширина картинки больше блока
        if(imgNat_W > wDiv){
            $(".ajax-respond img").width(wDiv);

            var iH = (wDiv/imgNat_W) * imgNat_H;
            $(".ajax-respond img").height(iH);
        }
        else{
            $(".ajax-respond img").width(imgNat_W);
            $(".ajax-respond img").height(imgNat_H);
        }

        // установка в начало родительского блока
        var posDiv = $(".ajax-respond").offset();
        $(".ajax-respond img").offset(posDiv);

        // установка высоты блока равной высоте img
        var h = $(".ajax-respond img").height();
        $(".ajax-respond").height(h);
    }
}

// функ. поворота
function imgRotate(r){

        var posDiv = $(".ajax-respond").offset();

        //r += -90;
        $(".ajax-respond img").css("transform", "rotate(" + r + "deg)");


        var imgNat_W = $(".ajax-respond img").prop('naturalWidth');
        var imgNat_H = $(".ajax-respond img").prop('naturalHeight');

        // получ. ширину блока
        var wDiv = $(".ajax-respond").width();

        // если длина картинки больше ширина блока
        // то назнач. длину равную ширине блока
        var h = $(".ajax-respond img").height();
        if(h > wDiv){
            $(".ajax-respond img").height(wDiv);

            // ширина - пропорционально
            $(".ajax-respond img").width( (imgNat_W/imgNat_H) * wDiv );

            //назнач. длину блока равную ширине блока
            $(".ajax-respond").height(wDiv);
        }
        // если длина картинки меньше ширина блока
        // то назнач. длину блока равную ширине блока
        if(h < wDiv){

            var w = $(".ajax-respond img").width();

            //получ. большее из длины и ширины для текущ. размера картики
            var delta = Math.max(w, h);
            // назн. текущ. длину блока
            $(".ajax-respond").height(delta);

            //$(".ajax-respond").height(wDiv);
        }

        $(".ajax-respond img").offset(posDiv);

}

</script>
@endsection