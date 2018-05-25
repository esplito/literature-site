<?php
require('connect.php');

$get_avg_and_ISBN = $connection -> query("SELECT AVG(rank), ISBN FROM rank GROUP BY ISBN ORDER BY `AVG(rank)` DESC LIMIT 3");
$get_ISBN = $connection -> query("SELECT ISBN FROM '$get_avg_and_ISBN'");
$get_title  = $connection -> query("SELECT title FROM book_table WHERE ISBN = '$get_ISBN'");
$get_picture = $connection -> query("");


?>