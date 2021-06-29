

<div class="dd-home">
<header>
  <div class="container-fluid">
    <div class="row ">
      <div class="container">
        <div class="col-lg-12 col-md-12">
          <div class="row">
       <nav role="navigation" class="navbar navbar-default dd-nav pull-left">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <div class="row top_row">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span aria-hidden="true"></span> Choose Country <span class="caret"></span></button>
                    <ul class="dropdown-menu">
            <li class="gl"><a href="http://www.dtdc.com/"><span class="glyphicon glyphicon-globe">&nbsp;</span>Global</a></li>
              <li class="in"><a href="http://dtdc.in/"><span>&nbsp;</span>India</a></li>
                      <li class="au"><a href="http://dtdcaustralia.com.au/"><span>&nbsp;</span>Australia</a></li>
                      <li class="bl"><a href="http://bangladesh.dtdc.com/"><span>&nbsp;</span>Bangladesh</a></li>
                      <li class="ca"><a href="http://canada.dtdc.com/"><span>&nbsp;</span>Canada</a></li>
                      <li class="ch"><a href="http://china.dtdc.com/"><span>&nbsp;</span>China</a></li>
<!-- <li class="de"><a href="http://de.dtdc.com/"><span>&nbsp;</span>Germany</a></li> -->
                      <li class="hk"><a href="http://hongkong.dtdc.com/"><span>&nbsp;</span>Hongkong</a></li> 
 <li class="isrl"><a href="https://dtdc.co.il/"><span>&nbsp;</span>Israel</a></li>
                      <li class="kenya"><a href="http://Kenya.dtdc.com/"><span>&nbsp;</span>Kenya</a></li>
                      <li class="malaysia"><a href="http://malaysia.dtdc.com/"><span>&nbsp;</span>Malaysia</a></li>
                      <li class="ne"><a href="http://nepal.dtdc.com/"><span>&nbsp;</span>Nepal</a></li>
                    <!-- <li class="oman"><a href="http://oman.dtdc.com/"><span>&nbsp;</span>Oman</a></li> -->
                      <!-- <li class="nz"><a href="http://nz.dtdc.com/"><span>&nbsp;</span>New Zealand</a></li>
                      <li class="pakistan"><a href="http://pakistan.dtdc.com/"><span>&nbsp;</span>Pakistan</a></li> -->
                      <li class="sg"><a href="http://singapore.dtdc.com/"><span>&nbsp;</span>Singapore</a></li>
                      <li class="sl"><a href="http://srilanka.dtdc.com/"><span>&nbsp;</span>Sri Lanka</a></li>
                      <li class="du"><a href="http://uae.dtdc.com/"><span>&nbsp;</span>United Arab Emirates</a></li>
                      <li class="uk"><a href="http://uk.dtdc.com/"><span>&nbsp;</span>United Kingdom</a></li>
                      <li class="us"><a href="http://usa.dtdc.com/"><span>&nbsp;</span>United States</a></li>
                    </ul>
            </div>
            <?php
              $block = module_invoke('search', 'block_view', 'form');
              print render($block);
            ?>
          </div>
          <?php if (!empty($page['navigation'])): ?>
          <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </div>
    </nav>
          <?php if ($logo): ?>
          <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive pull-right" />
          </a>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
</div>

<div class="dd-home">
<div class="container-fluid">
  <?php if (!empty($page['header'])): ?>
  <?php print render($page['header']); ?>
  <?php endif; ?>
  <div class="dt-home-search">
  <!-- <div class="dt-ebook"><a href="http://ws01.ffdx.net/customer_v2/index.aspx?token=68-0A-A0-62-5A-38-17-75-20-6A-9D-59-F2-C5-F1-B4">E-BOOKING</a></div> -->
  <div class="dt-track-ship">TRACK YOUR SHIPMENT</div>
  <div class="clear"></div>
  <div class="track-form-wrap1">
  <div class='form-inline'>
  <?php
  $block = module_invoke('malaysia_tracking', 'block_view', 'malaysia_tracking_block');
  print render($block);
  ?>
  </div>
  <div class="clear"></div>
  </div>
  </div>
</div>
<?php print render($page['promo_offer']);?>
<div class="container-fluid services_block">
  <div class="row">
    <div class="container">
      <h2>Services</h2>
      <p class="tag text-center">Read on for the range of DTDC's line of services</p>
      <?php
      $block = module_invoke("views","block_view","services_front_block-block");
      print render($block['content']);
      ?>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="clear"></div>
<footer>
  <div class="container-fluid dt-footer-bottom">
    <div class="container">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="dt-foot-social">
          <a href="https://www.facebook.com/dtdcsingapore/" target="_blank"><img src="/sites/bangladesh.dtdc.com/themes/bangladesh_dtdc/images/facebook.png" alt="" title=""/></a>
          <a href="https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd" target="_blank"><img src="/sites/bangladesh.dtdc.com/themes/bangladesh_dtdc/images/linkedin.png" alt="" title=""/> </a>
          <a href="https://twitter.com/DTDC_Singapore" target="_blank"><img src="/sites/bangladesh.dtdc.com/themes/bangladesh_dtdc/images/twitter.png" alt="" title=""/> </a>
          <a href="https://plus.google.com/104727912127336791002/posts" target="_blank"><img src="/sites/bangladesh.dtdc.com/themes/bangladesh_dtdc/images/googleplus.png" alt="" title=""/></a>
          <a href="https://www.youtube.com/user/dtdcindia" target="_blank"><img src="/sites/bangladesh.dtdc.com/themes/bangladesh_dtdc/images/youtube.png" alt="" title=""/></a>
        </div>
        <div class="clearfix"></div>
            <?php print render($page['footer']);?>
        <div class="clearfix"></div>
        <p class="dt-copyright">&copy; Copyright DTDC Express Limited. All Rights Reserved</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
<!--//--><![CDATA[// ><!--
window.__lc = window.__lc || {};
window.__lc.license = 6927481;
(function() {
  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
//--><!]]>
</script>
<!-- End of LiveChat code -->
 <script type="text/javascript">
 jQuery(document).ready(function() {
  if (jQuery('#popup-message').length > 0) {
  jQuery.colorbox({ href: '#popup-message', width:"61%", inline: true, scrolling: false, opacity:.8 });
  }
 });
</script>

<!--- Start custom popup -->
<div style="display: none;">
  <div id="popup-message">
    <?php
      $block = module_invoke('block', 'block_view', '26');
      print render($block['content']);
      print render($page['popup']);    //for home page pop-up
   ?>
  </div>
</div> 