<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('error_log', 'error.log');

$_ENV['DB'] = array(
	'host' => 'localhost',
);

if (gethostname() == 'Geo-PC') { // local
	// $_ENV['DB']['name'] = 'ga67856n';
	$_ENV['DB']['name'] = 'test';
	$_ENV['DB']['user'] = 'root';
	$_ENV['DB']['pass'] = '';
} else {
	$_ENV['DB']['name'] = 'g67856n_it610';
	// $_ENV['DB']['name'] = 'tl98810w_it610';
	$_ENV['DB']['user'] = 'it610dbuser';
	$_ENV['DB']['pass'] = 'hwc&8b1ep~$X';
}

$BR = '<br>';
