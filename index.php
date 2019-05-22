<?php

function moto($string)
{
    $text = mb_substr($string, 0, 300) . ' ...';
    print $text;
}

?>
<html>
<head>
    <title>Harley</title>
    <link rel="stylesheet" type="text/css" href="includes/normalise.css">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="wraper flx">
        <img class="imga" src="http://harley-davidson-vilnius.lt/images/admin/logos/harley-davidson-motorcycles.svg"
             alt="logo">
        <p class="p-size">
            HARLEY-DAVIDSON® VILNIUS +370 615 222 33
        </p>
    </div>
</header>
<section class="bg scroll">
    <nav class="wraper navi">
        <a href="">APIE MUS</a>
        <a href="">2019 MOTOCIKLAI</a>
    </nav>
</section>
<main>
    <section class="bg2 flx2">
        <div class="borders">
            <p>
                „ Harley-Davidson Vilnius “, motociklų ir aksesuarų pardavimo salonas, yra vienintelis oficialus ir
                įgaliotas Harley-Davidson produkcijos pardavėjas Lietuvoje.
            </p>
            <p>
                Prekiaujame naujais ir naudotais motociklais, originaliais Harley-Davidson drabužiais, aksesuarais ir
                motociklų detalėmis. Salone įkurtas autorizuotas motociklų remonto servizas, jame dirba kvalifikuoti
                technikai ir yra visa įranga, reikalinga motociklų diagnostikai ir remontui. Ne sezono metu teikiame
                motociklų saugojimo ir paruošimo kitam sezonui paslaugas.
            </p>
            <p>
                " Harley Davidson - Išlaisvink save! "
            </p>
        </div>
    </section>
    <section class="flx3">
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley.png" alt="logo">
            </div>
            <p>
                <?php moto('„Fat Bob®“ yra grynas „Harley-Davidson“, bet tuo pačiu – nepanašus į jokį kitą „Harley®“ motociklą. Nuo
                modernaus, agresyviai atrodančio, išlenktos formos 2-1-2 dujų išmetimo vamzdžio ir asfaltą deginančių
                storų padangų, iki galingojo „Milwaukee-Eight®“ variklio ir stabilaus „Softail®“ rėmo, apverstų
                priekinių šakių ir lengvai reguliuojamos galinės pakabos – jis sukurtas tam, kad sudrebintų status quo.
                Tai skirta tam, kas nori pradėti naują etapą dideliu greičiu.'); ?>
            </p>
        </div>
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley2.png" alt="logo">
            </div>
            <p>
                <?php moto('Įkvėpimo projektuojant „Low Rider®“ semtasi iš individualizmo tradicijos, išpopuliarėjusios čioperių
                individualaus pritaikymo laikais. Kad tai tiesa, neleidžia abejoti pailgintos priekinės šakės, dvigubas
                prietaisų skydelis ant bako ir aštuntojo dešimtmečio įkvėpta grafika. Tačiau jis sukurtas važiuoti
                greičiau, kiečiau ir ilgiau nei bet kuris kitas iš mūsų gamyklos išriedėjęs „Low Rider®“. Maža to, šis
                modelis lengvesnis, bet pulsuoja masyvia, rafinuota „Milwaukee-Eight® 107“ variklio galia. Dėl didelio
                pasvirimo kampo ir pakabos galimybių posūkius galėsite įveikti taip, kaip niekada anksčiau. Čia pakanka
                ir šiuolaikiškų detalių, rodančių pasauliui, kad tai šios kartos modelis, pavyzdžiui, lengvojo lydinio
                ratlankiai ir šviesos diodų priekinis žibintas. Nukreipkite jį savo keliu.'); ?>
            </p>
        </div>
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley3.png" alt="logo">
            </div>
            <p>
                <?php moto('„Nurengtas“ ir galingesnis, Antrojo pasaulinio karo pabaigos išvaizdos boberis šiame „Softail Slim® “
                modelyje alsuoja didesne stiprybe nei bet kada anksčiau. Klasikinės išvaizdos stipininiai ratai,
                nukirsti purvasaugiai ir pakojai. Ir galingas kelyje. Jis 16 kilogramų lengvesnis ir grakštesnių linijų,
                palyginti su vos keletą metų anksčiau gamintais „Slim“ modeliais. Priedo gaunamas galingasis
                „Milwaukee-Eight® 107 V-Twin“ variklis, kurio gausmas sudrebins iki sielos gelmių ir nukels į ateitį.
                Greitai.'); ?>
            </p>
        </div>
    </section>
    <section class="flx3">
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley4.png" alt="logo">
            </div>
            <p>
                <?php moto('Su „Street Bob®“ modeliu patirsi, ką reiškia važiuoti atsukus kumščius vėjui ant motociklo, kuriame nėra
                nieko nereikalingo. Juodas paviršius, stipininiai ratai, paslėptas prietaisų skydelis, priekiniai
                valdikliai ir nukirsti purvasaugiai. 107 kubinių colių (1 745 kubinių centimetrų) „Milwaukee-Eight®“
                variklis suteikia reikiamą galią, kad pasaulis greitai išnyktų motociklo veidrodėliuose. Ir nieko
                nereikalingo. Kaina tokia, kad juodos „Mini-ape“ rankenos tampa pasiekiamos ranka.'); ?>
            </p>
        </div>
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley5.png" alt="logo">
            </div>
            <p>
                <?php moto('Jį vadiname „Fat Boy®“, bet matyti, kad jis ne stambus, jis – raumeningas. Tai legenda, riedanti 240 mm
                pločio galine padanga ir 160 mm pločio priekine padanga, kurios montuojamos ant ratų su vientisais
                diskais. Apdailai pasirinktas satino chromas ir originalus šviesos diodų apšvietimas. Palyginti su
                ankstesnės kartos „Fat Boy“ modeliais, šios versijos motociklai 14 kilogramų lengvesni, galima rinktis
                107 arba 114 kubinių colių „Milwaukee-Eight®“ variklį. Skirtumą pastebėsi iškart vos pasukęs droselį.
                Kartais horizonte pasirodžius motociklui, pasikeičia visa aplinka. „Fat Boy“ būtent toks.'); ?>
            </p>
        </div>
        <div class="borders2">
            <div>
                <img class="hrly" src="images/harley6.png" alt="logo">
            </div>
            <p>
                <?php moto('Rafinuota juodos spalvos blizgi apdaila, moderniausios funkcijos ir atgaivinta kelionė „Heritage“
                modeliu įneš nostalgijos jausmo į naują vietą. Visų pirma, čia yra 107 arba 114 kubinių colių
                „Milwaukee-Eight®“ variklis bei atnaujintas „Softail®“ rėmas ir pakaba. Važiuojant nepavyks suvaldyti
                plačios šypsenos. O dar tas gangsterių era persmelktas stilius ir praktinės funkcijos, pavyzdžiui,
                stiklas nuo vėjo ir kieti kelioniniai krepšiai, itin praverčiantys kelionėje. Tradicija yra gerai, bet
                tai dar nereiškia, kad reikia ramiai sėdėti. Variklį galima rinktis iš dviejų darbinių tūrių – 107
                kubinių colių (1 745 kubinių centimetrų) arba 114 kubinių colių (1 868 kubinių centimetrų).'); ?>
            </p>
        </div>
    </section>
</main>
<footer>
    Copyright &copy; TP 2019. All rights reserved.
</footer>
</body>
</html>