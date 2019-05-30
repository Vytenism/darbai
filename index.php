<html>
<head>
    <title>Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/normalise.css">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header class="wraper">
        <form class="pixel"> 
            <h1 class="black">
                <span class="borders">Get</span> In Touch
            </h1>
            <label class="black" for="name">Name</label>
            <input class="borde black" type="text" id="name" name="fname">
            <label class="black" for="email">Email</label>
            <input class="borde black" type="email" id="email" name="email">
            <label class="black" for="msg">Message</label>
            <textarea class="borde" id="msg"></textarea>
            <input type="submit" class="bot green" onclick="return change_color()" value="SEND IT"> 
            <div class="flex">
                <div class="icon fa-2x green">
                    <i class="fab fa-facebook-f white"></i>
                </div>
                <div class="icon fa-2x green">
                <i class="fab fa-linkedin-in white"></i>
                </div>
                <div class="icon fa-2x green">
                    <i class="fas fa-camera-retro white"></i>
                </div>
                <div class="icon fa-2x green">
                    <i class="fab fa-twitter white"></i>
                </div>
            </div>
            <p class="black">2018 danjuma ashiwaju</p>
        </form>
    </header>
    <script>
        function change_color() {
            var background = document.getElementsByClassName('pixel');
            for(var a = 0; a < background.length; a++){
                // background[a].style.backgroundColor = "white";
                if (background[a].style.backgroundColor == "white"){
                    background[a].style.backgroundColor = "green";
                }else {
                    background[a].style.backgroundColor = "white";
                    }
            }
            var elementb = document.getElementsByClassName('black');
            for(var a = 0; a < elementb.length; a++){
                elementb[a].style.color = "black";
            }
            var elemente = document.getElementsByClassName('white');
            for(var a = 0; a < elemente.length; a++){
                elemente[a].style.color = "white";
            }    
            var elemente = document.getElementsByClassName('white');
            for(var a = 0; a < elemente.length; a++){
                // elemente[a].style.color = "white";
                if (elemente[a].style.color == "white"){
                    elemente[a].style.color = "green";
                }else {
                    elemente[a].style.color = "white";
                    }
            }    
            var elementd = document.getElementsByClassName('green');
            for(var a = 0; a < elementd.length; a++){
                // elementd[a].style.backgroundColor = "green";
                if (elementd[a].style.backgroundColor == "green"){
                    elementd[a].style.backgroundColor == "white";
                }else {
                    elementd[a].style.backgroundColor == "green";
                    }
            }
            var elementc = document.getElementsByClassName('borde');
            for(var a = 0; a < elementc.length; a++){
                elementc[a].style.border = "1px solid grey";
            }
            var elementf = document.getElementsByClassName('borders');
            for(var a = 0; a < elementf.length; a++){
                elementf[a].style.borderBottom = "3px solid green";
            }
            var elementd = document.getElementsByClassName('green');
            for(var a = 0; a < elementd.length; a++){
                elementd[a].style.backgroundColor = "green";
            }
            return false;
        }
    </script>
</body>
</html>