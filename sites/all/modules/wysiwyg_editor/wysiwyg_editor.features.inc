<?php

/**
 * Implementation of hook_content_default_fields().
 */
function wysiwyg_editor_content_default_fields() {
  module_load_include('inc', 'wysiwyg_editor', 'wysiwyg_editor.defaults');
  $args = func_get_args();
  return call_user_func_array('_wysiwyg_editor_content_default_fields', $args);
}

/**
 * Implementation of hook_imagecache_default_presets().
 */
function wysiwyg_editor_imagecache_default_presets() {
  module_load_include('inc', 'wysiwyg_editor', 'wysiwyg_editor.defaults');
  $args = func_get_args();
  return call_user_func_array('_wysiwyg_editor_imagecache_default_presets', $args);
}

/**
 * Implementation of hook_node_info().
 */
function wysiwyg_editor_node_info() {
  module_load_include('inc', 'wysiwyg_editor', 'wysiwyg_editor.features.node');
  $args = func_get_args();
  return call_user_func_array('_wysiwyg_editor_node_info', $args);
}

/**
 * Implementation of hook_user_default_permissions().
 */
function wysiwyg_editor_user_default_permissions() {
  module_load_include('inc', 'wysiwyg_editor', 'wysiwyg_editor.defaults');
  $args = func_get_args();
  return call_user_func_array('_wysiwyg_editor_user_default_permissions', $args);
}
