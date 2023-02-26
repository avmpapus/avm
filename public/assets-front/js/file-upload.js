$(document).ready(function(){

    //alert(123);
    // Переменная куда будут располагаться данные файлов
    var file;

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
                + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                + " Выберите другое изображение. </span>");
            }
        });
    });

});


