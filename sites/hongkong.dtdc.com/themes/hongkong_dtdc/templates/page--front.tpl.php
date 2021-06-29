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
?>
<!----------------------------------------Header block-------------------------------------------------------------->
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
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> <?php print t("Choose Country");?> <span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span><?php print t("Global");?></a></li>
											<li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span><?php print t("India"); ?></a></li>
			                <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span><?php print t("Australia"); ?></a></li>
			                <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span><?php print t("Bangladesh");?></a></li>
			                <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span><?php print t("Canada"); ?></a></li>
			                <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span><?php print t("China");?></a></li>
			                <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span><?php print t("Hongkong");?></a></li>

<!--<li class="de"><a href="http://de.dtdc.com/"><span>&nbsp;</span><?php print t("Germany");?></a></li> -->
<li class="isrl"><a href="https://dtdc.co.il/"><span>&nbsp;</span><?php print t("Israel");?></a></li>
			                <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span><?php print t("Kenya");?></a></li>
			                <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span><?php print t("Malaysia"); ?></a></li>
							
			                <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span><?php print t("Nepal");?></a></li>
											<!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span><?php print t("Oman");?></a></li> -->
											<!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
											<!-- <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
			                <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span><?php print t("Singapore");?></a></li>
			                <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span><?php print t("Sri Lanka");?></a></li>
			                <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span><?php print t("United Arab Emirates");?></a></li>
			                <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span><?php print t("United Kingdom");?></a></li>
			                <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span><?php print t("United States");?></a></li>
			              </ul>
			            </div>
                  <?php  $block = module_invoke('search', 'block_view', 'form');
                   print render($block);
                   print render($page['language_dropdown']); ?>
			          </div>
								<!---menu block --------->

 									<?php if (!empty($page['navigation'])): ?>
 										<?php print render($page['navigation']); ?>
 									<?php endif; ?>

 								 <!---menu block ---->
			        </div>
			    </nav>
			    <?php global $base_url;
              global $language ;
              $lang_name = $language->language ;
              if($lang_name =="zh-hans"){ $lang_name="cmn";} ?>
					<a class="logo" href='<?php print "/$lang_name";?>' title="Home"><img src="sites/uk.dtdc.com/themes/uk_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
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
						 <div class="dt-home-search">
							 <!-- <div class="dt-ebook"><a href="http://ws01.ffdx.net/customer_v2/index.aspx?token=68-0A-A0-62-5A-38-17-75-20-6A-9D-59-F2-C5-F1-B4">E-BOOKING</a></div> -->
							 <div class="dt-track-ship"><?php print t('TRACK YOUR SHIPMENT'); ?></div>
							 <div class="clear"></div>
							 <div class="track-form-wrap1">
								 <div class='form-inline'>
                   <?php
                    $block = module_invoke('hongkong_tracking', 'block_view', 'hongkong_tracking_block');
                    print render($block);
                   ?>
							</div>
								 <div class="clear"></div>
							 </div>
						 </div>
						 <div class="clear"></div>
					 </div>
           <?php print render($page['promo_offer']);?>
           <!-- Avail offer block ------->
<!-- Product services block ------->
<div class="container-fluid services_block">
	<div class="row">
		 <div class="container">
		 	<?php global $language; 
				if(($language->language == 'en')){
		 	    ?>
		 	 <?php  $block = module_invoke('views', 'block_view', 'product_services-block_1');
		 	   print render($block['content']); 
		 	   } 	 	   

		 	   if(($language->language == 'zh-hans')){
		 	    ?>
		 	 <?php  $block = module_invoke('views', 'block_view', 'product_services-block_2');
		 	   print render($block['content']); 
		 	   } 
		 	   ?>
		</div>
	</div>
</div>
<div class="clear"></div>
<!-- Product services block ------->

<div class="clear"></div>
</div>

<div class="clearfix"></div>
<footer>
  <div class="container-fluid dt-footer-bottom">
    <div class="container">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="dt-foot-social">
					<a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/facebook.png" alt="" title=""/></a>
					<a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/linkedin.png" alt="" title=""/> </a>
					<a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/twitter.png" alt="" title=""/> </a>
					<a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/googleplus.png" alt="" title=""/></a>
					<a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/youtube.png" alt="" title=""/></a>
        </div>
        <div class="clearfix"></div>
      	 <?php print render($page['footer']);?>
        <div class="clearfix"></div>
        <p class="dt-copyright"><?php print t('&copy; Copyright DTDC Express Limited. All Rights Reserved'); ?></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>
<!-- <test> -->

 <script type="text/javascript">
 jQuery(document).ready(function() {
  if (jQuery('#popup-message').length > 0) {
  jQuery.colorbox({ href: '#popup-message', width:"61%", inline: true, scrolling: false, opacity:.8 });
  }
 });
</script>

<div style="display: none;">
  <div id="popup-message">
    <?php
			print render($page['popup']);
   ?>
  </div>
</div> 