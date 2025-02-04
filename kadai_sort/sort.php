<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];

        // 昇順にソート
        echo '昇順にソートします。<br>';
        sort($nums);
        foreach ($nums as $num) {
            echo $num .'<br>';
        }

        // 降順にソート
        echo '降順にソートします。<br>';
        rsort($nums);
        foreach ($nums as $num) {
            echo $num . '<br>';
        }        
        ?>
    </p>
</body>
</html>