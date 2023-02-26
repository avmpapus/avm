$(document).ready(function(){

    $('.btn-friendship').click(function () {

        var btn = $(this);

        var forUser = btn.attr("data-request");

        // если это стр. профиля другого польз.
        if(btn.parent().hasClass("btn-group")){
            //скрыть кнопку из группы кнопок
            btn.hide();
        }

        // добавить прелоадер отправки заявки
        btn.parent().prepend('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');


        //alert(forUser);

        $.ajax({
            type: 'GET',
            url: '/request-for-friendship',
            data: {
                forUser: forUser
            },
            success: function (data) {

                // отменить фокус кнопки
                btn.blur();
                // вставить тект вместо кнопки
                btn.parent().html("<span class=\"text-danger\">" + data.response + "</li>");
                //alert(data.response);
            }
        })
    })

});


