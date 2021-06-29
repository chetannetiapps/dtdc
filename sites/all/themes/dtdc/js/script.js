jQuery(document).ready(function(jQuery) {
 // jQuery(".nav-tabs li a").click(function() {
 //     jQuery('html, body').animate({scrollTop: jQuery(".tab-content").offset().top}, 500);
 // });

 // Javascript to enable link to tab
 // var url = document.location.toString();
 // if (url.match('#')) {
 //     jQuery('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
 // }

 // Change hash for page-reload
 // jQuery('.nav-tabs a').on('shown.bs.tab', function (e) {
 //     window.location.hash = e.target.hash;
 // });

 jQuery(".region-footer #block-menu-menu-footer-menu ul").addClass("dt-foot-menu");
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-crossborder-Cross-Border-Management input").attr('id', 'checkcross');
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-intetech-Integrated-Technology-Platform input").attr('id', 'checkinteg');
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-warehousing-Warehousing-and-E-Fulfilment input").attr('id', 'checkwarehouse');
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-multi-vendor-Multi-Vendor-Management input").attr('id', 'checkvendor');
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-last-Mile-Last-Mile-Delivery input").attr('id', 'checklastmile');
 jQuery(".form-inline .col-md-4 .form-checkboxes .form-item-gettech-crossborder-1 input").removeClass('cross');
    jQuery("#edit-gettech-crossborder").removeClass('cross');
      jQuery("#edit-gettech-intetech").removeClass('checkinteg');
        jQuery("#edit-gettech-warehousing").removeClass('checkwarehouse');
          jQuery("#edit-gettech-multi-vendor").removeClass('checkvendor');
            jQuery("#edit-gettech-last-mile").removeClass('checklastmile');
 jQuery(".service_list .view-id-product_services .view-content .views-row-last .views-field .field-content .service_wrap").addClass("marg_auto");
 jQuery("#block-menu-menu-footer-menu ul").removeClass("menu");
 jQuery("#block-menu-menu-footer-menu ul").removeClass("nav");

 var dialogWrapper = jQuery('.dialog-wrapper');
 var close = jQuery(".alert .close");
 close.click(function(){
   dialogWrapper.addClass('close');
 })

});
