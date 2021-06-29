<?php
/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or
 *   'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see bootstrap_preprocess_html()
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 *
 * @ingroup themeable
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="msvalidate.01" content="C4763968AB3D56D11F5A4DADD03E6157" />
  <meta name="google-site-verification" content="FbYIyvGpXBRDRzLypr4aY4Ah4zaiLewnwBy7jd4xECY"/>
   <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="04ef833b-99f3-403e-b805-41e0372d9c04" type="text/javascript" data-blockingmode="auto"></script>  
 <?php print $head; ?>
  <title><?php print $head_title; ?></title>
 
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-77916991-2', 'auto');
	ga('send', 'pageview');
  </script>

  <?php print $scripts; ?>
   <script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.track-event').click(function() {
      //alert('hi');
      ga('send', 'event', 'Booking', 'E-Booking');
    });
});
</script>
<!--  <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="70c10088-a025-4caf-848d-98ee7ea46821" type="text/javascript" async></script> -->
<!--New script tags Schema Suggestion -->
<script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "Organization",
"address": {
    "@type": "PostalAddress",
    "addressLocality": "London, United kingdom",
    "postalCode": "TW14 0AN",
    "streetAddress": "DTDC Courier & Cargo UK Ltd, Unit 4 , Marlin Park, Central Way"
  },
    "url": "https://uk.dtdc.com/",
    "logo": "https://uk.dtdc.com/sites/usa.dtdc.com/themes/usa_dtdc/images/dtdc_logo.png",
    "name": "DTDC UK",
    "sameAs":
    [
    "https://www.facebook.com/DTDC.UK.Official/",
    "https://twitter.com/DTDC_UK",
    "https://plus.google.com/+DTDCExpressLimitedOfficial",
    "https://www.linkedin.com/company/dtdc-courier-&-cargo-pvt-ltd"
    ],
    "contactPoint":
    [
    { "@type" : "ContactPoint",
    "telephone" : "+44 02034117333",
    "contactType" : "customer service",
    "areaServed" : "United Kingdom"
    }
    ]
    }

</script>
<!--End of the script tags Schema Suggestion -->
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PHF3NR');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105009698-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-149008556-1');
</script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148074848-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-148074848-1');
  </script>
<meta name="google-site-verification" content="ffhhrU2A3hh2uEQoQ40n9sqi_ui0Q3Ihsg1YN2AIz9U" />  
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframesrc="https://www.googletagmanager.com/ns.html?id=GTM-PHF3NR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
