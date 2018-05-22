<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays</title>
</head>
<body>
  <?php
  
    $numbers = array(4,8,15,16,23,42);
    echo $numbers[0] . "<br>";
  ?>

  <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>

  <?php $mixed[2] = "cat"; ?>
  <?php $mixed[4] = "mouse"; ?>
  <?php $mixed[] = "horse"; ?>

  <pre>
  <?php echo print_r($mixed) . "<br>"; ?>
  </pre>
  <?php echo $mixed[3][1] . "<br>"; ?> 
</body>
</html>