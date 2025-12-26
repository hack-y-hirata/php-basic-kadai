<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];

            echo"昇降順にソートします。<br>";
            //$numの配列を昇降順にソートする
            sort($nums);

            foreach($nums as $num){
              echo"{$num}<br>";  
            }

            

            echo"<br>";

            echo"降順にソートします。<br>";
            //$numの配列を降順にソートする
            rsort($nums);

            foreach($nums as $num){
                echo $num."<br>";
            }
            
        ?>
    </p>
</body>

</html>