$(document).ready(function(){
  var state1 = 0;
  var state2 = 0;
  var state3 = 0;
  var state4 = 0;


  $("#hospedaje").click(function(){
    if(state1 == 0){
      $("#phosp").fadeIn();
      $('#flecha1').attr('src', '/img/flecha_abajo.png')
      state1 = 1
    }
    else {
      $("#phosp").fadeOut();
      $('#flecha1').attr('src', '/img/flecha_arriba.png')
      state1 = 0
    }
  });

  $("#limpieza").click(function(){
    if(state2 == 0){
      $("#plimp").fadeIn();
      $('#flecha2').attr('src', '/img/flecha_abajo.png')
      state2 = 1
    }
    else {
      $("#plimp").fadeOut();
      $('#flecha2').attr('src', '/img/flecha_arriba.png')
      state2 = 0
    }
  });

  $("#atropellado").click(function(){
    if(state3 == 0){
      $("#patro").fadeIn();
      $('#flecha3').attr('src', '/img/flecha_abajo.png')
      state3 = 1
    }
    else {
      $("#patro").fadeOut();
      $('#flecha3').attr('src', '/img/flecha_arriba.png')
      state3 = 0
    }
  });

  $("#funerario").click(function(){
    if(state4 == 0){
      $("#pfune").fadeIn();
      $('#flecha4').attr('src', '/img/flecha_abajo.png')
      state4 = 1
    }
    else {
      $("#pfune").fadeOut();
      $('#flecha4').attr('src', '/img/flecha_arriba.png')
      state4 = 0
    }
  });

  $('.carousel-inner').css( 'cursor', 'pointer' );

});