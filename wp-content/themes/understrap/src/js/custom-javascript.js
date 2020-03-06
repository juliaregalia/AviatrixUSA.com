(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		//when the page is scrolled, add a shadow class to the nav
		$(window).scroll(function() {     
			var scroll = $(window).scrollTop();
			if (scroll > 1) {
				$("#top-nav").addClass("active");
			}
			else {
				$("#top-nav").removeClass("active");
			}
		});
		
	});
	
	$(function () {
		
		'use strict';
		
		//when the page is scrolled, add a shadow class to the nav
		$(window).scroll(function() {     
			var scroll = $(window).scrollTop();
			if (scroll > 100) {
				$("#top-nav").addClass("shrink");
				$(".navbar-brand.custom-logo-link img").addClass("logo-shrink");
				$("#navbar").addClass("navbar-shrink");
			}
			else {
				$("#top-nav").removeClass("shrink");
				$(".navbar-brand.custom-logo-link img").removeClass("logo-shrink");
				$("#navbar").removeClass("navbar-shrink");
			}
		});
		
	});
	
	
	document.addEventListener('DOMContentLoaded', function() {
	var elems = document.querySelectorAll('.sidenav');
	var instances = M.Sidenav.init(elems, options);
	});

	// Or with jQuery

	$(document).ready(function(){
	$('.sidenav').sidenav();
	});
	



	
})(jQuery, this);
