<?php


if (!empty($_POST)){
    
    
    $skaicius = $_POST['action'];
    $skaicius++;
    
} else {

    $skaicius = 0;
}

?>
<html>
    <head>
        <title>links</title>
    </head>
    <body>
        <form method="POST">
            <button name="action" value="<?php print $skaicius ; ?>"><?php print $skaicius; ?></button>
        </form>
        
    </body>
</html>

