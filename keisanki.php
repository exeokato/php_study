<?php
$num1 = (int)$_GET["one"];
$num2 = (int)$_GET["two"];
$calc = $_GET["calc"];
$result = 0;
switch($calc) {
  case "tasu":
    $result = $num1 + $num2;
    break;
  case "hiku":
    $result = $num1 - $num2;
    break;
  case "kakeru":
    $result = $num1 * $num2;
    break;
  case "waru":
    $result = $num1 / $num2;
    break;
}
;?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf--8">
    <title>計算機</title>
  </head>
  <body>
  <p>四則演算</p>
    <form action="keisanki.php" method="GET">

    <input type="number" name="one" value="0">

    <select name="calc">
      <option value="tasu">＋</option>
      <option value="hiku">-</option>
      <option value="kakeru">×</option>
      <option value="waru">÷</option>
    </select>

    <input type="number" name="two" value="0">

    <input type="submit" value="計算する">

    </form>

    <?php if(isset($result)):?>
      <p>
      計算結果：
      <?php
        echo $result;
      ;?>
      </p>
    <?php endif ;?>


  </body>

</html>
