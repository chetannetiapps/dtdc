<?php
$node_datails = node_load($row->nid);
//print_r($node_datails);
$url = $node_datails->field_video_url['und'][0]['value'];
?>
<iframe width="100%" height="380px" src="<?php echo $url; ?>?&rel=0&autohide=1" frameborder="0" allowfullscreen></iframe>
