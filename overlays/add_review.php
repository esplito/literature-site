<!DOCTYPE html>
<html lang="en">
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
	<div class="modal">
		<div class="modal__inner">
			<h1 class="modal__title">Lägg till omdöme</h1>
			<form class="form" id="update-profile">
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
					<input type="text" placeholder="Skriv en kort kommentar om boken här..." name="review-title">
				</div>
				<div class="form__row form__row--btn">
					<button class="btn btn--default btn--green" type="submit">Spara omdöme</button>
				</div>
			</form>
		</div>
		<div class="modal__close">X</div>
	</div>
	<script src="../assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>