<?php
require('connect.php');

//$search = mysqli_real_escape_string($connection, $_POST['search']);
$search = "Business information systems";

//Hämta boktiteln som är samma som titeln man skriver in i sökfältet.
//$books = 'SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE  "'%" "$search" "%'"  ';

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE  \"'%\'$search\'%'\"   ";

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE \"'%\"'$search'\"%'\"";

//$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title LIKE '%\"('".'$search'."')\"%'";

$books = "SELECT book_title, book_releashed_year FROM book_table WHERE book_title = '$search'";

$result = $connection -> query($books);



	if($result === FALSE) { 
    echo 'Sökresultat för '. '"'.$search.'"';
    echo ' Gav inga träffar';
	}

	echo 'Sökresultat för '. '"'.$search.'"';

	while ($row = mysqli_fetch_array($result)) 
		{
			$book_title=$row['book_title'];	
			$book_releashed_year=$row['book_releashed_year'];

			echo $book_title. ", " . $book_releashed_year . '<br />';

		}


//Skicka användaren till den boksida som stämmer överrens med den titel den skrev in.

//$connection -> close();


?>
