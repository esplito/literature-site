<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<title>Kursbok</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Montserrat:400,700" rel="stylesheet">
	<!-- Font Awesome Icon Library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../assets/styles/styles.css" rel="stylesheet">
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
			<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="user">
						<img class="user__image" src="../assets/images/profile_pic.png">
						<h3>whatthealgo</h3>
						<div class="user__info">
							<div class="user__row">
								<label class="label label--profile">Skola: </label>
								<span class="user__info__school">Uppsala universitet</span>
							</div>
							<div class="user__row">
								<label class="label label--profile">Antal omdömen: </label>
								<span class="user__info__review-number">3</span>
							</div>
						</div>
						<div class="user__row">
							<button class="btn btn--default btn--a-full-w">Lägg till bok</button>
						</div>
						<div class="user__row">
							<button class="btn btn--default btn--a-full-w">Uppdatera profil</button>
						</div>
					</div>
				</div>
				<div class="section__col-8 section__col--padding-l">
					<div class="section__row section__row--align-l">
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
					</div>
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
</body>
</html>