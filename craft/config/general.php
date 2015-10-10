<?php

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

  '104.236.186.4' => array(
    'siteUrl' => 'http://104.236.186.4/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://104.236.186.4/',
    )
  ),

  'dev.themodernproper.com' => array(
    'siteUrl' => 'http://dev.themodernproper.com/',
    'environmentVariables' => array(
      'basePath' => '/var/www/html/',
      'baseUrl'  => 'http://dev.themodernproper.com/',
    )
  )
);
