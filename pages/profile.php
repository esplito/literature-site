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
	<!-- Script för att länka till profile om man trycker på profile-btn finns längr ner ovanför bodyn-tagen. -->
</head>
<body>
<?php
include '../include/header.php';
?>
	<div class="container">
		<div class="wrapper__body">
			<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="user">
						<img class="user__image" src="../assets/images/profile_pic.png">
						<h3><?php echo $_SESSION["user"];?></h3>
						<div class="user__info">
							<div class="user__row">
								<label class="label label--attribute">Skola: </label>
								<span class="user__info__school"><?php echo $_SESSION["user_school"]; ?></span>
							</div>
							<div class="user__row">
								<label class="label label--attribute">Antal omdömen: </label>
								<span class="user__info__review-number">3</span>
							</div>
						</div>
						<div class="user__row">
							<button class="btn btn--default btn--a-full-w" id="add-book">Lägg till bok</button>
						</div>
						<div class="user__row">
							<button class="btn btn--default btn--a-full-w" id="update-profile">Uppdatera profil</button>
						</div>
						<!-- Knapp som ska länka till 'remove_acc.php'
						<div class="user__row">
							<button class="btn btn--default btn--a-full-w" id="admin-accounts" href="#">Administrera användare</button>
						</div> -->
					</div>
				</div>
				<div class="section__col-8 section__col--padding-l">
					<!--<div class="section__row section__row--align-l">
						<h2>Mina böcker</h2>
						<div id="my-books">
							<div class="section__row section__row--s-margin">
								<img class="book-icon" src="../assets/images/book.png">
								<div class="label--v-centered">
									<span class="label--smaller">Business Information Systems</span>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<img class="book-icon" src="../assets/images/book.png">
								<div class="label--v-centered">
									<span class="label--smaller">How to THINK Like a Programmer</span>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<img class="book-icon" src="../assets/images/book.png">
								<div class="label--v-centered">
									<span class="label--smaller">Systems Analysis and Design</span>
								</div>
							</div>
						</div>
					</div>-->
					<div class="section__row section__row--align-l">
						<h2>Mina omdömen</h2>
						<div id="my-reviews">
							<div class="section__row section__row--s-margin">
								<div class="review__books__title label--v-centered label--float-l">
									<span class="label--smaller">Business Information Systems</span>
								</div>
								<div class="rating rating--inline">
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<div class="review__books__title label--v-centered label--float-l">
									<span class="label--smaller">How to THINK Like a Programmer</span>
								</div>
								<div class="rating rating--inline">
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
									<span class="stars__star fa fa-star"></span>
								</div>
							</div>
							<div class="section__row section__row--s-margin">
								<div class="review__books__title label--v-centered label--float-l">
									<span class="label--smaller">Systems Analysis and Design</span>
								</div>
								<div class="rating rating--inline">
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star stars__star--checked"></span>
									<span class="stars__star fa fa-star"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal">
		<div class="modal__inner">
		<!-- modal content here -->
		</div>
		<div class="modal__close">X</div>
	</div>
	<script src="../assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>
