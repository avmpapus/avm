/* для личных сообщений со стр. "профиль" */
$(function () {

    /* открыть поле для написания */
    $(".btn-mess").click(function () {
        $(".write-mess").show('fast');
        $(this).blur();
        $("#editor").focus();

        var el = $('.sss');
        var pos = el.offset();
        var he = $(".emoji_container").height();

        // установить блок в нужном месте
        $(".emoji_container").css({top: pos.top - he + 25 + "px",left: pos.left -35 + "px"});


    });

    /* закрыть поле для написания */
    $(".btn-not").click(function () {
        $(".write-mess").hide('fast');
        $("#editor").html('   ');
    });


    // для отправки сообщений со стр. "профиль"
    $(".mess-direct").click(function(){

        var recipientId = $(".parent-contenteditable").attr('data-id');
        var mess = $("#editor").html();

        // ростая валидация "если ничего не набрано"
        if(mess == ''){
            //alert('Пустое поле');
            return false;
        }

        $.ajax({
            url: '/store-for-profile',
            type: 'POST',
            data: {recipientId: recipientId, mess: mess},
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data) {
                if(data.response != -1) {

                    $(".div-contenteditable").html('');

                    $(".sk-pencil").html("<span class=\"help-block\">"
                                                   + data.response + " </span>");

                    $(".write-mess").delay(2000).hide('fast');

                }

            }
        });

    });
    // для отправки сообщений со стр. "профиль"




});



