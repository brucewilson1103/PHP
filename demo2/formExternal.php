<?php

if(isset($_POST['submit'])){

  $names=['Bill', 'Bob', 'Bonnie', 'Bo', 'Brian','Belle'];




  echo "The form has been submitted.";
  echo "<br>";
  $minimum = 5;
  $username = $_POST['username'];
  echo "<br>";
  $password = $_POST['password'];
  echo "Hello " . $username;
  echo "<br>";
  echo "Your password is " . $password;
  echo "<br>";
  if(strlen($username)< $minimum){
    echo "Username must be longer than four characters.";
  };
  if(strlen($password)< $minimum){
    echo "Password must be longer than four characters.";
  };

  if(!in_array($username, $names)){
    echo "Sorry, this user does not exist.";
  }else{
    echo "Welcome" . " " . $username;
  };
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
<form action="form_process.php" method="POST">
  <input type="text" name='username' placeholder="Enter Username">
  <input type="password" name="password" placeholder="Enter Password"><br>
  <input type="submit" name="submit">

</form>
  <?php
  
  
  
  
  
  ?>
</body>
</html>