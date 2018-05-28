<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<title>Kursbok</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Montserrat:400,700" rel="stylesheet">
	<!-- Font Awesome Icon Library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="./assets/styles/styles.css" rel="stylesheet">
	<script src="./assets/scripts/jquery.js" type="text/javascript"></script>
</head>
<body>
<?php include './include/header.php'; ?>
	<div class="container">
		<div class="wrapper__body">
			<h1 class="section__title section__title--bigger">Kursböcker med bäst omdöme!</h1>
			<div class="section__row">
				<?php include './assets/php/get-highest-rated.php' ?>
			</div>
			<div class="section__row">
				<div class="section__col-12">
					<form action="./pages/results.php" method="post">
					<a href="./pages/results.php" class="section__btn-link section__col--centered">
						<button type="submit" name="show__all-btn" class="btn btn--default btn--b-text">Visa alla</button>
					</a>
					</form>
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
	<script src="./assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>
