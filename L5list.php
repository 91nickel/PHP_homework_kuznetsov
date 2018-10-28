<?php
$dir    = 'tests';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
$i = 0;
//var_dump($files2);
echo 'ВЫБЕРИТЕ ДОСТУПНЫЙ ТЕСТ'."<br />";
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Список загруженных тестов. Задание 5.</title>
</head>
<body>
<?php foreach ($files2 as $item) : ?>
    <?php $i++;
    if ($i > count($files2) - 2) {break;} ?>
    <a href="<?php echo 'L5test.php?y='.$i; ?>"><?php echo 'Тест №'.$i; ?></a><br>
<?php endforeach; ?>
</body>
</html>
