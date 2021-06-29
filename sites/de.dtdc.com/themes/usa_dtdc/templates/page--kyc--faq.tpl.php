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
  drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/jquery.min.js');
?>
<?php /*
Header block
*/ ?>
<div class="dd-home">
	<header>
		<div class="container-fluid nav_fixed">
			<div class="row ">
			 <div class="container">
				 <div class="col-lg-12 col-md-12">
					 <div class="row">
						 <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
							<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
							</div>
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
<li class="de"><a href="http://de.dtdc.com/"><span>&nbsp;</span>Germany</a></li>
			                <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li> 
<li class="isrl"><a href="https://dtdc.co.il/"><span>&nbsp;</span>Israel</a></li>
			                <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
											<li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>
											<li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
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
                menu block
                */ ?>
									 <?php if (!empty($page['navigation'])): ?>
										 <?php print render($page['navigation']); ?>
									 <?php endif; ?>
 						 </div>
 				 </nav>
 				 <a class="logo" href="/" title="Home"><img src="/sites/usa.dtdc.com/themes/usa_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
 			 </div>
 		 </div>
 	 </div>
  </div>
 </div>
 </header>
 </div>


<div class="container-fluid dt-inner-banner dt-bg9">
	<!-- <img src="<?php //print file_create_url($node->field_image['und'][0]['uri']); ?>"/> -->
	<h1>KYC</h1>
	<?php echo $node->body['und'][0]['summary']; ?>
  <p>Know Your Customer<br>
    &nbsp;</p>
      <div class="clear" id="opportunities"></div>
    </div>
    <div class="container-fluid dt-tab1 dt-tab">
      <div class="container careers-wrap">
    <div class="marg5">
          <div class="col-lg-12 col-md-12 col-xs-12">
        <h3 class="media-heading">KYC - Frequently Asked Questions</h3>
        <div class="dt-line1"></div>
        <p>

        <div class="kyccontent">
              <p align="justify"><strong>Q. What is KYC &amp; why do you need it?</strong></p>
              <p>KYC or Know Your Customer is a process of &nbsp;identifying and verifying the identity of the consignee/importer&nbsp;which needs &nbsp;to be presented to Indian Customs during the import clearance&nbsp;process, without which the shipment&nbsp;cannot be cleared. DTDC as your clearance partner, requires&nbsp;your KYC for customs clearance. </p>
              <p><strong>Q. What KYC do I need to provide?</strong></p>
              <p>Please refer to <a href="/kyc#tbl">the table</a>. </p>
              <p align="justify"><strong>Q. Does DTDC have the right to ask for KYC and personal documents for customs clearance? Why?</strong></p>
              <p align="justify">Yes, DTDC has&nbsp;the right to ask for KYC and personal documents for customs clearance. As your authorized clearance partner, verification of the consignee/ importer&nbsp;KYC (Know Your Customer) is a responsibility of the carrier vide CBEC (Central Board of Excise and Customs &amp; Customs) Circular 9/2010 dtd.08/4/2010. </p>
              <p><strong>Q. If I do not have any of the documents listed above to show my ‘proof of identity’, can I still get my shipment delivered as I am a foreign national staying in India?</strong></p>
              <p>Please share your passport&nbsp;and visa/ PIO number as proof of identity.</p>
              <p><strong>Q. What should be done if the consignee does not work with the organization or has retired?</strong></p>
              <p>If the consignee does not work with the organization or has retired, DTDC&nbsp;will inform the shipper and request them to suggest the next course of action&nbsp;(requesting for new address or return of the shipment). </p>
              <p><strong>Q. If my name has been changed and I do not have any OVD(Officially Valid Documents)asKYC in the new name, how canI get my shipment cleared?</strong></p>
              <p>A copy of the name change&nbsp;certificate issued by the State Government or Gazette notification indicating change in name together with a certified copy of the ‘Officially Valid Documents’ in your prior name will be required to clear your shipment.</p>
              <p><strong>Q. Do I have to furnish KYC documents each time I order &nbsp;online or when I import into India?</strong></p>
              <p>No. You do not have to furnish KYC documents each time you&nbsp;order&nbsp;online or import into India.Once you share your KYC with DTDC, our company&nbsp;will not ask you to share it again&nbsp;as it&nbsp;is saved in our internal company portal for future reference.</p>
              <p><strong>Q. My friend/ relative/ family member has ordered/ imported the shipment on my behalf, would DTDC accept my KYC for customs clearance as the shipment is meant for me</strong></p>
              <p>Customs&nbsp;needs&nbsp;the&nbsp;KYC of the consignee/ importer&nbsp;for clearance, to whom the shipment is addressed.&nbsp;Hence, DTDC does not accept the KYC of any other person.</p>
              <p><strong>Q. I have never shared my KYC with other service providers either while ordering &nbsp;any shipment online or importing it from another country.&nbsp;Why do I need to share it with DTDC ?</strong></p>
              <p>KYC documents (a government recognized Identity proof) need to be presented to customs during the import&nbsp;clearance&nbsp;process.&nbsp;Hence,&nbsp;it is important that DTDC&nbsp;is&nbsp;provided with all the necessary KYC documents before the shipment arrives in India. &nbsp;Absence of KYC&nbsp;documents during the import clearance process leads&nbsp;to clearance delays&nbsp;as shipments are detained by customs until KYC documents of the consignee are provided either by the shipper&nbsp;based at origin or consignee&nbsp;based in India.</p>
              <p><strong>Q. Where is the customs circular available? OR Can I get a copy of the regulation stating that KYC needs to be submitted? </strong></p>
              <p>The circular is available on the CBEC website. <a href="http://www.cbec.gov.in./" target="_blank"><u>www.cbec.gov.in.</u></a>&nbsp;Please refer to Circular No.9/2010 - Customs dated 8th April 2010 on KYC norms for Courier.</p>
              <p><strong>Q. I have already submitted my KYC &nbsp;while ordering the product online. Why do I need to share my KYC with DTDC ?</strong></p>
              <p>Your online retailer has an agreement with DTDC to import, customs clear &amp; deliver the items you ordered. As&nbsp;DTDC&nbsp;do not have access to the internal system&nbsp;of your online retailer where your order is placed, &nbsp;your KYC is required by DTDC for customs clearance in India.</p>
              <p><strong>Q. How does DTDC guarantee no KYC is misused? </strong></p>
              <p>We at DTDC take utmost care of our customer’s personal details&nbsp;by storing them in a specialized customer portal which can only be accessed by our KYC helpdesk &amp; clearance executive. As a customs compliant company, DTDC&nbsp;assures&nbsp;you that your KYC will be used only for customs clearance purpose.</p>
              <p><strong>Q. The shipment has been imported for the company, why does DTDC require KYC of the company employee?</strong></p>
              <p>In case the shipment terms selected during booking of the shipment at the origin are B2B (Business to Business), customs require the KYC of the company for clearance. But if the shipment terms are B2C (Business to Customer), customs require the KYC of the company employee for clearance. Depending on the shipment terms agreed during booking, DTDC may ask for the KYC of either the company or company employee.</p>
              <p><strong>Q. I got a SMS and tried to upload my KYC but I am unable to receive the OTP.</strong></p>
              <p>Please&nbsp;try again after sometime because sometimes due to network congestion your carrier may delay the OTP.</p>
            </div>
        </p>
        <div class="clear"></div>
      </div>
          <div class="clear"></div>
        </div>
    <div class="clear"></div>
  </div>
      <div class="clear"></div>
    </div>
<div class="clear"></div>
<div class="clearfix"></div>
<?php print render($page['footer']);?>
