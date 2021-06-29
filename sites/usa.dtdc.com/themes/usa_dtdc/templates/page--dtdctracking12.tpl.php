<div class="content_block">
<!--<div class="main-container container">-->
   <!-- /#page-header -->

        <!--<section<?php print $content_column_class; ?>>    test -->

      <h3 class="track_head">Tracking Results</h3>
         <div id="container" style="height: 450px;
    min-width: 650px;
    max-width: 650px;
    float: left;
    width: 573px;
    padding: 10px;
    border: 1px solid #ccc;">
    </div>
			   <div class="trackform">
				<?php
				  $block = module_invoke('tracking', 'block_view', 'tracking_locate_block_ano');
							print render($block['content']);

				  print render($page['content']); ?>
         <p class="track_note"><b>Note :</b> To track your consignment please enter any combination of up to 25 DTDC tracking numbers, seperated by comma</p>

         </div>
         <div class="main_detail_track">
         <div class="details_content">

<div class="panel-group" id="accordion">
<!--changed-->
<h3>Summary Results</h3>
   <div class="panel panel-default" id="panel1">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <span class="glyphicon glyphicon-minus"></span> Shipment Details
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Origin:</div><div class="col-md-8"><?php echo $event[0]['OriginEntity'].', '.$event[0]['UpdateEntityCountryName']; ?></div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Booking Date</div><div class="col-md-8"><?php print $event[0]['FormatedEventDateTime']; ?></div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Status</div><div class="col-md-8"><?php print $event[0]['EventName']; ?></div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Destination:</div><div class="col-md-8">NA</div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Status Date</div><div class="col-md-8"><?php print $event[$eventCount - 1]['FormatedEventDateTime']; ?></div>
        </div>

      </div>
    </div>
  </div>
 <!-- <div class="panel panel-default" id="panel2">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <span class="glyphicon glyphicon-plus"></span> Shipment Facts
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">No. of Pieces</div><div class="col-md-8">1</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Doc Type</div><div class="col-md-8">Parcel</div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Service Type</div><div class="col-md-8"></div>
        </div>

      </div>
    </div>
  </div>-->


<!-- <div class="panel panel-default" id="panel2">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <span class="glyphicon glyphicon-plus"></span> Receiver's Details
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">No. of Pieces</div><div class="col-md-8">1</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Doc Type</div><div class="col-md-8">Parcel</div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Service Type</div><div class="col-md-8"></div>
        </div> </div>
    </div>
  </div> -->



  <!-- <div class="panel panel-default" id="panel3">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <span class="glyphicon glyphicon-plus"></span> Receiver's Details
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
         <div class="col-md-12 panel-odd">
          <div class="col-md-4">Received By</div><div class="col-md-8">ITZHAK</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Relationship</div><div class="col-md-8"></div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Contact Number</div><div class="col-md-8"></div>
        </div> </div>
    </div>
  </div> -->
  <!-- <div class="panel panel-default" id="panel4">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
         <span class="glyphicon glyphicon-plus"></span> Agent's Details
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="col-md-12 panel-odd">
          <div class="col-md-4">Agent Name</div><div class="col-md-8">DTDC-SELF SECTOR-MUM</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4">Agent Type</div><div class="col-md-8">DT</div>
        </div>
      </div>
    </div>
  </div> -->
  <div class="panel panel-default" id="panel5">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
         <span class="glyphicon glyphicon-plus"></span> Shipment Travel History
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="col-md-12 panel-oddevn">
          <div class="col-md-4">Status</div>
          <div class="col-md-4">Date & Time</div>
          <div class="col-md-4">Location</div>
        </div>
        <?php
        foreach ($event as $history) {
        ?>
        <div class="col-md-12 panel-even">
          <div class="col-md-4"><span class="book_icon"></span> <?php print $history['EventName']; ?> </div>
          <div class="col-md-4"><?php print $history['FormatedEventDateTime']; ?></div>
           <div class="col-md-4"><?php print $history['OriginEntity']; ?></div>
        </div>
        <?php
        }
        ?>
        <!-- <div class="col-md-12 panel-odd">
          <div class="col-md-4"><span class="ship_icon"></span> Shipped </div>
          <div class="col-md-4">Monday, June 29, 2015 , 09:38 PM</div>
           <div class="col-md-4">GHATKOPAR BRANCH</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4"><span class="pendin_icon"></span> pending</div>
          <div class="col-md-4">Monday, June 29, 2015 , 09:38 PM</div>
           <div class="col-md-4">GHATKOPAR BRANCH</div>
        </div>
        <div class="col-md-12 panel-odd">
          <div class="col-md-4"><span class="deliverd_icon"></span> delivered</div>
          <div class="col-md-4">Monday, June 29, 2015 , 09:38 PM</div>
           <div class="col-md-4">GHATKOPAR BRANCH</div>
        </div>
        <div class="col-md-12 panel-even">
          <div class="col-md-4"><span class="book_icon"></span>Booked</div>
          <div class="col-md-4">Monday, June 29, 2015 , 09:38 PM</div>
           <div class="col-md-4">GHATKOPAR BRANCH</div>
        </div> -->
      </div>
    </div>
  </div>

</div>
</div>



<!-- Post Info -->

    </div>
    <!--detail div -->

    <!--</section>-->


  </div>
<script type="text/javascript">
jQuery(document).ready(function($){
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Tracking Status'
        },
        plotOptions: {
           series: {
                lineColor: '#303030'
            },
            pie: {
                innerSize: 100,
                depth: 45,
                borderWidth: 4,
                borderColor: "white"
            }
        },
        tooltip: { enabled: false },
        exporting: { enabled: false},
        colors :[<?php echo $colorsString; ?>],
        series: [{
            name: 'Delivered amount',
            data: [
                ['Documentaion Prepared',1],
                ['Booking Arranged',2],
                ['Collected', 3],
                ['In Transit', 6],
                ['Arrived at Destination', 6],
                ['Out Of Delivery', 5],
                ['Delivered', 4]
            ]
        }]
    });
});


$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
});
});
</script>
