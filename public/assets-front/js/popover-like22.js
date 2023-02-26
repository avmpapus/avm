$(document).ready(function(){
    $('.sk-very-like, .sk-like, .sk-no-like').popover({
        html: true,
        placement : 'bottom',
        content: function() {

            var likeValue = $(this).text();

            // если лайков нет, то останавл. скрипт
            if (likeValue == 0) {
                return false;
            }
            else {

            var postId = $(this).prev("input").attr("data-id");
            //объявление перем. типа лайка для сервера
            var typeOfLike;

            //определения имени субмита
            var imgName = $(this).prev("input").attr("name");

            // становка числового знач. субмита для отправки на сервер
            switch (imgName) {
                case 'submit_very_likes':
                    typeOfLike = 11;
                    break;
                case "submit_likes":
                    typeOfLike = 22;
                    break;
                case 'submit_unlikes':
                    typeOfLike = 33;
                    break;
            }

            // сохранить текущий контекст
            //var _this = this;
            // уникальный id элемента
            //var idContent = "div-popover ";
            $.ajax({
                type: 'GET',
                url: '/popover-ajax',
                cache: false,
                data: {
                    typeOfLike: typeOfLike,
                    postId: postId
                }
            }).success(function (data) {

                console.log( data.response[0]);

                if (data.response.length > 0) {
                    $('.div-popover').html('');
                }

                for (var i = 0; i < data.response.length; ++i) {
                    // помещаем в элемент текст подсказки
                    $('.div-popover').
                        append(" <a href='/user/" + data.response[i].id + "'>" + data.response[i].name +
                        " " + data.response[i].last_name + "</a> <hr>");
                }

            })
            // возвращаем элемент, в которой поместим текст подсказки, когда прийдёт ответ
            //return '<div id="ert">Загрузка...</div>';
            return "<div class=\"div-popover text-center\"><i class=\"fa fa-spinner fa-spin fa-lg fa-fw\"></i></div>";
            }

        }

    });

});


