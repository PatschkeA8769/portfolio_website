$(document).ready(function() {
	$("header").toggleClass("open",false);
	$("#cross").hide();
	$("#mobile-dropdown").hide();
	$("#hamburger").click(function() {
		$("header").toggleClass("open",true);
		/*document.getElementById("open").style.paddingTop = "300px";*/
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#hamburger").hide();
			$("#cross").show();
		});
	});
	$("#cross").click(function() {
		$("#mobile-dropdown").slideToggle("slow", function() {
			$("#cross").hide();
			$("#hamburger").show();
			$("header").toggleClass("open",false);
			/*document.getElementById("open").style.paddingTop = "70px";*/
		});
	});
	/*$(window).resize(function() {
  	if ($(window).width() > 899) {
			document.getElementById("open").style.paddingTop = "70px";
			$("#mobile-dropdown").hide();
			$("#cross").hide();
			$("#hamburger").show();
		}
	});*/
});
