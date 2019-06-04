let button = document.querySelector("input[type=submit]");
button.addEventListener("click", count);
function count(){
       var number = document.querySelector("input[type=text]").value;
       var radio = document.querySelector("input[type=radio]:checked");
       console.log(radio);
       if (number >= 18 && number <= 30 && radio === "teistas"){
            document.querySelector("p:nth-of-type(3)").innerHTML = "Tinki i kariuomene nes esi neteistas"; 
            alert("i kariuomene");      
       } else { 
           document.querySelector("p:nth-of-type(3)").innerHTML = "netinki nes esi teistas";
           alert("nereikia");
       }
}