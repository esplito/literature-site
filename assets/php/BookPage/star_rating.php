<?php
require('connect.php');
//require('book_review.php');
$rating_by_user="3";
?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../assets/styles/styles.css" rel="stylesheet">
	<script src="../assets/scripts/jquery.js" type="text/javascript"></script>


<?php
if($rating_by_user>="5"):
?>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>

<?php
elseif($rating_by_user>="4"):
?>	
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star"></span>	
	
<?php
elseif($rating_by_user>="3"):
?>	
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
<?php
elseif($rating_by_user>="2"):
?>	
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
<?php
elseif($rating_by_user>="1"):
?>	
	<span class="stars__star fa fa-star stars__star--checked"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
<?php
else:
?>		
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>
	<span class="stars__star fa fa-star"></span>		
<?php
endif;
?>
<p>hej</p>
