jQuery(document).ready(function($){
	$(".Services-link").hover(
		function() {
			$(this).parent(".Services-content").css({
				"opacity": ".2"
			});
		}, function() {
			$(this).parent(".Services-content").css({
				"opacity": "1"
			});
		}
	);
});
$(window).load(function(){
	var urlActual = window.location.pathname.split( '/' );
	var urlActualDividida = urlActual[urlActual.length-1];
	//alert(urlActualDividida);
	$("nav a, .Footer a").each(function() {
		if($(this).attr('href') == urlActualDividida) {
			$(this).addClass("active");
		}
	});
});