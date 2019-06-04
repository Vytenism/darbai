var button = document.querySelector("input[type=submit]");
button.addEventListener("click", names);

function names(){
    var inpt = document.querySelector("input[type=text]");
    button.value = inpt.value;
}
