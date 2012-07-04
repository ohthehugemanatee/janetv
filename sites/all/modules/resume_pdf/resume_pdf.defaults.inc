<?php

/**
 * Helper to implementation of hook_user_default_permissions().
 */
function _resume_pdf_user_default_permissions() {
  $permissions = array();

  // Exported permission: create ipaper
  $permissions[] = array(
    'name' => 'create ipaper',
    'roles' => array(),
  );

  // Exported permission: delete ipapers
  $permissions[] = array(
    'name' => 'delete ipapers',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: delete own ipapers
  $permissions[] = array(
    'name' => 'delete own ipapers',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: download ipapers
  $permissions[] = array(
    'name' => 'download ipapers',
    'roles' => array(
      '0' => 'anonymous user',
      '1' => 'authenticated user',
    ),
  );

  // Exported permission: edit ipaper parameters
  $permissions[] = array(
    'name' => 'edit ipaper parameters',
    'roles' => array(),
  );

  // Exported permission: edit ipapers
  $permissions[] = array(
    'name' => 'edit ipapers',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: edit own ipapers
  $permissions[] = array(
    'name' => 'edit own ipapers',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: view ipapers
  $permissions[] = array(
    'name' => 'view ipapers',
    'roles' => array(
      '0' => 'anonymous user',
      '1' => 'authenticated user',
    ),
  );

  return $permissions;
}
