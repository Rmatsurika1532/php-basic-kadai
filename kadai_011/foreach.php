<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP kadai_011</title>
</head>

<body>
    <?php
    $cook_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($cook_data as $key => $value) {
        echo "{$key}:{$value}".'<br>';
    }
    ?>
</body>

</html>