'use strict';
let button = document.querySelector("input[type=submit]");
button.addEventListener("click", ab);


    let age = prompt("irasykite savo darbo stazo metus");
    if (0 <= age && age <= 10){
        document.querySelector("h1").innerHTML = "Jums priklauso 50 pound dovana";
    } else if (10 < age && age <= 20){
        document.querySelector("h1").innerHTML = "Jums priklauso 50 pound + 50 puond dovana uz ilga bendradarbiavima";
    } else if(age >= 21){
        document.querySelector("h1").innerHTML = "Jus esat musu Herojus jus gaunate 50 pound + 100 pound dovanu uz geras akimirkas kartu";
    } else {
        document.querySelector("h1").innerHTML = "Jus nedirbate kartu su mumis todel gaunate spyga taukuota :)";
    }
function ab(){
    let num = 10;
    let guess;
    do{
        guess = prompt("atspek skaiciu");
        if (guess !== num){
            alert("bandyk dar karta");
        }
    } while(guess != num);

    alert("atspejai");
}