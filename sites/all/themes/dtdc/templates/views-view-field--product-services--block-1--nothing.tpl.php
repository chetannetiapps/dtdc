<?php
$node_object = node_load($row->nid);
$title = $node_object->title;
$color = strtolower(str_replace(' ', '', ($title)));
  $id_title = $node_object->field_sub_desc['und'][0]['value'];
$id =  "product-services#".strtolower(str_replace(' ', '', ($id_title)));
$img_id = $node_object->field_product_icon_img['und'][0]['fid'];
$file = file_load($img_id);
$uri = $file->uri;
$url = file_create_url($uri);
?>

<div class="service_wrap col-lg-6 col-md-6 col-sm-6 col-xs-12">
  <div class="gray-bg <?php echo $color; ?>">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
      <img src=<?php echo $url; ?> class="img-responsive pull-left left"/> </div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 dd-cont">
          <h4 class="med-heading"><?php echo $title; ?></h4>
				  <p class="dd-para"><?php echo $node_object->field_service_sub_heading['und'][0]['value'];?></p>
				  <a href=<?php echo $id;?> class="dd-read-more">Read More ></a>
		    </div>
    </div>
</div>
