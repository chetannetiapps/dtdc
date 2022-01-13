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
<script type="text/javascript">
jQuery(document).ready(function() {
	if (jQuery('#popup-message').length > 0) {
		jQuery.colorbox({ href: '#popup-message', width:"55%", inline: true, scrolling: false, opacity:.8 });
	}
	// jQuery code to pause the vidoe.
  	jQuery("#cboxClose").click(function(){
	  jQuery('#val_frame').attr('src','')
	}); 	
});
</script>
<?php /*
* <!--- Start custom popup -->
*/ ?>
<div style="display: none;">
	<div id="popup-message">
    <?php
/*   $block = module_invoke('views', 'block_view', 'home_page_popup-block');
   print render($block);*/
   ?>
   <iframe id="val_frame" src="/sites/default/files/videoplayback.mp4" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
	</div>
</div>
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
	<div class="servicediv col-lg-8 marg_auto">
			<ul>
				<li id="contentPost">Cross Border Management <img src="/sites/all/themes/dtdc/images/service/crossborder_icon.png"/></li>
				<li>Integrated Technology Platform <img src="/sites/all/themes/dtdc/images/service/integrated_icon.png"/></li>
				<li><img src="/sites/all/themes/dtdc/images/service/multivendor_icon.png"/> Multi-Vendor Management</li>
				<li><img src="/sites/all/themes/dtdc/images/service/warehousing_icon.png"/> Warehousing & E-Fulfilment</li>
				<li><img src="/sites/all/themes/dtdc/images/service/lastmile_icon.png"/> Last Mile Delivery</li>
			</ul>
	</div><div class="move_tab">&nbsp;</div>
	<div class="mob-servicediv col-xs-12 marg_auto">
			<ul>
				<li><img src="/sites/all/themes/dtdc/images/service/crossborder_icon.png"/> Cross Border Management </li>
				<li><img src="/sites/all/themes/dtdc/images/service/integrated_icon.png"/> Integrated Technology Platform </li>
				<li><img src="/sites/all/themes/dtdc/images/service/multivendor_icon.png"/> Multi-Vendor Management</li>
				<li><img src="/sites/all/themes/dtdc/images/service/warehousing_icon.png"/> Warehousing & E-Fulfilment</li>
				<li><img src="/sites/all/themes/dtdc/images/service/lastmile_icon.png"/> Last Mile Delivery</li>
			</ul>
	</div>
	<div class="clear"></div>
	<p style="margin-top:180px;visibility:hidden;">&nbsp;</p>
</div>
<div class="container-fluid dt-tab">
		<div class="container">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="tab-pane fade in active"><a href="#crossborder" aria-controls="home" role="tab" data-toggle="tab">Cross Border Management</a></li>
				<li role="presentation" class = "tab-pane fade"><a href="#integrated" aria-controls="profile" role="tab" data-toggle="tab">Integrated Technology Platform</a></li>
				<li role="presentation" class = "tab-pane fade"><a href="#multivendor" aria-controls="messages" role="tab" data-toggle="tab">Multi-Vendor Management</a></li>
				<li role="presentation" class = "tab-pane fade"><a href="#warehousing" aria-controls="settings" role="tab" data-toggle="tab">Warehousing & E-Fulfilment</a></li>
				<li role="presentation" class = "tab-pane fade"><a href="#lastmile" aria-controls="settings" role="tab" data-toggle="tab">Last Mile Delivery</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	 <div class="clear"></div>
</div>
  <div class="container-fluid tab-content dt-service-tab">
		<?php $block = module_invoke('custom_tabs_block', 'block_view', 'custom_service_tabs_block');
		print render($block['content']); ?>
<?php /*
		<!-- <div class="test">
			<h1>servisew 251</h1>
		</div> -->
  */ ?>
	  <div class="sub_form1 col-md-6 col-sm-6 col-xs-12">
    <?php  $block = module_invoke('ebooking', 'block_view', 'know_more_form_block');
     print render($block['content']); ?>
   </div>
	</div>
  <div class="clear"></div>
  <div class="quote_div container-fluid">
     <div class="container content3">
     <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 marg_auto">
       <div class="quote1 col-md-6 col-sm-6 col-xs-12">
         <h3>Need a customized solution? <span>World of Services to revamp your value chain.</span></h3>
       </div>
       <div class="sub_form col-md-6 col-sm-6 col-xs-12">
         <a class="dt_btn2" id="get_touch">Get in touch <i class="glyphicon glyphicon-chevron-right"></i></a>
       </div>
       </div>
     </div>
  </div>
  <div class="clear"></div>
  <div class="quote_form container-fluid">
     <a id="close_form">
       <img src="/sites/all/themes/dtdc/images/service/close.png">
     </a>
     <div class="container content3">
       <div class="quote2 col-lg-11 col-md-10 col-sm-10 col-xs-12 marg_auto">
         <h2>Fill in the details below and we shall get in touch with you soon... </h2>
         <?php  print $messages;
         $block = module_invoke('ebooking', 'block_view', 'get_in_tech_form_block');
     		print render($block['content']); ?>
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
