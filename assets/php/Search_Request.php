<?php
require('connect.php');
require('Review_AVG.php');
	
	$get_search = $connection-> (???['Search']);

	$get_result = $connection -> query("SELECT book_title, book_released_year FROM book_table WHERE book_title = LIKE '%$'get_search'%' ");

	$get_result_ISBN = $connection -> query("SELECT book_ISBN FROM book_table WHERE book_title = LIKE '%$'get_search'%' ");

	$get_result_rew_AVG = $connection -> query("SELECT rating_by_user FROM '$Review_AVG' JOIN '$Review_AVG' ON '$Review_AVG'.book_ISBN = '$get_result_ISBN'.book_ISBN ");

?>