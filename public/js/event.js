// Script event menu


var times = document.getElementById("times");

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

// Get the modal 2
var modal1 = document.getElementById("eModalQue");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn");
var imgQue = document.getElementById("img-que");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("e-close-que")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    let token = $("meta[name='csrf-token']").attr("content");
    $.post({
        type: 'POST',
        crossDomain: true,
        url: '/gifts/random',
        data: {
            '_token': token
        },
        success: function(data) {
            console.log(data);
            if (data.error == 1) {
                alert(data.message);
            } else {
                imgQue.src = data.img;
                modal1.style.display = "block";
                modal2.style.display = "none";
                times.innerHTML = times.innerHTML - 1;
            }
        },
        error: function(jqXHR, exception) {
            console.log(jqXHR);
        }
    });
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