<div class="clearfix"></div>
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
        <?php
         $menu = menu_navigation_links('menu-footer-menu');
         print theme('links__menu_footer_menu', array('links' => $menu));
        ?>
        <div class="clearfix"></div>
        <p class="dt-copyright">&copy; Copyright DTDC Express Limited. All Rights Reserved</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> <a class="dt-mail-foot" href="mailto:customersupport@dtdc.com"><i class="glyphicon glyphicon-envelope"></i> customersupport@dtdc.com</a> </div>
    </div>
  </div>
</footer>