$(document).ready(function(){

    $('.btn-friend-yes, .btn-friend-not').click(function () {
        // кнопка
        var b = $(this);

        if( b.hasClass("btn-friend-yes")){
            var act = 2;
        }
        else{
            var act = 1;
        }

        var id = b.attr("data-request");
        // текст в badge
        var t = $('.badge-notice').text();

        b.parent().prepend("<i class=\"fa fa-spinner fa-spin fa-fw\"></i>");


        $.ajax({
            type: 'GET',
            url: '/store-friend',
            data: {
                id: id,
                act: act
            },
            success: function (data) {

                // отменить фокус кнопки
                b.blur();
                // вставить тект вместо кнопки
                b.parent().html("<span class=\"text-danger\">" + data.response + "</li>");
                // если ответ не ошибка
                if(data.response != -1) {
                    // если оповещений в badge осталось 1
                    // то скрываем badge
                    if (t == 1) {
                        $('.badge-notice').fadeOut(300);
                        $(".a-badge-notice img").removeClass("com-anime");
                    }
                    // иначе уменьш. знач. в badge на 1
                    else {
                        $('.badge-notice').text(t - 1);
                    }
                }
            }
        })
    })

});


