<?php

return array(
	'default' => array(
		'user' => 'root',
		'password' => '',
		'driver' => 'PDO',

		//'Connection' is required if you use the PDO driver
		'connection' => 'mysql:host=localhost;dbname=ootcake',

		// 'db' and 'host' are required if you use Mysql driver
		'db'  => 'ootcake',
		'host' => 'localhost',
	)
);