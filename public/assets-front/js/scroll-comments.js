$(document).ready(function(){

    if(typeof scrollId !== "undefined"){
        // Определена
        var a = scrollId;
    }
    else{
        // Не определена
        var a = 0;
    }

    var elemComment = $('[data-comment =' + a + ']');

    //alert(elemComment);

    if(elemComment.length ) {

        // если комент скрыт(не в 3 последних)
        if(elemComment.hasClass("comment-hidden")) {
            // показать все скрытые коменты в этой новости мгновенно
            elemComment.parents(".div-all-comments").find(".comment-hidden").show();
            // изменить подпись кнопки над ними
            elemComment.parents(".div-all-comments").find('.btn-more-comment').html("<strong> скрыть комментарии </strong>");
        }


        // получ. значение по высоте на странице элемента
        var elemTop = elemComment.offset().top;

        // получ. высоты самого элемента
        var elemHeight = elemComment.height();

        // получ. высоту экрана
        var windowHeight = $(window).height();

        var deltaTop = elemTop - windowHeight / 2 + elemHeight;

        //alert(ddd);



        // плавный скроллинг к элементу
        $('html,body').animate({scrollTop: deltaTop}, 500);

        var elemCurrent = elemComment.find('.com-content');

        // если это НЕ элемент - "непрочитанный ответ"
        if(!elemCurrent.hasClass("border-answer")) {
            // ...то добавить класс для другой рамки
            elemCurrent.addClass("border-answer-v");

            // отменить рамку через время
            setTimeout(classDelete, 3000);
        }

    }

    // удаление класса через интервал
    function classDelete() {
        elemCurrent.removeClass("border-answer-v");
    }

});


