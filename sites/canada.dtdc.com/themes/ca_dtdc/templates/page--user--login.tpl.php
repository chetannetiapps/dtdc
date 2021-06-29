 <div class="main-container">
     <div class="header_block">
        <div class="container">
          <div class="header_main_block col-md-12">
            <div class="header-left pull-right col-md-6">
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
   
 
		 <div class="menu_block">
            <div class="main_menu col-md-12">
				
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<nav class="navbar navbar-default">
				<div class="container">
					<?php if (!empty($page['navigation'])): ?>
						<?php print render($page['navigation']); ?>
					<?php endif; ?>
					 	   
               </nav>      
			  </div>
			<!--  </div>-->
			</div>


 
	   
      <div class="login-block-main">
		   <div class="container">
			
			   <div class="col-md-12 login-block-cont-main">
					<?php print $messages; ?>
					<h1><?php $title = t('Login to DTDC'); echo $title; ?></h1>
					<div class="login_content">
							<?php print render($page['content']); ?>
							
					</div>
			   </div>
			   
			</div>
	   </div>
      

<footer class="footer">
      <div class="footer1">
        <div class="container">
          	<?php
		/* Print custom block content */
		$block = module_invoke('block','block_view','2');
		print render($block['content']);
		?>
       </div> 
     </div>
</footer>
