'use strict';

function divide(x, y){
    var divi = x / y;
    document.querySelector(".ap1").innerHTML = divi;
    return divi;
}

divide(5, 2);

function modulo(x, y){
    var modu = x % y;
    document.querySelector(".ap2").innerHTML = modu;
    return modu;
}

modulo(50, 6);

function multiplication(x, y){
    var multi = x * y;
    document.querySelector(".ap3").innerHTML = multi;
    return multi;
}

multiplication(2, 4);

function sum(z, y){
    var sums = z + y;
    document.querySelector(".ap4").innerHTML = sums;
    return sums;
}

sum(2, 5);

function sub (z, y){
    var subs = z - y;
    document.querySelector(".ap5").innerHTML = subs;
    return subs;
}

sub(3, 1);
