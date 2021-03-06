<?php

/**
 * Implements hook_field_formatter_info().
 */
function geofield_ymap_field_formatter_info() {
  return array(
    'geofield_ymap' => array(
      'label' => t('Yandex Map'),
      'field types' => array('geofield'),
      'settings' => array(
        'map_type' => 'yandex#map',
        'map_center' => '0,0',
        'map_zoom' => 1,
        'map_auto_centering' => FALSE,
        'map_auto_zooming' => FALSE,
        'map_clusterize' => FALSE,
        'map_object_preset' => '',
        'map_object_balloon' => '',
        'map_controls' => 'default',
        'map_behaviors' => 'default',
      ),
    ),
  );
}

/**
 * Implements hook_field_formatter_settings_form().
 */
function geofield_ymap_field_formatter_settings_form($field, $instance, $view_mode, $form, &$form_state) {
  $settings = $instance['display'][$view_mode]['settings'];

  $element['map_type'] = array(
    '#type' => 'select',
    '#title' => t('Map type'),
    '#options' => _geofield_ymap_get_map_types(),
    '#default_value' => $settings['map_type'],
  );

  $element['map_center'] = array(
    '#type' => 'textfield',
    '#title' => t('Map center'),
    '#description' => t('Map center coordinates: Longtitude,Latitude'),
    '#default_value' => $settings['map_center'],
    '#size' => 30,
  );

  $element['map_zoom'] = array(
    '#type' => 'textfield',
    '#title' => t('Map zoom'),
    '#description' => t('From 1 to 16'),
    '#default_value' => $settings['map_zoom'],
    '#size' => 5,
  );

  $element['map_auto_centering'] = array(
    '#type' => 'checkbox',
    '#title' => t('Map auto centering'),
    '#default_value' => $settings['map_auto_centering'],
  );

  $element['map_auto_zooming'] = array(
    '#type' => 'checkbox',
    '#title' => t('Map auto zooming'),
    '#default_value' => $settings['map_auto_zooming'],
  );

  $element['map_clusterize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Clusterize placemarks'),
    '#default_value' => $settings['map_clusterize'],
  );

  $element['map_object_preset'] = array(
    '#type' => 'textfield',
    '#title' => t('Objects preset'),
    '#description' => t('Objects <a href="@url" target="_blank">preset name</a>. Example: <code>islands#blackDotIcon</code>', array(
      '@url' => 'http://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/option.presetStorage.xml',
    )),
    '#default_value' => $settings['map_object_preset'],
    '#size' => 30,
  );

  $element['map_object_balloon'] = array(
    '#type' => 'textfield',
    '#title' => t('Balloon content'),
    '#description' => t('Balloon content. Allowed tokens.'),
    '#default_value' => $settings['map_object_balloon'],
    '#size' => 30,
  );
  if (module_exists('token')) {
    $element['map_object_balloon']['#description'] .= ' ' . theme('token_tree', array(
      'token_types' => array($instance['entity_type']),
      'dialog' => TRUE,
    ));
  }

  $element['map_controls'] = array(
    '#type' => 'textfield',
    '#title' => t('Controls'),
    '#description' => t('<a href="@url" target="_blank">Controls</a> through a comma, or controls set name. Use <code>&lt;none&gt;</code> to hide all controls. Example: <code>fullscreenControl,searchControl</code>. Default set name: <code>default</code>', array(
      '@url' => 'http://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/control.Manager.xml#add',
    )),
    '#default_value' => $settings['map_controls'],
    '#size' => 30,
  );

  $element['map_behaviors'] = array(
    '#type' => 'textfield',
    '#title' => t('Behaviors'),
    '#description' => t('<a href="@url" target="_blank">Map behaviors</a> through a comma. Use <code>&lt;none&gt;</code> to disable all behaviors. Default value: <code>default</code>', array(
      '@url' => 'http://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/map.behavior.Manager.xml#param-behaviors',
    )),
    '#default_value' => $settings['map_behaviors'],
    '#size' => 30,
  );

  return $element;
}

/**
 * Implements hook_field_formatter_settings_summary().
 */
function geofield_ymap_field_formatter_settings_summary($field, $instance, $view_mode) {
  $settings = $instance['display'][$view_mode]['settings'];
  $map_types = _geofield_ymap_get_map_types();

  $summary = array(
    t('Map type: @map_type', array('@map_type' => $map_types[$settings['map_type']])),
    t('Map center: @map_center', array('@map_center' => $settings['map_center'])),
    t('Map zoom: @map_zoom', array('@map_zoom' => $settings['map_zoom'])),
    t('Map auto centering: @map_auto_centering', array('@map_auto_centering' => $settings['map_auto_centering'] ? t('Yes') : t('No'))),
    t('Map auto zooming: @map_auto_zooming', array('@map_auto_zooming' => $settings['map_auto_zooming'] ? t('Yes') : t('No'))),
    t('Clusterize placemarks: @clusterize', array('@clusterize' => $settings['map_clusterize'] ? t('Yes') : t('No'))),
    t('Objects preset: @preset', array('@preset' => $settings['map_object_preset'] ? $settings['map_object_preset'] : t('<none>'))),
    t('Balloon content: @balloon_content', array('@balloon_content' => $settings['map_object_balloon'] ? $settings['map_object_balloon'] : t('<none>'))),
    t('Controls: @controls', array('@controls' => $settings['map_controls'])),
    t('Behaviors: @behaviors', array('@behaviors' => $settings['map_behaviors'])),
  );

  return implode('<br />', $summary);
}

/**
 * Implements hook_field_formatter_view().
 */
function geofield_ymap_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {
  $settings = $display['settings'];
  $element = array();

  if ($items) {
    $map_objects = geofield_ymap_items_to_geojson($items);

    // Set balloon content
    if ($settings['map_object_balloon'] && $map_objects) {
      $ballon_content = token_replace($settings['map_object_balloon'], array($entity_type => $entity));
      foreach ($map_objects['features'] as &$map_object) {
        $map_object['properties']['balloonContent'] = $ballon_content;
      }
    }

    $element[] = array(
      '#theme'              => 'geofield_ymap',
      '#map_type'           => $settings['map_type'],
      '#map_center'         => $settings['map_center'],
      '#map_zoom'           => $settings['map_zoom'],
      '#map_auto_centering' => $settings['map_auto_centering'],
      '#map_auto_zooming'   => $settings['map_auto_zooming'],
      '#map_clusterize'     => $settings['map_clusterize'],
      '#map_controls'       => $settings['map_controls'],
      '#map_behaviors'      => $settings['map_behaviors'],
      '#map_object_preset'  => $settings['map_object_preset'],
      '#map_objects'        => $map_objects,
    );
  }

  return $element;
}
