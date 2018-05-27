<?php
require('connect.php');

$user_uname = $connection->real_escape_string($_POST['user_uname']);
$user_email = $connection->real_escape_string($_POST['user_email']);
$user_password = $connection->real_escape_string($_POST['user_password']);
$user_school = $connection->real_escape_string($_POST['user_school']);
$user_picture = $connection->real_escape_string($_POST['user_picture']);
$createAcc = $_POST['createAcc'];

	if ($createAcc) 
	{
		if($user_uname!=""&&$user_email!=""&&$user_password!="") 
		{
			$insert = $connection -> query("INSERT INTO user_table (user_uname, user_email, user_password, user_school, user_picture, user_level) VALUES ('".$user_uname."','".$user_email."','".$user_password."','".$user_school."',"LOAD_FILE($user_picture)",'1')");

		}
		else 
		{
			echo "tomma fält! (skall täckas client side av js).";
		}
	}


?>			