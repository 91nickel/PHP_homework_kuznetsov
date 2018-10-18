<?php
$req = $argv;
if ($req[1] == 'today') {
    echo 'Сумма трат за сегодня = ';
    $sum = 0;
    $money = fopen ("money.csv", "r");
    while (($data1 = fgetcsv($money, 1000, ",")) !== FALSE) {
        //var_dump ($data1);
        $sum = $sum + $data1[1];
    };
    fclose ($money);
    echo $sum;
    die;
};
if (count($req) < 3){
    echo "Ошибка! Недостаточно аргументов!";
    die;
};
$product = '';
//var_dump($req);
for ($i = 2; $i <= count($req) - 1; $i++) {
    //echo "$i \n";
    $product = trim($product . " $req[$i]");
};
if ($product == "") {
    echo "Ошибка! Не задано наименование продукта!";
    die;
};
$today = date("d.m.y");
$price = $req[1];
if ((int)$price == 0) {
    echo "Ошибка! Цена указана в неверном формате!";
    die;
};
//var_dump($today);
//var_dump($price);
//var_dump($product);
$content = [$today,$price,$product];
//print_r ($content);
file_put_contents ("./money.csv", implode(",", $content) . "\n", FILE_APPEND);
echo 'Добавлена строка ' . implode(",", $content);
//var_dump ($data);
?>
