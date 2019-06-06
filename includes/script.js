'use strict';
var triangle = document.getElementById("triangle");
var pyramid = document.getElementById("piramid");
var revpyramid = document.getElementById("revpiramid");
var clear = document.getElementById("clear");
triangle.addEventListener("click", trianglea);
pyramid.addEventListener("click", pyramida);
revpyramid.addEventListener("click", reverse);
clear.addEventListener("click", cleara);

function trianglea(){
    var num = 7;
    for (var i = 0; i <= num; i++){
        for (var j = 0; j < i; j++){
            document.querySelector(".app").innerHTML += "*";
        }
        document.querySelector(".app").innerHTML += "<br>";
    }
}

function pyramida(){
    var num = 7;
    for (var i = 0; i < num; i++){
        for (var j = (2*num - i); j >= i; j--){
            document.querySelector(".app").innerHTML += "&nbsp;";
        }
        for (var o = 1; o < 2*i; o++){
            document.querySelector(".app").innerHTML += "*";
        }
        document.querySelector(".app").innerHTML += "<br>";
    }
}

function reverse(){
    var num = 17;
    for (var i = 0; i <= num; i++){
        for (var j = 0; j <= (2*i + 1); j++){
            document.querySelector(".app").innerHTML += "&nbsp;";
        }
        for (var o = 1; o <= (num - 2*i); o++){
            document.querySelector(".app").innerHTML += "*";
        }
        document.querySelector(".app").innerHTML += "<br>";     
    }
}

function cleara(){
    document.querySelector(".app").innerHTML = "";
}