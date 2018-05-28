<?php
require('connect.php');

$get_highest = "SELECT ROUND(AVG(rating_by_user), 0) AS average, highest.book_ISBN, book_table.book_title, book_table.book_picture FROM review_table AS highest JOIN book_table ON book_table.book_ISBN = highest.book_ISBN GROUP BY highest.book_ISBN ORDER BY average DESC LIMIT 3";

		$result =$connection->query($get_highest);

		$books = array();
		while($row = $result->fetch_assoc()){
			$books[] = $row;
		}

		for ($i=0; $i < count($books); $i++) { 

			if($i == 1){
				echo '<div class="section__col-4 section__col--centered-content section__col--s-margin">';
			}

			if($i != 1){
				echo '<div class="section__col-4 section__col--centered-content">';
			}

			echo '<a href="./pages/book.php?b=' . $books[$i]['book_ISBN'] . '">';
			echo '<img src="./assets/images/'.$books[$i]['book_picture'].'" class="img__book--medium">';
			echo '</a>';
			echo '<div class="rating">';
			if($books[$i]['average']==5) {

				echo '<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>';
			}
			elseif($books[$i]['average']==4) {

				echo '<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star"></span>';	
			}
			elseif($books[$i]['average']==3) {

				echo '<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>';	
			}
			elseif($books[$i]['average']==2){

				echo '<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>';	
			}
			elseif($books[$i]['average']==1){

				echo '<span class="stars__star fa fa-star stars__star--checked"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>';	
			}
			elseif($books[$i]['average']==0){

				echo '<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star"></span>
				<span class="stars__star fa fa-star></span>
				<span class="stars__star fa fa-star"></span>';	
			}
			echo '<a  href="./pages/book.php?b=' . $books[$i]['book_ISBN'] . '" class="label label--smaller label--centered label--book-title">'.$books[$i]['book_title'].'</a>';
			echo '</div>';
			echo '</div>';

		}

		$connection->close();

?>