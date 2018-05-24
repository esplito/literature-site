<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kursbok</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700|Montserrat:400,700" rel="stylesheet">
	<link href="../assets/styles/styles.css" rel="stylesheet">
</head>
<body>
	<div class="modal">
		<div class="modal__inner">
			<h1 class="modal__title">Uppdatera profil</h1>
			<form class="form" id="update-profile">
				<div class="form__row">
					<label class="label label--default">Skola</label>
					<input type="text" placeholder="Skriv din skola här..." name="profile-school">
				</div>
				<div class="form__row form__row--btn">
					<label class="label label--centered">Profilbild</label>
					<button class="btn btn--default btn--smaller" type="file">Välj bild</button>
				</div>
				<div class="form__row form__row--btn">
					<button class="btn btn--default btn--green" type="submit">Spara ändringar</button>
				</div>
			</form>
		</div>
		<div class="modal__close">X</div>
	</div>
</body>
</html>