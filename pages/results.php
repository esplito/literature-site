<?php require('../assets/php/connect.php'); ?>
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
			<div class="section__row">
				<h1 class="section__title section__title--smaller section__title--left">Alla inlagda böcker!</h1>
			</div>
			<div class="section__row section__row--align-l">
				<h1 class="section__title section__title--smaller section__title--left section__title--f">Rating: </h1>
				<form action="" method="post">
					<div class="section__col-12 section__col-4--left">
						<div class="section--inline">
						  <input type="radio" name="rating" value="1">
						  <input type="radio" name="rating" value="2">
						  <input type="radio" name="rating" value="3">
						  <input type="radio" name="rating" value="4">
						  <input type="radio" name="rating" value="5">
						  <div>
						  	  <span class="label label--default label--radio">1</span>
							  <span class="label label--default label--radio">2</span>
							  <span class="label label--default label--radio">3</span>
							  <span class="label label--default label--radio">4</span>
							  <span class="label label--default label--radio">5</span>
						  </div>
					    </div>
					    <div class="section--inline section--small-margin-l">
						  <button type="submit" name="filter-btn" class="btn btn--default btn--smaller">Filtrera</button>
						</div>
					</div>
				</form>
			</div>

			<div class="section__row">
				<div class="section__col-m-6">
					<?php include '../assets/php/result-process.php'; ?> <!-- Visar alla böcker -->
				</div>
				<div class="section__col-m-6">
				</div>
			</div>
		</div>
	</div>
	<div class="modal">
		<div class="modal__inner">
		</div>
		<div class="modal__close">X</div>
		</div>
		<script src="../assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>
<?php //endif; ?>
