'use strict';
var sub = document.querySelector("input[type=submit]");
sub.addEventListener("click", myname2);
function myname(){
    var fname = document.querySelector("input[type=number]").value;
    var age = 0;
    while(age < fname){
        console.log("Vyte");
        age++;
    }
    myname();
}

function myname2(){
    var fnamea = document.querySelector("input[type=number]").value;
    var ageb = 0;
    for (ageb = 0; ageb <fnamea; ageb++){
        console.log("Petras");
    }
}
