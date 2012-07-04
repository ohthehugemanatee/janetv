<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function resume_pdf_user_default_permissions() {
  module_load_include('inc', 'resume_pdf', 'resume_pdf.defaults');
  $args = func_get_args();
  return call_user_func_array('_resume_pdf_user_default_permissions', $args);
}
