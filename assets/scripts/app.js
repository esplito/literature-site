function setStars(current){
	var counter = 0;
	$.each($('.stars__star'), function(element, value){
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

var rating = 0;

$('.stars__star').click(function(e) {
    e.preventDefault();
    var currentStar = this;
    rating = currentStar.getAttribute('data-rating');
    resetStars();
    setStars(currentStar.getAttribute('data-rating'));
    return false;
});