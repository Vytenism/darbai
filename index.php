<?php 

if (!empty ($_POST)){
    $skaicius = ++$_POST['action'];
    
}else {
    $skaicius = 0;
}
$jpg = [];
for ($i = 0; $i < $skaicius; $i++){
    $jpg[$i] = 'banana.jpg';
}

?>
<html>
    <head>
        <title>forms</title>
    </head>
    <body>
        <form method="post">
            <button name="action" value="<?php print $skaicius; ?>"><?php print $skaicius; ?></button>
        </form>
        <?php foreach ($jpg as $img): ?>
        <img src="<?php print $img; ?>">
        <?php endforeach; ?>
    </body>
</html>
