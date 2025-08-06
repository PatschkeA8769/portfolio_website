$(document).ready(function() {
	$(window).scroll(function() {
		if($(this).scrollTop()>40) {
			$("#btn").fadeIn();
		}
		else{$("#btn").fadeOut();}
	});
	$("#btn").click(function() {
		$("html, body").animate({scrollTop:0},800);
		return false;
	});
});
