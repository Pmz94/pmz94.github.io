/* navbar burger */
$(function() {
	$('.navbar-burger').click(function() {
		$('#navRight, .navbar-burger').toggleClass('is-active');
	});
	$('img').attr('draggable', 'false');
	$('img').bind('contextmenu', function() {
		return false;
	});
});