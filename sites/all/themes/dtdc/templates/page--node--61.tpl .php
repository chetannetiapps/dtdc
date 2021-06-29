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
// drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/custom.js');
//drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/jquery.min.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/bootstrap.min.js');
?>

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
        </div>
        <?php /* message block */ ?>
          <?php  print $messages; ?>
        <?php /* end message block */ ?>

     <?php /* menu */ ?>
     <div class="menu_block">
            <div class="main_menu col-md-12">

      <?php /* .btn-navbar is used as the toggle for collapsed navbar content */ ?>
      <nav class="navbar navbar-default">
        <div class="container">
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
            <div class="container">
            <?php /* <div class=" ">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
               <a class="navbar-brand" href="#"></a>

          </div>   */ ?>
          </div>
               </nav>
			  </div>
			<!--  </div>-->
			</div>
              <div class="getquote"><img src="../../sites/all/themes/dtdc/images/getquote.png"></div>

			 <!--@@TO DO :when ever path auto module is installed then this code need to be change-->
			  <?php if(arg(0)=='node' && arg(1)== is_numeric(arg(1))){?>
			 <div class="banner-img-wrapper"><img src="../../sites/all/themes/dtdc/images/banner_about.jpg"></div>
			 <?php }?>

     <?php /* node content for banner img and text */ ?>
    <?php /* <div class="container"> */ ?>
			 <div class="common-wrapper">

				  <div class="innner_content_block">
					  <div class="inner-page-content">
						<?php if (!empty($page['header'])): ?>
							<?php print render($page['header']); ?>
						<?php endif; ?>

						<?php //print render($page['content']); ?>

						</div>

						<div class="sub-menu-wrapper" id ="abt-menu">
							<div class="container">
								 <div id="fixed-header">
									 <div class="top-header">
								<?php if (!empty($page['highlighted'])): ?>

										<?php print render($page['highlighted']); ?>

								<?php endif; ?>
								</div>
								</div>
						</div>

		 </div>
				</div>

				<?php /* about us view-block */ ?>

				<div class='about-us-wrapper'>
				 <?php
				  $block = module_invoke('views', 'block_view', 'about_us_block-block');
				  print render($block['content']);
				  ?>
			   </div>
			</div>

		  <?php /* end about us view-block */ ?>
		<?php /*  </div> */ ?>

  </div>
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
     <?php print render($page['sidebar_second']); ?>
      <?php /*  </div> */ ?>

<footer class="footer">
  <div class="chat_block_cont">
           <div class="container">
              <div class="contact_detail col-md-3">
                <span class="contact">Contact Us : </span>
                <span>1800-99376829 </span>
                <span>1800-99376829</span></div>
              <div class="email col-md-4">
                <i class="fa fa-envelope-o"></i>
                <span>Email Us</span>
              </div>
              <div class="contact_chat col-md-4">

              </div>
           </div>
         </div>
  <?php print render($page['footer']); ?>
     <div class="footer-bottom">
           <div class="container">
             <div class="footer_left col-md-7">
               <div class="social_icons">
               <ul>
                  <li><a href="#"><img src="../../sites/all/themes/dtdc/images/fb.png"></a></li>
                  <li><a href="#"><img src="../../sites/all/themes/dtdc/images/in.png"></a></li>
                  <li><a href="#"><img src="../../sites/all/themes/dtdc/images/twit.png"></a></li>
                  <li><a href="#"><img src="../../sites/all/themes/dtdc/images/googl.png"></a></li>
                  <li><a href="#"><img src="../../sites/all/themes/dtdc/images/youtube.png"></a></li>
                  </ul>
                  <br/>
                  <ul class="footer_menu col-md-10">
                    <li><a href="#">About DTDC</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Corporate Compliance </a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Accolades</a></li>
                    <li><a href="#">Live Chat  </a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Download </a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#"> Privacy Policy</a></li>

                  </ul>
               </div>
             </div>
             <div class="footer_right col-md-4">
               <p> Copyright DTDC Express Limited . All Rights Reserved</p>
             </div>
           </div>
         </div>
</footer>
</div>
