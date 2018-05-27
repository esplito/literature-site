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
	<header>
		<div class="header wrapper">
			<div class="header__logo-holder">
				<a class="header__logo" href="#">
					<h1 class="header__title">kursbok.se</h1>
				</a>
			</div>
			<div class="header__search">
				<form class="header__search__form">
					<input type="text" placeholder="Sök bland omdömen på massor av kursböcker!" class="header__search-box">
					<div class="header__search-btn">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
			<div class="header__user">
				<div class="header__login">
					<a href="#" id="login-btn">Logga in</a>
				</div>
				<!-- Profil-knapp när man är inloggad -->
				<!-- <div class="header__profile-btn">
					<button><i class="fa fa-user-circle"></i></button>
				</div> -->
			</div>
		</div>
	</header>
	<div class="container">
		<div class="wrapper__body">
			<h1 class="section__title section__title--bigger">Kursböcker med bäst omdöme!</h1>
			<div class="section__row">
				<div class="section__col-4 section__col--centered-content">
					<a href="#">
						<img src="./assets/images/systems-analysis.jpg" class="img__book--medium">
					</a>
					<div class="rating">
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star"></span>
					</div>
					<a href="#" class="label label--smaller label--centered label--book-title">Systems Analysis and Design</a>
				</div>
				<div class="section__col-4 section__col--centered-content section__col--s-margin">
					<a href="#">
						<img src="./assets/images/business-information-systems.jpg" class="img__book--medium">
					</a>
					<div class="rating">
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star"></span>
						<span class="stars__star fa fa-star"></span>
						<span class="stars__star fa fa-star"></span>
					</div>
					<a href="#" class="label label--smaller label--centered label--book-title">Business Information Systems</a>
				</div>
				<div class="section__col-4 section__col--centered-content">
					<a href="#">
						<img src="./assets/images/how-to-think-like-a-programmer.jpg" class="img__book--medium">
					</a>
					<div class="rating">
						<span class="stars__star fa fa-star stars__star--checked"></span>
						<span class="stars__star fa fa-star"></span>
						<span class="stars__star fa fa-star"></span>
						<span class="stars__star fa fa-star"></span>
						<span class="stars__star fa fa-star"></span>
					</div>
					<a href="#" class="label label--smaller label--centered label--book-title">How to THINK Like a Programmer</a>
				</div>
			</div>
			<div class="section__row">
				<div class="section__col-12">
					<a href="#" class="section__btn-link section__col--centered">
						<button class="btn btn--default btn--b-text">Visa alla</button>
					</a>
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
