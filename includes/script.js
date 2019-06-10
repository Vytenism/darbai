'use strict';

var mathematic = Math.floor(Math.random() *15);
console.log(mathematic);
if (mathematic == 0){
document.querySelector(".ap5").innerHTML = "Jus laimejote 3 bilietus";
} else if (mathematic <= 1){
    document.querySelector(".ap5").innerHTML = "Jus laimejote 2 bilietus";
} else if (mathematic < 4){
    document.querySelector(".ap5").innerHTML = "Jus laimejote 1 bilieta";
} else {
    document.querySelector(".ap5").innerHTML = "Deje, bandykit dar karta";
}



switch(mathematic){
    case 0 : ;
    case 1 : ;
    case 2 : ; 
    case 3 : document.querySelector(".ap1").innerHTML = "Jus laimejote 1 bilieta";
        break;
    case 4 : ;
    case 5 : document.querySelector(".ap1").innerHTML = "Jus laimejote 2 bilietus";
        break;
    case 6 : document.querySelector(".ap1").innerHTML = "Jus laimejote 3 bilietus";
        break;
    default : document.querySelector(".ap1").innerHTML = "Deje, bandykit dar karta";
}

function random(N){
    let rand = Math.floor(Math.random()*N + 1);
    console.log(rand);

    return rand;
}
function guessGame(){
    let rand = random(5);

    let text = "ivesk atsakyma";
    do{
        var guess = prompt(text);
        if(guess < rand){
            text = "per mazas ";
        } else {
            text = "per didelis";
        }
    }while (guess != rand);
  alert("atspejai");
}
document.querySelector("input[type=submit]").addEventListener("click", guessGame);
let text = "ivesk atsakyma:";
do {
   var guess = prompt(text);
   text = "neatspejai";
} while (guess != rand);
 alert("atspejai");

 do {
    var guess = prompt("ivesk skaiciu");
    text = "neatspejai";
 } while (guess != rand);
  alert("atspejai");

var who = {
    name: "Vytenis",
    sname: function(){alert("Mano vardas yra" + " " + who.name);}
};
document.write(who.sname);

var anw = document.querySelector(".ap1");
anw.innerHTML = document.write(who.name);
who.sname();