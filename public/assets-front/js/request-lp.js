$(document).ready(function(){

    //return false;
    var lastMessId = 0;
    var recipientId = 0;

    // если это "диалог", заполнить переменные для упрощения выборки
    a = $(".one-block-dialog:last").attr('data-mess-id');
    b = $(".sk-div-post").attr('data-user-dialog');
    if(a && b){
        lastMessId = a;
        recipientId = b;
    }

    //alert(recipientId);

    getmess();

    var countRequest=0;

    // массив для сообщений-авторов, не входящих в текущий диалог
    //var messAuthor = [];

    // объявление массива сообщений этого диалога для "чтения"
    //var messArray = [];

    function getmess(){

        // инкремент счётчика для вывода в консоль
        countRequest++;

        $.ajax({
            url:"/request-longPolling",
            data: {lastMessId: lastMessId, recipientId: recipientId},
            type:"GET",
            success:function(result){

                console.log(result);

                console.log('Последнее сообщение:'+ result.response
                            + ' Собеседник:' + result.recipient
                            +' Новые сообщения :' + result.newMessages
                            +' Данные пользователей :' + result.usersData
                            + ' Счётчик - ' + countRequest
                            + ' ..Сессия - ' + result.sess);

                //if(result.newMessages) {//если есть новые сообщения

                    // проверка на существование на текущей странице элемента one-block-dialog
                    var pageDialog = $('*').is('.one-block-dialog');

                    // если это страница "диалог"
                    if(pageDialog){

                        // если есть новые прочитанные исходящие
                        if(result.messNoRespond) {
                            //Выполняет заданную функцию для каждого из выбранных элементов в отдельности.
                            $(".sk-fa-edit").each(function(indx){

                                var iid = 1 * $(this).parents(".one-block-dialog").attr('data-mess-id');
                                //Ищет заданный элемент в массиве. Возвращает индекс этого элемента
                                // или -1 в случае его отсутствия
                                if( $.inArray(iid, result.messNoRespond) == -1){
                                    // добавление "глаза"
                                    $(this).parents(".mess-action").html('<div class="text-right block-sk-eye">'
                                    + '<i class="fa fa-eye" aria-hidden="true"></i> </div>');
                                }
                            });
                        }

                        // добавление входящих сообщений
                        // если массив входящих сообщений не пустой
                        if(result.newMessages) {
                            for (var i = 0; i < result.newMessages.length; ++i) {

                                /*
                                // если сообщение не для этого диалога,
                                // заполняем массив авторов
                                if (result.newMessages[i].author_id != recipientId) {
                                    var keyAuthor = messAuthor.indexOf(result.newMessages[i].author_id);
                                    if (keyAuthor == -1) {//если в массиве нету элем....
                                        //push добавляет элемент в конец массива:
                                        messAuthor.push(result.newMessages[i].author_id);
                                    }
                                }
                                 */

                                // проверка на существование на текущей странице элемента one-block-dialog
                                // с таким же data-mess-id
                                var isBlock = $('*').is('.one-block-dialog[data-mess-id ='+ result.newMessages[i].id +']');

                                // если сообщение для этого диалога
                                // И нет блока с таким же data-mess-id
                                if (result.newMessages[i].author_id == recipientId && !isBlock) {

                                    // получ. и форматирование даты
                                    var now = new Date();
                                    var m = now.getMinutes();
                                    if (m < 10) {
                                        m = "0" + m;
                                    }
                                    var d = now.getHours() + "." + m;

                                    if (result.newMessages[i].img) {
                                        var imgBlock = "<div class=\"mess-img-sk col-md-12\">"
                                            + "<a class=\"sk-popup-link\" href=\"" + result.newMessages[i].img + "\">"
                                            + "<img src=\"" + result.newMessages[i].img + "\" class=\"img-responsive img-post-sk\">"
                                            + "</a> </div> ";
                                    }
                                    else {
                                        var imgBlock = "";
                                    }

                                    if (result.newMessages[i].video) {
                                        var videoBlock = "<div class=\"video-sk col-md-12\">"
                                            + result.newMessages[i].video + "</div> ";
                                    }
                                    else {
                                        var videoBlock = "";
                                    }

                                    $(".one-block-dialog:last").after("<div class=\"one-block-dialog\" data-mess-id=\""
                                        + result.newMessages[i].id + "\"> <div class=\"row\">"
                                        + "<div class=\"col-md-10 col-sm-10 col-xs-10 block-user-data\""
                                        + " data-user-id=\"" + result.newMessages[i].user_for_author.profile_for_user.user_id + "\"> "
                                        + " <a href=\"/user/" + result.newMessages[i].user_for_author.id + "\"> "
                                        + " <img src=\"" + result.newMessages[i].user_for_author.profile_for_user.photo + "\""
                                        + " width=\"50\" height=\"50\" class=\"\" alt=\"\">"
                                        + " &nbsp; <strong>" + result.newMessages[i].user_for_author.profile_for_user.name + " "
                                        + result.newMessages[i].user_for_author.profile_for_user.last_name + "</strong> </a> </div>"
                                        + " <div class=\"col-md-12\"> <div class=\"mess-content-sk\">"
                                        + "<div class=\"mess-text-sk col-md-12 border-answer\">" + result.newMessages[i].message + "</div>"
                                        + imgBlock + videoBlock
                                        + "</div> </div> <div class=\"col-md-12\"> <p class=\"text-info text-right\">"
                                        + " <small> в " + d + "&nbsp;&nbsp;&nbsp; </small></p></div>"
                                        + " </div> <hr> </div>");

                                }
                            }

                            //alert("длина - " + result.newMessages.length);

                            $('.badge-mess').detach();

                            //если кол-во новых сообщений не 0, то вывести badge
                            if (result.newMessages.length) {
                                $(".a-badge-mess").append("<span class=\"badge badge-com badge-mess\">" +
                                result.newMessages.length + "</span>");

                                $(".a-badge-mess img").addClass("com-anime");
                            }



                            /*
                            // вывод счетчика новых сообщений, если он есть
                            // осле окончания проверки и отображ. в цикле
                            $('.badge-mess').detach();

                            //alert(messAuthor);

                            if (messAuthor.length) {
                                $(".a-badge-mess").append("<span class=\"badge badge-com badge-mess\">" +
                                messAuthor.length + "</span>");

                                $(".a-badge-mess img").addClass("com-anime");
                            }
                            else {
                                $(".a-badge-mess img").removeClass("com-anime");
                            }
                            // обнуление массива авторов
                            messAuthor = [];
                            */
                        }


                        /////////////////////////
                        // если собеседник online
                        if (result.user_dialog_is_online){
                            $('#userOnline').text('online');
                        }
                        else {
                            $('#userOnline').text('');
                        }
                    }

                    //////////////////////////////////
                    //если любая другая страница сайта
                    // перебор всех входящих сообщений
                    else{
                        if(result.newMessages) {

                            $('.badge-mess').detach();

                            //если кол-во новых сообщений не 0, то вывести badge
                            if (result.newMessages.length) {
                                $(".a-badge-mess").append("<span class=\"badge badge-com badge-mess\">" +
                                result.newMessages.length + "</span>");

                                $(".a-badge-mess img").addClass("com-anime");
                            }



                            /*
                            for (var i = 0; i < result.newMessages.length; ++i) {
                                var authorMessId = result.newMessages[i].author_id;
                                //var photo, name;

                                var keyAuthor = messAuthor.indexOf(result.newMessages[i].author_id);
                                if (keyAuthor == -1) {//если в массиве нету элем....
                                    //push добавляет элемент в конец массива:
                                    messAuthor.push(result.newMessages[i].author_id);
                                }
                            }

                            $('.badge-mess').detach();

                            if (messAuthor.length) {
                                $(".a-badge-mess").append("<span class=\"badge badge-com badge-mess\">" +
                                messAuthor.length + "</span>");

                                $(".a-badge-mess img").addClass("com-anime");
                            }
                            else {
                                $(".a-badge-mess img").removeClass("com-anime");
                            }
                            // обнуление массива авторов
                            messAuthor = [];
                            */
                        }
                    }


                // инициализация звука при новых сообщениях
                /*
                if(result.newMessages) {
                    if(result.newMessages.length) {
                        alert("Звук сообщения !");
                        $(".scrollup").after('<audio src="/assets-front/wav/druzya.WAV" autoplay></audio>');
                    }
                }
                */


                // сумма значений всех уведомлений
                var valBadgeNotice = result.new_notice;

                if(valBadgeNotice) {
                    //alert(result.comment_post_new);
                    $(".a-badge-notice").append("<span class=\"badge badge-com badge-notice\">" +
                                                    valBadgeNotice + "</span>");
                    $(".a-badge-notice img").addClass("com-anime");
                }
                //else{
                //    $('.badge-notice').detach();
                //    $(".a-badge-notice img").removeClass("com-anime").css("zoom", "1");
                //}


                /*
                var newPostLike = result.new_like;

                if(newPostLike){
                    //alert(newPostLike);
                }
                */

            },
            complete: getmess,
            timeout: 500000
        });
    }
});



