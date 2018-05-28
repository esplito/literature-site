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
				<h1 class="section__title section__title--smaller section__title--left">Sökresultat för "System"</h1>
			</div>

			<div class="section__row">
				<!-- Om vi kommer hit via "Visa alla", hämta alla böcker från databasen och visa dem i samma stil -->
				<!-- som vi visar sökresultaten -->

				<!--
			< ? php
					if(isset($_POST['show__all-btn'])):
					$showbooks = "SELECT book_title, book_releashed_year, book_picture FROM book_table";
					$allbooks = $connection->query($showbooks);
					while($rows = $allbooks->fetch_assoc()){
					echo "<div class='section__book'>";
					echo $rows['book_title']."<br>";
					echo $rows['book_releashed_year']."<br>";
					echo $rows['book_picture']."<br><br>";
					echo "</div>";
					}
				?>


				< ? php
			else:
				?>
				-->
				<div class="section__col-m-6">
					<div class="section__book">
						<div class="img__book">
							<a href="#">
								<img src="../assets/images/systems-analysis.jpg" class="img__book--small">
							</a>
						</div>
						<div class="section__bookinfo">
							<h1 class="label--smaller">Systems Analysis and Design</h1>
							<p class="label--tiny">2013</p>
							<div class="rating__small">
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star"></span>
							</div>
						</div>
					</div>

					<div class="section__book">
						<div class="img__book">
							<a href="#">
								<img src="../assets/images/business-information-systems.jpg" class="img__book--small">
							</a>
						</div>
						<div class="section__bookinfo">
							<h1 class="label--smaller">Business Information Systems</h1>
							<p class="label--tiny">2013</p>
							<div class="rating__small">
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star "></span>
								<span class="stars__star fa fa-star "></span>
								<span class="stars__star fa fa-star"></span>
							</div>
						</div>
					</div>

					<div class="section__book">
						<div class="img__book">
							<a href="#">
								<img src="../assets/images/how-to-think-like-a-programmer.jpg" class="img__book--small">
							</a>
						</div>
						<div class="section__bookinfo">
							<h1 class="label--smaller">How to THINK like a programmer</h1>
							<p class="label--tiny">2013</p>
							<div class="rating__small">
								<span class="stars__star fa fa-star stars__star--checked"></span>
								<span class="stars__star fa fa-star"></span>
								<span class="stars__star fa fa-star"></span>
								<span class="stars__star fa fa-star"></span>
								<span class="stars__star fa fa-star"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="section__col-m-6">




				</div>
		</div>
	</div>
		<script src="../assets/scripts/app.js" type="text/javascript"></script>
</body>
</html>
<?php //endif; ?>
