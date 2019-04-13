<?php include "db.php"; ?>

<?php


function showIds(){
  global $connection;
$query = "SELECT * FROM USERS";
// $query .= "";
$result = mysqli_query($connection, $query);
  if(!$result){
    die('Query Failed.' .mysqli_error());
        }

        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
           echo " <option value='$id'>$id</option>";
        }
      }

function updateUsername(){

  if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE USERS SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result){
        die("Query Failed Kind Sir or Madam" . mysqli_error($connection));
      }
  }

}

function deleteUsername(){

  if(isset($_POST['submit'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM USERS ";
    $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if(!$result){
        die("Query Failed Kind Sir or Madam" . mysqli_error($connection));
      }
  }

}
?>
