<?php
session_start();
require('connect.php');
$user = $_SESSION['user'];
if (isset($_POST['submit_profile_update'])) {

$img = $_FILES['file']['name'];
$insert ="UPDATE `user_table` SET `user_picture` = '$img' WHERE `user_table`.`user_uname` = '$user'";
if(mysqli_query($connection, $insert)) {
  move_uploaded_file($_FILES['file']['tmp_name'], "../../uploads/$img");
}
$school = mysqli_real_escape_string($connection, $_POST['profile-school']);

mysqli_query($connection, "UPDATE `user_table` SET `user_school` = '$school' WHERE `user_table`.`user_uname` = '$user'");
$_SESSION['user_school'] = $school;
header("Location: ../../pages/profile.php");
}
