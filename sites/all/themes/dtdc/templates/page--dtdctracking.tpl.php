<div class="content_block">

      <h3 class="track_head">Tracking Results</h3>
         <div class="track-pane-main col-md-8">

<div class="main_detail_track">
         <div class="details_content">
<div class="panel-group" id="accordion">
<?php if(arg(1) == '*') {
} else { ?>
<h3>Summary Results <a class="pull-right track-ano" href="/track">Track Another Shipment</a></h3> <?php }?>
<div class="panel panel-default" id="panel1">
  <div class="panel-heading">
    <h4 class="panel-title">
		<?php if(arg(1) == '*') {
			} else { ?>
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      Shipment Details
      </a> <?php } ?>
    </h4>
  </div>


  <?php
  $i = 0;
  foreach ($trackRecords as $trackRecord) {
    if(isset($trackRecord['tracking-no'])) {
		$arg = arg(1);
		if(arg(1) == '*') { ?>
			<h3 class="trackmainhead">Track your shipment(s) movements across the world</h3>
			<p>Get the status of your shipment fastest way. Our online results give you real-time, detailed progress as your shipment moves through the DTDC network.</p>
			<p>Track your shipments either using DTDC AWB No. or corresponding reference number.  You can track upto 25 shipments together, separated by Comma(,);</p>
		<?php }
		else {
			echo '<iframe  class="iframe-class" src="http://track.dtdc.com/ctbs-tracking/customerInterface.tr?submitName=showCITrackingDetails&cnNo='.$trackRecord['tracking-no'].'&cType=Consignment" height="800"  id="dom-tracking"></iframe>';
		}
    }
    print_r($trackRecord);
     else {
		$noofevents = count($trackRecord['Event']);
		//~ echo '<pre>';
		//~ print_r($trackRecord);
		//~ echo '</pre>';
		//~ exit;
		$arg = arg(1);
		if(arg(1) == '*') { ?>
			<h3 class="trackmainhead">Track your shipment(s) movements across the world</h3>
			<p>Get the status of your shipment fastest way. Our online results give you real-time, detailed progress as your shipment moves through the DTDC network.</p>
			<p>Track your shipments either using DTDC AWB No. or corresponding reference number.  You can track upto 25 shipments together, separated by Comma(,);</p>
		<?php }
		else {
  ?>
  <table id="box-table-a" summary="Tracking Result" class="tmargin10 lflt">
	<tbody>
		<tr>
      <?php print_r($trackRecord['Event'][0]);?>
			<td nowrap="nowrap"><strong>AWB / Ref. No.</strong><br> <?php  print $trackRecord['Event'][0]['ReferenceNumber']; ?></td>
			<td nowrap="nowrap"><strong>Status</strong><br> <?php print $trackRecord['Event'][$noofevents - 1]['EventName']; ?> </td>
            <td nowrap="nowrap"><strong>Date Time<br></strong><?php print $trackRecord['Event'][$noofevents - 1]['FormatedEventDateTime']; ?></td>    
        </tr>
        <tr class="altRow">
			<td valign="top"><strong>Origin</strong><br> <?php echo $trackRecord['Event'][0]['OriginEntity'].', '.$trackRecord['Event'][0]['UpdateEntityCountryName']; ?></td>
            <td valign="top"><strong>No pcs</strong><br> <?php !(empty($trackRecord['Event'][0]['Pcs'])) ? print $trackRecord['Event'][0]['Pcs'] : print 'NA'; ?> </td>
            <td valign="top"><strong>Weight</strong><br> <?php !(empty($trackRecord['Event'][0]['Weight'])) ? print $trackRecord['Event'][0]['Weight'] : print 'NA'; ?></td>
		</tr>
        <tr class="altRow">
			<td valign="top"><strong>Destination</strong><br> <?php !(empty($trackRecord['Event'][0]['Destination'])) ? print $trackRecord['Event'][0]['Destination'] : print 'NA'; ?></td>
            <td valign="top"></td>
            <td valign="top"></td>
        </tr>
	</tbody>
  </table>
  <div class="panel panel-default separate" id="panel5">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="show-history" id="show<?php print $i; ?>"data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
        Show Shipment Travel History
        </a>
      </h4>
    </div>
    <div class="panel-collapse collapse" id="history<?php print $i; ?>">
      <div class="panel-body">
        <div class="col-md-12 shipment-travel">
			<?php if($trackRecord['Event'][$noofevents - 1]['EventID'] == 247) {
				$trackRecord['Event'][$noofevents - 1]['EventID'] = 3;
			}?>
          <img src="/sites/default/files/pictures/img-rev<?php print $trackRecord['Event'][$noofevents - 1]['EventID']; ?>.png">
        </div>
        <div class="col-md-12 panel-oddevn shipment-travel1">
          <div class="col-md-4">Date</div>
          <div class="col-md-4">Activity</div>
          <div class="col-md-4">Location</div>
        </div>
        <?php
          foreach ($trackRecord['Event'] as $history) {
			  //~ echo '<pre>';
			  //~ print_r($history);
			  //~ echo '</pre>';
			  //exit;*/
         ?>
        <div class="col-md-12 panel-even">
          <div class="col-md-4"> <?php print $history['FormatedEventDateTime']; ?> </div>
          <div class="col-md-4"><?php print $history['EventName']; ?><span class="book_icon"></span></div>
          <div class="col-md-4">
			  <?php
					//$UpdateEntityObject = node_load_by_title($history['UpdateEntityID'], 'tracking_entity');
					//print $history['OriginEntity'];
					//print $UpdateEntityObject->field_ename['und'][0]['value'];
					if($history['EventID'] == 1) {
						if(!empty($history['UpdateEntityLocationName'])) {
							print $history['UpdateEntityLocationName'].'</br>';
							print 'Signed by : '.$history['Remarks'];
						}
						else {
							print 'NA </br>';
							print 'Signed by : '.$history['Remarks'];
						}
					}
					else {
						if(!empty($history['UpdateEntityLocationName'])) {
							print $history['UpdateEntityLocationName'];
						}
						else {
							Print 'NA';
						}
					}
			  ?>
          </div>
        </div>
        <?php
          }
          ?>
      </div>
    </div>
  </div><br/>
<?php
      $i++;
    }
   }
  }
?>
        </div>
<br>

</div>
</div>

<?php /*
Post Info
*/ 
  ?>

    </div>



    </div>
     
    	 <div class="trackform-pane col-md-4 col-sm-7 col-xs-12">
         <div class="trackform">
        <?php
          $block = module_invoke('tracking', 'block_view', 'tracking_locate_block_ano');
              print render($block['content']);

          print render($page['content']); ?>
        <?php /*
        <p class="track_note"><b>Note :</b> To track your consignment please enter any combination of up to 25 DTDC tracking numbers, seperated by comma</p>
        */ ?>
         </div>
			</div>


  </div>
<script>
jQuery(document).ready(function($){
  $('.show-history').click(function(){
      var thisID = $(this).attr('id');
      thisID = thisID.match(/\d+$/)[0];
      if($('div#history'+thisID).hasClass('in')){
        $('div#history'+thisID).removeClass('in');
        $('div#history'+thisID).addClass('collapse');
      }
      else{
        $('div#history'+thisID).removeClass('collapse');
        $('div#history'+thisID).addClass('in')
      }
      return false;
    });
//   $('.collapse').collapse({
//   toggle: false
// })
})
</script>
