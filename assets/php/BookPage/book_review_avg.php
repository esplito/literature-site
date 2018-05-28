<?php
require('connect.php');

$get_isbn = $_GET['b'];
//	//$get_title = $connection->real_escape_string($_POST['']);
$get_review_query = "SELECT ROUND(AVG(rating_by_user),0) AS avg_rate FROM review_table JOIN book_table WHERE review_table.book_ISBN = '$get_isbn'";
$result = $connection ->query($get_review_query);

	if($get_review_query === FALSE) { 
    die(mysql_error());
	}



	while ($row = mysqli_fetch_array($result)) 
		{
			$AVG=$row['avg_rate'];
			

if($AVG==5) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>";
}
elseif($AVG==4) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($AVG==3) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($AVG==2){

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($AVG==1){

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($AVG==0){

	echo "<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
			
	}

?>