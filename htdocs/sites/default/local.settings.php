<?php

/**
 * @file
 * Example local.settings.php file for developers.
 */

/**
 * To use, copy this file to local.settings.php. Make any changes you want in
 * local.settings.php, not in this file.
 */

// Use our local database.
$databases = array (
  'default' =>
    array (
      'default' =>
        array (
          'database' => 'mapdemo',
          'username' => 'root',
          'password' => '',
          'host' => 'localhost',
          'port' => '',
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);

ini_set('memory_limit', '256M');
$conf['preprocess_css'] = $conf['preprocess_js'] = 0; 

//configure stage_file_proxy
// $conf['stage_file_proxy_origin'] = 'http://test:test@mitp-cogdev.mit.edu'; // no trailing slash

// Block mail from working
$conf['mailchimp_api_key'] = $conf['smtp_host'] = 'nope';
$conf['preprocess_css'] = $conf['preprocess_js'] = 0;
 
$conf['stripe_test_secret_key'] = 'sk_test_GfL7bThq8N3SBvsVV0KcbSLI';
$conf['stripe_test_publishable_key'] = 'pk_test_oiMeN7YUhZySDKv8wWuzMVj5';
 
ini_set('memory_limit', '256M');
 
 
// These have to be properly set, otherwise it will default to
// something that works... default
$conf['mail_system'] = array (
'default-system' => 'DevelMailLog',
'mimemail' => 'DevelMailLog',
); 

