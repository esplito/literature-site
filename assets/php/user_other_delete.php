<?php
session_start();
include 'remove_acc.php';
require('connect.php');
$deleteuser = mysqli_query($connection, "DELETE FROM `user_table` WHERE `user_table`.`user_uname` = '$rowuname'");
header("Location: ../../pages/removeacc.php");
