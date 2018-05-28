<?php
session_start();
require('connect.php');
if (isset($_POST['submit_profile_update'])) {

$school = mysqli_real_escape_string($connection, $_POST['profile-school']);
$user = $_SESSION['user'];

mysqli_query($connection, "UPDATE `user_table` SET `user_school` = '$school' WHERE `user_table`.`user_uname` = '$user'");
$_SESSION['user_school'] = $school;
header("Location: ../../pages/profile.php");
}

?>
