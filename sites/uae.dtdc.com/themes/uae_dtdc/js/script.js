jQuery(document).ready(function() {
 jQuery(".nav-tabs li a").click(function() {
     jQuery('html, body').animate({scrollTop: jQuery(".tab-content").offset().top}, 500);
 });

 // Javascript to enable link to tab
 var url = document.location.toString();
 if (url.match('#')) {
     jQuery('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
 }

 // Change hash for page-reload
 jQuery('.nav-tabs a').on('shown.bs.tab', function (e) {
     window.location.hash = e.target.hash;
 });
});
