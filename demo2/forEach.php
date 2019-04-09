<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>For Each Loop</title>
</head>
<body>
  <?php
  
  $numbers = array(345,543,777,932,888);

  foreach($numbers as $number){
    $number ++;
    echo $number . "<br>";

  };
  
  
  ?>
</body>
</html>