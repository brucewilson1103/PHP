<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Arrays Associative</title>
</head>
<body>

<?php

$number = [10,20,49];

echo $number[1];

echo "<br>";

$names = ["first_name" => 'Bruce', "last_name" => "Wayne"];

print_r($names);
echo "<br>";
echo $names ["first_name"] . " " . $names["last_name"];


?>
  
</body>
</html>