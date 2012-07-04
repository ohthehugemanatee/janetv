<?php
// split out taxonomy terms by vocabulary
//see http://drupal.org/node/133223
function andreas02_print_terms($node) {
     $vocabularies = taxonomy_get_vocabularies();
     $output = '';
     foreach($vocabularies as $vocabulary) {
       if ($vocabularies) {
         $terms = taxonomy_node_get_terms_by_vocabulary($node, $vocabulary->vid);
         if ($terms) {
           $links = array();
           foreach ($terms as $term) {
             $links[] = l($term->name, taxonomy_term_path($term), array('rel' => 'tag', 'title' => strip_tags($term->description)));
           }
           $output .= implode(', ', $links);
         }
       }
     }
     return $output;
}
?>