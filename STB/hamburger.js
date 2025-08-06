$(document).ready(function() {
	$("#c-menu").hide();
	$("#mobile-dropdown").hide();
	$("#hamburger").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#h-menu").hide();
			$("#c-menu").show();
		});
	});
	$("#h-button").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#h-menu").hide();
			$("#c-menu").show();
		});
	});
	$("#cross").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#c-menu").hide();
			$("#h-menu").show();
		});
	});
	$("#c-button").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#c-menu").hide();
			$("#h-menu").show();
		});
	});
});
