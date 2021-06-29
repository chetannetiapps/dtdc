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
 //drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/jquery.min.js');
//drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/new-script.js');
 //drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/bootstrap.min.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/haspage.js');
?>

<?php /*
* <!--- Start custom popup -->
*/ ?>

<?php /*
* <!--- End custom popup -->
* <!----------------------------------------Header block-------------------------------------------------------------->
*/ ?>
<?php if($messages): ?>
<div class="dialog-wrapper">
 <div class="dialog">
<?php /*
* <!-- <h2 class="dialog-title">
*	 Please fix the following error.
* </h2> -->
 */ ?>
 <div class="dialog-description">
 	<?php print $messages; ?>
 </div>
</div>
</div>
<?php endif;?>
<div class="dd-home">
	<header>
		<div class="container-fluid nav_fixed">
			<div class="row">
	 		 <div class="container">
	 			 <div class="col-lg-12 col-md-12">
	 				 <div class="row">
						 <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
							 <?php /*
						 *  <!-- Brand and toggle get grouped for better mobile display -->
               */ ?>
						  <div class="navbar-header">
			            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
							<?php /*
			      *  <!-- Collection of nav links, forms, and other content for toggling -->
           */ ?>
							<div id="navbarCollapse" class="collapse navbar-collapse">
					<div class="row top_row">
			            <div class="dropdown">
											<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
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
											<!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
                     <?php /*
										  * <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
                      * <!-- <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
      									*/ ?>
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
          <?php /*
								* <!---menu block --------->
 								*/ ?>
 									<?php if (!empty($page['navigation'])): ?>
 										<?php print render($page['navigation']); ?>
 									<?php endif; ?>

									<?php /*
												* <!---menu block --------->
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
* <!-- Header block -->
 */ ?>
<div class="container-fluid dt-inner-banner dt-bg3">
	<h1><?php echo $node->title; ?></h1>
	<?php echo $node->body['und'][0]['summary']; ?>

	<div class="clear"></div>
	<p style="margin-top:180px;visibility:hidden;">&nbsp;</p>
</div>
  <div class="clear"></div>
  <div class="clear"></div>
<div class="container-fluid dt-tab">
<div class="container">
   <div class="row">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#product_prohibited-goods" aria-controls="home" role="tab" data-toggle="tab">Prohibited Goods</a></li>
        <li role="presentation"><a href="#product_restricted-commodities" aria-controls="profile" role="tab" data-toggle="tab">Restricted Commodities</a></li>
        <li role="presentation"><a href="#product_NDPS-Prohibited-Drugs" aria-controls="messages" role="tab" data-toggle="tab">NDPS Prohibited Drugs</a></li>
      </ul>
      <div class="tab-content dt-service-tab">
         <?php $block = module_invoke('custom_tabs_block', 'block_view', 'custom_prohibited_block');
         print render($block['content']); ?>
       </div>
     </div>
</div>
</div>
  <div class="clear"></div>
</div>
<div class="service_page"></div>
<?php /*
<!-- footer block-->
*/ ?>
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
<?php /*
<!--footer block----->
*/ ?>

<style>
  .nav-tabs > li > a{
    margin-right: 0px !important;
  }
  .media-body ol li {
    font-size: 16px;
    line-height: 1.6em;
    margin-left: 15px;
  }
  .dt-tab .nav-tabs li:last-child{
  	padding: 0px 20px !important;
  }
  .dt-service-tab .media-body{
  	padding: 20px 25px !important;
	background-color: #f7f7f7 !important;
	min-height: 265px !important;
	width: 100%;
  }
  .dt-tab .nav-tabs{
  	border-bottom: none !important;
	width: 585px !important;
	margin: 0 auto 50px auto !important;
  }

	.dt-tab .nav-tabs li:after{
		display: none !important;
	}
	.dt-tab .nav-tabs li {
	    padding: 0 25px;
	    font-family: 'Buenard-Regular' !important;
	    border-right: 1px solid #999999;
	    font-size: 16px !important;
	}
	strong {
	    text-align: left !important;
	}
	.dt-service-tab p{
		text-align: left !important;
	}
	.dt-bg3{
		background-image: url(/sites/all/themes/dtdc/images/services.png) !important;
	}
	.dt-inner-banner h1 {
    font-family: 'Buenard-Regular';
    font-weight: 700;
    color: #ffffff;
    text-align: center;
    width: 100%;
    font-size: 37px;
    text-transform: uppercase;
    margin-top: 135px;
     }
</style>