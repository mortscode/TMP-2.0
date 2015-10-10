<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
    'server' => 'localhost',
    'database' => 'craft',
    'tablePrefix' => 'craft',
  ),

  'localhost' => array(
    'user' => 'root',
    'password' => 'root',
  ),

  // Use IP of your droplet and MySQL credentials of a user you created
  '12.34.56.78' => array(
    'user' => 'craftcms',
    'password' => '$cott!M0rt',
  )
);
