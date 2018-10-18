<?php
$req = $argv[1];
$text2 = 'Значение в списках не значится';
//var_dump($req);
$table = fopen('https://raw.githubusercontent.com/netology-code/php-2-homeworks/master/files/countries/opendata.csv', "r");
 while (($data = fgetcsv($table, 1000, ",")) !== FALSE) {
    if ($req == $data[1]) {
        $text2 = $data[3];
    } elseif ($req == "list") {
        echo "$data[1] \n";
    };
};
 fclose($table);
 if ($req <> "list") {echo "$req: $text2";}
?>
