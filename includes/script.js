'use strict';
let button = document.querySelector("input[type=submit]");
button.addEventListener("click", abc);

function abc(){
    var sk = document.getElementById("x");
    sk = Number(sk.value);
    for(let i = 0; i < sk; i++){
        for(let o = 0; o <= i; o++){
             document.write("*");
        }
        document.write("<br>");
    }       
}

