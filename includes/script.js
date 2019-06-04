var standticket = 6;
var sixthage = standticket / 50;
var oldage = standticket / 3;

// var button = document.querySelector("input[type=submit]").value;
// button = addEventListener("" cinemaprice);
function cinemaprice(){
    let ticket = document.getElementById("one").value;
    let ticket2 = document.getElementById("two");
    if (ticket <= 16){
        ticket2.innerHTML = sixthage + " " + "eur for ticket";
        alert("jaunimas");
    } else if (ticket >= 60) {
        ticket2.innerHTML = oldage + " " + "eur for ticket";
        alert("seniam");
    } else {
        ticket2.innerHTML = standticket + " " + "eur for ticket";
        alert("Rasta");
    }
}

