<?php
require('connect.php');

	$get_uname = "Swagemil";
	//$get_uname = $connection->real_escape_string($_POST['']);


	$get_user_query = $connection -> query("SELECT user_uname, user_school FROM user_table WHERE user_uname = ('".$get_uname."')");

		if($get_user_query === FALSE) { 
    	die(mysql_error());
		}

		while($row = mysqli_fetch_array($get_user_query))
		{
  		$user_uname=$row['user_uname'];	
		$user_school=$row['user_school'];	
		echo $user_uname .", ". $user_school .'<br />';
		}
?>