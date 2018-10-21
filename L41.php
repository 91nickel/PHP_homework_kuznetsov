<?php
$json = file_get_contents('./L41.json');
$base = json_decode($json, true);
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
    <title>Таблица клиентов<</title>
    <style>
        td {text-align: center;
            padding: 5px 10px;
            min-width: 100px;
            margin: auto;
            box-sizing: border-box;
            border: solid black;
            border-width: 0px 1px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>NN</td>
        <td>Имя Фамилия</td>
        <td>Почта</td>
        <td>Телефон</td>
        <td>Сделка 1</td>
        <td>Сделка 2</td>
        <td>Сделка 3</td>
        <td>Ребёнок 1</td>
        <td>Ребёнок 2</td>
        <td>Ребёнок 3</td>
    </tr>
    <?php foreach ($base as $data) : ?>
        <tr>
            <td><?php $i = $i+1; echo $i ?></td>
            <td><?php echo $data['name'] . ' ' . $data['surname'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['phone'] ?></td>

            <?php
            $leads = $data['leads'];
            //var_dump($leads);
            foreach ($leads as $lead) : ?>
                <td><?php echo $lead[0] . ' - ' . $lead[1] . ' р.' ?></td>
            <?php endforeach; ?>

            <?php
            $children = $data['children'];
            //var_dump($children);
            foreach ($children as $child) : ?>
                <td><?php echo $child[0] . ' - ' . $child[1] . ' г.' ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>