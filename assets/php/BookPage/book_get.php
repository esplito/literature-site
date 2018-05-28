<?php
require('connect.php');
require('book_info.php');
require('book_review.php');
require('book_comment.php');
?>



<div class="section__row">
				<div class="section__col-4 section__col-4--left">
					<div class="book">
						<img class="img__book--large" src="../assets/images/business-information-systems.jpg">
						<button class="btn btn--default btn--add-review" id="review-book">Ge omdöme</button>
						<button class="btn btn--default btn--add-review" id="discuss-book">Diskutera</button>
					</div>
				</div>
				<div class="section__col-8">
					<div class="section__row section__row--align-l">
						<h3 class="book__title">
							<?php echo($title)?>
						</h3>
						<p class="book__author">av <span id="author">	
							<?php echo($author)?></span></p>
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
									<span>
											<?php echo($edition)?>
									</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">ISBN: </span>
									<span>
											<?php echo($ISBN)?>
									</span>
								</p>
								<p class="book__details__info">
									<span class="label label--attribute">Utgiven: </span>
									<span>
											<?php echo($released_year)?>
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>