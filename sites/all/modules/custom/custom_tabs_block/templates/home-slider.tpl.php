<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach($output as $key => $row) {
     if($key == '0') { ?>
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <?php } else { ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $key; ?>"></li>
    <?php } } ?>
  </ol>
    <div class="carousel-inner">
<?php foreach($output as $key => $row) {
  if($key == '0'){ ?>
      <div class="item active">
  <?php } else { ?>
    <div class="item">
<?php } echo $row['content']; ?>
     <img src="<?php echo $row['url']; ?>">
    </div>
  <?php } ?>
  </div>
  <div class="cta_btn">
    <a class='inline' href="#inline_content222"><img src="/sites/all/themes/dtdc/images/track_stick.png"></a>
    <a class="colorbox-load" href="/ebooking/chose-country?width=500&height=350&iframe=true"><img src="/sites/all/themes/dtdc/images/ebook_stick.png"></a>
  <a class='inline' href="#requestdemo"><img src="/sites/all/themes/dtdc/images/request_demo.png"></a>
  </div>
  <!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
  </div>
