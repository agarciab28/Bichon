$(document).ready(function(){
  var state1 = 0;
  var state2 = 0;
  var state3 = 0;
  var state4 = 0;


  $("#flecha1").click(function(){
    if(state1 == 0){
      $("#phosp").fadeIn();
      $('#flecha1').attr('src', '/img/icon/flecha_abajo.png')
      state1 = 1
    }
    else {
      $("#phosp").fadeOut("fast");
      $('#flecha1').attr('src', '/img/icon/flecha_arriba.png')
      state1 = 0
    }
  });

  $("#flecha2").click(function(){
    if(state2 == 0){
      $("#plimp").fadeIn();
      $('#flecha2').attr('src', '/img/icon/flecha_abajo.png')
      state2 = 1
    }
    else {
      $("#plimp").fadeOut("fast");
      $('#flecha2').attr('src', '/img/icon/flecha_arriba.png')
      state2 = 0
    }
  });

  $("#flecha3").click(function(){
    if(state3 == 0){
      $("#patro").fadeIn();
      $('#flecha3').attr('src', '/img/icon/flecha_abajo.png')
      state3 = 1
    }
    else {
      $("#patro").fadeOut("fast");
      $('#flecha3').attr('src', '/img/icon/flecha_arriba.png')
      state3 = 0
    }
  });

  $("#flecha4").click(function(){
    if(state4 == 0){
      $("#pfune").fadeIn();
      $('#flecha4').attr('src', '/img/icon/flecha_abajo.png')
      state4 = 1
    }
    else {
      $("#pfune").fadeOut("fast");
      $('#flecha4').attr('src', '/img/icon/flecha_arriba.png')
      state4 = 0
    }
  });

  $("#facebook").click(function(){
      window.location.href = "http://www.facebook.com";
  });

  $("#twitter").click(function(){
      window.location.href = "http://www.twitter.com";
  });

  $("#instagram").click(function(){
      window.location.href = "http://www.instagram.com";
  });

  $("#youtube").click(function(){
      window.location.href = "http://www.youtube.com";
  });

  $('.img_flecha').css( 'cursor', 'pointer' );
  $('#cardsRedes').css( 'cursor', 'pointer' );

});


// Funciones para hacer funcionar la barra de aceptacion de cookies
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}

function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

if(getCookie('bichon')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
else {
  document.getElementById("barraaceptacion").style.display="none";
}
function PonerCookie(){
    setCookie('bichon','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}
