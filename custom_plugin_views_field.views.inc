<?php
/**
 * @file
 * Provide views data for our custom module_name.
 */
/**
 * Implements hook_views_data().
 */
function custom_plugin_views_field_views_data() {
  $data['views']['custom_views_field'] = array(
    'group' => t('Custom'),
    'title' => t('Custom Views Field'),
    'help' => t('Custom field help.'),
    'field' => array(
      'id' => 'custom_views_field',
    ),
  );

  return $data;
}
