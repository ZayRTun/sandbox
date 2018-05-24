<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions: Arguments</title>
</head>
<body>

<?php

  function say_hello_to($word) {
    echo "Hello {$word}!<br />";
  }

  $name = "Zayar Tun";
  say_hello_to($name);

?> 

<?php

  function better_hello($greeting, $target, $punct) {
    echo $greeting . " " . $target . $punct . "<br />";
  }

  better_hello("Hello", $name, null);

?>
  
</body>
</html>