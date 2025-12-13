<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        //ソートする関数を作成する
        function sort_2way(&$array, $order) {
          if ($order === 'asc') {
            sort($array);
            echo '昇順にソートします。<br>';
          } elseif ($order === 'dsc') {
              rsort($array);
              echo '降順にソートします。<br>';
            }
          
        }

        //関数を呼び出す
        sort_2way($nums, 'asc');
        
        //ソートした配列のデータを1行ずつ表示する
        foreach ($nums as $num) {
          echo $num . '<br>';
        }

        //関数を呼び出す
        sort_2way($nums, 'dsc');
        
        //ソートした配列のデータを1行ずつ表示する
        foreach ($nums as $num) {
          echo $num . '<br>';
        }
        ?>
    </p>
</body>

</html>