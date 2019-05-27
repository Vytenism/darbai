<?php

$pasiula = [
    'kebabines' => [
        'Jammi',
        'Wraperia Suppa Kebs',
        'Sinano kebabai',
    ],
    'kebabo_tipas' => [
        'kebabas_lavase',
        'kebabas_pitoje',
        'kebabas_leksteje',
    ],
    'dydis' => [
        'didelis',
        'mazas',
        'kovotojo',
    ],
    'padazas' => [
        'cesnakinis',
        'svelnus',
        'cipotle',
        'astrus',
    ],
    'mesa' => [
        'jautiena',
        'vistiena',
    ],
];
$kebabines = '';
$kebabo_tipas = '';
$dydis = '';
$padazas = '';
$mesa = '';

if (isset($_POST['submit'])) {
    $kebabines = $_POST['kebabines'];
    $kebabo_tipas = $_POST['kebabo_tipas'];
    $dydis = $_POST['dydis'];
    $padazas = $_POST['padazas'];
    $mesa = $_POST['mesa'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/normalise.css">
    <link rel="stylesheet" href="includes/style.css">
    <title>Array about kebabs</title>
</head>
<body>
<form method="post">
    <?php foreach ($pasiula as $key => $pasirinkimai): ?>
        <select name="<?php print $key; ?>">
            <?php foreach ($pasirinkimai as $key => $kebabine): ?>
                <option value="<?php print $key; ?>">
                    <?php print $kebabine; ?>
                </option>
            <?php endforeach; ?>
        </select>
    <?php endforeach; ?>
    <button type="submit" name="submit">Uzsisakyk!</button>
</form>
<section>
    <p><?php print $kebabines; ?></p>
    <p><?php print $kebabo_tipas; ?></p>
    <p><?php print $dydis; ?></p>
    <p><?php print $padazas; ?></p>
    <p><?php print $mesa; ?></p>
</section>
</body>
</html>