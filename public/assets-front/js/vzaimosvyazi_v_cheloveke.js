/*  window.onload = function () {
  $('#images').click(function () {

    if (select.value == "1god") {

    document.getElementById('imageid').innerHTML = document.getElementById('imageid').innerHTML - 1;
    };
    if (document.getElementById('imageid').innerText == '-10') {
      document.getElementById('imageid').innerHTML = 'картинка по умолчанию';
      $('#imagesgif').hide();
      $('#imagesgif2').hide();
      $('#imagesgif3').show();
    } 
    if (document.getElementById('imageid').innerText == 'NaN') {
      document.getElementById('imageid').innerHTML = 'yjkm';
      location.reload();

    };
    if (select.value == "2god") {
      
      document.getElementById('imageid').innerHTML = document.getElementById('imageid').innerHTML - 1;
      };
    if (document.getElementById('imageid').innerText == '-10') {
      
        document.getElementById('imageid').innerHTML = 'картинка по умолчанию';
        $('#imagesgif').hide();
      $('#imagesgif2').show();
      } 
      if (document.getElementById('imageid').innerText == 'NaN') {
        document.getElementById('imageid').innerHTML = 'yjkm';
        location.reload();
    }



    
if (document.getElementById('imageid').innerText == '-10') {
  
    document.getElementById('imageid').innerHTML = 'картинка по умолчанию';
  $('#imagesgif3').show();
  } 
  if (document.getElementById('imageid').innerText == 'NaN') {
    document.getElementById('imageid').innerHTML = 'yjkm';
    location.reload();
}
  });
  $('#imagesgif3').hide();
     $('#imagesgif2').hide();
  $('#imagesgif').hide();
  };  */


/* function MyFunction(){
  $('#link').load('/test3');
}; */


/* $('#link').click(function () {
  $('#link').load('/test3');
}); */

window.onload = function () {
    $('#nadpochechniki').click(function () {
        $('#shishkovidnaya2').show();
        $('#nadpochechniki2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:700px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:150px; left:1200px;";
    });

    $('#shishkovidnaya').click(function () {
        $('#shishkovidnaya2').show();
        $('#nadpochechniki2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:700px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:150px; left:1200px;";
    });

    $('#gipofiz').click(function () {
        $('#gipofiz2').show();
        $('#gonadi2').show();
        $('#nadpochechniki2').show();
        $('#shishkovidnaya2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:600px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:250px; left:1200px;";
    });

    $('#gonadi').click(function () {
        $('#gipofiz2').show();
        $('#gonadi2').show();
        $('#nadpochechniki2').show();
        $('#shishkovidnaya2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:600px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:250px; left:1200px;";
    });

    $('#shitovidnaya').click(function () {
        $('#gipofiz2').show();
        $('#podzheludochnaya2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:518px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:360px; left:1200px;";
    });

    $('#podzheludochnaya').click(function () {
        $('#gipofiz2').show();
        $('#podzheludochnaya2').show();
        $('#vilochkovaya2').hide();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:518px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:360px; left:1200px;";
    });

    $('#vilochkovaya').click(function () {
        $('#gipofiz2').show();
        $('#podzheludochnaya2').show();
        $('#vilochkovaya2').show();

        document.getElementById("nadpochechniki2").style = "position:absolute; top:158px; left:1200px;";

        document.getElementById("shishkovidnaya2").style = "position:absolute; top:450px; left:1200px;";

        document.getElementById("vilochkovaya2").style = "position:absolute; top:700px; left:1200px;";
    });


    $('#shishkovidnaya2').hide();
    $('#nadpochechniki2').hide();
    $('#vilochkovaya2').hide();


};