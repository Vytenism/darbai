var standticket = 6;
var sixthage = standticket / 50;
var oldage = standticket / 3;


function cinemaprice(){
    let ticket = document.getElementById("one").value;
    let ticket2 = document.getElementById("two");
    if (ticket <= 16){
        ticket2.innerHTML = sixthage + " " + "eur for ticket";
        // alert("jaunimas");
    } else if (ticket >= 60) {
        ticket2.innerHTML = oldage + " " + "eur for ticket";
        // alert("seniam");
    } else {
        ticket2.innerHTML = standticket + " " + "eur for ticket";
        // alert("Rasta");
    }
}
function names(){
    var bname = document.querySelector("input[type=submit]");
    console.log(bname.value);
    if (bname.value === "submit"){
        bname.value = "Vyte";
    } else if(bname.value === "Vyte"){
        bname.value = "Pavel";
    } else if(bname.value === "Pavel"){
        bname.value = "Mantelis";
    } else {
        bname.value = "submit";
    }
}
