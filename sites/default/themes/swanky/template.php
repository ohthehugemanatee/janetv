<?php

function swanky_preprocess_page(&$vars){
  $vars['footer_msg'] = ' &copy; ' . $vars['site_name'] . ' ' . date('Y');
  $vars['search_box'] = str_replace('Search this site: ', '', $vars['search_box']);
}
  
function swanky_preprocess_node(&$vars) {
  $vars['postdate'] = format_date($vars['node']->created, 'custom', 'd F Y');
  $vars['author'] = theme('username', $vars['node']);
  $vars['posted_by'] = t('By') . ' ' . $vars['author'] . ' ' . t('on') . ' ' . $vars['postdate'];
}

function swanky_preprocess_comment_wrapper(&$vars) {
  $node = $vars['node'];
  $vars['header'] = t('<strong>!count comments</strong> on %title', array('!count' => $node->comment_count, '%title' => $node->title));
}

function swanky_preprocess_comment(&$vars) {
  $vars['classes'] = array('comment');
  if ($vars['zebra'] == 'odd') {
	$vars['classes'][] = 'alt';
  }
  if ($vars['comment']->uid == $vars['node']->uid) {
	$vars['classes'][] = 'authorcomment';
  }
  $vars['classes'] = implode(' ', $vars['classes']);
}

function swanky_regions() {
  return array('right' => t('Sidebar'), 'content'  => t('Content'), 'footer' => t('Footer'));
}

function tpl_drupal_version() {
  $s = strtok(VERSION, '.');
  return intval($s[0]);
}

function tpl_page_language($l) {
  if (tpl_drupal_version() >= 6)
  return $l->language;
  return $l;
}

function _phptemplate_variables($hook, $vars) {

  if($hook == 'comment') {
    $vars['node'] = node_load($vars['comment']->nid);
  	swanky_preprocess_comment($vars);
  }
  else
  {
    $function = 'swanky_preprocess_'. str_replace('-', '_', $hook);
    if (function_exists($function)) 
	$function($vars);
  }

  return $vars;
}

function swanky_comment_wrapper($content) {

  return '<div id="comments">
  <h3>' . t('Comments on this post') . '</h3>
  <ol class="commentlist">
 '. $content . '
  </ol>
</div>';
}