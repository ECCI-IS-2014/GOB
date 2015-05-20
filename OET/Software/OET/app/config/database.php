<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'oracle',
		'persistent' => true,
		'host' => 'localhost',
		'port' => 1521,
		'login' => 'reyes',
		'password' => 'reyes',
		'database' => 'localhost:1521/XE',
	);

    var $dbo = array(
        'datasource' => 'dbo',
		'login' => 'reyes',
		'password' => 'reyes',
    );
	}
?>