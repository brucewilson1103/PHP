<?php

if(isset($_POST['submit'])){
  echo "The form has been submitted.";
  echo "<br>";
  $username = $_POST['username'];
  echo "<br>";
  $password = $_POST['password'];
  echo "Hello " . $username;
  echo "<br>";
  echo "Your password is " . $password;
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forms</title>
</head>
<body>
<form action="form.php" method="POST">
  <input type="text" name='username' placeholder="Enter Username">
  <input type="password" name="password" placeholder="Enter Password"><br>
  <input type="submit" name="submit">

</form>
  <?php
  
  
  
  
  
  ?>
</body>
</html>