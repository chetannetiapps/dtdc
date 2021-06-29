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
<?php
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/custom.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/jquery.min.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/bootstrap.min.js');
?>
<script type="text/javascript">
jQuery(document).ready(function($){
	$("#edit-consigments-1").addClass("edit-ref");
	$('label[for="edit-consigments-1"').addClass("label-ref");
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	if (jQuery('#popup-message').length > 0) {
		jQuery.colorbox({ href: '#popup-message', width:"55%", inline: true, scrolling: false, opacity:.8 });
	}
});
</script>
<div style="display: none;">
	<div id="popup-message">
		<iframe width="100%" height="380px" src="/vef/load/e1747c34b607ebeead9267093e12ea21" frameborder="0" allowfullscreen=""></iframe>
	</div>
</div>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!----------------------------------------Header block-------------------------------------------------------------->
    <div class="main-container">
     <div class="header_block">
        <div class="container">
          <div class="header_main_block col-md-12">
          <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="7d3adf20-a5d6-4a0f-8a5d-d5943138b20a" type="text/javascript" data-blockingmode="auto"></script>
           <div class="header-right pull-left col-md-6">
           <div class="country-drop  col-md-5">
				  <?php if (!empty($page['header_first'])): ?>
					 <i class="fa fa-globe"></i><?php print render($page['header_first']);	?>
				  <?php endif; ?>


              </div>
           <div class="search_block  col-md-7">
                  <div class="search">

					   <?php  $block = module_invoke('search', 'block_view', 'form');
							print render($block); ?>

                  </div>
              </div>

            </div>
            <div class="logo col-md-6">

				<?php if ($logo): ?>
					<a class="logo navbar-btn pull-right" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />

				</a>
				<?php endif; ?>
				</div>

          </div>
        </div>
        </div>


     <!---------------------------------menu block---------------------------------------------------------------------->
		 <div class="menu_block">
            <div class="main_menu col-md-12">

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						   <a class="navbar-brand" href="#"></a>
					</div>
				 <div id="navbar" class="navbar-collapse collapse">
					<?php if (!empty($page['navigation'])): ?>
						<?php print render($page['navigation']); ?>
					<?php endif; ?>
				 </div>
				 </div>
               </nav>
			  </div>
			<!--  </div>-->
			</div>
			 <!---------------------------------menu block-------------------------------------------------------------->
<!-- ----------------------------------------------------------content block--------------------------------------------->

  <div class="services_block_wrapper">
		<div class="container">
			<?php print render($page['content']); ?>
		</div>
	</div>

<!-- ----------------------------------------------------------content block--------------------------------------------->
<!-- ----------------------------------------------------------footer block--------------------------------------------->
<footer class="footer">
      <div class="footer1">
        <div class="container">
          	<?php
		/* Print custom block content */
		$block = module_invoke('block','block_view','1');
		print render($block['content']);
		?>
       </div>
     </div>
</footer>
<!-- ----------------------------------------------------------footer block--------------------------------------------->
