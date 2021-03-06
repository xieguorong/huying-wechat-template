<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => getenv('DB_HOST')?:'localhost',
			'port'		=> getenv('DB_PORT')?:'3306',
			'database'  => getenv('DB_NAME')?:'homestead',
			'username'  => getenv('DB_USER')?:'homestead',
			'password'  => getenv('DB_PASSWORD')?:'secret',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => getenv('DB_PREFIX')?:'',
		),

	),

);
