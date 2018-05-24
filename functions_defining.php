<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions: Defining</title>
</head>
<body>

  <?php

    function say_hello() {
      echo "Hello World!<br />";
    }

    say_hello();

    function say_hello_to($word) {
      echo "Hello {$word}!<br />";
    }

    say_hello_to('World');
    say_hello_to('Everyone');

    
    say_hello_loudly();

    function say_hello_loudly() {
      echo "Hello World!<br />";
    }

    // function say_hello_loudly() {
    //   echo "Can't define a function again.";
    // }
  
  ?>
  
</body>
</html>