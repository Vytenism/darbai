<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <input type="text" id="vienas">
    <input type="submit" onclick="vyte()">
    <div id="klausimas">

    </div>
    <script>
        
    function vyte(){
        var question = document.getElementById("klausimas");
        let names = document.getElementById("vienas").value;
        if (names === "Petras"){
            question.innerHTML = "destytojas";
        } else {
            question.innerHTML = "niekas";
        }
    }
    let num = 8;
            let guess = 1;
            if (guess === num) {
                document.write("lol");
            }
            else if (guess < num) {
                document.write("per aukstai");
            }
            else {
                document.write("per zemai");
            }
    </script>
</body>
</html>