<?php

/**
 * @file
 * template.php
 */
function dtdc_preprocess_page(&$vars) {
  if (isset($vars['node']->type)) {
        $nodetype = $vars['node']->type;
        $vars['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
   $alias_parts = explode('/', drupal_get_path_alias());
  /*if (count($alias_parts) && $alias_parts[0] == 'tracking') {
    $vars['theme_hook_suggestions'][] = 'page__dtdctracking';
  }			*/

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
function dtdc_js_alter(&$javascript) {
    $alias = drupal_get_path_alias($_GET['q']);
  if($alias == "about-us"){
    unset($javascript['//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js']);
    unset($javascript['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js']);
  }
  if($alias == "product-services"){
    //unset($javascript['//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js']);
    //unset($javascript['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js']);
      unset($javascript['http://dtdcxnsptjnpyd.devcloud.acquia-sites.com/misc/textarea.js']);
  }
}

/*
function dtdc_preprocess_html(&$variables)
{
    $cookiebot = array(
        '#type' => 'markup',
        '#markup' => '<script id="Cookiebot" src="http://consent.cookiebot.com/uc.js" data-cbid="70c10088-a025-4caf-848d-98ee7ea46821" type="text/javascript" ></script>' . "\n"
    );
    drupal_add_html_head($cookiebot, 'cookiebot_banner');
} */
