<?php
/**
 * @file
 * Do super awesome thing.
 */

$plugin = array(
  'form' => 'MYMODULE_convert_latlon_wkt_form',
  // Optional validation callback.
  'validate' => 'MYMODULE_convert_latlon_wkt_validate',
  'callback' => 'MYMODULE_convert_latlon_wkt_callback',
  'name' => 'Convert LatLon to WKT',
  'multi' => 'loop',
  'category' => 'Geo',
);

function MYMODULE_convert_latlon_wkt_form($importer, $element_key, $settings) {
  $form = array();
  $form['help']['#value'] = t('Converts Lattitude / Longitude value to a Well Know Text Point.');

  return $form;
}

function MYMODULE_convert_latlon_wkt_validate(&$settings) {
  // Validate $settings.
}

function MYMODULE_convert_latlon_wkt_callback($source, $item_key, $element_key, &$field, $settings) {
  $field = MYMODULE_convert_latlon_wkt($field);
}

/**
 * Convert LatLon value to WKT point
 *
 * @param $latlon string
 * @return $wkt string
 */
function MYMODULE_convert_latlon_wkt($latlon) {
  if (!is_array($latlon)) {
    $latlon = explode(',', $latlon);
  }
  $wkt = 'POINT(' . $latlon[0] . ' ' . $latlon[1] . ')';

  return $wkt;
}
?>