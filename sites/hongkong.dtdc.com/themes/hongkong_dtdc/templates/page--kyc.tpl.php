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
                     <!--  <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li> -->
                      <!--  <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
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

								<?php /*
                menu block
                */ ?>
									 <?php if (!empty($page['navigation'])): ?>
										 <?php print render($page['navigation']); ?>
									 <?php endif; ?>
 						 </div>
 				 </nav>
         <?php global $base_url;
              global $language ;
              $lang_name = $language->language ;
              if($lang_name =="zh-hans"){ $lang_name="cmn";} ?>
 				 <a class="logo" href='<?php print "/$lang_name";?>' title="Home"><img src="/sites/usa.dtdc.com/themes/usa_dtdc/images/dtdc_logo.png" alt="Home" class="img-responsive pull-right" /></a>
 			 </div>
 		 </div>
 	 </div>
  </div>
 </div>
 </header>
 </div>


<div class="container-fluid dt-inner-banner dt-bg9">
	<!-- <img src="<?php //print file_create_url($node->field_image['und'][0]['uri']); ?>"/> -->
	<h1><?php echo $node->title; ?></h1>
	<?php echo $node->body['und'][0]['summary']; ?>
  <p><?php print t("Know Your Customer"); ?><br>
    &nbsp;</p>
      <div class="clear" id="opportunities"></div>
    </div>
<div class="container-fluid dt-tab1 dt-tab">
      <div class="container careers-wrap">
    <div class="marg5">
          <div class="col-lg-12 col-md-12 col-xs-12">
        <h3 class="media-heading"><?php print t("KYC - Import Clearance"); ?></h3>
        <div class="dt-line1"></div>
        <p>

        <div class="kyccontent">
              <p><?php print t("KYC is an acronym for Know&nbsp;Your&nbsp;Customer&nbsp;which is a term used for identifying and verifying the identity of the customer.</p>
              <p>In the context of increasing number of offenses involving various modus-operandi such as misuse of export promotion schemes, fraudulent availment of export incentives, unscrupulous imports and duty evasion by bogus IEC holders etc., the <strong>Know Your Customer (KYC)</strong>guidelines have been put in place by The Ministry of Finance, Central Board of Excise &amp; Customs to ensure that they are not used intentionally or unintentionally by importers / exporters who indulge in fraudulent activities.</p>
              <p>KYC (Know Your Customer) guidelines puts an obligation on DTDC to verify the antecedent, correctness of the IEC (Importer Exporter Code), identity of the customer and their functioning in the declared address by using reliable, independent and authentic documents, data or information. Hence, all consignees and importers based in India need to provide KYC documents for the clearance of all non-document imports, regardless of the value of such consignments.</p>
              <p>KYC documents (government recognized Identity proof) need to be presented to customs during the import clearance process. Hence,it is important that DTDC is provided with all the necessary KYC documents before the shipment arrives in India. Absence of KYC documents during the import clearance process leads to clearance delays as shipments are detained by customs, until KYC documents of the consignee are provided by the shipper at origin or consignee based in India.</p>
              <p>You are requested to please share your KYC documents with DTDC via e-mail on <a href='mailto:kycsupport@dtdc.com'><strong>kycsupport@dtdc.com</strong></a> or WhatsApp on <strong>+91 9742273300 / +91 8433905830</strong> with the Airwaybill / Reference Number of your shipment in the subject line.</p>
              <p>The below table provides more information about KYC documents required for customs clearance&nbsp;as mandated by Indian Customs vide CBEC Circulars 09/2010, 33/2010 and 07/2015 for identification/&nbsp;verification of importers/exporters for customs clearance performed on their behalf by DTDC&nbsp;acting as an Authorized Courier.");?></p>

              <div class="table-responsive">
              <table id="tbl" class="table table-bordered" cellspacing="0" cellpadding="0">
            <tbody>
                  <tr bgcolor="#064287">
                <th width="45" align="center">Sl. No</th>
                <th width="373" style="text-align: center;"><?php print t("Category"); ?></th>
                <th width="324" style="text-align: center;"><?php print t("Documents to be obtained"); ?></th>
              </tr>
                  <tr>
                <td width="38">1</td>
                <td width="373"><strong><?php print t("Individual</strong><strong>&nbsp;- Resident Indian");?></strong><br>
                      <p><?php print t("Any one self certified document is sufficient if it contains both Identity (Photo) and Address Proof.</p>
                      <p> In case an Individual wants&nbsp;the delivery to a different&nbsp;address or the given KYC document does not match with the delivery address, please provide below any one of the additional self certified document to record the proof of delivery address.");?></p>
                      <ol>
                    <li> <?php print t("Bank Account Statement");?> </li>
                    <li> <?php print t("Electricity Bill");?> </li>
                    <li> <?php print t("Telephone Bill");?> </li>
                    <li> <?php print t("Hotel Booking Receipt&nbsp;in case the delivery address is a hotel");?> </li>
                    <li> <?php print t("LPG Connection document with address");?></li>
                    <li> <?php print t("Rent Agreement");?> <br>
                        </li>
                  </ol>
                      <strong><?php print t("Individual below 18 years of age can also provide a Birth Certificate as Proof of Identity. However, one ID proof of the Parent / Guardian is also required with address proof.");?></strong></td>
                <td width="324" valign="center"><ul>
                    <li><?php print t("Aadhar card"); ?> </li>
                    <li><?php print t("Passport"); ?> </li>
                    <li>&nbsp;<?php print t("PAN card"); ?> </li>
                    <li><?php print t("Voter ID");?><br>
                    </li>
                  </ul></td>
              </tr>
                  <tr>
                <td width="38" valign="center">2</td>
                <td width="373" valign="center"><p><?php print t("Companies/Firms/Trusts/ Foundations&nbsp;registered under GST&nbsp;<strong>(</strong><strong>Any two documents</strong><strong>)</strong>. If customers have registered under different branches across India, please provide all registered GSTN data."); ?></p></td>
                <td width="324" valign="center"><ul>
                    <li><?php print t("GST No");?> </li>
                    <li>&nbsp;<?php print t("IEC (Importer Exporter Code)"); ?>&nbsp; </li>
                    <li><?php print t("PAN card"); ?> </li>
                  </ul></td>
              </tr>
                  <tr>
                <td width="38" valign="center">3</td>
                <td width="373" valign="center"><p> <?php print t("Companies/Firms not registered under GST - <strong>Any two documents</strong>");?></p></td>
                <td width="324" valign="center"><ul>
                    <li><?php print t("Certificate of Incorporation&nbsp;");?> </li>
                    <li><?php print t("Memorandum of Association");?> </li>
                    <li><?php print t("Articles of Association&nbsp;");?> </li>
                    <li><?php print t("Power of Attorney granted to its managers, officers or employees to transact business on its behalf </li>
                    <li>Telephone bill in the name of the company"); ?> </li>
                    <li><?php print t("PAN allotment letter");?> </li>
                  </ul></td>
              </tr>
                  <tr>
                <td width="38" valign="center">4</td>
                <td width="373" valign="center"><p><?php print t("Partnership firms not registered under GST- <strong>Any two documents</strong>");?></p></td>
                <td width="324" valign="center"><ul>
                    <li><?php print t("Registration certificate, if registered");?> </li>
                    <li><?php print t("Partnership deed");?> </li>
                    <li><?php print t("Power of Attorney(PoA) granted to a partner or an employee to transact&nbsp; business on its behalf");?> </li>
                    <li><?php print t("Any officially valid document identifying the partners and the person holding the PoA and their addresses");?> </li>
                    <li><?php print t("Telephone bill in the name of firm/partners");?> </li>
                  </ul></td>
              </tr>
                  <tr>
                <td width="38" valign="center">5</td>
                <td width="373" valign="center"><p><?php print t("Trusts/Foundations&nbsp;not registered under GST&nbsp;-<strong>&nbsp;Any two documents</strong>");?></p></td>
                <td width="324"><ul>
                    <li><?php print t("Certificate of registration, if registered");?> </li>
                    <li><?php print t("Power of Attorney (PoA) granted to transact business on its behalf");?> </li>
                    <li><?php print t("Any officially valid document to identify the trustees, settlers, beneficiaries and&nbsp;those holding the PoA, founders/managers/directors and their addresses");?> </li>
                    <li><?php print t("Resolution of the managing body of the foundation/association");?> </li>
                    <li><?php print t("Telephone bill in the name of trust/foundation");?> </li>
                    <li><?php print t("Name of trustees, settlers, beneficiaries and signatories");?> </li>
                    <li><?php print t("Name and address of the founder, the managers, Directors and the&nbsp; beneficiaries, in full, complete and correct.");?> </li>
                    <li><?php print t("Telephone and fax number, e-mail address of the trust, founder and trustees.");?> </li>
                  </ul></td>
              </tr>
                  <tr>
                <td width="38" valign="center">6</td>
                <td width="373" valign="top"><p><?php print t(" Foreign National residing in India&nbsp;or visits India - Passport and Visa/PIO card self certified copies are mandatory. <br>
                    Additionally please provide any&nbsp;<strong><u>ONE</u></strong>&nbsp;of the following address proof document. The address on this document should match with the delivery address.");?></p>
                      <ol>
                    <li><?php print t("Address proof of relative/friend if staying with &nbsp;them");?> </li>
                    <li><?php print t("Hotel Booking Receipt");?> </li>
                    <li><?php print t("Rent Agreement");?> </li>
                    <li><?php print t("Stay Visa");?> </li>
                    <li><?php print t("A deputation letter from the Parent company with duration of stay confirmation");?> </li>
                  </ol></td>
                <td width="324" valign="center"><p> <?php print t("(i) Passport <br>
                    (ii) Visa / PIO card");?> </p></td>
              </tr>
                  <tr>
                <td width="38" valign="center">7</td>
                <td width="373" valign="center"><p><?php print t("Diplomats/Govt. Organisations/ Govt. Research Institutes or any Govt.&nbsp;Authorities etc as prescribed under para 2.07 HBP 2015-20 i.e. Categories of importer and exporter that are exempted from obtaining IEC.");?></p></td>
                <td width="324" valign="center"><p><?php print t("The IEC will be either Unique Identification Number (UIN) issued by GSTN and authorized by DGFT or any common number notified by DGFT.");?></p></td>
              </tr>
                </tbody>
          </table>
        </div>
            </div>
        </p>
        <div class="clear"></div>
      </div>
          <div class="clear"></div>
        </div>
    <div id="workculture">
          <div class="col-lg-8 col-md-8 col-xs-12 kyccontent">
        <h3 class="media-heading"><?php print t("KYC PROCESS FOR CONSIGNEE'S IN INDIA"); ?></h3>
        <div class="dt-line1"></div>
        <p>

        <ol>
              <li><?php print t("Once &nbsp;the shipment is booked at origin, DTDC&nbsp;will send an auto generated message to the consignee on the phone number or email address provided on the Air Waybill to request for the KYC documents.&nbsp;Hence,&nbsp;it is essential for the shipper to ensure that the consignee’s name, address&nbsp;and contact details&nbsp;on the Air Waybill and invoice are completely accurate.");?> </li>
              <li><?php print t("Consignees/ Importers&nbsp;must upload their correct KYC through the link shared in the SMS / Email to avoid possible delays in import clearance.&nbsp;&nbsp;The name and address on the KYC documents must match the name and address mentioned on the Air Waybill and invoice."); ?> </li>
              <li><?php print t("Customs clearance will be initiated&nbsp;upon receipt of satisfactory KYC documents&nbsp;hence all KYC’s uploaded directly through link or shared through any other medium are validated before they are submitted to customs.");?> </li>
              <li><?php print t("If satisfactory&nbsp;KYC documents are not received within 15 calendar days, the shipment will be considered undeliverable&nbsp;and returned to the shipper with charges, if any, will be billed back to the shipper.");?> </li>
            </ol>
        </p>
        <p style="border: solid 1px #ccc;padding: 10px;background: #F28903;text-align: center;"><?php print t("Please")?> <a href="kyc/faq" target="_self"><strong style="text-decoration: underline;color: #fff;font-weight: bold;"><?php print t("click here"); ?></strong></a><?php print t(" for answers to frequently asked questions"); ?></p>
        <div class="clear"></div>
      </div>
          <div class="col-lg-3 col-md-3 col-xs-12"> <img class="media-object" src="<?php print file_create_url($node->field_image['und'][0]['uri']); ?>" alt="E-Commerce">
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
        <p class="dt-copyright"><?php print t('&copy; Copyright DTDC Express Limited. All Rights Reserved'); ?></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>

<style>
.kyccontent {
	text-align: justify;
}
.kyccontent p {
	margin-bottom: 10px!important;
	font-size: 16px;
	margin: 0;
	line-height: 1.4em;
}
.kyccontent ul, .kyccontent ol {
	padding: 10px 0px 10px 25px!important;
}
.kyccontent .table th {
	color: #fff!important;
	font-size: 16px;
}
.dt-bg8 {
  background-image:url('/sites/hongkong.dtdc.com/themes/hongkong_dtdc/images/kyc.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	padding: 115px 0;
	max-height: 418px;
}
</style>
