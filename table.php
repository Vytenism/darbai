<?php

$pasiula = [
    [
        'Jammi',
        'Wraperia Suppa Kebs',
        'Sinano kebabai',
    ],
    [
        'kebabas_lavase',
        'kebabas_pitoje',
        'kebabas_leksteje',
    ],
    [
        'didelis',
        'mazas',
        'kovotojo',
    ],
    [
        'cesnakinis',
        'svelnus',
        'cipotle',
        'astrus',
    ],
    [
        'jautiena',
        'vistiena',
    ],
];

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/normalise.css">
    <link rel="stylesheet" href="includes/style.css">
    <title>Array about kebabs</title>
</head>
<body>
<form method="post">
<?php foreach ($pasiula as $pasirinkimai): ?>
    <select name="kebabine">
        <?php foreach ($pasirinkimai as $key => $kebabine): ?>
            <option value="<?php print $key; ?>">
                <?php print $kebabine; ?>
            </option>
        <?php endforeach; ?>
    </select>
<?php endforeach; ?>
</form>
</body>
</html>
