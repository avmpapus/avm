/* отправка коментария */
$(function () {
    $(".div-write-submit button").click(function () {

        var dd = $(".sss .parent-contenteditable").attr("data-news");
        var divForComment = $('[data-id ='+ dd + ']').find(".div-all-comments");
        var divWriteContent = $("#editor").html();
        $(".sss").css({top: "auto",left: "auto"}).hide();
        $(".sk-div-write").fadeTo(0, 1);

        //.hide()
        //alert(dd);

        //divForComment.html(232);

        //var divForComment = $(this).parents('.sk-div-write').prev(".div-comments").find(".div-all-comments");
        // divWrite = $(this).parents('.sk-div-write').find(".div-contenteditable");
        //var divWriteContent = divWrite.html();

        // скрыть окно со смайликами
        $('.emoji_container').hide();

        // если строка ввода не пустая
        if (divWriteContent.length > 0) {

            //var postId = $(this).parents('.sk-div-write').find(".parent-contenteditable").attr("data-id");
            var postId = dd;
            //alert(postId);

            $.ajax({
                type: 'POST',
                url: '/comment-post-store',
                data: {
                    contentComment: divWriteContent,
                    postId: postId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {

                    console.log('Результат - ' + msg.comment.id);
                    //divWrite.html('');

                    // если это редактирование, то удалить старый коментарий(если он есть)
                    if(msg.comment.id > 0){
                        var oldCommentId = msg.comment.id;
                        $('[data-comment =' + oldCommentId + ']').detach();
                    }

                    if (msg.response != -1) {

                        divForComment.find(".com-action").detach();
                        divForComment.append("<div class=\"comment-block-no-hidden\""
                        + "data-comment=\"" + msg.comment.id + "\">"
                        + "<div class=\"row\"> <div class=\"com-title col-md-10\">"
                        + "<img src=\"" + msg.userData.photo + "\" width=\"50\" height=\"50\" "
                        + "class=\"\" alt=\"\">"
                        + " &nbsp; <strong><span class=\"author-name\" data-authorid=\"" + msg.userData.user_id
                        + "\">" + msg.userData.name + " </span> " + msg.userData.last_name
                        + "</strong> </div> <div class=\"com-action col-md-2\">"
                        + "<p class=\"text-right\">"
                        + "<i class=\"fa fa-pencil-square-o sk-fa-edit\" aria-hidden=\"true\""
                        + " data-toggle=\"tooltip\" title=\"Изменить\"></i>"
                        + " &nbsp; <i class=\"fa fa-trash-o sk-fa-del\" aria-hidden=\"true\""
                        + " data-toggle=\"tooltip\" title=\"Удалить\"></i>"
                        + "</p> </div> </div> <div class=\"com-content\">"
                        + msg.response + "</div> <div class=\"com-time\"> <p class=\"text-info\">"
                        + "<small>" + msg.timeComment + "</small> </p> </div> <hr> </div>");
                    }

                }
            });
        }
    });



    //обработчик событий для динамически добавленных в DOM элементов

    // tooltip новый
    $('.div-all-comments').on('mouseenter', '.com-action .sk-fa-edit', function(){
        $(this).tooltip('show');
    });

    // tooltip новый
    $('.div-all-comments').on('mouseenter', '.com-action .sk-fa-del', function(){
        $(this).tooltip('show');
    });

    //$('.div-all-comments').on('click', '.com-action .sk-fa-del',myAjaxDel);

    /* удаление коментария (нового и старого) */
    $('.div-all-comments').on('click', '.com-action .sk-fa-del',function(){
        var divCommentBlock = $(this).parents('.comment-block-no-hidden');

        var commentId = divCommentBlock.attr('data-comment');

        //alert(commentId);
        // окно подверждения удаления
        var isDel = confirm("Удалить коментарий ?");

        if(isDel == true) {
            $.ajax({
                type: 'POST',
                url: '/comment-del',
                data: {
                    commentId: commentId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {
                    if (msg.response == 1) {
                        divCommentBlock.detach();
                    }

                }
            })
        }
    });


    /* редактирование коментария (нового и старого) */
    $('.div-all-comments').on('click', '.com-action .sk-fa-edit',function(){
        var divCommentBlock = $(this).parents('.comment-block-no-hidden');

        var commentId = divCommentBlock.attr('data-comment');

        var content = divCommentBlock.find('.com-content').html();


        var el = $(this).parents('.sk-div-post').find('.sk-div-write');
        //var el = $(this);

        var pos = el.offset();

        var w = el.width();
        var h = el.height();

        var postId = el.parents('.sk-div-post').attr("data-id");

        alert(postId);
        // скрыть элемент
        el.fadeTo(0, 0);


        // показать блок в нужном месте
        $(".sss").offset({top:pos.top, left:pos.left}).width(w).height(h).show();
        // фокус в поле ввода
        $("#editor").html(content);
        $(".sss .parent-contenteditable").attr("data-news",postId);

        var he = $(".emoji_container").height();

        // озиция окна смайликов
        $(".emoji_container").css({top: pos.top - he - 50 + "px",left: pos.left -40 + "px"});


        //alert(content);

        //var divWrite = divCommentBlock.parents('.sk-div-post').find(".div-contenteditable").html(content);


        $.ajax({
            type: 'POST',
            url: '/comment-edit',
            data: {
                commentId: commentId
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (msg) {
                //if (msg.response == 1) {
                    console.log(msg.response);
                //}

            }
        })

    });


    /* ответ на коментарий */
    $('.div-all-comments').on('click', '.com-answer',function(){


        var divCommentBlock = $(this).parents('.comment-block-no-hidden, .comment-hidden');
        var commentId = divCommentBlock.attr('data-comment');

        var nameAuthor = $.trim(divCommentBlock.find('.author-name').text());
        var idAuthor = divCommentBlock.find('.author-name').attr('data-authorid');

        var divPost = $(this).parents('.sk-div-post').attr('data-id');




        //var el = $(this);
        var el = $(this).parents('.sk-div-post').find('.sk-div-write');
        var pos = el.offset();

        var w = el.width();
        var h = el.height();

        var postId = el.parents('.sk-div-post').attr("data-id");

        //alert(postId);
        // скрыть элемент
        el.fadeTo(0, 0);


        // показать блок в нужном месте
        $(".sss").offset({top:pos.top, left:pos.left}).width(w).height(h).show();
        // фокус в поле ввода
        $("#editor").html('<span data-for-id="' + idAuthor+ '">'+ nameAuthor+',</span>&nbsp;');
        $(".sss .parent-contenteditable").attr("data-news",postId);


        var he = $(".emoji_container").height();

        // озиция окна смайликов
        $(".emoji_container").css({top: pos.top - he - 50 + "px",left: pos.left -40 + "px"});

        //var divWrite = divCommentBlock.parents('.sk-div-post')
        //        .find(".div-contenteditable")
        //        .html('<span data-for-id="' + idAuthor+ '">'+ nameAuthor+',</span>&nbsp;');

        //divWrite.focus();
        //placeCaretAtEnd( divWrite[0] );


    });


    //обработчик событий для динамически добавленных в DOM элементов



    /* удаление коментария
    $(".com-action .sk-fa-del").click(function () {

        var divCommentBlock = $(this).parents('.comment-block-no-hidden');

        var commentId = divCommentBlock.attr('data-comment');

        alert(commentId);a

        $.ajax({
            type: 'POST',
            url: 'comment-del',
            data: {
                commentId: commentId
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (msg) {
                if (msg.response == 1) {
                    divCommentBlock.detach();
                }

            }
        })

    });
     */
});



