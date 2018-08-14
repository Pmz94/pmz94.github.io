/* navbar burger */
$(function() {
	$('.navbar-burger').on('click', function() {
		$('#navRight, .navbar-burger').toggleClass('is-active');
	});

	$('img').attr('draggable', false);
	$('img').bind('contextmenu', function() {
		return false;
	});
});