<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _wysiwyg_editor_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Page'),
      'module' => 'node',
      'description' => t('If you want to add a static page, like a contact page or an about page, use a page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
    ),
  );
  return $items;
}
