// Script to make the carrousel work on the homepage
//index set to 1, to display the first image
var slideIndex = 1;

//on load, it starts the function with the slide index being sent to it
window.onload = function() {
  showDivs(slideIndex);
}

// function for changing the index of the slide
function plusDivs(n) {
  showDivs(slideIndex += n);
}

// function for deciding which slide to display
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}