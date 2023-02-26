@extends('layouts.main-front')

@section('content')

<?php
use App\Userprofile;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\PostProbe;
use App\CategoryPost;
use App\CategoryMain;
use App\VisitPageProbe;
use App\User;
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
        //use App\UserProfile;

        //$user_profile = UserProfile::where('user_id', Auth::id())->first();

        if($user_profile->language!='ua'){
        ?>

        <div style="margin:-10px;padding:10px;">
            {{--хлебные крошки--}}
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Предыдущая страница</a>");
            </script>

            <?php
            echo $_SERVER['REQUEST_URI']
            ?>
            <label for="tab_2"><a href="post/create">&nbsp;&nbsp;Опубликовать фото</a></label>
        </div>

        <?php
        }



        if($user_profile->language=='ua'){
        ?>
        <div style="margin:-10px;padding:10px;">
            {{--хлебные крошки--}}
            <script language="JavaScript">
                document.write("<a href='"+document.referrer+"'>&nbsp;&nbsp;Попередня сторінка</a>");
            </script>


            <?php
            echo $_SERVER['REQUEST_URI']
            ?>
        </div>

        <?php
        }
        ?>

        <?php




        //  $search_probe = search_probe::where('id_user', Auth::id())->first();
        ?>




        <br>

        <div style="margin:10px;padding:10px;background:white;">

            <?php
            //$mysqli = new mysqli("mysql317.1gb.ua", "gbua_cpil_new", "dffd9d06qw", "gbua_cpil_new");

            $mysqli = new mysqli("localhost", "gbua_cpil_new", "pcDnGDLNwbi9rRVV", "gbua_cpil_new");


            if ($mysqli->connect_errno) {
                printf("Соединение не удалось: %s\n", $mysqli->connect_error);
                exit();
            }

            $query = "SELECT * FROM post_comments where user_id=".auth::id()." ORDER BY id DESC";

            if ($result = $mysqli->query($query)) {

                while ($row = $result->fetch_assoc())



                echo"<table>
   <tr>
    <td width='70%' cellpadding='5'><a href='../post/".$row['post_id']."'>".$row['comment']."</a></td><br>
    <td width='70%' cellpadding='5'>".$row['updated_at']."</td>
  </tr>
 </table>";

                $result->free();
            }
            echo"</table>";
            $mysqli->close();

            ?>


        </div>
    </div>
</div>
<br><br><br>
<div class="col-md-3 col-sm-3 col-xs-12 sk-block">

    <?php
    if($user_profile->language!='ua'){
    ?>

    <div style="margin-left: -40px;background-color:#fff;padding:10px;">
        @include('website.ru-menu')
    </div>
    <?php
    }
    if($user_profile->language=='ua'){
    ?>

    <div style="margin-left: -40px;background-color:#fff;padding:10px;">
        @include('website.ua-menu')
    </div>
    <?php
    }


    if($user_profile->language!='ua'){
        ?>


                <?php
        echo'<br>
<div style="margin-left: -40px;background-color:#fff;padding:10px;">
<a href="ua" id="post_form_language">Українська</a>';
        echo'<br><font color="gray">Русский</font>
</div>';
    }

    if($user_profile->language=='ua'){
        echo'<br>
<div style="margin-left: -40px;background-color:#fff;padding:10px;">
<font color="gray">Українська</font>';
        echo'<br><a href="ru" id="post_form_language">Русский</a>
</div>';
    }
    ?>
</div>

</div>

<script>
$(function () {

    // добавление в форму модального окна modalImg
    // id поста
    $('.mess-img').click(function () {
        var postId = $(this).parents(".sk-div-post").attr("data-id");
        $("#inputPostIdForImg").val(postId);
        $('.mess-img').blur();
    });


    /* отправка коментария */
    $(".div-write-submit button").click(function () {

        var commentId = $(this).parents('.sk-div-write').attr("data-comment-edit");
        var postId = $(this).parents('.sk-div-post').attr("data-id");
        var divWriteContent = $(this).parents('.sk-div-write').find(".div-contenteditable").html();
        var divForComment = $(this).parents(".sk-div-post").find(".div-all-comments");


        // после получения контента коментария
        // очистить блок для предотвращения повторной отправки
        $(this).parents('.sk-div-write').find(".div-contenteditable").html("");

        var img = $(".img-edit img").attr("src");
        // скрыть окно со смайликами
        $('.emoji_container').hide();

        // если строка ввода не пустая
        if (divWriteContent.length > 0) {

            $.ajax({
                type: 'POST',
                url: '/comment-post-store',
                data: {
                    contentComment: divWriteContent,
                    img: img,
                    postId: postId,
                    commentId: commentId
                },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (msg) {

                    //очистить поле newsId в форме загрузки картинки
                    $("#inputPostIdForImg").val('');

                    // если есть изображение
                    if(msg.comment.img){
                        var imgBlock = "<div class=\"mess-img-sk col-md-12\">"
                                    + "<a class=\"sk-popup-link\" href=\"" + msg.comment.img + "\">"
                                    + "<img src=\"" +  msg.comment.img +  "\" class=\"img-responsive img-post-sk\">"
                                    + "</a> </div> " ;
                    }
                    else{
                        var imgBlock = "";
                    }

                    if (msg.response != -1) {

                        //divForComment.find(".com-action").detach();

                        var elInsert = "<div class=\"comment-block-no-hidden\""
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
                        + msg.comment.comment + "</div>"+ imgBlock +"<div class=\"com-time\"> <p class=\"text-info\">"
                        + "<small>" + msg.timeComment + "</small> </p> </div> <hr></div>";

                        // если это редактирование, то заменить старый коментарий
                        if(commentId){
                            var oldCommentId = msg.comment.id;
                            $('[data-comment =' + oldCommentId + ']').html(elInsert).fadeTo(500, 1);
                        }
                        // иначе вставить в самый конец блока коментариев
                        else{
                            divForComment.append(elInsert);
                        }
                    }

                    $(".img-edit").children().detach();

                    // убрать атрибут блоку, указывающий на редактируемое сообщение
                    $(".sk-div-write").attr("data-comment-edit","");
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
        var divCommentBlock = $(this).parents('[data-comment]');

        var commentId = divCommentBlock.attr('data-comment');

        var content = divCommentBlock.find('.com-content').html();

        // назначить атрибут блоку, указывающий на редактируемое сообщение
        divCommentBlock.parents(".sk-div-post").find(".sk-div-write").attr("data-comment-edit",commentId);

        // отменить прозрачность для всех блоков, которые
        // могли быть с прозрачностью при прошлом редактировании
        $('.comment-block-no-hidden, .sk-div-write').fadeTo(0, 1);

        // вставить редактируемый текст в поле ввода
        divCommentBlock.parents(".sk-div-post").find(".div-contenteditable").html(content);

        // удалить все старые картинки из блоков для редактирования
        $(".img-edit").children().detach();

        // установить полупрозрачность для блока редактируемого сообщения
        divCommentBlock.fadeTo(500, 0.3);

        // получ. блок с картинкой(вставить картинку до перетаскивания sss)
        var i = divCommentBlock.find('.mess-img-sk');

        // если блок с кртинкой есть в сообщении, то добавить кнопку удаления
        if(i.length){

            var iUrl = i.find("img").attr('src');

            // вывести копию блока с картинкой после кнопки div-mess-submit
            divCommentBlock.parents('.sk-div-post').find(".img-edit").html("<div class=\"img-for-del col-md-12\">"
                                + "<img src=\"" + iUrl
                                + "\" class=\"img-responsive img-post-sk\"> "
                                + "<button type=\"button\" class=\"btn btn-danger del-image-mess btn-xs\">"
                                + "<i class=\"fa fa-times fa-lg\" aria-hidden=\"true\"></i> </button></div>");

        }

    });


    /* ответ на коментарий */
    $('.div-all-comments').on('click', '.com-answer',function(){


        var divCommentBlock = $(this).parents('.comment-block-no-hidden, .comment-hidden');
        var commentId = divCommentBlock.attr('data-comment');

        // получ. имя автора коментария и удалить все лишние пробелы
        var nameAuthor = $.trim(divCommentBlock.find('.author-name').text());
        var idAuthor = divCommentBlock.find('.author-name').attr('data-authorid');

        var divPost = $(this).parents('.sk-div-post').attr('data-id');

        // отменить прозрачность для всех блоков, которые
        // могли быть с прозрачностью при прошлом редактировании
        $('.comment-block-no-hidden, .sk-div-write').fadeTo(0, 1);

        // убрать все старые данные из #editor
        //$("#editor").html("");

        // удалить все старые картинки из блоков для редактирования
        $(".img-edit").children().detach();
        // убрать атрибут блоку, указывающий на редактируемое сообщение
        $(".sk-div-write").attr("data-comment-edit","");

        divCommentBlock.parents(".sk-div-post").find(".div-contenteditable")
            .html('<span data-for-id="' + idAuthor+ '">'+ nameAuthor+',</span>&nbsp;');

    });


    /* загрузка картинки из модали */
    //$('#saveImgMess').click(function () {
    $('#formImgMess input[type=file]').change(function(){

        $('#modalImg').modal('hide');

        // получ. значение postId, загружаемой картики
        var postId = $("#inputPostIdForImg").val();

        // получить форму, а НЕ input
        var form = $("#formImgMess");

        var formData = new FormData(form[0]);

        $.ajax({
            url: "/comment-store-img",
            //url: "/img-store",
            type: "POST",
            data : formData,
            dataType: 'json',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            success: function(data){
                //console.log('Результат - ' + data.error);

                var elImg = $('.sk-div-post[data-id ='+ postId + ']').find(".img-edit");
                elImg.html("<img src=\"" + data.response + "\" class=\"img-responsive\" width=\"60%\"><br> ").fadeIn();

            },
            error: function(err){

                var elImg = $('.sk-div-post[data-id ='+ postId + ']').find(".img-edit");
                elImg.html("<span class=\"help-block\"> Ошибка при загрузке изображения !<br>"
                                       + " Допустимый формат jpeg/png, размер до 1Мб.<br> "
                                       + " Выберите другое изображение. </span>");
            }
        });
    });


    // удаление картинки при редактировании
    $('.sk-div-post').on('click', '.del-image-mess',function(){
        // окно подверждения удаления
        var isDel = confirm("Удалить изображение ?");

        if(isDel == true) {
            $(".img-edit").children().detach();
        }
    });



});





</script>


@endsection