<?php
    $name = 'Никита';
    $age = '30';
    $email = '91nickel@gmail.com';
    $city = 'Электросталь';
    $about = 'что-то о себе';
?>
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
</head>
<body>
<h1>Страница пользователя Никита</h1>
<p>Name</p>
<div class='div-1'><?php echo $name; ?></div>
<p>Age</p>
<div class='div-1'><?php echo $age; ?></div>
<p>E-mail</p>
<div class='div-1'><a href='#'><?php echo $email; ?></a></div>
<p>City</p>
<div class='div-1'><?php echo $city; ?></div>
<p>About</p>
<div class='div-1'><?php echo $about; ?></div>
<br>
</body>
</html>
