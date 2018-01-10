// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});

//Shrinking navigation bar when scrolling down
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});

// Modal sur galerie d'image
$('#myModal').modal('hide');

// Carousel de Mobilier
$('#myCarousel').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel1').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel2').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel3').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel4').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel5').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel6').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel7').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel8').carousel({
	interval: 0 //changes the speed
});
$('#myCarousel9').carousel({
	interval: 0 //changes the speed
});



// Carousel de Produit
$('#carouselPinceSkimmer').carousel({
	interval: 0 //changes the speed
});
$('#carouselKub').carousel({
	interval: 0 //changes the speed
});
$('#carouselChaiseMedicale').carousel({
	interval: 0 //changes the speed
});
$('#carouselModulariteConsole').carousel({
	interval: 0 //changes the speed
});