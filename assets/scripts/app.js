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
	$.get('./overlays/' + modal_type +'.html', null, function(text){
		$('.modal__inner').html(function(){
			return text;
		});
	});
}

function removeModalContent(){
	$('.modal__inner').html(function(){
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

$('.modal__close').click(function(e) {
	e.preventDefault();
	$('.modal').toggleClass('modal--visible');
	removeModalContent();
});

$('#login-btn').click(function(e){
	e.preventDefault();
	addModal("login");
	$('.modal').toggleClass('modal--visible');
});