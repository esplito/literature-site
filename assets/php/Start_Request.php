<?php
require('connect.php');
require('Review_AVG.php');

//$get_avg_and_ISBN = $connection -> query("SELECT AVG(rank), book_ISBN FROM rank GROUP BY ISBN ORDER BY `AVG(rank)` DESC LIMIT 3");

$get_ISBN = $connection -> query("SELECT book_ISBN FROM '$get_review_AVG' ORDER BY `AVG(rating_by_user)` LIMIT 3 ");

$get_title  = $connection -> query("SELECT book_title FROM book_table WHERE book_ISBN = '$get_ISBN'");

//$get_title  = $connection -> query("SELECT title FROM book_table JOIN book_table ON book_table.ISBN = '$get_ISBN'-book_ISBN");

$get_picture = $connection -> query("SELECT book_picture FROM book_table WHERE book_ISBN = '$get_ISBN'");

//$get_picture = $connection -> query("SELECT book_picture FROM book_table JOIN book_table ON book_table.book_ISBN = '$get_ISBN'.book_table");



	if($get_ISBN === FALSE || $get_title === FALSE) { 
    die(mysql_error());
	}

		
	//	while($row = mysqli_fetch_array($get_avg_and_ISBN))
	//	{
  	//	$AVG_rank=$row['AVG(rank)'];	
	//	echo $AVG_rank '<br />';
	//	}
	
		
		while($row = mysqli_fetch_array($get_ISBN))
		{
  		$ISBN=$row['book_ISBN'];	
		echo $ISBN'<br />';
		}
		
		
		while($row = mysqli_fetch_array($get_title))
		{
  		$title=$row['book_title'];	
		echo $title'<br />';
		}

		while($row = mysqli_fetch_array($get_picture))
		{
  		$picture=$row['book_picture'];	
		echo $picture'<br />';
		}


?>