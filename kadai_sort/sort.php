<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
        <?php

            function sort_2way($array,$order) {

                if ($order === true) {
                echo '昇順にソートします。'.'<br>';
                sort($array); 
                foreach($array as $value) {
                    echo $value.'<br>';
                }
            }
            if ($order === false) {
                echo '降順にソートします。'.'<br>';
                rsort($array);
                foreach($array as $value) {
                    echo $value.'<br>';
                }
            }
            }
                    $array = [15, 4, 18, 23, 10 ];
                    sort_2way($array, true);
                    sort_2way($array, false);
        ?>
        </p>
    </body>
</html>