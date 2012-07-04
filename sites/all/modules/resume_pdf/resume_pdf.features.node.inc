<?php

/**
 * Helper to implementation of hook_node_info().
 */
function _resume_pdf_node_info() {
  $items = array(
    'ipaper' => array(
      'name' => t('Document'),
      'module' => 'ipaper',
      'description' => t('A document hosted on the scribd website, such as a resume or other writing.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'has_body' => '1',
      'body_label' => t('Body'),
    ),
  );
  return $items;
}
