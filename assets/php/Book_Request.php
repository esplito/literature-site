<?php
require('connect.php');

	//create a "eventlisener" for "search action"
	$get_title = $connection-> (???['Search']);

	$get_ISBN = $connection-> query("SELECT * ISBN FROM Book_Table WHERE title = '$get_title'");

	$get_book_query = $connection-> query("SELECT ISBN, title, author, edition, released_year FROM Book_Table WHERE ISBN = '$get_ISBN'");

	$get_review_query = $connection -> query("SELECT r_comment, rating_by_user FROM Review_Table WHERE ISBN = '$get_ISBN' ");

	$get_comment_query = $connection -> query("SELECT kommentar FROM comment_table ORDER BY com_id")


	if($get_book_query === FALSE || $get_review_query === FALSE || $get_comment_query === FALSE) { 
    die(mysql_error());
	}

	while($row = mysqli_fetch_array($get_book_query))
		{
  		$ISBN=$row['ISBN'];	
		$title=$row['title'];	
		$author=$row['author'];	
		$edition=$row['edition'];
		$released_year=$row['released_year'];	
			
		echo $ISBN .", ". $title .", ". $author .", ". $edition .", ". $released_year.'<br />';
		}

	while($row = mysqli_fetch_array($get_review_query))
		{
		$r_comment=$row['r_comment'];
		$rating_by_user=$row['rating_by_user'];

		echo $r_comment.", ".$rating_by_user. '<br />';
		}

	while ($row = mysqli_fetch_array($get_comment_query)) 
		{
		$kommentar=$row['kommentar'];

		echo $kommentar '<br />';
		}

?>