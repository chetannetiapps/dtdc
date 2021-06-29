<div class="content_block">
<!--<div class="main-container trc container">-->
   <!-- /#page-header -->

        <!--<section<?php print $content_column_class; ?>>    test -->

      <h3 class="track_head">Tracking Results</h3>
         <div class="container" style="height: auto;
    min-width: 66%;
    max-width: 66%;
    float: left;

    padding: 10px;">


<div class="main_detail_track">
         <div class="details_content">

<div class="panel-group" id="accordion">
<!--changed-->
<h3>Summary Results</h3>
<div class="panel panel-default" id="panel1">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
      Shipment Details
      </a>
    </h4>
  </div>


  <?php
  $i = 0;
  foreach ($trackRecords as $trackRecord) {
    if(isset($trackRecord['tracking-no'])) {
      echo '<iframe  class="iframe-class" src="http://dtdc.in/tracking/tracking_results_api.asp?strCnno='.$trackRecord['tracking-no'].'&Ttype=awb_no" height="1225"  id="dom-tracking"></iframe>';
    }
    else {
    ?>

  <?php
    $noofevents = count($trackRecord['Event']);
  ?>
  <div id="collapseOne" class="panel-collapse collapse in">
    <div class="panel-body">
      <div class="col-md-12 panel-odd shipment-details">
        <div class="col-md-3">AWB / Ref. No.</div>
        <div class="col-md-3">Status</div>
        <div class="col-md-3">Date Time</div>
        <div class="col-md-3">Origin</div>
      </div>
      <div class="col-md-12 shipment-details1">
        <div class="col-md-3"><?php print $trackRecord['Event'][0]['ReferenceNumber']; ?></div>
        <div class="col-md-3"><?php print $trackRecord['Event'][0]['EventName']; ?></div>
        <div class="col-md-3"><?php print $trackRecord['Event'][$noofevents - 1]['FormatedEventDateTime']; ?></div>
        <div class="col-md-3"><?php echo $trackRecord['Event'][0]['OriginEntity'].', '.$trackRecord['Event'][0]['UpdateEntityCountryName']; ?></div>
      </div>
    </div>
  </div>
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
          <img src="/sites/default/files/pictures/img-rev<?php print $trackRecord['Event'][$noofevents - 1]['EventID']; ?>.png">
        </div>
        <div class="col-md-12 panel-oddevn shipment-travel1">
          <div class="col-md-4">Date</div>
          <div class="col-md-4">Activity</div>
          <div class="col-md-4">Location</div>
        </div>
        <?php
          foreach ($trackRecord['Event'] as $history) {
          ?>
        <div class="col-md-12 panel-even">
          <div class="col-md-4"> <?php print $history['FormatedEventDateTime']; ?> </div>
          <div class="col-md-4"><?php print $history['EventName']; ?><span class="book_icon"></span></div>
          <div class="col-md-4"><?php print $history['OriginEntity']; ?></div>
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
?>
        </div>
<br>
<!-- <div class="panel panel-default" id="panel1">
  <div id="collapseOne" class="panel-collapse collapse in">
    <div class="panel-body">
      <div class="col-md-12 panel-odd shipment-details">
        <div class="col-md-3">AWB / Ref. No.</div>
        <div class="col-md-3">Status</div>
        <div class="col-md-3">Date Time</div>
        <div class="col-md-3">Location</div>
      </div>
      <div class="col-md-12 shipment-details1">
        <div class="col-md-3">N95848917</div>
        <div class="col-md-3">DELIVERED</div>
        <div class="col-md-3">Fri, Jul,03, 2015 12:42 PM</div>
        <div class="col-md-3">kalyanagar</div>
      </div>
    </div>
  </div>
</div>
<div class="panel panel-default" id="panel6">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
      Shipment Travel History
      </a>
    </h4>
  </div>
  <div id="collapseSix" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="col-md-12 shipment-travel">
        <img src="/sites/default/files/pictures/img-rev1.png">
      </div>
      <div class="col-md-12 panel-oddevn shipment-travel1">
        <div class="col-md-4">Date</div>
        <div class="col-md-4">Activity</div>
        <div class="col-md-4">Location</div>
      </div>
      <?php
        //foreach ($event as $history) {
        ?>
      <div class="col-md-12 panel-even">
        <div class="col-md-4"> Tuesday, June 30, 2015 </div>
        <div class="col-md-4">Succesfully deliverd to self<span class="book_icon"></span></div>
        <div class="col-md-4"><?php //print $history['OriginEntity']; ?></div>
      </div>
      <?php
        //}
        ?>
    </div>
  </div>
</div> -->
</div>
</div>



<!-- Post Info -->

    </div>



    </div>
         <div class="trackform">
        <?php
          $block = module_invoke('tracking', 'block_view', 'tracking_locate_block_ano');
              print render($block['content']);

          print render($page['content']); ?>
         <p class="track_note"><b>Note :</b> To track your consignment please enter any combination of up to 25 DTDC tracking numbers, seperated by comma</p>

         </div>

    <!--detail div -->

    <!--</section>-->


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
