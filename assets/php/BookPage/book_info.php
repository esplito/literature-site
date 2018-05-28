<?php
require('connect.php');
	

	$get_isbn = $_GET['b'];

	$get_book_query = $connection-> query("SELECT book_ISBN, book_title, book_author, book_edition, book_releashed_year  FROM book_table WHERE book_ISBN = ('".$get_isbn."') ");

	if($get_book_query === FALSE) { 
    die(mysql_error());
	}


	while($row = mysqli_fetch_array($get_book_query))
		{
  		$ISBN=$row['book_ISBN'];	
		$title=$row['book_title'];	
		$author=$row['book_author'];	
		$edition=$row['book_edition'];
		$released_year=$row['book_releashed_year'];	
	
		
			
		return $ISBN . ", ". $title .", ". $author .", ". $edition .", ". $released_year.'<br />';
		}


?>