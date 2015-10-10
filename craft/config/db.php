<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
	    'tablePrefix' => 'tmp',
	),

	'craft.dev' => array(
	    'server' => 'localhost',
	    'user' => 'root',
	    'password' => 'root',
	    'database' => 'tmp',
	),

	'104.131.161.204' => array(
	    'server' => 'localhost',
	    'user' => 'ce2c83cab456',
	    'password' => '8c05e8025dd0cc55',
	    'database' => 'tmpdb',
	),

	'dev.themodernproper.com' => array(
	    'server' => 'localhost',
	    'user' => 'ce2c83cab456',
	    'password' => '8c05e8025dd0cc55',
	    'database' => 'tmpdb',
	),

	'themodernproper.com' => array(
	    'server' => 'localhost',
	    'user' => 'ce2c83cab456',
	    'password' => '8c05e8025dd0cc55',
	    'database' => 'tmpdb',
	)
);
