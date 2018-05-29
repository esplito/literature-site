<?php

require('connect.php');

$user_id = $_SESSION['userID'];

$get_reviews = "SELECT COUNT(review_table.review_id) AS n_reviews FROM review_table WHERE review_table.user_id = $user_id";
$result = $connection -> query($get_reviews);

if ($row = $result->fetch_assoc()){
	echo $row['n_reviews'];
}


$connection->close();

?>