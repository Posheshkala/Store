
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("topbanner");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}


var Index = 0;
carouselBanner();

function carouselBanner() {
  var i;
  var x = document.getElementsByClassName("banner");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  Index++;
  if (Index > x.length) {Index = 1}    
  x[Index-1].style.display = "block";  
  setTimeout(carouselBanner, 5000); // Change image every 2 seconds
}