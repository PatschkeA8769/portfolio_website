$(document).ready(function() {
	$(window).scroll(function() {
    if ($(this).scrollTop() < 40 || $(this).scrollTop() > $(document).height() - $(window).height() - 40) {
			$("#btn").fadeOut();
		} else {
			$("#btn").fadeIn();
		}
});
	$("#btn").click(function() {
		$("html, body").animate({scrollTop:0},800);
		return false;
	});
});
