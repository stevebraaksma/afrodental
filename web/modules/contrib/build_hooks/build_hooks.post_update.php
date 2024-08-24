<?php

/**
 * @file
 * Contains post-update hooks.
 */

/**
 * Implements hook_removed_post_updates().
 */
function build_hooks_removed_post_updates() {
  return [
    'build_hooks_post_update_create_deployments_for_open_items' => '3.3.1',
  ];
}
