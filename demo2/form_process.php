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