//make page scroll to #about panel
var scrollToCTA = document.getElementById("scrollToCTA");

scrollToCTA.onclick = function(){
   // $("html, body").animate({scrollTop: $("#about").offset().top}, 1500);
    $("html, body").animate({scrollTop: $("#cta").offset().top}, 1200);
};

var smallHeroCTA = document.getElementById("smallHeroCTA");

smallHeroCTA.onclick = function(){
   // $("html, body").animate({scrollTop: $("#about").offset().top}, 1500);
    $("html, body").animate({scrollTop: $("#cta").offset().top}, 1200);
};
