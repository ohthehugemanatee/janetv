<?php
/**
 * Sets the body-tag class attribute.
 *
 * Adds 'sidebar-left', 'sidebar-right' or 'sidebars' classes as needed.
 */
/*
function phptemplate_body_class($sidebar_left, $sidebar_right) {
  if ($sidebar_left != '' && $sidebar_right != '') {
    $class = 'sidebars';
  }
  else {
    if ($sidebar_left != '') {
      $class = 'sidebar-left';
    }
    if ($sidebar_right != '') {
      $class = 'sidebar-right';
    }
  }

  if (isset($class)) {
    print ' class="'. $class .'"';
  }
}
*/

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return a string containing the breadcrumb output.
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return '<div class="breadcrumb">'. implode(' ›› ', $breadcrumb) .'</div>';
  }
}

/**
 * Allow themable wrapping of all comments.
 */
/*
function phptemplate_comment_wrapper($content, $type = null) {
  static $node_type;
  if (isset($type)) $node_type = $type;

  if (!$content || $node_type == 'forum') {
    return '<div id="comments">'. $content . '</div>';
  }
  else {
    return '<div id="comments"><h2 class="comments">'. t('Comments') .'</h2>'. $content .'</div>';
  }
}
*/

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function _phptemplate_variables($hook, $vars = array()) {
  switch ($hook) {
    case 'page':
      // These next lines add the required stylesheets file and redefine
      // the $css and $styles variables available to your page template
      $vars['css'] = drupal_add_css($vars['directory'] .'/andreas01.css', 'theme', 'screen, projection');
      $vars['css'] = drupal_add_css($vars['directory'] .'/style.css', 'theme', 'screen, projection');
      $vars['css'] = drupal_add_css($vars['directory'] .'/print.css', 'theme', 'print');
      $vars['styles'] = drupal_get_css();
	  // Add a custom textarea.js-file to the page
	  //$vars['js'] = drupal_add_js($vars['directory'] . '/js/textarea.js', ' theme', 'header', FALSE, $cache );
      break;

	default:
	  break;
  }
  return $vars;
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs.
 *
 * @ingroup themeable
 */
/*
function phptemplate_menu_local_tasks() {
  $output = '';

  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"tabs primary\">\n". $primary ."</ul>\n";
  }

  return $output;
}
*/

function phptemplate_menu_tree($pid = 1) {
  if ($tree = menu_tree($pid)) {
  switch ($pid) {
    case 1:
      return "\n<ul class=\"avmenu\">\n". $tree ."\n</ul>\n";
/*
	case (variable_get('menu_primary_menu', 0)):
      return "\n$<ul class=\"links primary-links\">\n". $tree ."\n</ul>\n";
	case (variable_get('menu_secondary_menu', 0)):
      return "\n<ul class=\"links secondary=links\">\n". $tree ."\n</ul>\n";
*/
	default:
      return "\n<ul class=\"menu\">\n". $tree ."\n</ul>\n";
	}
  }
}

function phptemplate_menu_item_link($item, $link_item) {
  return l_curr($item['title'], $link_item['path'], !empty($item['description']) ? array('title' => $item['description']) : array(), isset($item['query']) ? $item['query'] : NULL);
}

function l_curr($text, $path, $attributes = array(), $query = NULL, $fragment = NULL, $absolute = FALSE, $html = FALSE) {
  if ($path == $_GET['q']) {
    if (isset($attributes['class'])) {
      $attributes['class'] .= ' current';
    }
    else {
      $attributes['class'] = 'current';
    }
  }
  return '<a href="'. check_url(url($path, $query, $fragment, $absolute)) .'"'. drupal_attributes($attributes) .'>'. ($html ? $text : check_plain($text)) .'</a>';
}
