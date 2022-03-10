$(".container > div:gt(0)").hide();

setInterval(function() { 
  $('.container > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.container');
}, 5000);