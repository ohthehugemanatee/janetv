<?php

/**
 * Implementation of hook_content_default_fields().
 */
function image_gallery_content_default_fields() {
  module_load_include('inc', 'image_gallery', 'image_gallery.defaults');
  $args = func_get_args();
  return call_user_func_array('_image_gallery_content_default_fields', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function image_gallery_imagecache_default_presets() {
  module_load_include('inc', 'image_gallery', 'image_gallery.defaults');
  $args = func_get_args();
  return call_user_func_array('_image_gallery_imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function image_gallery_node_info() {
  module_load_include('inc', 'image_gallery', 'image_gallery.features.node');
  $args = func_get_args();
  return call_user_func_array('_image_gallery_node_info', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function image_gallery_user_default_permissions() {
  module_load_include('inc', 'image_gallery', 'image_gallery.defaults');
  $args = func_get_args();
  return call_user_func_array('_image_gallery_user_default_permissions', $args);
}

/**
 * Implementation of hook_views_default_views().
 */
function image_gallery_views_default_views() {
  module_load_include('inc', 'image_gallery', 'image_gallery.features.views');
  $args = func_get_args();
  return call_user_func_array('_image_gallery_views_default_views', $args);
}
