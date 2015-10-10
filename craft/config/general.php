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
    'siteUrl' => 'http://tmp.craft.dev/',
    'environmentVariables' => array(
      'basePath' => '/users/scotmortimer/Development/Mort/the-modern-proper/html/',
      'baseUrl'  => 'http://tmp.craft.dev/',
    ),
    'testToEmailAddress' => 'scot.mortimer@gmail.com',
  ),

  // Use IP address of your droplet below
  '104.236.215.157' => array(
    'siteUrl' => 'http://104.236.215.157/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://104.236.215.157/',
    )
  )
);
