<?php
require('connect.php');

	//create a "eventlisener" for "login action"
	$get_uname = $connection-> (???['Login'])

	$get_id = $connection -> query("SELECT * user_id FROM User_Table WHERE user_uname='$get_uname' ")

	$get_user_query = $connection -> query("SELECT user_uname, user_school FROM User_Table WHERE user_id ='$get_id' ");

	$get_rewiev_query = $connection -> query("SELECT rating_by_user FROM Review_Table WHERE user_id = '$get_id' ");

	$get_book_query = $connection -> query("SELECT title FROM Book_Table
		WHERE ISBN IN(SELECT ISBN FROM Books_Read WHERE User_id = '$get_id' ");

	$get_review_count = $connection -> query("SELECT COUNT ISBN FROM Review_Table WHERE user_id = '$get_id'")


	if($get_user_query === FALSE || $get_rewiev_query === FALSE || $get_book_query === FALSE || $get_review_count === FALSE) { 
    die(mysql_error());
	}

		//Row should be changed to where the information shall be presented
		//possibly remove the while-loop?
		//Profilinformation
		while($row = mysqli_fetch_array($get_user_query))
		{
  		$user_uname=$row['user_uname'];	
		$user_school=$row['user_school'];	
		echo $user_uname .", ". $user_school .'<br />';
		}
	
		//Mina omdömmen
	}	while($row = mysqli_fetch_array($get_rewiev_query))
		{
  		$rating_by_user=$row['rating_by_user'];	
		echo $rating_by_user'<br />';
		}
		
		//Mina Böcker
		while($row = mysqli_fetch_array($get_book_query))
		{
  		$title=$row['title'];	
		echo $title'<br />';
		}
	
		//Antal omdömmen
		while($row = mysqli_fetch_array($get_review_count))
		{
  		$ISBN=$row['ISBN'];	
		echo $ISBN'<br />';
		}

?>