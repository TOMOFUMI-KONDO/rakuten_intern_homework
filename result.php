<?php
$name = $_POST['name'];
$fortune = ["大吉", "中吉", "小吉"];
$num = rand(0, count($fortune) - 1);
$result = $fortune[$num];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>今日の運勢</title>
  <link rel="stylesheet" href="result.css">
</head>
<body>
<p class="result">
    「<?= $name ?>」さんの今日の運勢は<br />
    <span><?= $result ?><br/></span>
    です！
</p>
<a href="./">戻る</a>
</body>
</html>