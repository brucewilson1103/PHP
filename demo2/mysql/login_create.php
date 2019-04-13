<?php include "db.php";

  if(isset($_POST['submit'])){

      $username = $_POST['username'];
      $password = $_POST['password'];

    $query = "INSERT INTO USERS (username,password) ";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

      if(!$result){
        die('Query Failed.' .mysqli_error());
            }


    // server, username, psswd, database



      // if($username && $password){
      //   echo $username ."<br>" . $password;

      // } else{
      //   echo "A username and a password is required.";
      // }
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="col-sm-6">
        <form action="login_create.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-success" type="submit" name="submit" value="Submit">
        
        </form>


    </div>
  
  </div>

  <?php
  
  
  ?>
</body>
</html>