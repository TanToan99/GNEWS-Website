/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// ========================
function myFunctionSearch() {
  document.getElementById("myDropdownSearch").classList.toggle("show");
}
// =========================
// slide mx

var slideIndexmx = 0;
showSlidesmx();

function showSlidesmx() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndexmx++;
  if (slideIndexmx > slides.length) {slideIndexmx = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexmx-1].style.display = "block";  
  dots[slideIndexmx-1].className += " active";
  setTimeout(showSlidesmx, 5000); // Change image every 2 seconds
}

// =========================
// slide mn

var slideIndexmn = 0;
showSlidesmn();

function showSlidesmn() {
  var i;
  var slides = document.getElementsByClassName("mySlidesmn");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndexmn++;
  if (slideIndexmn > slides.length) {slideIndexmn = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndexmn-1].style.display = "block";  
  dots[slideIndexmn-1].className += " active";
  setTimeout(showSlidesmn, 5000); // Change image every 2 seconds
}