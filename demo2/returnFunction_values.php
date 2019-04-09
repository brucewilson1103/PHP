<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Returning Function Values</title>
</head>
<body>
  <?php
  
    function multiply($num1, $num2){

      $product = $num1 * $num2;

      return $product;

    }

    $result = multiply(3,7);
  
    $result = multiply(5,$result);

    echo $result;
  ?>
</body>
</html>