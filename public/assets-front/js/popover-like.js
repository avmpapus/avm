$(document).ready(function(){
    $('.sk-very-like, .sk-like, .sk-no-like').click(function() {

        var objThis = $(this);

        // получ. знач. лайков на текущей ссылке
        var likeValue = objThis.text();

        // если лайков нет, то останавл. скрипт
        if (likeValue == 0) {
            return false;
        }
        else {

            objThis.popover({
                html: true,
                placement : 'bottom',
                content: "<div class=\"div-popover text-center\"><i class=\"fa fa-spinner fa-spin fa-lg fa-fw\"></i></div>"

            }).popover('show');

            var postId = objThis.prev("input").attr("data-id");
            //объявление перем. типа лайка для сервера
            var typeOfLike;

            //определения имени субмита
            var imgName = objThis.prev("input").attr("name");

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

            $.ajax({
                type: 'GET',
                url: '/popover-ajax',
                cache: false,
                data: {
                    typeOfLike: typeOfLike,
                    postId: postId
                }
            }).success(function (data) {

                console.log(data.response[0]);

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
        }

    })
});


