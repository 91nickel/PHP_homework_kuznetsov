<?php
$json = file_get_contents('./L5test.json');
$base = json_decode($json, true);
$i = 0;
//print_r ($base);
/*
foreach ($base as $data) {
    echo '1' . "<br />";
    echo $data['name'] . ' ' . $data['surname'] . "<br />";
    echo $data['email'] . "<br />";
    echo $data['phone'] . "<br />";
    $leads = $data['leads'];
    //var_dump($leads);
    foreach ($leads as $lead) {
        echo $lead[0] . " - ";
        echo $lead[1] . "<br />";
    };
};*/
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Задание 5. Тест.<</title>

</head>
<body>
<form action="" method="GET">
    <?php foreach ($base as $data) : ?>
    <?php $i++ ?>
  <fieldset>
    <legend><?php echo $data['q'] ?></legend>
      <label><input type="radio" name="<?php echo 'q'.$i ?>" value="<?php echo $data['wa1'] ?>"> <?php echo $data['wa1'] ?> </label>
      <label><input type="radio" name="<?php echo 'q'.$i ?>" value="<?php echo $data['wa2'] ?>"> <?php echo $data['wa2'] ?> </label>
      <label><input type="radio" name="<?php echo 'q'.$i ?>" value="<?php echo $data['wa3'] ?>"> <?php echo $data['wa3'] ?> </label>
      <label><input type="radio" name="<?php echo 'q'.$i ?>" value="<?php echo $data['ra'] ?>"> <?php echo $data['ra'] ?> </label>
  </fieldset>
  <?php endforeach; ?>
  <input type="submit" value="Отправить">  
</form>
</body>
</html>

<?php
//print_r($_GET);
$i = 0;
if (!empty($_GET)) {
    $answers = $_GET;
    if (count($answers) < count($base)) {
        echo "Заполните тест полностью";
        exit;
    }
    foreach ($base as $answer) { 
        //print_r($answer['ra']);
        $i++;
        if ($answer['ra'] == $answers['q'.$i]) {
            echo "Ответ $i - верный".'<br />';
        } else {
            echo "Ответ $i - не верный".'<br />';
        }
    };
};
//print_r($answers);
?>

