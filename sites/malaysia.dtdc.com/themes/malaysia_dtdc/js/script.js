 jQuery(document).ready(function($) {
	$(".nav-tabs li a").click(function() {
			$('html, body').animate({scrollTop: $(".tab-content").offset().top}, 500);
	});
	
	// Javascript to enable link to tab
	var url = document.location.toString();
	if (url.match('#')) {
	    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
	} 

	// Change hash for page-reload
	$('.nav-tabs a').on('shown.bs.tab', function (e) {
	    window.location.hash = e.target.hash;
	});

	$("#block-menu-menu-footer-menu ul").addClass("dt-foot-menu");
	$("#block-menu-menu-footer-menu ul").removeClass("menu");
	$("#block-menu-menu-footer-menu ul").removeClass("nav");

});