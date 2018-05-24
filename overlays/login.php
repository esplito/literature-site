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
			<h1 class="modal__title">Logga in på kursbok.se</h1>
			<form class="form" id="login">
				<div class="form__row">
					<label class="label label--default">Email</label>
					<input type="email" placeholder="Skriv din email här..." name="login-email">
				</div>
				<div class="form__row">
					<label class="label label--default">Lösenord</label>
					<input type="password" placeholder="Skriv ditt lösenord här..." name="login-password">
				</div>
				<div class="form__row form__row--btn">
					<button class="btn btn--default btn--green" type="submit">Logga in</button>
				</div>
			</form>
			<div class="modal__alt">
				<label class="label label--centered">Har du inget konto?</label>
				<button class="btn btn--default" type="submit">Skapa konto</button>
			</div>
		</div>
		<div class="modal__close">X</div>
	</div>
</body>
</html>
