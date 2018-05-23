<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loops: foreach</title>
</head>
<body>

  <?php

    $ages = [4, 8, 16, 20, 42];

    foreach ($ages as $age) {
      echo "Age: {$age}<br>";
    }
  
  ?>
  <hr>
  <?php // foreach using assoc. array

    $person = [
      "first_name" => "Zayar",
      "last_name" => "Tun",
      "address" => "No. 38, 88th Street",
      "city" => "Yangon",
      "state" => "Yangon",
      "zip_code" => "90210"
    ];

    foreach ($person as $attribute => $data) {
      $attr_nice = ucwords(str_replace("_", " ", $attribute));
      echo "{$attr_nice}: {$data}<br />";
    }
  
  ?>
  <hr>
  <?php

    $prices = [
      "Brand New Computer" => 2000,
      "1 month of Lynda.com" => 25,
      "Learning PHP" => null
    ];

    foreach ($prices as $item => $price) {
      echo "{$item}: ";
      if (is_int($price)) {
        echo "$" . $price;
      } else {
        echo "priceless";
      }
      echo "<br>";
    }
  
  ?>   
  
</body>
</html>