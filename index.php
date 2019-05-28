<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$konsultacija = '';
$paskaita = '';


if (isset($_POST['submit'])) {
    $vardas = $_POST['name'];
    $pavarde = $_POST['lname'];
    $kalendorius = $_POST['date'];

    if (!isset($_POST['konsultacijos'])) {
        $konsultacija = 'Nebuvo';
    } else {
        $konsultacija = 'Buvo';
    }

    if (!isset($_POST['paskaitos'])) {
        $paskaita = 'Nebuvo';
    } else {
        $paskaita = 'Buvo';
    }

} else {
    $vardas = 'Nepateikta';
    $pavarde = 'Nepateikta';
    $kalendorius = 'Nepateikta';

}
//DUOMENU IRASYMAS I .TXT FAILA
if  (isset($_POST['submit'])) {
    //    SUKURIAMAS KINTAMASIS APJUNGIANTIS VISUS POST LAUKELIUS
    $data = $_POST['name'] . $_POST['lname'] . $_POST['date'] . $_POST['konsultacijos'] . $_POST['paskaitos'];
    //    NURODOMA .TXT FAILO VIETA IR KAS BUS JAME DAROMA
    $fp = fopen('info.txt', 'a');
    //    IRASOMI DUOMENYS I NURODYTA .TXT FAILA
    fwrite($fp, $data);
    //    UZDAROMAS FAILAS
    fclose($fp);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Klases lankomumas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
<body>

<form method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name">
    <label for="lname">Last name:</label>
    <input type="text" name="lname">
    <label for="date">Date:</label>
    <input type="date" name="date">
    <label for="kons">Kons:</label>
    <input type="checkbox" name="konsultacijos">
    <label for="pask">Pask:</label>
    <input type="checkbox" name="paskaitos">
    <input type="submit" value="Submit" name="submit">
</form>

<table>
    <tr>
        <th>Name:</th>
        <th>Last name:</th>
        <th>Date:</th>
        <th>Kons:</th>
        <th>Pask:</th>
    </tr>
    <tr>
        <td><?php print $vardas; ?></td>
        <td><?php print $pavarde; ?></td>
        <td><?php print $kalendorius; ?></td>
        <td><?php print $konsultacija; ?></td>
        <td><?php print $paskaita; ?></td>
    </tr>
</table>

</body>
</html>