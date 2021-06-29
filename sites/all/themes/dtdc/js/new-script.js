jQuery(document).ready(function() {

   //services page script
   function callint(){
     var intid;
     var totElem = 5;
     intid = setInterval(function(){
       for(var i=0; i<=totElem; i++){
         jQuery('.servicediv ul  > li:nth-child('+i+')').delay(i*400).fadeIn();
         if(i==5){
           clearInterval(intid);
           jQuery('.servicediv ul >li').delay(2500).fadeOut();
         }
       }
     },3000);
   }
   callint();
   setInterval(callint,6000);

   //Script for Mobile services page
   jQuery('.mob-servicediv ul  > li').each(function(i, element) {
       jQuery(element).delay(i * 200).fadeIn();
   });

     jQuery(".nav-tabs li a").click(function() {
         jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 800);
     });

     // Javascript to enable link to tab
     var url = document.location.toString();
     if (url.match('#')) {
         jQuery('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
         jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
     }

     // Change hash for page-reload
     jQuery('.nav-tabs a').on('shown.bs.tab', function (e) {
         window.location.hash = e.target.hash;
     });


      jQuery("#service_menu li:first-child a").click(function() {
        jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
       // jQuery('.tab-pane').removeClass("in active");
       // jQuery('#crossborder').addClass("in active");
       // jQuery('.nav-tabs li').removeClass("in active");
       // jQuery('.nav-tabs li:first-child').addClass("in active");

   });

   jQuery("#service_menu li:nth-child(2) a").click(function() {
       jQuery('.tab-pane').removeClass("in active");
       jQuery('#integrated').addClass("in active");
       jQuery('.nav-tabs li').removeClass("in active");
       jQuery('.nav-tabs li:nth-child(2)').addClass("in active");
       jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
   });

   jQuery("#service_menu li:nth-child(3) a").click(function() {
       jQuery('.tab-pane').removeClass("in active");
       jQuery('#multivendor').addClass("in active");
       jQuery('.nav-tabs li').removeClass("in active");
       jQuery('.nav-tabs li:nth-child(3)').addClass("in active");
       jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
   });

   jQuery("#service_menu li:nth-child(4) a").click(function() {
       jQuery('.tab-pane').removeClass("in active");
       jQuery('#warehousing').addClass("in active");
       jQuery('.nav-tabs li').removeClass("in active");
       jQuery('.nav-tabs li:nth-child(4)').addClass("in active");
       jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
   });

   jQuery("#service_menu li:nth-child(5) a").click(function() {
       jQuery('.tab-pane').removeClass("in active");
       jQuery('#lastmile').addClass("in active");
       jQuery('.nav-tabs li').removeClass("in active");
       jQuery('.nav-tabs li:nth-child(5)').addClass("in active");
       jQuery('html, body').animate({scrollTop: jQuery(".move_tab").offset().top}, 200);
   });


   // //Home page services script
   // function callints(){
   //         var intids;
   //         var totElement = 5;
   //         intids = setInterval(function(){
   //           for(var i=0; i<=totElement; i++){
   //            jQuery('.service_list > .service_wrap:nth-child('+i+')').delay(i*400).animate({"opacity":"1"});
   //            //jQuery('.service_list > .service_wrap:nth-child('+i+') .gray-bg').delay(i*400).css({"box-shadow":"0 0 10px #000"});
   //             if(i==5){
   //               clearInterval(intids);
   //               jQuery('.service_list > .service_wrap').delay(2500).animate({"opacity":"0.6"});
   //               //jQuery('.service_list > .service_wrap .gray-bg').delay(2500).css({"box-shadow":"none"});
   //             }
   //           }
   //         },3000);
   //       }
   //       callints();
   //       setInterval(callints,6000);

     var jQuerypost = jQuery(".service_list");
     setInterval(function(){
         jQuerypost.toggleClass("display");
     }, 4000);
     jQuery("#selectbox").change(function () {
           url = jQuery(this).val();
           window.open(url, '_blank');
       });

     jQuery("#get_touch").click(function() {
       jQuery(".quote_form").fadeIn(200);

       var screen_hgt = jQuery(window).height()-100;
       //jQuery(".quote_form").css({"height":screen_hgt});
       jQuery("body").css({"overflow": "hidden"});

       // jQuery('html, body').animate({
       //     scrollTop: jQuery(".quote_div").offset().top
       // }, 1000);
   });

   jQuery("#close_form").click(function() {
       // jQuery('html, body').animate({
       //     scrollTop: jQuery("#form_top").offset().top
       // }, 800);
       jQuery('.quote_form').fadeOut(600);
       jQuery("body").css({"overflow": "auto"});
   });

   //jQuery('.quote_div').fadeIn(800);
   //var screenwidth = jQuery(window).height();
   jQuery(window).scroll(function() {
     var y = jQuery(this).scrollTop();
     if (y > 500){
          jQuery('.quote_div').css({"position":"relative"});
       }
       else{
           jQuery('.quote_div').css({"position":"fixed"});
       }
     });

   //Cross Management
   jQuery('#checkcross').on('click',function(){
       if(this.checked){
           jQuery('.cross').each(function(){
               this.checked = true;
           });
       }else{
            jQuery('.cross').each(function(){
               this.checked = false;
           });
       }
   });
   jQuery('.cross').on('click',function(){
       if(jQuery('.cross:checked').length == jQuery('.cross').length){
           jQuery('#checkcross').prop('checked',true);
       }else{
           jQuery('#checkcross').prop('checked',false);
       }
   });

   //Integrated Technology
   jQuery('#checkinteg').on('click',function(){
       if(this.checked){
           jQuery('.checkinteg').each(function(){
               this.checked = true;
           });
       }else{
            jQuery('.checkinteg').each(function(){
               this.checked = false;
           });
       }
   });
   jQuery('.checkinteg').on('click',function(){
       if(jQuery('.checkinteg:checked').length == jQuery('.checkinteg').length){
           jQuery('#checkinteg').prop('checked',true);
       }else{
           jQuery('#checkinteg').prop('checked',false);
       }
   });

   //Warehousing and E-Fulfilment
   jQuery('#checkwarehouse').on('click',function(){
       if(this.checked){
           jQuery('.checkwarehouse').each(function(){
               this.checked = true;
           });
       }else{
            jQuery('.checkwarehouse').each(function(){
               this.checked = false;
           });
       }
   });
   jQuery('.checkwarehouse').on('click',function(){
       if(jQuery('.checkwarehouse:checked').length == jQuery('.checkwarehouse').length){
           jQuery('#checkwarehouse').prop('checked',true);
       }else{
           jQuery('#checkwarehouse').prop('checked',false);
       }
   });

   //Multi Vendor
   jQuery('#checkvendor').on('click',function(){
       if(this.checked){
           jQuery('.checkvendor').each(function(){
               this.checked = true;
           });
       }else{
            jQuery('.checkvendor').each(function(){
               this.checked = false;
           });
       }
   });
   jQuery('.checkvendor').on('click',function(){
       if(jQuery('.checkvendor:checked').length == jQuery('.checkvendor').length){
           jQuery('#checkvendor').prop('checked',true);
       }else{
           jQuery('#checkvendor').prop('checked',false);
       }
   });

   //Last Mile Delivery
   jQuery('#checklastmile').on('click',function(){
       if(this.checked){
           jQuery('.checklastmile').each(function(){
               this.checked = true;
           });
       }else{
            jQuery('.checklastmile').each(function(){
               this.checked = false;
           });
       }
   });
   jQuery('.checklastmile').on('click',function(){
       if(jQuery('.checklastmile:checked').length == jQuery('.checklastmile').length){
           jQuery('#checklastmile').prop('checked',true);
       }else{
           jQuery('#checklastmile').prop('checked',false);
       }
   });


    jQuery('#myCarousel').carousel({
       autoPlay: true,
       interval: 4000
     });

    jQuery('#js-carousel').carousel({
       interval: 14000
     });

     var showText = function(target, message, index, interval) {

       var message = jQuery(".item.active .mystring").text();
       //console.log(message);
       if (index < message.length) {
           jQuery(target).append(message[index++]);
           timer = setTimeout(function() {
              showText(target, message, index, interval);
           }, interval);
       }
     }, timer;

     showText(".active .demo-txt", jQuery('#js-carousel').find(".active .mystring").html(), 0, 35);

     jQuery('#js-carousel').on('slid.bs.carousel', function() {
       clearTimeout(timer);
       jQuery('.prevActive').removeClass('prevActive').html('');
       var str = jQuery(this).find(".active .mystring").html();
       jQuery('.active .demo-txt').addClass('prevActive').html("");
       showText(".active .demo-txt", str, 0, 35);
     });
});
