<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Passing Params</title>
</head>
<body>

<?php

  function calculate ($number1, $number2){

    $sum = $number1 * $number2;
      echo $sum;
  }

    calculate(2,7);
    echo "<br>";
    calculate(5,5);
  // function greet($message){

  //   echo $message;

  // }

  // greet("Hello Riker");
?>
  
</body>
</html>