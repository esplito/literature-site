<?php
require('connect.php');
$usersession = $_SESSION['user'];
$usersessionlevel = $_SESSION['user_level'];
$cuserlevel = mysqli_query($connection, "SELECT `user_level` FROM `user_table` WHERE `user_table`.`user_uname` = '$usersession';");
$loweruserlevel = mysqli_query($connection, "SELECT user_uname FROM `user_table` WHERE user_level = 1;");
$highuserlevel = mysqli_query($connection, "SELECT user_uname FROM `user_table` WHERE user_level = 2;");
//$deleteuser = mysqli_query($connection, "DELETE FROM `user_table` WHERE `user_table`.`user_uname` = $usersession");
$row = mysqli_fetch_assoc($cuserlevel);
if ($usersessionlevel == 1) {
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
      <a href='../assets/php/user_session_delete.php' class='section__btn-link'>
        <button type='submit_delete' name='submit_delete' class='btn btn--small btn--b-text'>Ta bort</button>
      </a>
    </div>
  </div>";


}
elseif ($usersessionlevel == 2) {
  while ($roww = mysqli_fetch_array($loweruserlevel)) {
    $rowuname = $roww['user_uname'];
  echo "<div class='user__row section__row--align-l'>
    <div class='user__image-holder f-left'>
      <a href='#'>
        <img class='user__image' src='../assets/images/profile_pic.png'>
      </a>
    </div>
    <div class='user__name f-left'>
      <p>$rowuname</p>
    </div>
    <div class='user__delete f-right'>
      <a href='../assets/php/user_other_delete.php' class='section__btn-link'>
        <button name='submit_delete' class='btn btn--small btn--b-text'>Ta bort</button>
      </a>
    </div>
  </div>";
}
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
      <a href='../assets/php/user_session_delete.php' class='section__btn-link'>
        <button type='submit_delete' name='submit_delete' class='btn btn--small btn--b-text'>Ta bort</button>
      </a>
    </div>
  </div>";


}
else {

}
