<?php

/**
 * @file
 * FOR CLI USE ONLY!
 * Handles incoming requests to fire off regularly-scheduled tasks (cron jobs).
 */

/**
 * Change to root directory of Drupal installation.
 */
$path = '/home/user_dir/public_html/';
chdir($path);
define('DRUPAL_ROOT', getcwd());

// Include bootstrap
include_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_override_server_variables();
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);

// execute cron
drupal_cron_run();
