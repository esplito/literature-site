<div class="message-board">
	<div class="message-board__header">
		<h1 class="message-board__title"><?php echo($title)?></h1>
	</div>
	<div class="message-board__feed-header">
		<label class="label label--default">Kommentarer</label>
	</div>
	<div class="message-board__feed">
		
	</div>
	<div class="message-board__footer">
		<form class="form" id="message_submit">
	        <div class="form__row form__row--message">
	          <label class="label label--default">Meddelande</label>
	          <textarea  type="text" placeholder="Skriv ditt meddelande här..." name="message" maxlength="100"></textarea>
	          <input type="hidden" name="m-b-isbn" value="<?php echo $ISBN ?>" />
	          <button class="btn btn--smaller btn--white" name="submit" type="submit" id="submit-comment">Skicka</button>
	        </div>
		</form>
	</div>
	<div class="modal__close--board">X</div>
</div>
