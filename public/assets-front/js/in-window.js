// функция, которая по заданному селектору
// найдет соответствующие ему элементы, которые
// при этом попадают в видимую область окна
function inWindow(s){
    var scrollTop = $(window).scrollTop();
    var windowHeight = $(window).height();
    var currentEls = $(s);
    var result = [];
    currentEls.each(function(){
        var el = $(this);
        var offset = el.offset();
        if(scrollTop <= offset.top && (el.height() + offset.top) < (scrollTop + windowHeight))
            result.push(this);
    });
    return $(result);
}