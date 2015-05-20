<?php
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'oracle',
		'persistent' => true,
		'host' => 'localhost',
		'port' => 1521,
		'login' => 'oet',
		'password' => 'oet',
		'database' => 'localhost:1521/XE',
	);

    var $dbo = array(
        'datasource' => 'dbo',
		'login' => 'oet',
		'password' => 'oet',
    );
	}
?>