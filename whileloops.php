<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loops: While</title>
</head>
<body>

  <?php
    $count = 0;
    while ($count <= 10) {
      if ($count == 5) {
        echo 'Five, ';
      } else {
        echo $count . ', ';
      }
      $count++;
    }
    echo "<br>";
    echo "Count: {$count}";
  ?>
  <hr><br>
  <?php
    $cc = 1;
    while ($cc <= 10) {
      if (($cc % 2) == 0) {
        echo $cc . ': is an Even number<br />';
      } else {
        echo $cc . ': is an Odd number<br />';
      }
      $cc++;
    }
  ?> 
</body>
</html>