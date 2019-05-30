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
    <script>
        var year = 12;
        if(year%400 == 0){ 
            document.write("kelemieji metai");
        } else if(year % 100 === 0 || year % 4 === 0){
            document.write("kelemieji metai");
        } else {
            document.write("nekelemieji metai");
        }
    </script>
</body>
</html>