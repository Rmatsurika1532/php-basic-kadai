<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP基礎編</title>
    </head>
    <body>
        <p>
        <?php

            function sort_2way($nums,$order) {

                if ($order === true) {
                echo '昇順にソートします。'.'<br>';
                sort($nums); 
                foreach($nums as $num) {
                    echo $num.'<br>';
                }
            }
            if ($order === false) {
                echo '降順にソートします。'.'<br>';
                rsort($nums);
                foreach($nums as $num) {
                    echo $num.'<br>';
                }
            }
            }
                    $nums = [15, 4, 18, 23, 10 ];
                    sort_2way($nums, true);
                    sort_2way($nums, false);
        ?>
        </p>
    </body>
</html>