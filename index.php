<?php

// pe\ries papausdamas submit tu turi funkcija
function square($x){
    
    return $x * $x;
}

//var_dump ($_POST);

// paspaudi submit su name submitname
if (isset($_POST['submitname'])){
    
    // gauni input su $_POST, kuri yra musu funkcijoje 'square',
    // kuri pradziai pekelia skaiciu ir veliau priskiria atsakyma $skaicius kintamajam
    $skaicius = square($_POST['skaicius']);
    
} else {
    // kol mes nepaspaudziam submit button $skaicius = ''
    $skaicius = '';
}


?>
<html>
    <head>
        <title>links</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <span>Ka pakelti kvadratu:</span>
            <input name="skaicius" type="text">            
            <input name="submitname" type="submit">
        </form>
        <h1><?php print $skaicius; ?></h1>
    </body>
</html>
