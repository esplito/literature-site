<?php
session_start();
require('connect.php');
$usersession = $_SESSION['user']
$cuserlevel = mysqli_query($connection, "SELECT `user_level` FROM `user_table` WHERE `user_table`.`user_uname` = '$usersession';");
$loweruserlevel = mysqli_query($connection, "SELECT user_uname FROM `user_table` WHERE user_level < '$cuserlevel'");
//$deleteuser = mysqli_query($connection, "DELETE FROM `user_table` WHERE `user_table`.`user_id` = 1");

if ($cuserlevel == 1) {
  echo "<div class='user__row section__row--align-l'>
    <div class='user__image-holder f-left'>
      <a href='#'>
        <img class='user__image' src='../assets/images/profile_pic.png'>
      </a>
    </div>
    <div class='user__name f-left'>
      <p>$usersession</p>
    </div>
    <div class='user__delete f-right'>
      <a href='#' class='section__btn-link'>
        <button name='submit_delete' class='btn btn--small btn--b-text'>Ta bort</button>
      </a>
    </div>
  </div>";
} else {
  while () {
  echo "<div class='user__row section__row--align-l'>
    <div class='user__image-holder f-left'>
      <a href='#'>
        <img class='user__image' src='../assets/images/profile_pic.png'>
      </a>
    </div>
    <div class='user__name f-left'>
      <p>$row['user_uname']</p>
    </div>
    <div class='user__delete f-right'>
      <a href='#' class='section__btn-link'>
        <button name='submit_delete' class='btn btn--small btn--b-text'>Ta bort</button>
      </a>
    </div>
  </div>";
}


}
