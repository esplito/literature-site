<?php
require('connect.php');

$search = mysqli_real_escape_string($connection, $_POST['search']);

//Hämta boktiteln som är samma som titeln man skriver in i sökfältet.
$books = "SELECT book_title FROM book_table WHERE book_title LIKE '%'$search'%'";
$result = mysqli_query($connection, $books);


//Skicka användaren till den boksida som stämmer överrens med den titel den skrev in.

$connection -> close();


?>
