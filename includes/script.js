'use strict';
var pyramid = document.getElementById("piramid");
pyramid.addEventListener("click", abc);
function abc(){
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