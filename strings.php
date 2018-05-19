<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Strings</title>
</head>
<body>f
<?php

echo "hello world<br />";
echo 'hello world<br />';

$greeting = "hello";
$target = "world";
$phrase = $greeting . " " . $target;
echo $phrase;

?>  
<br />
<?php

echo "$phrase Again<br />";
echo "{$phrase}Again<br />";

?>
</body>
</html>