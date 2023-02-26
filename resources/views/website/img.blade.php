@extends('layouts.main-front')

@section('content')

    <?php
    use App\UserProfile;
    $user_profile = UserProfile::where('user_id', Auth::id())->first();
    ?>

    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
      

@include('website.photogalery')

    </div>

<br><br>



    <div class="col-md-6 col-sm-6 col-xs-12 sk-block">
        <div class="midcont">


            {{--отправка материала без перезагрузки--}}

            <script type="text/javascript">

                $(document).ready(function() {
                    $('#post_form').submit(function(){
                        $.post("/create", $("#post_form").serialize(),  function(response) {
                        });
                        return false;
                    });
                });
            </script>

            {{--var_dump(is_int((int)'55*1'))--}}

            &nbsp;&nbsp;<input type="button" onclick="history.back();" value="Назад"/>


            <div class="sk-div-post" data-id = "{{ $post->id }}">

                <div class="row">
                    <div class="col-xs-12">
                        <img src="{{$post->userForPost["profileForUser"]['photo']}}"
                             width="38" height="38"
                             style="border-radius: 50%;" class="img-rounded" alt="">
                        &nbsp;
                        <a href="{{action('UserProfileController@show', $post->userForPost['id'])}}"
                           class="text-warning">
                            {{$post->userForPost["profileForUser"]['name']}}
                            {{$post->userForPost["profileForUser"]['last_name']}}
                        </a>
                    </div>
                </div>
                <hr>

                <b>
                    &nbsp;&nbsp;&nbsp;
                    {{ $post->title }}
                </b>
                <br />

                @if($post->img)
                    <a class="sk-popup-link" href="{{$post->img}}">
                        <img src="{{ $post->img }}" class="img-responsive img-post-sk">
                    </a>
                @endif

                @if($post->video)
                    <div class="video-sk col-md-12">
                        {!! $post->video !!}
                    </div>
                @endif

                <p>

                    {!! $post->description !!}

                </p>

                {{--
                <a href="../share/{{ $post->id }}">Поделиться</a>
                --}}

                <p class="text-right">
                    <small >
                        {{\Carbon\Carbon::parse($post->created_at)->format("добавлено j/m/Y в G:i")}}
                    </small>
                </p>


                <?php
                if($user_profile->language!='ua'){
                ?>
                <font color="gray">
                    Подтема:{{-- {{ $one_post->category }}--}}
                    <?php echo "<a href='../posts-for-cat/".$post->subcategory_id."'>".$post->category."</a>&nbsp";?>
                </font>
                <?php
                }
                if($user_profile->language=='ua'){
                ?>
                <font color="gray">
                    Підтема:{{-- {{ $one_post->category }}--}}
                    <?php echo "<a href='../posts-for-cat/".$post->subcategory_id."'>".$post->category."</a>&nbsp";?>
                </font>
                <?php
                }
                ?>
                <br>


                <div class="div-comments">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 div-all-comments">

                            {{-- если больше 3 комментов, вывести кнопку и 3 последних поста
                            @if($post->commentsForPost->count()>3)

                            <button type="button" class="btn btn-warning btn-lg btn-block btn-xs btn-more-comment">
                                <strong>
                                    показать все
                                </strong>
                            </button>
                            @endif

                            <hr>
                            --}}
                            <hr>


                            {{-- take(-3) возвращает новую коллекцию с указанным числом элементов c конца --}}
                            {{-- @foreach($one_post->comments->take(-3) as $comment) --}}
                            @foreach($post->commentsForPost as $key=>$comment)
                                {{-- если комментарий не входит в 3 последних --}}
                                <div class="comment-block-no-hidden"
                                     data-comment="{{ $comment->id }}">
                                    <div class="row">
                                        <div class="com-title col-md-10">
                                            <img src="{{$comment->userForComment->profileForUser->photo}}"
                                                 width="33" height="33"
                                                 style="border-radius: 50%;" class="" alt="">
                                            &nbsp;
                                            <strong>
                            <span class="author-name" data-authorid="{{$comment->userForComment->id}}">
                                {{$comment->userForComment->profileForUser->name}}
                            </span>
                                                {{$comment->userForComment->profileForUser->last_name}}
                                            </strong>

                                        </div>
                                        {{-- если это последний элемент и его автор текущ. польз. --}}
                                        {{-- вывести иконки для редакт. и удаления коментария --}}
                                        @if($comment->user_id == Auth::id())
                                            <div class="com-action col-md-2">
                                                <p class="text-right">
                                                    <i class="fa fa-pencil-square-o sk-fa-edit" aria-hidden="true"
                                                       data-toggle="tooltip" data-placement="top" title="Изменить"></i>
                                                    &nbsp;
                                                    <i class="fa fa-trash-o sk-fa-del" aria-hidden="true"
                                                       data-toggle="tooltip" data-placement="top" title="Удалить"></i>
                                                </p>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="com-content
                        {{ ($comment->viewed == 0 && $comment->for_user == Auth::id()) ? 'border-answer' : '' }}">
                                        {!! $comment->comment !!}
                                    </div>

                                    @if($comment->img)
                                        <div class="mess-img-sk col-md-12">
                                            <a class="sk-popup-link" href="{{$comment->img}}">
                                                <img src="{{ $comment->img }}" class="img-responsive img-post-sk">
                                            </a>
                                        </div>
                                    @endif

                                    <div class="com-time">
                                        <p class="text-info">
                                            <small>
                                                {{ $comment->date }}
                                                @if($comment->user_id != Auth::id())
                                                    &nbsp;&nbsp;
                                                    <span class="com-answer">
                                Ответить
                            </span>
                                                @endif
                                            </small>
                                        </p>
                                    </div>
                                    {{-- \Carbon\Carbon::now()->diffForHumans($comment->updated_at,true) --}}
                                    {{-- \Carbon\Carbon::now()->diffInDays($comment->updated_at) --}}
                                    <hr>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                @if(Auth::user()->profileForUser)
                    <div class="sk-div-write" data-comment-edit="">
                        <div class="row">

                            <p><em>
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <?php
                                    if($user_profile->language!='ua'){
                                    ?>
                                    коментировать...
                                    <?php
                                    }
                                    if($user_profile->language=='ua'){
                                    ?>
                                    коментувати...
                                    <?php
                                    }
                                    ?>

                                </em></p>

                            <div class="parent-contenteditable col-md-12"
                                 data-id = "{{ $post->id }}" data-news="{{ $post->id }}"
                                 style="border:1px solid #ddd; border-radius:5px;">

                                <div class="row">
                                    <div class="col-md-11 col-sm-10 col-xs-10 div-contenteditable" id="editor-{{$post->id}}"
                                         contenteditable="true" style="height:100px; padding:10px;"></div>

                                    <div  class="col-md-1 col-sm-2 col-xs-2" style="padding-left: 5px;padding-right: 5px;">
                                        <img src="/12-22.png" class="sk-smile-btn" id="smile-{{$post->id}}"
                                             width="30px" height="30px">
                                    </div>

                                    <div class="col-md-1 col-sm-2 col-xs-2 mess-img">
                                        <a href="#modalImg" data-toggle="modal">
                                            <i class="fa fa-picture-o fa-lg" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 div-write-submit">
                                <p class="text-right">
                                    <button class="btn btn-primary btn-sm" style="margin-top:1px">
                                        <?php
                                        if($user_profile->language!='ua'){
                                        ?>
                                        Отправить
                                        <?php
                                        }
                                        if($user_profile->language=='ua'){
                                        ?>
                                        Відправити
                                        <?php
                                        }
                                        ?>

                                    </button>
                                </p>
                            </div>

                            <div class="col-md-12 img-edit"></div>

                        </div>
                    </div>

                @else
                    <a href="{{ url('user/create') }}" >
                        <p class="bg-warning text-center link-profile">
                            <small><i>
                                    <?php
                                    if($user_profile->language!='ua'){
                                    ?>
                                    Заполните профиль пользователя, что бы написать...
                                    <?php
                                    }
                                    if($user_profile->language=='ua'){
                                    ?>
                                    Заповніть профіль користувача, що б написати ...
                                    <?php
                                    }
                                    ?>

                                </i></small>
                        </p>
                    </a>
                @endif



            </div>

            <?php
            if(!isset($comment_id)){
                $comment_id = 0;
            }
            ?>

            <script>
                var scrollId = "<?php echo $comment_id; ?>";
            </script>

        </div>
    </div>

{{--
    <div class="col-md-3 col-sm-3 col-xs-12 sk-block">
        <div class="rightcolm">
            @include('website.post')
        </div>
    </div>
--}}
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
                                    + "<small>добавлен в " + msg.timeComment + "</small> </p> </div> <hr> </div>";

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


            // массив для предотвращения дублирования отправки комментов.
            var arrCom = [];

            // установ. обработчик скроллинга для его последующего удаления
            // и отправка на сервер для "viewed" тех, которые в видимой области
            $(document).on('scroll',function(){
                var boxesInWindow = inWindow(".border-answer");

                console.log('boxesInWindow ----'+ boxesInWindow.attr("class"));

                if(boxesInWindow){

                    // если не остался ни один элемент в рамке на странице
                    // то удалить обработчик скроллинга
                    if($(".border-answer").length == 0){
                        $(document).off("scroll");
                    }

                    // перебор набора элементов в видимой области
                    // и удаление рамки для каждого из них с задержкой
                    boxesInWindow.each(function(indx, element){

                        // если его css-свойство display равно none
                        // то выход из функции
                        if($(element).is(':hidden')){ return false;};

                        var commentId = $(element).parents().attr("data-comment");

                        // если в массиве нет элемента данного коментария
                        // проверка для предотвращ. дублирования отправки на сервер
                        if($.inArray(commentId, arrCom) == -1){
                            // добав. комент в массив
                            arrCom.push(commentId);

                            //console.log(tid);

                            $.ajax({
                                type: 'POST',
                                url: '/comment-post/viewed',
                                data: {
                                    commentId: commentId
                                },
                                headers: {
                                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                                },
                                success: function (msg) {
                                    if (msg.response == 1) {
                                        var countNotice = $('.badge-notice').text();

                                        var newCountNotice = countNotice -1;

                                        if(newCountNotice == 0){
                                            $('.badge-notice').detach();
                                            $(".a-badge-notice img").removeClass("com-anime");
                                        }
                                        else{
                                            $('.badge-notice').text(newCountNotice);
                                        }
                                    }

                                }
                            });

                        }

                        // удаление класса через временной интервал
                        setTimeout(function() { $(element).removeClass("border-answer")}, 3000);
                    });
                }

            });


        });

    </script>



@endsection