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
?>

<?php /* <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
*/ ?>





    <style>
      #map img{max-width:none}

     /* .hoverinfo {
    border-radius: 1px;
    background-color: #FFF;
    box-shadow: 1px 1px 5px #CCC;
    font-size: 12px;
    border: 1px solid #CCC;
    padding: 10px!important;
    margin-top: 20px;}*/
	.hoverinfo {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 1px;
    box-shadow: 1px 1px 5px #ccc;
    font-size: 12px;
        margin-top: 73px;
    padding: 15px !important;
}

    </style>
    <div class="container">

           <?php /* node content for banner img and text */ ?>


        <div class="content-block map-cont">
          <!-- <a class="btn btn-default " id = "list-view-button" href="contact-us-list"><i class="fa fa-list-ul"></i> Switch to Listview</a>
          <div class="country-filter">
          <select class="form-control form-select col-md-3 float-right" name="countries" id = "countries">
            <option value="_none">--Any--</option>
           <?php /*
              foreach($countries as $country){
                  echo "<option value='".$country->field_franchise_country_value."'>".$country->field_franchise_country_value."</option>";
              }*/
            ?>
            <a href="mailto:customersupport@dtdc.com">Mail To :customersupport@dtdc.com</a>
          </select>
          </div> -->

          <div  id="map" class="msadap" style="width: 70%; height:100%;float:left;"></div>

          <div style="width:30%;float:left;" class="maplistlivew" >
			<div class="owndtdc"><span></span>Our Presence</div>
            <div class="dtdcassoc"><span></span>We Operate</div>
            <div id="maplistview">
                <div class="hoverinfo"><strong>India</strong><p>Corporate Office, DTDC House, No.3, Victoria Road, Bangalore 560047, Karnataka</p><p>Tel : 080-25365032,25365039</p></div>
            </div>
            <h4>For Global Business Enquiries please write to : <a href="mailto:gmo@dtdc.com"><span>gmo@dtdc.com</span></a></h4>
          </div>


          <script>
              var map = new Datamap({element: document.getElementById('map'),});
          </script>
        </div>
        <!-- <div>
            <table  id="contactustable">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Contact Person</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>Country </th>
                  <th>Email</th>
                  <th>Fax</th>
                  <th>Phone</th>
                  <th>Pincode </th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div> -->


    </div>
