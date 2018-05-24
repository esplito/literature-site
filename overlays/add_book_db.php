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
			<h1 class="modal__title">Lägg till bok på kursbok.se</h1>
			<form class="form" id="add_book_to_db">
        <div class="form__row">
					<label class="label label--default">ISBN</label>
					<input type="text" placeholder="Skriv bokens ISBN här..." name="add_ISBN">
				</div>
				<div class="form__row">
					<label class="label label--default">Titel</label>
					<input type="text" placeholder="Skriv titeln på boken här..." name="add_title">
				</div>
        <div class="form__row">
          <label class="label label--default">Författare</label>
          <input type="text" placeholder="Skriv bokens författare här..." name="add_author">
        </div>
        <div class="form__row">
          <label class="label label--default">Upplaga</label>
          <input type="text" placeholder="Skriv bokens upplaga här..." name="add_edition">
        </div>
        <div class="form__row">
          <label class="label label--default">Utgivningsår</label>
          <input type="text" placeholder="Skriv bokens utgivningsår här..." name="add_published_year">
        </div>
        <div class="form__row form__row--btn">
          <button class="btn btn--smaller btn--green" type="submit">Välj bild</button>
        </div>
				<div class="form__row form__row--btn">
					<button class="btn btn--default btn--green" type="submit">Spara bok</button>
				</div>
			</form>
		</div>
		<div class="modal__close">X</div>
	</div>
</body>
</html>
