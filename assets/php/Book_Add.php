<?php
require('connect.php');

$ISBN = $connection->real_escape_string($_POST['ISBN']);
$title = $connection->real_escape_string($_POST['title']);
$author = $connection->real_escape_string($_POST['author']);
$edition = $connection->real_escape_string($_POST['edition']);
$released_year = $connection->real_escape_string($_POST['released_year']);
//$book_picture = 
$addBook = $_POST['addBook'];

	if ($addBook) 
	{
		if($ISBN!=""&&$title!=""&&$author!=""&&$edition!=""&&$released_year!="") 
		{
			$insert = $connection -> query("INSERT INTO Book_Table (ISBN, title, author, edition, released_year) VALUES ('".$ISBN."','".$title."','".$author."','".$edition."','".$released_year."')");
		}
		else 
		{
			echo "tomma fält! (skall täckas client side av js).";
		}
	}


?>