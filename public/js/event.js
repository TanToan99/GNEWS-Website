
// Script event menu

// Get the modal 1
var modal1 = document.getElementById("eModalRule");

// Get the button that opens the modal
var btn1 = document.getElementById("eBtnRule");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("e-close-rule")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
  modal2.style.display = "none";
  modal3.style.display = "none";
  modal4.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}


// Get the modal 2
var modal2 = document.getElementById("eModalMi");

// Get the button that opens the modal
var btn2 = document.getElementById("eBtnMi");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("e-close-mi")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
  modal1.style.display = "none";
  modal3.style.display = "none";
  modal4.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}

// Get the modal 3
var modal3 = document.getElementById("eModalHi");

// Get the button that opens the modal
var btn3 = document.getElementById("eBtnHi");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("e-close-hi")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
  modal1.style.display = "none";
  modal2.style.display = "none";
  modal4.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}


// Get the modal 4
var modal4 = document.getElementById("eModalChat");

// Get the button that opens the modal
var btn4 = document.getElementById("eBtnChat");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("e-close-chat")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
  modal1.style.display = "none";
  modal2.style.display = "none";
  modal3.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal4.style.display = "none";
  }
}

