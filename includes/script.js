'use strict';
let button = document.getElementById("triangle");
let button2 = document.getElementById("piramid");
// let button3 = document.getElementById("revpiramid");
// let button4 = document.getElementById("clear");

button.addEventListener("click", triangle);
button2.addEventListener("click", piramid);

// button3.addEventListener("click", triangle);
// button4.addEventListener("click", piramid);
function triangle(){
    var num = 7;
    for (var i = 0; i <= num; i++){
        for (var j = 0; j < i; j++){
            document.write("*");
        }
        document.write("<br>");
    }
}

function piramid(){
    var numb = 70;
    for (var i = 0; i < numb; i++){
        for (let a = (2*numb - i); a >= i; a--){
            document.write("&nbsp;");
        }
        for (var j = 1; j < 2*i; j++){
            document.write("*");
        }
        document.write("<br>");
    }
}