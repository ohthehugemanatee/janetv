<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _image_gallery_node_info() {
  $items = array(
    'album' => array(
      'name' => t('Album'),
      'module' => 'node',
      'description' => t('Add a Photo Album'),
      'has_title' => '1',
      'title_label' => t('Album Title'),
      'has_body' => '1',
      'body_label' => t('Description'),
    ),
  );
  return $items;
}
