<?php
/**

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
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/scrollIt.min.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/scrollIt.js');
//drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/scrolltop.js');
drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/aboutus.js');

//drupal_add_js(drupal_get_path('theme', 'dtdc') . '/js/bootstrap.min.js');
?>
<script>
	jQuery(document).ready(function($){

	$(function($) { $.scrollIt(); });
	});
</script>
  <div class="main-container">
	 <div class="main_header">
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

          <?php  print $messages; ?>

     <div class="menu_block">
            <div class="main_menu col-md-12">

			<?php /* .btn-navbar is used as the toggle for collapsed navbar content */ ?>
				  <nav class="navbar navbar-default">
						<div class="container">
						  <?php if (!empty($page['navigation'])): ?>
							<?php print render($page['navigation']); ?>
						  <?php endif; ?>

						  </div>
				   </nav>

						<?php /* </div> */ ?>
			</div>
    </div>


    <?php /* <div class="container"> */ ?>
 <div class="common-wrapper" id="career-content">

	  <div class="innner_content_block">
			 <div class="inner-page-content">
					<?php if (!empty($page['header'])): ?>
							<?php print render($page['header']); ?>
					<?php endif; ?>

					<?php print render($page['content']); ?>

				</div>


		         </div>
		    </div>

				<?php /* about us view-block */ ?>

</div>

		  <?php /* end about us view-block */ ?>
		<?php /* </div> */ ?>

  </div>
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

     <?php print render($page['sidebar_second']); ?>
<?php /* </div> */ ?>
<footer class="footer">
      <div class="footer1">
        <div class="container">
          	<?php
		/* Print custom block content */
		$block = module_invoke('block','block_view','21');
		print render($block['content']);
		?>
       </div>
     </div>
</footer>
