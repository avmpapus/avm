$(document).ready(function(){
    $('.btn-more-comment').click(function () {
        //alert(123);

        $(this).blur();

        var comments = $(this).parent().children(".comment-hidden");

        if(comments.is(':visible')){

            //comments.removeClass('comment-hidden');
            comments.hide(300);
            $(this).html("<strong>  показать все </strong>");
        }
        else{
            comments.show(300);
            $(this).html("<strong> скрыть комментарии </strong>");
        }



    })

});


