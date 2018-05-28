<?php
require('connect.php');

	$get_title = "Systems Analysis and Design";
	//$get_title = $connection->real_escape_string($_POST['']);
	$get_comment_query = $connection -> query("SELECT comment_comment FROM comment_table  JOIN book_table WHERE book_title =  ('".$get_title."') ");


	if($get_comment_query === FALSE) { 
    die(mysql_error());
	}

	while ($row = mysqli_fetch_array($get_comment_query)) 
		{
		$kommentar=$row['comment_comment'];

		return $kommentar. '<br />';

		
		}

?>