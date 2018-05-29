<?php
require('connect.php');

$search = mysqli_real_escape_string($connection, $_POST['search']);
//$search = "Business information systems";


//Hämta boktiteln som är samma som titeln man skriver in i sökfältet.
//$books = 'SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE  "'%" "$search" "%'"  ';

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE  \"'%\'$search\'%'\"   ";

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE \"'%\"'$search'\"%'\"";

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE '%\"('".'$search'."')\"%'";

$books = "SELECT book_title, book_releashed_year, book_ISBN FROM book_table WHERE book_title = '$search'";
$result = mysqli_query($connection,$books);

if ($row = $result->fetch_assoc()){
			$book_title=$row['book_title'];
			$book_releashed_year=$row['book_releashed_year'];
			$book_isbn = $row['book_ISBN'];
			header("Location: ../../pages/book.php?b=".$book_isbn);

	}






//Skicka användaren till den boksida som stämmer överrens med den titel den skrev in.

$connection -> close();


?>
