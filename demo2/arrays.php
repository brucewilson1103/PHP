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

  $numListOld = array(11,22,33,44,55,66,77,"<h1>StringWithHTMLtag</h1>");

  $numList = [2,3, 22, 88];

  echo $numList[0];
  echo "<br>";

  echo $numListOld[7];

  print_r($numListOld);
  ?>
</body>
</html>