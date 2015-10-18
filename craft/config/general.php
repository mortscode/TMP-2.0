<?php

return array(
  '*' => array(
    'omitScriptNameInUrls' => true,
  ),

  'craft.dev' => array(
    'devMode' => true,
    'environment' => 'local',
    'siteUrl' => 'http://tmp.craft.dev'
  ),

  '107.170.205.173' => array(
    'siteUrl' => 'http://107.170.205.173',
    'devMode' => false,
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://107.170.205.173',
    )
  ),

  'dev.themodernproper.com' => array(
    'siteUrl' => 'http://dev.themodernproper.com',
    'devMode' => false,
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://dev.themodernproper.com',
    ),
    'defaultFilePermissions' => 0664,
    'defaultFolderPermissions' => 0775,
  ),
);
