<?php
session_start();
require('connect.php');
$usersession = $_SESSION['user'];
$deleteuser = mysqli_query($connection, "DELETE FROM `user_table` WHERE `user_table`.`user_uname` = '$usersession'");
session_destroy();
header("Location: ../../index.php");
