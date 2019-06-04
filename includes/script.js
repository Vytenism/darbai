'use strict';
let button = document.querySelector("input[type=submit]");
button.addEventListener("click", fn);

// function fnaq(){
//     let num = 10;
//     let guess;

//     do{
//         guess = prompt();
//     } while(num != guess);
//     alert("atspejai");
// }

function fn(){
    let arr = [1, 2, 3, 4, 5];

    arr.forEach(atspausdink);
}

function atspausdink(v, i){
    console.log(i + " " + v);
}