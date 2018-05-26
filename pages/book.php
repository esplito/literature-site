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
			<div class="section__row section__row--align-l">
				<a href="#" class="section__back-link">Tillbaka till sökresultat</a>
			</div>
			<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="book">
						<img class="img__book--large" src="../assets/images/business-information-systems.jpg">
						<div class="">
							<button class="btn btn--default btn--add-review">Ge omdöme</button>
						</div>
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
</body>
</html>
