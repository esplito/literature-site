<?php
require('connect.php');
$user = $_SESSION['user'];
$pic = mysqli_query($connection, "SELECT `user_picture` FROM `user_table` WHERE `user_table`.`user_uname` = '$user'");
$userpic = mysqli_fetch_array($pic);
$emptypic = array_filter($userpic);
if (!empty($emptypic)) {

echo '<img src="../uploads/'.$userpic['user_picture'].'" class="user__image">';
} else {
  echo "<img class='user__image' src='../assets/images/profile_pic.png'>";

}
