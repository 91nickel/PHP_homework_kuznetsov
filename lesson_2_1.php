
<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$eur = array('Lepus timidus', 'Rangifer tarandus', 'Ursus arctos');
$nam = array('Lynx canadensis', 'Cervus elaphus subspp', 'Gulo gulo luscus');
$sam = array('Thylacosmilus atrox', 'Leopardus pajeros', 'Cebuella pygmaea');
$afr = array('Loxodonta africana', 'Panthera leo persica', 'Hyaena brunnea Thunberg');
$aus = array('Phascolarctos cinereus', 'Lasiorhinus krefftii', 'Sarcophilus harrisii');
$ant = array('Hydrurga leptonyx', 'Lobodon carcinophaga', 'Megaptera novaeangliae');

$i = -1;
$i1= -1;
$animals = array('Europe' => $eur,'North America' => $nam, 'South America' => $sam, 'Africa' => $afr, 'Australia' => $aus, 'Antarctic' => $ant);
$continents = array('Europe','North America', 'South America', 'Africa', 'Australia', 'Antarctic');

foreach($animals as $animalList) {//цикл перебирает континенты
    $i++;
    foreach ($animalList as $animalName) {//цикл перебирает животных внутри континента
        $nameParts = explode(' ', $animalName);//разбивает имя зверушки на сколько-то частей
        $a = count($nameParts); //считает сколько частей получилось
        if ($a == 2) {//если частей две, то идем дальше
            echo "$a $continents[$i] $animalName <br/>"; //выводим все, что из двух слов
            $namesTwoWords[] = "$animalName, "; // наполняем список из двухловных зверушек для последующего вывода
            $animalWords = explode(' ', $animalName);//разбиваем имя зверушки на массив из 2 частей
            $animalWord1[] = $animalWords[0];//формируем массив с первыми словами
            $animalWord2[] = $animalWords[1];//формируем массив со вторыми словами
        } else {continue;}// если частей не две, то пропускаемся
    }
}
shuffle($animalWord1);
foreach ($animalWord1 as $animalWord1Shuffle) {
    $final1[] = $animalWord1Shuffle;
}
$y = count($animalWord1) - 1;
echo $y;
?>

<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>PHP-27-1</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<h2>Названия, состоящие из двух слов:</h2>
<p><?php foreach ($namesTwoWords as $name) {
    echo $name;
    } ?></p>
<h2>"Фантазийные" названия:</h2>
<p><?php
    foreach ($final1 as $var1) {
        $i1++;
        echo $var1.' '.$animalWord2[$i1].'<br />';}
    ?>
</p>
</body>
</html>