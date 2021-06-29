<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
 render($page['content']['metatags']);
 //drupal_add_js(drupal_get_path('theme', 'singapore_dtdc') . '/js/bootstrap.js');
  drupal_add_js(drupal_get_path('theme', 'singapore_dtdc') . '/js/formValidation.min.js');
  drupal_add_js(drupal_get_path('theme', 'singapore_dtdc') . '/js/bootstrapv.min.js');
  drupal_add_js(drupal_get_path('theme', 'singapore_dtdc') . '/js/jquery.validate.js');

?>
<!-- <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script> -->

<!--Header block-->
<div class="dd-home">
	<header>
		<div class="container-fluid">
			<div class="row ">
	 		 <div class="container">
	 			 <div class="col-lg-12 col-md-12">
	 				 <div class="row">
						 <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header">
			            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			        <!-- Collection of nav links, forms, and other content for toggling -->
			        <div id="navbarCollapse" class="collapse navbar-collapse">
					<div class="row top_row">
			            <div class="dropdown">
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
										<ul class="dropdown-menu">
						<li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
							<li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
			                <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
			                <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
			                <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
			                <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
<!-- <li class="de"><a href="http://de.dtdc.com/"><span>&nbsp;</span>Germany</a></li> -->
			                <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li> 
 <li class="isrl"><a href="https://dtdc.co.il/"><span>&nbsp;</span>Israel</a></li>
			                <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
			                <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>

			                <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
                      <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
                      <!-- <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
			                <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span>Singapore</a></li>
			                <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span>Sri Lanka</a></li>
			                <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span>United Arab Emirates</a></li>
			                <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span>United Kingdom</a></li>
			                <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span>United States</a></li>
			              </ul>
			            </div>
                   <?php  $block = module_invoke('search', 'block_view', 'form');
                          print render($block); ?>

			          </div>
								<!---menu block --------->

 									<?php if (!empty($page['navigation'])): ?>
 										<?php print render($page['navigation']); ?>
 									<?php endif; ?>

 								 <!---menu block ---->
			        </div>
			    </nav>
					<a class="logo" href="/" title="Home"><img src="sites/uk.dtdc.com/themes/uk_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
</header>
</div>
<!-- Header block -->
<div class="dd-home">
	<div class="container-fluid padd_zero">
		<?php if (!empty($page['header'])): ?>

		    <?php print render($page['header']); ?>
		<?php endif; ?>
       <div class="track1">
	      <div class="header-yellow">
	        <p>Track your shipment</p>
	      </div>
		  <?php $block = module_invoke('singapore_tracking', 'block_view', 'singapore_tracking_block');
			print render($block); ?>
      </div>
      <div class="track2">
	     <div class="header-blue"><p>E-booking</p></div>
		    <?php $block = module_invoke('custom_tabs_block', 'block_view', 'ebooking_form_block');
				   print render($block); ?>
	  </div>
    </div>

<!-- Avail offer block -->
<?php print render($page['promo_offer']);?>

<!-- Display block of banner-->
<div class="container-fluid highlighted-fluid-div">
  <div class="row">
     <div class="container">
<?php
    print render($page['sidebar_first']);
    ?>
        </div>
  </div>
</div>        
<!-- Display block of banner-->


<!-- Product services block -->
<div class="container-fluid">
	<div class="row">
		 <div class="container">
		 		     <?php  $block = module_invoke('views', 'block_view', 'product_services-block_1');
		 				        print render($block['content']); ?>
		</div>
	</div>
</div>
<div class="clear"></div>
<!-- Product services block ------->


<div class="clear"></div>
</div>
<!-- Delivery partner block ------->

<!-- footer block ------->
  <!--$block = module_invoke('block','block_view','2');--->
		 <?php print render($page['footer']);?>
<!-- footer block---->
<script type="text/javascript">
 jQuery(document).ready(function() {
  if (jQuery('#popup-message').length > 0) {
  jQuery.colorbox({ href: '#popup-message', width:"61%", inline: true, scrolling: false, opacity:.8 });
  }
 });
</script>
<!--- Start custom popup -->
 <div style="display: none;">
  <div id="popup-message">
    <?php
  //  $block = module_invoke('block', 'block_view', '26');
  // print render($block['content']);
   echo views_embed_view('popup_slider', 'block'); //slider banner images
  //   print render($page['popup']); 
    
   ?>
  </div>
</div> 

<script>
jQuery(document).ready(function($) {

 $('#zipcodeform')
        .formValidation({
            framework: 'bootstrap',
           // err: {
           //  container: 'tooltip'
           //  },
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                postalCode: {
                    validators: {
                        zipCode: {
                            country: 'countrySelectBox',
                            message: 'The value is not valid %s postal code'
                        },
                        notEmpty: {
                            message: 'Origin postcode required.'
                       }
                    }
                },
                postalCode1: {
                    validators: {
                        zipCode: {
                            country: 'countrySelectBox1',
                            message: 'The value is not valid %s postal code'
                        },
                        notEmpty: {
                            message: 'Destination postcode required.'
                       }
                    }
                }
                //  ebooking_weight: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Please enter the weight value'
                //        }
                //     }
                // },
                //  countrySelectBox1: {
                //     validators: {
                //         notEmpty: {
                //             message: 'Please enter the weight value'
                //        }
                //     }
                // }
            }
         
        });
       
 //Default condition
      $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
      $('.has-error .glyphicon-remove').on('click', function(e) {
  alert(hi);

});
            // $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', true);
        // Revalidate postal code when changing the country
       $('#edit-countryselectbox').on('change', function(e) {
        $('#edit-postalcode').val('');
         $('#edit-postalcode1').val('');
        $('#edit-ebooking-weight').val('');
        $('#edit-countryselectbox1').val('- select one -');
         $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
        $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', false);
        
          //$('#edit-postalcode').parent('div').find('.glyphicon-ok').hide();
        var item = jQuery('#edit-countryselectbox :selected').val();
        if(item == 'US' || item == 'CA' || item == 'AE' || item == 'GB' || item == 'SG') {
             var sentData = JSON.stringify({
                    Item : item,
                })
              $.ajax({
                type: 'POST',
                url: '/custom/ajax',
                dataType: 'json',
                data: sentData,
                success:function(response) {
                 var weight= response.weight;
                   //jQuery('#edit-ebooking-weightunit option').val(weight);
                 jQuery('#edit-ebooking-weightunit option').text(weight);
                  //jQuery('#edit-ebooking-weightunit').valu('href',response.examUrl);

                 //alert();
                  // Variable data contains the data you get from the action method
                  }
               });
        }
         $("#edit-postalcode").keydown(function (e) {
           var isEmpty= $('#edit-postalcode').val().length;

          //alert(isEmpty);
            if(isEmpty == '-1'){
              $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
              //$('#edit-postalcode').parent('div').find('.glyphicon-ok').hide();
            }
            else {
              if(item == 'US' || item == 'BG' || item == 'BR' || item == 'CA' || item == 'CH' || item == 'CZ' || item == 'DE' || item == 'DK' || item == 'ES' || item == 'FR' || item =='GB' || item == 'IN' || item == 'IE' || item == 'IT' || item == 'MA' || item == 'PT' || item == 'RO' || item == 'RU' || item == 'SE' || item == 'SG' || item == 'SK' || item == 'AT' || item == 'DZ' || item == "AD" || item == 'AS' || item == 'AR' || item == 'AM' || item == "AU" || item == "AT" || item == "AZ" || item == "BH" || item == "BD" || item == "BY" || item == "BE" || item == "BA" || item == "BN" || item == "CN" || item == "CO" || item == "CU" || item == "CY" || item == "EC" || item == "EE" || item == "FO" || item == "FI" || item == "GF" || item == "GE" || item == "GR" || item == "GL" || item == "GP" || item == "GU" || item == "GG" || item == "HU" || item == "IS" || item == "ID" || item == "IR" || item == "IL" || item == "IT" || item == "JP" || item == "JE" || item == "KZ" || item == "KR" || item == "KW" || item == "KG" || item == "LV" || item == "LI" || item == "LT" || item == "LU" || item == "MK" || item == "MG" || item == "MY" || item == "MV" || item == "MT" || item == "MH" || item == "MQ" || item == "YT" || item == "MX" || item == "FM" || item == "MD" || item == "MC" || item == "MN" || item == "ME" || item == "MA" || item == "NP" || item == "NL" || item == "NC" || item == "NZ" || item == "MP" || item == "NO" || item == "PK" || item == "PW" || item == "PG" || item == "PH" || item == "PL" || item == "PT" || item == "PR" || item == "RE" || item == "SM" || item == "RS" || item == "SI" || item == "ZA" || item == "ES" || item == "SZ" || item == "TW" || item == "TJ" || item == "TH" || item == "TN" || item == "TR" || item == "UA" || item == "UZ" || item == "VG") {
              $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
              $('#zipcodeform').formValidation('revalidateField', 'postalCode');
            }
              else {
                $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
              }
            }
      });
 

   });


 $('#edit-countryselectbox1').on('change', function(e) {
  $('#edit-postalcode1').val('');
   var item = jQuery('#edit-countryselectbox1 :selected').val();
   $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', false);
   $("#edit-postalcode1").keydown(function (e) {
  var isEmptys= $('#edit-postalcode1').val();
  if(isEmptys == '-1'){
 $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', false);
  } 
  else {
      if(item == 'US' || item == 'BG' || item == 'BR' || item == 'CA' || item == 'CH' || item == 'CZ' || item == 'DE' || item == 'DK' || item == 'ES' || item == 'FR' || item =='GB' || item == 'IN' || item == 'IE' || item == 'IT' || item == 'MA' || item == 'PT' || item == 'RO' || item == 'RU' || item == 'SE' || item == 'SG' || item == 'SK' || item == 'AT' || item == 'DZ' || item == "AD" || item == 'AS' || item == "AR" || item == "AM" || item == "AU" || item == "AT" || item == "AZ" || item == "BH" || item == "BD" || item == "BY" || item == "BE" || item == "BA" || item == "BN" || item == "CN" || item == "CO" || item == "CU" || item == "CY" || item == "EC" || item == "EE" || item == "FO" || item == "FI" || item == "GF" || item == "GE" || item == "GR" || item == "GL" || item == "GP" || item == "GU" || item == "GG" || item == "HU" || item == "IS" || item == "ID" || item == "IR" || item == "IL" || item == "IT" || item == "JP" || item == "JE" || item == "KZ" || item == "KR" || item == "KW" || item == "KG" || item == "LV" || item == "LI" || item == "LT" || item == "LU" || item == "MK" || item == "MG" || item == "MY" || item == "MV" || item == "MT" || item == "MH" || item == "MQ" || item == "YT" || item == "MX" || item == "FM" || item == "MD" || item == "MC" || item == "MN" || item == "ME" || item == "MA" || item == "NP" || item == "NL" || item == "NC" || item == "NZ" || item == "MP" || item == "NO" || item == "PK" || item == "PW" || item == "PG" || item == "PH" || item == "PL" || item == "PR" || item == "RE" || item == "RU" || item == "SM" || item == "RS" || item == "SI" || item == "ZA" || item == "ES" || item == "SZ" || item == "TW" || item == "TJ" || item == "TH" || item == "TN" || item == "TR" || item == "UA" || item == "UZ" || item == "VG" ) {
    // $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
    $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', true);
    // $('#zipcodeform').formValidation('revalidateField', 'postalCode');
    $('#zipcodeform').formValidation('revalidateField', 'postalCode1');
  }else{
    // $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
    $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', false);
  }
  }

  });
});
  $("#zipcodeform").validate({
       rules: {
            countrySelectBox1: {
                selectcheck: true
            },
            ebooking_weight: {
                weightcheck: true
            }
        }
    })
  jQuery.validator.addMethod('selectcheck', function (value, element) {
        return (value !== '0');
    }, " ");
  jQuery.validator.addMethod('weightcheck', function (value, element) {
        return (value !== '');
    }, " ");


 $('#edit-submit-button').on('click', function(e) {
   //alert('hiiii');
    var item = jQuery('#edit-countryselectbox :selected').val();
    if(item == 'US' || item == 'BG' || item == 'BR' || item == 'CA' || item == 'CH' || item == 'CZ' || item == 'DE' || item == 'DK' || item == 'ES' || item == 'FR' || item =='GB' || item == 'IN' || item == 'IE' || item == 'IT' || item == 'MA' || item == 'PT' || item == 'RO' || item == 'RU' || item == 'SE' || item == 'SG' || item == 'SK' || item == 'AT' || item == 'DZ' || item == 'AD' || item == "AS" || item == 'AR' || item == 'AM' || item == 'AU' || item == "AT" || item == "AZ" || item == "BH" || item == "BD" || item == "BY" || item == "BE" || item == "BA" || item == "BN" || item == "CN" || item == "CO" || item == "CU" || item == "CY" || item == "EC" || item == "EE" || item == "FO" || item == "FI" || item == "GF" || item == "GE" || item == "GR" || item == "GL" || item == "GP" || item == "GU" || item == "GG" || item == "HU" || item == "IS" || item == "ID" || item == "IR" || item == "IL" || item == "IT" || item == "JP" || item == "JE" || item == "KZ" || item == "KR" || item == "KW" || item == "KG" || item == "LV" || item == "LI" || item == "LT" || item == "LU" || item == "MK" || item == "MG" || item == "MY" || item == "MV" || item == "MT" || item == "MH" || item == "MQ" || item == "YT" || item == "MX" || item == "FM" || item == "MD" || item == "MC" || item == "MN" || item == "ME" || item == "MA" || item == "NP" || item == "NL" || item == "NC" || item == "NZ" || item == "MP" || item == "NO" || item == "PK" || item == "PW" || item == "PG" || item == "PH" || item == "PL" || item == "RU" || item == "PR" || item == "RE" || item == "SM" || item == "RS" || item == "SI" || item == "ZA" || item == "ES" || item == "SZ" || item == "TW" || item == "TJ" || item == "TH" || item == "TN" || item == "TR" || item == "UA" || item == "UZ" || item == "VG") {
              $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
              $('#zipcodeform').formValidation('revalidateField', 'postalCode');
            }
              else {
                $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
              }
    //$('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
     //$('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
     //$('#zipcodeform').formValidation('revalidateField', 'postalCode');
      var itemse = jQuery('#edit-countryselectbox1 :selected').val();
      if(itemse == '0'){
       // alert('joo');
       $("#zipcodeform").valid();
      } else {
         //alert('joo12');
         if(itemse == 'US' || itemse == 'BG' || itemse == 'BR' || itemse == 'CA' || itemse == 'CH' || itemse == 'CZ' || itemse == 'DE' || itemse == 'DK' || itemse == 'ES' || itemse == 'FR' || itemse =='GB' || itemse == 'IN' || itemse == 'IE' || itemse == 'IT' || itemse == 'MA' || itemse == 'PT' || itemse == 'RO' || itemse == 'RU' || itemse == 'SE' || itemse == 'SG' || itemse == 'SK' || itemse == 'AT' || itemse == 'DZ' || itemse == 'AD' || itemse == "AS" || itemse == 'AR' || itemse == "AM" || itemse == "AU" || itemse == "AT" || itemse == "AZ" || itemse == 'BH' || itemse == "BD" || itemse == "BY" || itemse == "BE" || itemse == "BA" || itemse == "BN" || itemse == "CN" || itemse == "CO" || itemse == "CU" || itemse == "CY" || itemse == "EC" || itemse == "EE" || itemse == "FO" || itemse == "FI" || itemse == "GF" || itemse == "GE" || itemse == "GR" || itemse == "GL" || itemse == "GP" || itemse == "GU" || itemse == "GG" || itemse == "HU" || itemse == "IS" || itemse == "ID" || itemse == "IR" || itemse == "IL" || itemse == "IT" || itemse == "JP" || itemse == "JE" || itemse == "KZ" || itemse == "KR" || itemse == "KW" || itemse == "KG" || itemse == "LV" || itemse == "LI" || itemse == "LT" || itemse == "LU" || itemse == "MK" || itemse == "MG" || itemse == "MY" || itemse == "MV" || itemse == "MT" || itemse == "MH" || itemse == "MQ" || itemse == "YT" || itemse == "MX" || itemse == "FM" || itemse == "MD" || itemse == "MC" || itemse == "MN" || itemse == "ME" || itemse == "MA" || itemse == "NP" || itemse == "NL" || itemse == "NC" || itemse == "NZ" || itemse == "MP" || itemse == "NO" || itemse == "PK" || itemse == "PW" || itemse == "PG" || itemse == "PH" || itemse == "PL" || itemse == "RU" || itemse == "PR" || itemse == "RE" || itemse == "SM" || itemse == "RS" || itemse == "SI" || itemse == "ZA" || itemse == "ES" || itemse == "SZ" || itemse == "TW" || itemse == "TJ" || itemse == "TH" || itemse == "TN" || itemse == "TR" || itemse == "UA" || itemse == "UZ" || itemse == "VG") {
    // $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', true);
    $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', true);
    // $('#zipcodeform').formValidation('revalidateField', 'postalCode');
    $('#zipcodeform').formValidation('revalidateField', 'postalCode1');
  }else{
    // $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode', false);
    $('#zipcodeform').formValidation('enableFieldValidators', 'postalCode1', false);
  }
      }
       var itemweight = jQuery('#edit-ebooking-weight').val();
   
    if(itemweight == '') {
       //alert(itemweight);
 $("#zipcodeform").valid();
    } 
     //$('#zipcodeform').formValidation('revalidateField', 'ebooking_weight');

     $('#zipcodeform').formValidation('revalidateField', 'postalCode1');
     //   $('#zipcodeform').formValidation('revalidateField', 'countrySelectBox1');
     //   }
     //  var countryempty = jQuery('#edit-countryselectbox1 :selected').val();
     //  alert(countryempty);
     // if(countryempty == '0') {
     //  alert('hi');
     //   $('#zipcodeform').formValidation('enableFieldValidators', 'countrySelectBox1', true);
     //   $('#zipcodeform').formValidation('revalidateField', 'countrySelectBox1');
     //   }
     //   else {
     //    alert('hiiii');
     //    $('#zipcodeform').formValidation('enableFieldValidators', 'countrySelectBox1', false);
     //   }
  
  setTimeout(function() {
    //alert("HI");
  $('#edit-submit-button').removeAttr("disabled"); 
  $(".getguotes #edit-submit-button").removeClass("disabled");
}, 1000);

    
 });
//});

       


    $("#edit-ebooking-weight").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
     });
});
</script>
<style type="text/css">
       #zipcodeform .error{
            border-color: red !important;
        }
</style>