<?php
require('connect.php');
session_start();

$email = mysqli_real_escape_string($connection, $_POST['login-email']);
$password = mysqli_real_escape_string($connection, $_POST['login-password']);

$sql = "SELECT user_uname FROM user_table WHERE user_email = '$email' AND user_password = '$password'";
$result = mysqli_query($connection,$sql);

if ($row = $result->fetch_assoc()){
  $_SESSION['user'] = $row['user_uname'];
  if (isset($_SESSION['user'])) {
    $sessionUname = $_SESSION['user'];
    $sqlprofile = "SELECT user_id, user_school, user_picture, user_level FROM user_table WHERE user_uname = '$sessionUname'";
    $result = mysqli_query($connection,$sqlprofile);

    if ($row = $result->fetch_assoc()){
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['user_school'] = $row['user_school'];
      $_SESSION['user_picture'] = $row['user_picture'];
      $_SESSION['user_level'] = $row['user_level'];
    }
  }
  header('Location: ../../index.php');
}


?>
