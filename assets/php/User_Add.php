<?php
require('connect.php');

$user_uname = $connection->real_escape_string($_POST['user_uname']);
$user_email = $connection->real_escape_string($_POST['user_email']);
$user_password = $connection->real_escape_string($_POST['user_password']);
$user_first = $connection->real_escape_string($_POST['user_first']);
$user_last = $connection->real_escape_string($_POST['user_last']);
$user_school = $connection->real_escape_string($_POST['user_school']);
//$user_picture = 
$createAcc = $_POST['createAcc'];

	if ($createAcc) 
	{
		if($user_uname!=""&&$user_email!=""&&$user_password!=""&&$user_first!=""&&$user_last!="") 
		{
			$insert = $connection -> query("INSERT INTO User_Table (user_uname, user_email, user_password, user_first, user_last, user_school, user_level) VALUES ('".$user_uname."','".$user_email."','".$user_password."','".$user_first."','".$user_last."','".$user_school."','1')");
		}
		else 
		{
			echo "tomma fält! (skall täckas client side av js).";
		}
	}


?>