<?php

namespace Drupal\custom_plugin_views_field\Plugin\views\field;

use Drupal\Core\Form\FormStateInterface;
use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;

/**
 * Field handler to show a custom_views_field of the current row.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("custom_views_field")
 */
class CustomViewsField extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function usesGroupBy() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  protected function defineOptions() {
    $options = parent::defineOptions();
    return $options;
  }

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    parent::buildOptionsForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function query() {
    // do nothing -- to override the parent query.
  }

  /**
   * {@inheritdoc}
   */
  public function getValue(ResultRow $values, $field = NULL) {
  
    //Making something here!

    //$nid = $values->_entity->get('nid')->value;
    //$type = $values->_entity->get('type')->__get('target_id');

    $result = 'Show something!';

    return $result;
  }

}
