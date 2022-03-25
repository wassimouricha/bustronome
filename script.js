$(".containere > div:gt(0)").hide();  //script permettant l'animation des fades pour mes slides


setInterval(function() { 
  $('.containere > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.containere');
}, 5000);


// $(".containercard > div:gt(0)").hide();  //script permettant l'animation des fades pour mon texte


setInterval(function() { 
  $('.containercard')
  .fadeOut()
  .fadeIn()
  .end()
}, 5000);

let changeH1 = document.querySelector(".MainH1");  //creation de deux variables
let changeH2 = document.querySelector(".MainH2");

window.addEventListener("load", () =>
{
   textchange()   //on indique que l'on ajoute les fonctions textchange avec un addeventlistener lors du chargement de la page 
   textchange2()
   textchange3()
   textchange4()
})

function textchange(){
   setInterval(() =>{
      changeH1.textContent = "DÉGUSTEZ DES METS RAFFINÉS";
      changeH2.textContent = "Menu découverte de 4 plats pour le déjeuner et de 6 plats pour le dîner au format dégustation proposés avec une selection de vins et champagnes";
  }, 5000);
}

function textchange2(){
   setInterval(() =>{
      changeH1.textContent = "PROFITEZ D’UNE VUE IMPRENABLE";
      changeH2.textContent = "Grâce au toit entièrement vitré de ce bus à impériale, plongez dans l’univers parisien dans les meilleures conditions de confort, quelle que soit la saison.";
  }, 10000);
}

function textchange3(){
  setInterval(() =>{
     changeH1.textContent = "SAVOUREZ UNE PAUSE BIEN ÊTRE";
     changeH2.textContent = "BUSTRONOME : Agréable moyen de découvrir la cuisine et les vins d’une capitale culturelle tout en visitant les plus beaux monuments de Paris.";
 }, 15000);
}

function textchange4(){
  setInterval(() =>{
     changeH1.textContent = "Laissez vos sens vous transportez";
     changeH2.textContent = " A bord du bustronome , les passagers découvrent les plus belles vues de Paris en profitant du meilleur de la gastronomie";
 }, 20000);
}

