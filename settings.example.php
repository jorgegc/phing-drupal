<?php

/**
 * @file
 * Drupal site-specific configuration file.
 */

/**
 * Database settings.
 */
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => '${db.name}',
  'username' => '${db.username}',
  'password' => '${db.password}',
  'host' => '${db.host}',
  'prefix' => '',
);

/**
 * Caching settings.
 */
$conf['cache'] = 0;
$conf['block_cache'] = 0;
$conf['cache_lifetime'] = 0;
$conf['page_cache_maximum_age'] = 0;

/**
 * Bandwidth optimization settings.
 */
$conf['preprocess_css'] = 0;
$conf['preprocess_js'] = 0;
