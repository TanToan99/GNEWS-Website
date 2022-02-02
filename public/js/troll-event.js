let count = 0;
let cheatCode = ["g", "n", "e", "w", "s"];
let index = 0;
document.addEventListener('keydown', function(event) {
    if (event.key === cheatCode[index]) {
        index += 1;
    } else {
        index = 0;
    }

    if (count == 0 && index == 5) {
        alert("Đã tăng khả năng trúng card lên 90%!");
    }
    if (index == 5) {
        count += 1;
        index = 0;
    }

    if (count == 3) {
        alert("Có tin người vcl!");
    }
});