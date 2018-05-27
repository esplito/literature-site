<?php
require('connect.php');

	$get_review_AVG = $connection -> query("SELECT AVG(rating_by_user) , book_ISBN  FROM review_table  GROUP BY book_ISBN" );

?>