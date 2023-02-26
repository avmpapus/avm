window.onload = function () {
  /*   $('#myprojects').click(function () {
        document.getElementById('myprojects').innerHTML = 'sdfsdfsdf';
      }); */
      $('#myprojects').
      mouseenter(function(){
        // при вхождении в элемент
        $(this).css('color','orange');
        //$('image').show();
        document.getElementById('image').style.display = '';
      }).
      mouseleave(function(){
        // при покидании элемента
          $(this).css('color', 'black');
          $(this).css('cursor','default');
        document.getElementById('image').style.display = 'none';
        //$('image').hide();
      })
    
}
  