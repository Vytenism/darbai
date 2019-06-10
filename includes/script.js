'use strict';


function solution(X) {
    var a = " ";
    for (let i = 0; i < X; i++) {
        for(let s = 0; s < X-i; s++) {
            a += "*";
        }
        a += "<br>";
    }
    return a;
}

document.write(solution(5));