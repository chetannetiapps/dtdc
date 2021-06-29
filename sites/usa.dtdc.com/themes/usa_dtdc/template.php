<?php

/**
 * @file
 * template.php
 */
 function usa_dtdc_preprocess_page(&$vars) {


   // create template based on url aliases if path module is enabled
     if (module_exists('path')) {
       $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
       if ($alias != $_GET['q']) {
         $template_filename = 'page';
         foreach (explode('/', $alias) as $path_part) {
             // d7 contains two underscore _ after page.
            // During creating tpl file underscore (_) is converted to dash (-)   i.e page--gallery.tpl.php
   		$template_filename = $template_filename . '__' . str_replace("-", "_", $path_part);;
       $vars['theme_hook_suggestions'][] = $template_filename; // drupal 7
         }
       }
     }

 }

 /**
  * Implementation of template_preprocess_html().
  */
 function  usa_dtdc_preprocess_html(&$variables) {
   if (arg(0) == 'tracking') {
      $variables['head_title']= "Track Your Courier & Parcel Status - DTDC";
     $set_description = array(
       '#tag' => 'meta',
       '#attributes' => array(
         'name' => 'description',
         'content' => 'You can track DTDC couriers, consignments and parcel delivery status here. Know your courier status sent from USA to India, Europe or any other country',
       ),
     );
     $set_keywords = array(
       '#tag' => 'meta',
       '#attributes' => array(
         'name' => 'keywords',
         'content' => 'international shipping, courier from usa to india, courier to Europe from us, Parcel to india from usa',
       ),

     );
     drupal_add_html_head($set_description, 'set_description');
     drupal_add_html_head($set_keywords, 'set_keywords');
   }
 }

