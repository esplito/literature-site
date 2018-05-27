<?php
require('connect.php');
session_start();

$email = mysqli_real_escape_string($connection, $_POST['login-email']);
$password = mysqli_real_escape_string($connection, $_POST['login-password']);

$sql = "SELECT user_uname FROM user_table WHERE user_email = '$email' AND user_password = '$password'";
$result = mysqli_query($connection,$sql);

if ($row = $result->fetch_assoc()){
  $_SESSION['user'] = $row['user_uname'];
  header('Location: ../../index.php');
}
?>
