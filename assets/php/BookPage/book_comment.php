<?php
require('connect.php');

	$get_comment_query = $connection -> query("SELECT comment_comment FROM comment_table ORDER BY comment_id");


	if($get_comment_query === FALSE) { 
    die(mysql_error());
	}

	while ($row = mysqli_fetch_array($get_comment_query)) 
		{
		$kommentar=$row['comment_comment'];

		echo $kommentar. '<br />';
		}

?>