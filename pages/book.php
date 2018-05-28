<!DOCTYPE html>
<html lang="sv">
<head>
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
				<a href="#" class="section__back-link">Tillbaka till sökresultat</a>
			</div>
			<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="book">
						<img class="img__book--large" src="../assets/images/business-information-systems.jpg">
						<button class="btn btn--default btn--add-review" id="review-book">Ge omdöme</button>
						<button class="btn btn--default btn--add-review" id="discuss-book">Diskutera</button>
					</div>
				</div>
				<div class="section__col-8">
					<div class="section__row section__row--align-l">
						<h3 class="book__title">Business Information Systems</h3>
						<p class="book__author">av <span id="author">Paul Beynon-Davies</span></p>
						<div class="book__details">
							<div class="section__row section__row--s-margin">
								<div class="rating">
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<p class="book__details__info">
									<span class="label label--attribute">Upplaga: </span>
									<span>2:a</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">ISBN: </span>
									<span>9781137265807</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">Utgiven: </span>
									<span>2013</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section__row section__row--align-l">
				<h2>Omdömen</h2>
				<div class="section__col-12 book__reviews">
					<div class="section__row section__row--align-l section__row--review">
						<div class="rating rating--no-margin-t">
							<span class="stars__star fa fa-star stars__star--checked"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
						</div>
						<div class="book__reviews__comment">
							<span class="label">Vilken bok! NOT.</span>
						</div>
						<div class="book__reviews__user">
							<span class="label label--smaller">whatthealgo</span>
						</div>
					</div>
					<div class="section__divider"></div>
					<div class="section__row section__row--align-l section__row--review">
						<div class="rating rating--no-margin-t">
							<span class="stars__star fa fa-star stars__star--checked"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
						</div>
						<div class="book__reviews__comment">
							<span class="label">Inge vidare!</span>
						</div>
						<div class="book__reviews__user">
							<span class="label label--smaller">booksarelife</span>
						</div>
					</div>
					<div class="section__divider"></div>
					<div class="section__row section__row--align-l section__row--review section__row--last">
						<div class="rating rating--no-margin-t">
							<span class="stars__star fa fa-star stars__star--checked"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
							<span class="stars__star fa fa-star"></span>
						</div>
						<div class="book__reviews__comment">
							<span class="label">Oh no...</span>
						</div>
						<div class="book__reviews__user">
							<span class="label label--smaller">whatdidyousay</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal modal-review">
		<div class="modal__inner">
		<h1 class="modal__title">Lägg till omdöme</h1>
			<form class="form" method="POST" action="../assets/php/add_review.php" id="save-review">
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
