// Get the modal 2
var modal3 = document.getElementById("eModalMiMb");

// Get the button that opens the modal
var btn3 = document.getElementById("eBtnMiMb");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("e-close-mb")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
  modal4.style.display = "none"
  modal1.style.display = "none"
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


// Get the modal 2
var modal4 = document.getElementById("eModalChatMb");

// Get the button that opens the modal
var btn4 = document.getElementById("eBtnChatMb");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("e-close-chat")[0];

// When the user clicks the button, open the modal 
btn4.onclick = function() {
  modal4.style.display = "block";
  modal3.style.display = "none"
  modal1.style.display = "none"
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

console.log(span4.onclick(),span3.onclick());


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}

var modal1 = document.getElementById("eModalQue");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("e-close-que")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
  modal4.style.display = "none"
  modal3.style.display = "none"
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal1.style.display = "none";
  }
}