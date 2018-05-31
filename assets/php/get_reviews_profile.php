<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['userID'])){

	require('connect.php');
	$get_reviews_profile = "";
	$u_id =$_SESSION['userID'];
	if(isset($_POST['rating'])){
		$_SESSION['rating'] = $_POST['rating'];
		echo $_SESSION['rating'];
		header('Location: ../../pages/profile.php');
	}
	elseif(isset($_SESSION['rating'])){
		$rating = $_SESSION['rating'];
		$get_reviews_profile = "SELECT DISTINCT book_table.book_title, review_table.rating_by_user FROM book_table JOIN review_table ON book_table.book_ISBN = review_table.book_ISBN JOIN user_table ON review_table.user_id = '$u_id' WHERE review_table.rating_by_user = '$rating'";
		unset($_SESSION['rating']); 
	}
	else{
		$get_reviews_profile = "SELECT DISTINCT book_table.book_title, review_table.rating_by_user FROM book_table JOIN review_table ON book_table.book_ISBN = review_table.book_ISBN JOIN user_table ON review_table.user_id = '$u_id'";
	}

	

	$result = $connection ->query($get_reviews_profile);

	while ($row = mysqli_fetch_array($result))
		{
			$book_title=$row['book_title'];
			$rating_by_user=$row['rating_by_user'];

			echo '<div class="section__row section__row--s-margin">
								<div class="review__books__title label--v-centered label--float-l">';
			echo '<span class="label--smaller">'.$book_title.'</span>';
			echo '</div>
						<div class="rating rating--inline">';

			if($rating_by_user==5) {

				echo "<span class='stars__star fa fa-star stars__star--checked'></span>
				<span class='stars__star fa fa-star stars__star--checked'></span>
				<span class='stars__star fa fa-star stars__star--checked'></span>
				<span class='stars__star fa fa-star stars__star--checked'></span>
				<span class='stars__star fa fa-star stars__star--checked'></span>";
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
				<span class='stars__star fa fa-star'></span>";
			}
			elseif($rating_by_user==0){

				echo "<span class='stars__star fa fa-star'></span>
				<span class='stars__star fa fa-star'></span>
				<span class='stars__star fa fa-star'></span>
				<span class='stars__star fa fa-star'></span>
				<span class='stars__star fa fa-star'></span>";
			}

			echo '</div></div>';
	}
}
else{
	echo '<div class="section__row section__row--s-margin">
								<div class="review__books__title label--v-centered label--float-l">';
	echo '<span class="label--smaller">Du har inte lagt några omdömen än.</span>';
	echo '</div></div>';
}

?>
