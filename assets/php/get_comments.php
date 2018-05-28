<?php
require('connect.php');

	$get_isbn = $_POST['book_isbn'];
	
	$get_comments = "SELECT comment_comment, user_table.user_uname FROM comment_table JOIN user_table ON user_table.user_id = comment_table.user_id WHERE comment_table.book_ISBN = $get_isbn";
	$get_comment_query = $connection -> query($get_comments);


	if($get_comment_query === FALSE) { 
    
	}

	$comments = array();
	while ($row = $get_comment_query->fetch_assoc())
	{
		$comments[] = $row;
	}
	echo json_encode($comments);


	$connection->close();

?>