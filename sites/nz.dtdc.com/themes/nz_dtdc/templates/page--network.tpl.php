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
 drupal_add_css(drupal_get_path('theme', 'nz_dtdc') . '/css/style_map.css');
 drupal_add_js(drupal_get_path('theme', 'ns_dtdc') . '/js/jquery.min.js');
 drupal_add_js(drupal_get_path('theme', 'nz_dtdc') . '/js/connect.js');
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
                        <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
                    <ul class="dropdown-menu">
            <li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
              <li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
                      <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
                      <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
                      <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
                      <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
                      <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li>
                      <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
                      <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>
							
                      <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
                      <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li>
                      <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
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
    <!-- Header block -->
    <div class="main-container">
      <div class="container-fluid dt-inner-banner dt-bg5">
        <h1><?php echo $node->title; ?></h1>
        <?php echo $node->body['und'][0]['summary']; ?>
      <div class="clear"></div>
      </div>

    <div class="container">
      <p class="dt-margin network_para" style="font-family:'gotham-light';font-size: 14px;text-align: center;">The biggest strength of DTDC is its unique network & partner-based business model.
        Our organisation has one of the fastest-growing franchise business networks across the globe. We have developed
        the largest chain of express courier services in India and have replicated the same model in various geographies.
        Today, DTDC has a direct presence in 23 countries and a business network in over 240 countries.</p>
        <img class="bg" src="sites/nz.dtdc.com/themes/nz_dtdc/images/DTDC-banner.png" class="img-responsive"/>
        <img class="map" src="sites/nz.dtdc.com/themes/nz_dtdc/images/map.png" class="img-responsive"/>
          <div class="svg-wrapper">
          <svg id="Layer_1" class="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 324.61 150.83">
             <!-- <polygon class="cls-1" points="236.2 47.98 224.32 18.96 250.02 4.23 236.2 47.98"/>
             <polyline class="cls-1" points="284.07 100.97 251.82 76.78 236.2 47.98 209.12 64.41 199.77 17.25 149.31 16.26"/>
             <polygon class="cls-1" points="162.44 117.83 168.48 89.06 145.89 77.69 162.44 117.83"/>
             <path class="cls-1" d="M269.27,141" transform="translate(-52.58 -41.99)"/>
             <polygon class="cls-1" points="283.62 100.97 320.57 147.01 285.03 136.18 283.62 100.97"/>
             <polyline class="cls-1" points="267.62 33.12 256.86 38.21 236.2 47.98 152.58 39.6 168.48 89.06 171.9 57.43 209.12 64.41 168.48 89.06 191.04 114.23 145.89 77.69 171.9 57.43 236.2 47.98 199.77 17.25"/>
             <line class="cls-1" x1="209.12" y1="64.41" x2="173.69" y2="31.32"/>
             <polygon class="cls-1" points="0.09 28.99 28.25 43.97 30.6 12.35 2.39 0.12 0.09 28.99"/>
             <polyline class="cls-1" points="2.39 0.12 28.25 43.97 95.29 3.73 149.31 16.26 113.39 79.28 145.89 77.69 152.58 39.6 149.31 16.26 173.69 31.32 236.2 47.98 284.07 101.47"/>
             <polygon class="cls-1" points="35.72 102.38 4.83 67.45 28.25 43.97 35.72 102.38"/>
             <path class="cls-1" d="M147.87,173.56" transform="translate(-52.58 -41.99)"/>
             <polyline class="cls-1" points="162.44 117.83 154.33 134.59 145.89 77.69 236.2 47.98 28.25 43.97 113.39 79.28"/>
             <line class="cls-1" x1="227.82" y1="73.36" x2="236.2" y2="47.98"/>
             <polyline class="cls-1" points="152.58 39.6 28.25 43.97 154.33 134.59 285.03 136.18"/>
             <path class="cls-1" d="M147.87,45.71" transform="translate(-52.58 -41.99)"/>
             <polyline class="cls-1" points="95.29 3.73 30.6 12.35 6.83 47.86 28.25 43.97 39.37 73.51 66.29 117.83 35.72 102.38 42.39 149.25 66.29 117.83"/>
             <polyline class="cls-1" points="4.83 67.45 39.37 73.51 35.72 102.38"/> -->

             <g id="main-0" style="position:absolute; top:-899px;">

                <animate xlink:href="#back" attributeName="r" from="2.3" to="3.5" dur="1s" begin="0s" repeatCount="indefinite" fill="freeze"/>
                <animate xlink:href="#back"
                   attributeType="CSS" attributeName="opacity" from="1" to="0" dur="1s" begin="0s" repeatCount="indefinite" fill="freeze"/>

                <circle id="back" class="back" cx="73" cy="50" r="" stroke-width="0.233"></circle>
                <circle class="front" cx="73" cy="50" r="1.2"/>
               <text text-anchor="middle" fill="#000">USA</text>
             </g>
          </svg>
            <div class="popup pop-wrapper" style="display:none">
               <div class="" id="name"></div>
               <div class="" id="address"></div>
               <div class="clear"></div>
            </div>
            <div class="clear"></div>
          </div><!-- svg wrapper close -->
    <div class="clear"></div>
    </div><!-- container close -->

    <div class="clear"></div>
    </div><!-- main container close -->


    <div class="enquiry">
    <h4>For Global Business Enquiries please write to: <a href="mailto:gmo@dtdc.com">gmo@dtdc.com</a></h4>
    </div>
            <div class="clear"></div>
    <div class="footer-addr">
      <p><b>DTDC Headquarter:</b> <br>DTDC House No.3, Victoria Road, Bangalore 560047, Karnataka <br>Tel: 080-25365032, 25365039</p>
    </div>


    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid dt-footer-bottom">
        <div class="container">
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="dt-foot-social">
              <a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/facebook.png" alt="" title=""/></a>
              <a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/linkedin.png" alt="" title=""/> </a>
              <a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/twitter.png" alt="" title=""/> </a>
              <a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/googleplus.png" alt="" title=""/></a>
              <a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="/sites/china.dtdc.com/themes/china_dtdc/images/youtube.png" alt="" title=""/></a>
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
