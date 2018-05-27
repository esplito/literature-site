function setStars(current){
	var counter = 0;
	$.each($('.modal .stars__star'), function(element, value){
		if(counter < current){
			var tempStar = value.getAttribute('data-rating');
			$('.stars__star[data-rating="' + tempStar + '"]').toggleClass('stars__star--checked');
			counter++;
		}
	});
}

function resetStars(){
	$('.stars__star--checked').toggleClass('stars__star--checked');
}

function addModal(modal_type){
	if(window.location.href.match(/pages/g)){
		$.get('../overlays/' + modal_type +'.html', null, function(text){
			$('.modal:not(.modal-review) .modal__inner').html(function(){
				return text;
			});
		});
	}
	else{
		$.get('./overlays/' + modal_type +'.html', null, function(text){
			$('.modal:not(.modal-review) .modal__inner').html(function(){
				return text;
			});
		});
	}
}

function removeModalContent(){
	$('.modal:not(.modal-review) .modal__inner').html(function(){
			return "";
	});
}

var rating = 0;

$('.modal .stars__star').click(function(e) {
    e.preventDefault();
    var currentStar = this;
    rating = currentStar.getAttribute('data-rating');
    resetStars();
    setStars(currentStar.getAttribute('data-rating'));
    return false;
});

$('.modal__close:not(.modal__close-review)').click(function(e) {
	e.preventDefault();
	$('.modal:not(.modal-review)').toggleClass('modal--visible');
	removeModalContent();
});

$('.modal__close.modal__close-review').click(function(e){
	e.preventDefault();
	$('.modal-review').toggleClass('modal--visible');
});

$('.modal__close--board').click(function(e){
	e.preventDefault();
	$('.message-board').toggleClass('message-board--visible');
});

$('#login-btn').click(function(e){
	e.preventDefault();
	addModal("login");
	$('.modal:not(.modal-review)').toggleClass('modal--visible');
});

$('#review-book').click(function(e){
	e.preventDefault();
	$('.modal-review').toggleClass('modal--visible');
});

$('#discuss-book').click(function(e){
	e.preventDefault();
	$('.message-board').toggleClass('message-board--visible');
});

$('#add-book').click(function(e){
	e.preventDefault();
	addModal("add_book_db");
	$('.modal').toggleClass('modal--visible');
});

$('#update-profile').click(function(e){
	e.preventDefault();
	addModal("update_p");
	$('.modal').toggleClass('modal--visible');
});

$('.header__profile-btn button').click(function(e){
	e.preventDefault();
	if(window.location.href.match(/pages/g)){
		window.location.href = "profile.php";
	}
	else{
		window.location.href = "./pages/profile.php";
	}
});