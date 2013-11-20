<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'    => 'Mysql',
		'host'       => 'localhost',
		'username'   => 'root',
		'password'   => '',
		'dbname'     => 'test',
	),
	'application' => array(
		'modelsDir'      => __DIR__ . '/../models/',
        'modelsBaseDir' => __DIR__ . '/../models/base/',
		'viewsDir'      => __DIR__ . '/../views/',
		'baseUri'        => '/@@name@@/',
	)
));

