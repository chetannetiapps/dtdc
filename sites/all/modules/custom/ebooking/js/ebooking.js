(function ($) {

  Drupal.behaviors.customerbooking = {
    attach: function (context, settings) {


      $("#edit-choose-country").change(function(){
          var type = $(this).val();
            if(type==1){
              window.open('https://www.dtdcaustralia.com.au/', '_blank');
            }if(type==2){
              window.open('http://ebookingca.dtdc.com', '_blank');
            }if(type==3){
              window.open('http://ebookingsg.dtdc.com', '_blank');
            }if(type==4){
              window.open('http://ebookinglk.dtdc.com', '_blank');
            }if(type==5){
              window.open('http://ebookinguae.dtdc.com', '_blank');
            }if(type==6){
              window.open('http://ebookinguk.dtdc.com', '_blank');
            }if(type==7){
              window.open('http://ebookingusa.dtdc.com','_blank');
            }if(type==8){
              window.open('https://dtdc.in/mydtdc/','_blank');
            }

      });

      $("#edit-locate-us-country").change(function(){
		      var type = $(this).val();
        	  if(type==1){
              window.open('http://dtdc.in/contact_overview.asp', '_blank');
            }if(type==2){
              window.open('http://www.dtdcaustralia.com.au/contact-us', '_blank');
            }if(type==3){
              window.open('http://bangladesh.dtdc.com/contact-us', '_blank');
            }if(type==4){
              window.open('http://canada.dtdc.com/contact-us', '_blank');
            }if(type==5){
              window.open('http://china.dtdc.com/contact-us', '_blank');
            }if(type==6){
              window.open('http://hongkong.dtdc.com/contact-us','_blank');
            }if(type==7){
              window.open('http://kenya.dtdc.com/contact-us','_blank');
            }if(type==8){
              window.open('http://malaysia.dtdc.com/contact-us','_blank');
            }if(type==9){
              window.open('http://nepal.dtdc.com/contact-us','_blank');
            }if(type==10){
              window.open('http://pakistan.dtdc.com/contact-us','_blank');
            }if(type==11){
              window.open('http://singapore.dtdc.com/contact-us','_blank');
            }if(type==12){
              window.open('http://srilanka.dtdc.com/contact-us','_blank');
            }if(type==13){
              window.open('http://uae.dtdc.com/Contact-us','_blank');
            }if(type==14){
              window.open('http://uk.dtdc.com/contact-us','_blank');
            }if(type==15){
              window.open('http://usa.dtdc.com/contact-us','_blank');
            }
      });

      $("#edit-avail-offer-country").change(function(){
          var type = $(this).val();
            if(type==1){
              window.open('http://ws01.ffdx.net/customer_v2/index.aspx?token=68-0A-A0-62-5A-38-17-75-20-6A-9D-59-F2-C5-F1-B4', '_blank');
            }if(type==2){
              window.open('http://ws01.ffdx.net/customer_v2/index.aspx?token=4E-A5-E8-78-40-EC-C6-D1-BA-CA-FB-F5-3E-33-02-6D', '_blank');
            }if(type==3){
              window.open('http://ws01.ffdx.net/customer_v2/index.aspx?token=F9-26-7D-87-AF-AF-69-EC-E9-4C-F5-57-75-AC-9B-B7', '_blank');
            }if(type==4){
              window.open('http://ws01.ffdx.net/customer_v2/index.aspx?token=48-45-3F-1F-BD-E3-D9-30-AA-4F-E5-ED-9A-E6-5C-DE', '_blank');
            }if(type==5){
              window.open('http://ws01.ffdx.net/customer_v2/index.aspx?token=1E-02-52-CB-98-AB-84-20-F7-19-F2-F1-C8-5B-DD-94','_blank');
            }

      });


    }
};

}(jQuery));
