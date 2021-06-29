<?php

/**
 * @file
 * Provides integration with Feeds module (http://drupal.org/project/feeds)
 */


/**
 * Implements hook_feeds_node_processor_targets_alter().
 */
function geolocation_feeds_processor_targets_alter(&$targets, $entity_type,
  $bundle_name) {
    foreach (field_info_instances($entity_type, $bundle_name) as
      $name => $instance) {
    $info = field_info_field($name);
    if ($info['type'] == 'geolocation_latlng') {
      $targets[$info['field_name'] . ':lat'] = array(
        'name' => t($instance['label'] . ' Latitude'),
        'callback' => 'geolocation_set_target_simple',
        'real_target' => $info['field_name'],
      );
      $targets[$info['field_name'] . ':lng'] = array(
        'name' => t($instance['label'] . ' Longitude'),
        'callback' => 'geolocation_set_target_simple',
        'real_target' => $info['field_name'],
      );
    }
  }
}

/**
 * Example callback specified in hook_feeds_processor_targets_alter().
 *
 * @param $source
 *   Field mapper source settings.
 * @param $entity
 *   An entity object, for instance a node object.
 * @param $target
 *   A string identifying the target on the node.
 * @param $value
 *   The value to populate the target with.
 *
 */
function geolocation_set_target_simple($source, $entity, $target, $value) {
  list($field_name, $sub_field) = explode(':', $target, 2);
  $entity->{$field_name}['und'][0][$sub_field] = $value;
}


