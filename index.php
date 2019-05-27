<?php
$vardas = '';
$pareigos = '';
$url = '';
$aprasymas = '';

if (isset($_POST['submit'])) {
    $vardas = $_POST['vardas'];
    $pareigos = $_POST['pareigos'];
    $url = $_POST['img'];
    $aprasymas = $_POST['aprasymas'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/normalise.css">
    <link rel="stylesheet" href="includes/style.css">
    <title>Form which represents inputs</title>
</head>
<body>
<main>
    <section>
        <h1>Darbuotoju forma</h1>
        <form method="post">
            <label for="vardas">Vardas:</label>
            <input type="text" id="vardas" name="vardas" placeholder="vardas">
            <label for="pareigos">Pareigos:</label>
            <input type="text" id="pareigos" name="pareigos" placeholder="pareigos">
            <label for="img">Img (url):</label>
            <input type="url" id="img" name="img" placeholder="imageurl">
            <label for="apra">Apie jus:</label>
            <textarea type="text" id="apra" name="aprasymas"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
    <section class="bg">
        <div>
            <img src="<?php print $url; ?>" alt="logo">
        </div>
        <h1><?php print $vardas; ?></h1>
        <h2><?php print $pareigos; ?></h2>
        <h3><?php print $aprasymas; ?></h3>
    </section>
</main>
</body>
</html>