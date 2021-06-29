<?php
//$item = menu_get_item();
$tree = menu_tree_all_data('main-menu');
dpm($tree);
echo '<pre>';

//print_r(menu_tree_all_data(variable_get('Services', 'main-menu'), $link = NULL, $max_depth = 2));
//print_r(menu_get_menus($all = FALSE));
echo '</pre>';
?>


  <ul class="menu nav navbar-nav">
  	<?php 
  		foreach($tree as $key=>$value){
  			foreach($value as $subkey => $subvalue){
	  			if($subkey == "link"){
	  					
		  				echo '<li><a href="'.$subvalue['link_path'].'">'.$subvalue['link_title'].'</a></li>';  			
		  		}
	  		}

  		} 
  	?>
	 	
  	  
	   <!--  <li><a href="#">CSS</a></li>
	    <li><a href="#">JavaScript</a></li> -->
  </ul>


