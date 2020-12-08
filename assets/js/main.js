$(document).ready(function() {
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1){  
			$('.page-title').addClass("sticky");
		}
		else{
			$('.page-title').removeClass("sticky");
		}
	});

	$('#navbar-btn').click(function() {
		$('#navbar-icon').toggle('1000');
		$("span", this).toggleClass("navbar-toggler-icon navbar-exit-icon");
	});

});