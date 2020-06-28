let active = document.getElementById("active");
let user = document.getElementById("user-info");

window.onclick = function(event) {
    console.log(1);
    if (event.target != user && event.target != active) {
        user.style.display = "none";
    }
}

active.addEventListener("click", function() {
    console.log(2);
    if (user.style.display == "none") {
        user.style.display = "block";
    } else {
        user.style.display = "none";
    }
})