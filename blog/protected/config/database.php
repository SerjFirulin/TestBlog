<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/blog.db',
	// uncomment the following lines to use a MySQL database
    'class' => 'CDbConnection',
	'connectionString' => 'mysql:host=localhost;dbname=blog',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => 'Ygadai12q',
	'charset' => 'utf8',

);