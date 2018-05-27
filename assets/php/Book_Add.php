<?php
require('connect.php');

$ISBN = $connection->real_escape_string($_POST['ISBN']);
$title = $connection->real_escape_string($_POST['title']);
$author = $connection->real_escape_string($_POST['author']);
$edition = $connection->real_escape_string($_POST['edition']);
$released_year = $connection->real_escape_string($_POST['released_year']);
$book_picture =  $connection->real_escape_string($_POST['book_picture']);
$addBook = $_POST['addBook'];

	if ($addBook) 
	{
		if($ISBN!=""&&$title!=""&&$author!=""&&$edition!=""&&$released_year!="") 
		{
			$insert = $connection -> query("INSERT INTO book_table (book_ISBN, book_title, book_author, book_edition, book_released_year, book_picture) VALUES ('".$ISBN."','".$title."','".$author."','".$edition."','".$released_year."',"LOAD_FILE($book_picture)")");
		}
		else 
		{
			echo "tomma fält! (skall täckas client side av js).";
		}
	}


?>