<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.

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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >

<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="/sites/all/themes/dtdc/js/datamaps.world.js"></script>

<?php /*
Header block
*/ ?>
    <style>
      #map img{max-width:none}
    </style>
    <div class="main-container">
     <div class="header_block">
        <div class="container">
    <div class="header_main_block col-md-12">
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

          </div>        </div>


		 <div class="menu_block">
        <div class="main_menu col-md-12">

        <?php /*
        .btn-navbar is used as the toggle for collapsed navbar content
        */ ?>
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
			</div>

     <?php /*
     node content for banner img and text-->
     */ ?>
		<div class='network'>
			<div class='container'>
				<p>The biggest strength for DTDC has been its uniqueness of creating a business model is based on its network partners. The highly acclaimed organization for running one of the fastest growing “Franchisee Business Model”, it has successfully developed the largest network of express courier business in India and replicated the same model to various geographies. Today DTDC has direct presence in 20 countries and a network in over 240 countries.</p>
			</div>
		</div>

      <?php print render( $page['content']);?>
  </div>

<footer class="footer">

      <div class="footer1">
        <div class="container">
          	<?php
		$block = module_invoke('block','block_view','21');
		print render($block['content']);
		?>
       </div>
     </div>

 </footer>
