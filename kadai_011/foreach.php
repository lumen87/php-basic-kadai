<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHPの基礎を学ぼう11章課題</title>
</head>

<body>
  <p>
      <?php
      $items_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
      
      //連想配列の$items_dataのキーと値を1つずつ順番に出力する
      foreach ($items_data as $key => $value) {
          echo "{$key} : {$value}<br>";
      }
      ?>
  </p>
</body>

</html>