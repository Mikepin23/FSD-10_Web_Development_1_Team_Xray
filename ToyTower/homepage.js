// Javascript to make the carrousel on the homepage work as intended
// setting the index to 1 to start
var slideIndex = 1;

// loading when the page is loaded
window.onload = function() {
  showDivs(slideIndex);
}

// funcion for making the buttons change the index
function plusDivs(n) {
  showDivs(slideIndex += n);
}

// showing the slides
function showDivs(n) {
  var i;
  
  // getting the elements to display
  var x = document.getElementsByClassName("mySlides");
  
  // defining which slide is which
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  
  // styling
  x[slideIndex-1].style.display = "block";  
}