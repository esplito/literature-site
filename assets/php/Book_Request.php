<?php
require('connect.php');

	//create a "eventlisener" for "search action"
	$get_title = $connection-> (???['Search']);

	$get_ISBN = $connection-> query("SELECT * book_ISBN FROM book_table WHERE book_title = '$get_title'");
	//$get_ISBN = $connection-> query("SELECT * book_ISBN FROM book_table JOIN book_table ON book_table.book_title = '$get_title'.book_book_title");

	$get_book_query = $connection-> query("SELECT book_ISBN, book_title, book_author, book_edition, book_released_year, book_picture FROM book_table WHERE book_ISBN = '$get_ISBN'");
	//$get_book_query = $connection-> query("SELECT book_ISBN, book_title, book_author, book_edition, book_released_year, book_picture FROM book_table JOIN book_table ON book_table.book_ISBN = '$get_ISBN'.book_ISBN");

	$get_review_query = $connection -> query("SELECT review_comment, rating_by_user FROM review_table WHERE book_ISBN = '$get_ISBN' ");

	//$get_review_query = $connection -> query("SELECT review_comment, rating_by_user FROM review_table JOIN review_table ON review_table.book_ISBN = '$get_ISBN'.book_ISBN ");

	$get_comment_query = $connection -> query("SELECT comment_commet FROM comment_table ORDER BY comment_id");


	if($get_book_query === FALSE || $get_review_query === FALSE || $get_comment_query === FALSE) { 
    die(mysql_error());
	}

	while($row = mysqli_fetch_array($get_book_query))
		{
  		$ISBN=$row['book_ISBN'];	
		$title=$row['book_title'];	
		$author=$row['book_author'];	
		$edition=$row['book_edition'];
		$released_year=$row['book_released_year'];	
		$picture=$row['book_picture'];
			
		echo $ISBN .", ". $title .", ". $author .", ". $edition .", ". $released_year.", ". $picture.'<br />';
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