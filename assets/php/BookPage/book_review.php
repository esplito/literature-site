<?php
require('connect.php');

$get_title = "Systems Analysis and Design";
//	//$get_title = $connection->real_escape_string($_POST['']);
$get_review_query = $connection-> query("SELECT review_comment, rating_by_user FROM review_table JOIN book_table WHERE book_title = ('".$get_title."')");

	if($get_review_query === FALSE) { 
    die(mysql_error());
	}
		

	while ($row = mysqli_fetch_array($get_review_query)) 
		{
			$review_comment=$row['review_comment'];	
			$rating_by_user=$row['rating_by_user'];
			echo "<div class='section__row section__row--align-l section__row--review'>
						<div class='rating rating--no-margin-t'>";

if($rating_by_user==5) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>";
}
elseif($rating_by_user==4) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($rating_by_user==3) {

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($rating_by_user==2){

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}
elseif($rating_by_user==1){

	echo "<span class='stars__star fa fa-star stars__star--checked'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>>";	
}
elseif($rating_by_user==0){

	echo "<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>
	<span class='stars__star fa fa-star'></span>";	
}

	
						echo "</div>
						<div class='book__reviews__comment'>
							<span class='label'>$review_comment</span>
						</div>
						<div class='book__reviews__user'>
							<span class='label label--smaller'>whatthealgo</span>
						</div>
					</div>
					<div class='section__divider'></div>";
			

		
		}

?>
