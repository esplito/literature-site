<?php
require('connect.php');

$username = mysqli_real_escape_string($connection, $_POST['register-username']);
$email = mysqli_real_escape_string($connection, $_POST['register-email']);
$password = mysqli_real_escape_string($connection, $_POST['register-password']);

$sql = "INSERT INTO user_table (user_uname, user_email, user_password, user_level) VALUES ('$username','$email','$password', 1)";
$result = $connection->query($sql);
$connection->close();

header('Location: ../../index.php')
 ?>
