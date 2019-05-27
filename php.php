<?php

if (isset($_POST['sent'])) {
    $person_array['user_name'] = $_POST['user_name'];
    $person_array['user_email'] = $_POST['user_email'];
    $person_array['user_tel'] = $_POST['user_tel'];

    $users[] = $person_array;
}
//Prikonektina faila ir nurodo kas su juo bus daroma
$myfile = fopen("info.txt", "a") or die("Unable to open file!");

//POST kintamieji priskirti mano sugalvotiems kintamiesiems
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$tel = $_POST['user_tel'];

//Sudaromas tekstinis kintamasis kuris bus atvaizduojamas
$txt = $name . ' ' .  $email . ' ' . $tel . "\n";

//irasinejame i faila
fwrite($myfile, $txt);

//atvaizduoja HTMLe musu issaugota teksta TXT kas 1000 simboliu
$file = "info.txt";
$lines = file($file);//file in to an array

//uzdaromas irasinejimas i TXT faila
fclose($myfile);

/*var_dump($users);*/

