<?php
require('connect.php');
session_start();


$get_highest = "SELECT ROUND(AVG(rating_by_user), 0) AS average, highest.book_ISBN, book_table.book_title, book_table.book_picture FROM review_table AS highest JOIN book_table ON book_table.book_ISBN = highest.book_ISBN GROUP BY highest.book_ISBN ORDER BY average DESC LIMIT 3";

		$result =$connection->query($get_highest);

		$books = array();
		while($row = $result->fetch_assoc()){
			$books[] = $row;
		}

		for ($i=0; $i < count($books); $i++) { 

			if($i == 1){
				
			}

			echo " <br>";
			echo $books[$i]['average'];
			echo " <br>";
			echo $books[$i]['book_title'];
			echo " <br>";
			echo $books[$i]['book_picture'];
			echo " <br>";
			echo $books[$i]['book_ISBN'];
			echo " <br>";
		}


?>