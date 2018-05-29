<?php
require('../assets/php/BookPage/book_info.php');

?>
	<meta charset="UTF-8">
	<title>Kursbok</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Montserrat:400,700" rel="stylesheet">
	<!-- Font Awesome Icon Library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../assets/styles/styles.css" rel="stylesheet">
	<script src="../assets/scripts/jquery.js" type="text/javascript"></script>


</head>
<body>
<?php include '../include/header.php'; ?>
	<div class="container">
		<div class="wrapper__body">
			<div class="section__row section__row--align-l">
				<!-- <a href="#" class="section__back-link">Tillbaka till sökresultat</a> -->
			</div>
			<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="book">
						<img class="img__book--large" src="../uploads/<?php echo($picture)?>">
						<?php
					      if(isset($_SESSION['user'])):
					    ?>
						<button class="btn btn--default btn--add-review" id="review-book">Ge omdöme</button>
						<button class="btn btn--default btn--add-review" id="discuss-book">Diskutera</button>
						<?php endif;
   						?>
					</div>
				</div>
				<div class="section__col-8">
					<div class="section__row section__row--align-l">
						<h3 class="book__title">
							<?php echo($title)?>
						</h3>
						<p class="book__author">av <span id="author">	
							<?php echo($author)?></span></p>
						<div class="book__details">
							<div class="section__row section__row--s-margin">
								<div class="rating">
									<?php include "../assets/php/BookPage/book_review_avg.php" ?>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<p class="book__details__info">
									<span class="label label--attribute">Upplaga: </span>
									<span>
											<?php echo($edition)?>
									</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">ISBN: </span>
									<span>
											<?php echo($ISBN)?>
									</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">Utgiven: </span>
									<span>
											<?php echo($released_year)?>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section__row section__row--align-l">
				<h2>Omdömen</h2>
				<div class="section__col-12 book__reviews">
					<?php
					include "../assets/php/BookPage/book_review.php"
					?>			
				</div>
			</div>
		</div>
	</div>
	<?php
      if(isset($_SESSION['user'])):
    ?>
	<div class="modal modal-review">
		<div class="modal__inner">
		<h1 class="modal__title">Lägg till omdöme</h1>
			<form class="form" method="POST" action="../assets/php/add_review.php" id="save-review">
				<input type="hidden" name="b-isbn" value="<?php echo $ISBN ?>" />
				<input type="hidden" name="review-rating" value="0" />
				<div class="form__row">
					<div class="stars">
						<span class="stars__star stars__star--bigger fa fa-star" data-rating="1"></span>
						<span class="stars__star stars__star--bigger fa fa-star" data-rating="2"></span>
						<span class="stars__star stars__star--bigger fa fa-star" data-rating="3"></span>
						<span class="stars__star stars__star--bigger fa fa-star" data-rating="4"></span>
						<span class="stars__star stars__star--bigger fa fa-star" data-rating="5"></span>
					</div>
				</div>
				<div class="form__row">
					<label class="label label--default">Kommentar</label>
					<input type="text" placeholder="Skriv en kort kommentar om boken här..." name="review-comment">
				</div>
				<div class="form__row form__row--btn">
					<button class="btn btn--default btn--green" name="submit" type="submit">Spara omdöme</button>
				</div>
			</form>
		</div>
		<div class="modal__close modal__close-review">X</div>
	</div>
	<?php endif;
   	?>
	<!-- För att logga in -->
	<div class="modal">
		<div class="modal__inner">
		</div>
		<div class="modal__close">X</div>
	</div>
	<?php include '../overlays/message_board.php' ?>
	<script src="../assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>
