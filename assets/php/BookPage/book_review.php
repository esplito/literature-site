<?php
require('connect.php');

$get_title = "Systems Analysis and Design";

$get_review_query = $connection-> query("SELECT review_comment, rating_by_user FROM review_table JOIN book_table WHERE book_title = ('".$get_title."')");

	if($get_review_query === FALSE) { 
    die(mysql_error());
	}


	while ($row = mysqli_fetch_array($get_review_query)) 
		{
		$review_comment=$row['review_comment'];	
		$rating_by_user=$row['rating_by_user'];	

		echo  $review_comment. ", ". $rating_by_user.'<br />';
		}

?>
