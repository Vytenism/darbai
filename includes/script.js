'use strict';

document.querySelector("input[type=submit]")
.addEventListener("click", x);

function fn(vardas, skc){ //funkcija x - (kuri atreturnina skc ir vardas)
    for (let i = 0; i < skc; i++){ 
        var block = document.createElement("h1");
        document.body.append(block);
        block.innerHTML = vardas; 
    }
    return vardas;
}

function x(){
    var vardas = document.getElementById("vardas").value;
    var skc = document.getElementById("skc").value;
    fn(vardas, skc); // -siuncia i kita funkcija
    return fn();
}