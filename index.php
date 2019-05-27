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
    <?php for ($item = 0; $item <= count($pasiula) - 1; $item++): ?>
    <select name="kebabine">
        <?php foreach ($pasiula[$item] as $key => $kebabine): ?>
            <option value="<?php print $key; ?>">
                <?php print $kebabine; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php endfor; ?>
</form>
</body>
</html>