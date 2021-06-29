
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

 <?php /* <header id="navbar" role="banner" class="<?php //print $navbar_classes; ?>">-->
  <div class="container"> */ ?>
    <?php /* <div class="navbar-header"> */ ?>

		 <div class="menu_block">
            <div class="main_menu col-md-12">

			<?php /* .btn-navbar is used as the toggle for collapsed navbar content */ ?>
			<nav class="navbar navbar-default">
				<div class="container">
					<?php if (!empty($page['navigation'])): ?>
						<?php print render($page['navigation']); ?>
					<?php endif; ?>
					  <div class="container">

					</div>
               </nav>
			  </div>
			<<?php /* </div> */ ?>
			</div>


           <?php /* <div class="container"> */ ?>
              <div class="getquote"><img src="../sites/all/themes/dtdc/images/getquote.png"></div>



              </div>

			<?php /* </div> */ ?>

<?php /* </div> */ ?>
<!--</header>-->

<!--<div class="main-container container">-->

   <div class="container">
  <div class="row">
      <?php /* <section<?php print $content_column_class; ?>>  */ ?>
      <div class="content_block">

			   <?php
			   if(drupal_is_front_page()) {
					unset($page['content']['system_main']['default_message']);
					}

				 //print render($page['content']); ?>


		</div>
    <?php /* </section> */ ?>

</div>
  </div>
  </div>

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php //print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <div class="services_block_wrapper">
		<div class="container">
			<?php  $block = module_invoke('views', 'block_view', 'product_services-block_2');
							print render($block['content']); ?>
		 </div>
     </div>
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
