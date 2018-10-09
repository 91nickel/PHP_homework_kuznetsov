<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>PHP-27-1</title>
    <style>
        body {
            font-family: sans-serif;
        }
        div.div-1 {
            margin-left: 3rem;
        }
    </style>
    <?php
        $x = rand(0,100);
        $y = $_GET['y'];
        $textBox1 = 'НЕ входит в числовой ряд';
        $textBox2 = 'НЕ входит в числовой ряд';

    echo "Х = $x ; Y = $y <br /> Последовательность:  ";

    for ($var1 = 1, $var2 = 1; $var1 < 100; $var3 = $var1, $var1 = $var1 + $var2, $var2 = $var3) {
        echo "$var1  ";
        if ($var1 == $x) {
            $textBox1 = 'входит в числовой ряд';
            break;
    }
}
    for ($var11 = 1, $var21 = 1; $var11 < 100; $var31 = $var11, $var11 = $var11 + $var21, $var21 = $var31) {
            if ($var11 == $y) {
            $textBox2 = 'входит в числовой ряд';
            break;
        }
    }
?>
</head>
<body>
<h1>Дополнительное задание к лекции 1.1 «Введение в PHP»</h1>
<h2>Вариант выполнения задания с использованием функции rand(1,100)</h2>
<div>
    <?php
        echo "Число ".$x." ".$textBox1;
    ?>
</div>

<h2>Вариант выполнения задания с передачей числа через адресную строку</h2>
<p>Ввод числа пользователем осуществляется через адресную строку в виде .../lesson_1_1.php?y=13. По умолчанию задано число '13'.</p>
<div>
    <?php
    echo "Число  $y  $textBox2";
    ?>
</div>
</body>
</html>