<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Continue</title>
</head>
<body>

  <?php

    for ($count = 0; $count <= 10; $count++) {
      if ($count % 2 == 0) { continue; } 
      echo $count . ", ";
    }
  
  ?>
  <br>
  <?php // what's wrong with this?
    $count = 0;
    while ($count <= 10) {
      if ($count == 5) {
        $count++;
        continue;
      }
      echo $count . ", ";
      $count++;
    }
  ?>
  <br>
  <?php // loop inside a loop with continue
    for ($i = 0; $i <= 5; $i++) {
      if ($i % 2 == 0) { continue; }
      for ($k = 0; $k <= 5; $k++) {
        if ($k == 3) { continue(2); }
        echo $i . "-" . $k . "<br />";
      }
    }
  ?>
  
</body>
</html>