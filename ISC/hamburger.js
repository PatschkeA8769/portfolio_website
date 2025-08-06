$(document).ready(function() {
	$("#cross").hide();
	$("#mobile-dropdown").hide();
	$("#hamburger").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#hamburger").hide();
			$("#cross").show();
		});
	});
	$("#cross").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#cross").hide();
			$("#hamburger").show();
		});
	});
});
