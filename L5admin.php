<?php

?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5. Админка.<</title>

</head>
<body>

<form action="L5admin.php" enctype="multipart/form-data" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000"/>
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="uploadedTest" type="file"/>
    <input type="submit" value="Отправить файл"/>
</form>
</body>
</html>
<?php
$file = $_FILES;
if (!empty($file) && array_key_exists('uploadedTest', $file)) {
    $counter = file_get_contents('L5list.php');
    var_dump($counter);
    $count = count(explode(' ', $counter)) + 1;
    $filename = "$count".'.json '."\n";
    var_dump($filename);
    file_put_contents('L5list.php', "$filename",FILE_APPEND);
    move_uploaded_file($file['uploadedTest']['tmp_name'], 'tests/'."$count".'.json');
}
?>
