<?php
/**

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

 drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/jquery.min.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/bootstrap.min.js');
?>
<?php
/*
* <!-- <script>
*  $(function() {
*      var $jq = $.noConflict();
*    $jq('#myCarousel').carousel({
*       autoPlay: true,
*       interval: 4000
*     });
*  });
*
* </script> -->
* <!----------------------------------------Header block-------------------------------------------------------------->
*/  ?>
<div class="dd-home">
	<header>
		<div class="container-fluid nav_fixed">
			<div class="row ">
	 		 <div class="container">
	 			 <div class="col-lg-12 col-md-12">
	 				 <div class="row">
						 <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
               <?php /*
    	        * <!-- Brand and toggle get grouped for better mobile display -->
                */
                ?>
			        <div class="navbar-header">
			            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
             <?php /*
               * <!-- Collection of nav links, forms, and other content for toggling -->
               */ ?>
              <div id="navbarCollapse" class="collapse navbar-collapse">
					<div class="row top_row">
			            <div class="dropdown">
												<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Choose Country <span class="caret"></span></button>
										<ul class="dropdown-menu">
						<li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
							<li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
			                <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
			                <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
			                <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
			                <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
			                <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li><li class="isrl"><a href="https://dtdc.co.il/"><span>&nbsp;</span>Israel</a></li>
			                <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
											<li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>
											<li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> --> -->
							<?php /*
											* <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
                      * <!-- <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
                      */
                 ?>
                      <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span>Singapore</a></li>
			                <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span>Sri Lanka</a></li>
			                <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span>United Arab Emirates</a></li>
			                <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span>United Kingdom</a></li>
			                <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span>United States</a></li>
			              </ul>
			            </div>
                  <?php  // $block = module_invoke('search', 'block_view', 'form');
         //  print render($block); ?>
			          </div>
							<?php /*	<!---menu block --------->
                    */ ?>
 									<?php if (!empty($page['navigation'])): ?>
 										<?php print render($page['navigation']); ?>
 									<?php endif; ?>
               <?php /*
 								 <!---menu block ---->
                 */ ?>
              </div>
			    </nav>
					<?php if ($logo): ?>
						<a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive pull-right"/></a>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>
</header>
</div>
<?php /*
/* <!-- Header block -->
*/ ?>
<!-- content -->
<div class="container">
   <div class="thankyou-container">
                <div class="container">
                    <div class="h-100">
                        <p><section class="error-container">
                          <span class="four"><span class="screen-reader-text">4</span></span>
                          <span class="zero"><span class="screen-reader-text">0</span></span>
                          <span class="four"><span class="screen-reader-text">4</span></span>
                        </section> </p>
                    <div class="mb-5 align"><b><?php print render($page['content']); ?></b></div>
                    </div>
                </div>
            </div>
</div>
<!-- content -->
<?php /*
*<!-- footer block-->
*/
?>
<footer>
  <div class="container-fluid dt-footer-bottom">
    <div class="container">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="dt-foot-social">
					<a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="/sites/all/themes/dtdc/images/facebook.png" alt="" title=""/></a>
					<a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="/sites/all/themes/dtdc/images/linkedin.png" alt="" title=""/> </a>
					<a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="/sites/all/themes/dtdc/images/twitter.png" alt="" title=""/> </a>
					<a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="/sites/all/themes/dtdc/images/googleplus.png" alt="" title=""/></a>
					<a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="/sites/all/themes/dtdc/images/youtube.png" alt="" title=""/></a>
        </div>
        <div class="clearfix"></div>
            <?php print render($page['footer']);?>
        <div class="clearfix"></div>
        <p class="dt-copyright">&copy; Copyright DTDC Express Limited. All Rights Reserved</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>
<?php
/*
* <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
*
* <script src="/sites/all/themes/dtdc/js/slick.js" type="text/javascript" charset="utf-8"></script>
* <script type="text/javascript">
*  $(document).on('ready', function() {
*    $(".regular").slick({
*      dots: true,
*      infinite: true,
*      slidesToShow: 4,
*      slidesToScroll: 4,
*      autoplay: true,
*    });
*
*  });
*</script> -->
*<!--footer block----->
*/
?>

<style>
	/* Page not found page css */

  .align{
                text-align: center;
               margin-top: 20px;
              }
              div#page-wrappers {
                  margin-top: 30px;
              }
               @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600,700');
              @import url('https://fonts.googleapis.com/css?family=Catamaran:400,800');
              .error-container {
                text-align: center;
                font-size: 106px;
                font-family: 'Catamaran', sans-serif;
                font-weight: 800;
              /*
                margin: 70px 15px;
                padding-top: 90px;
              */
              }
              .error-container > span {
                display: inline-block;
                position: relative;
              }
              .error-container > span.four {
                width: 136px;
                height: 43px;
                border-radius: 999px;
                background:
                  linear-gradient(140deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 43%, transparent 44%, transparent 100%),
                  linear-gradient(105deg, transparent 0%, transparent 40%, rgba(0, 0, 0, 0.06) 41%, rgba(0, 0, 0, 0.07) 76%, transparent 77%, transparent 100%),
                  /* linear-gradient(to right, #d89ca4, #e27b7e); */
                  linear-gradient(to right,#3766eb, #6242ab);
              }
              .error-container > span.four:before,
              .error-container > span.four:after {
                content: '';
                display: block;
                position: absolute;
                border-radius: 999px;
              }
              .error-container > span.four:before {
                width: 43px;
                height: 156px;
                left: 60px;
                bottom: -43px;
                background:
                  linear-gradient(128deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 40%, transparent 41%, transparent 100%),
                  linear-gradient(116deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.07) 50%, transparent 51%, transparent 100%),
                  /* linear-gradient(to top, #99749D, #B895AB, #CC9AA6, #D7969E, #E0787F); */
                  linear-gradient(to right,#3766eb, #6242ab);
              }
              .error-container > span.four:after {
                width: 137px;
                height: 43px;
                transform: rotate(-49.5deg);
                left: -18px;
                bottom: 36px;
                background: linear-gradient(to right,#3766eb, #6242ab);
                /* linear-gradient(to right, #99749D, #B895AB, #CC9AA6, #D7969E, #E0787F); */
              }

              .error-container > span.zero {
                vertical-align: text-top;
                width: 156px;
                height: 156px;
                border-radius: 999px;
                background: linear-gradient(-45deg, transparent 0%, rgba(0, 0, 0, 0.06) 50%,  transparent 51%, transparent 100%),
                  /* linear-gradient(to top right, #99749D, #99749D, #B895AB, #CC9AA6, #D7969E, #ED8687, #ED8687); */
                  linear-gradient(to right, #3766eb, #6242ab);
                overflow: hidden;
                animation: bgshadow 5s infinite;
              }
              .error-container > span.zero:before {
                content: '';
                display: block;
                position: absolute;
                transform: rotate(45deg);
                width: 90px;
                height: 90px;
                background-color: transparent;
                left: 0px;
                bottom: 0px;
                background:
                  linear-gradient(95deg, transparent 0%, transparent 8%, rgba(0, 0, 0, 0.07) 9%, transparent 50%, transparent 100%),
                  linear-gradient(85deg, transparent 0%, transparent 19%, rgba(0, 0, 0, 0.05) 20%, rgba(0, 0, 0, 0.07) 91%, transparent 92%, transparent 100%);
              }
              .error-container > span.zero:after {
                content: '';
                display: block;
                position: absolute;
                border-radius: 999px;
                width: 70px;
                height: 70px;
                left: 43px;
                bottom: 43px;
                background: #FDFAF5;
                box-shadow: -2px 2px 2px 0px rgba(0, 0, 0, 0.1);
              }
              .screen-reader-text {
                  position: absolute;
                  top: -9999em;
                  left: -9999em;
              }  

              .error-container {
                      padding-top: 66px;
              }  
				  .thankyou-container {
				         min-height: 400px;
				  }

	
</style>