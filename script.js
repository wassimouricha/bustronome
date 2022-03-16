$(".container > div:gt(0)").hide();  //script permettant l'animation des fades pour mes slides


setInterval(function() { 
  $('.container > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.container');
}, 5000);


$(".containercard > div:gt(0)").hide();  //script permettant l'animation des fades pour mon texte


setInterval(function() { 
  $('.containercard')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.containercard');
}, 3000);