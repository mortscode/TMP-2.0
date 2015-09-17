<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
  ),

  'craft.dev' => array(
    'devMode' => true,
    'environment' => 'local',
    'siteUrl' => 'http://tmp.craft.dev'
  ),

  'themodernproper.com' => array(
    'devMode' => false,
    'environment' => 'prod',
    'siteUrl' => 'http://themodernproper.com'
  )
);
