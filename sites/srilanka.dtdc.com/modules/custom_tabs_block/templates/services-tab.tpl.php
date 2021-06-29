<?php 

//print_r($output);
foreach($output as $row){ 
if($row['id'] == "domestic"){
  $active_class="active";
} else {
	$active_class="";
}
?>
<div role="tabpanel" class="tab-pane <?php echo $active_class; ?>" id="<?php echo $row['id']; ?>">
<div class="media">
<div class="media-left"> <img class="media-object" src="<?php echo $row['url']; ?>" alt="<?php echo $row['title']; ?>">
<div class="clear"></div>
</div>
<div class="media-body">
<h3 class="media-heading"><?php echo $row['title']; ?></h3>
<div class="dt-line1"></div>
<?php echo $row['content']; ?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div></div>
<?php } ?>
