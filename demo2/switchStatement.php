<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Switch Statement </title>
</head>
<body>
  
<?php
// Switch statements save time in writing multiple if statements. Good for forms or entry into a database or login page.

$number = 10;

switch($number){
    case 73: 
    echo "test";
    break;

    case 10: 
    echo "Twenty Two";
    break;
    case 8: 
    echo "Trees";
    default : 55;

};




?>

</body>
</html>