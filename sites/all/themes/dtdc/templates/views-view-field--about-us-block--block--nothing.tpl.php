<?php
$node_object = node_load($row->nid);
$title = $node_object->title;
?>
<div  class="col-lg-12 col-sm-12 col-md-12 col-xs-12 dt-vision-content">
          <h2><span><?php echo $title; ?></span></h2>
     <div class="clearfix dt-marg"></div>
  <?php echo $node_object->body['und'][0]['value']; ?>

</div>
<div class="clearfix"></div>
