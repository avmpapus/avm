function dv() {
document.getElementById('menu').style.color = 'green';
}

function dv1() {
document.getElementById('menu1').style.color = 'green';
}


function dv2() {
document.getElementById('menu2').style.color = 'green';
}

function dv3() {
document.getElementById('menu3').style.color = 'green';
}


function dv4() {
//document.getElementById('menu4').style.color = 'green';
document.getElementById('menu4').innerHTML = '<a href="">привет</a>';
//document.getElementById('menu4').style.fontSize='2em';
//document.getElementById('menu4').style.border = '1px solid #f00500';
}


/*
document.addEventListener("DOMContentLoaded", function() {
  var ids = ["1", "2", "3"];
  for (var id of ids) {
    var input = document.getElementById(id);
    input.value = localStorage.getItem(id);
    (function(id, input) {
      input.addEventListener("change", function() {
        localStorage.setItem(id, input.value);
      });
    })(id, input);
  } 
});	
*/
