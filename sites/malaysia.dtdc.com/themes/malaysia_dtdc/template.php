<?php

/**
 * @file
 * template.php
 */
function malaysia_dtdc_preprocess_page(&$vars) {


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