/* navbar burger */
$(function() {
	$('.navbar-burger').on('click', function() {
		$('#navRight, .navbar-burger').toggleClass('is-active');
	});

	$('img').attr('draggable', false).bind('contextmenu', () => false);

	$('footer.footer > label.subtitle').html(`&copy;${new Date().getFullYear()} Pedro Muñoz`);
});