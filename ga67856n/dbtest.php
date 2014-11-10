<?php

require_once ('./config.php');

ini_set('display_errors', 1);

print_r($_ENV['DB']);

$host = $_ENV['DB']['host'];
$user = $_ENV['DB']['user'];
$pass = $_ENV['DB']['pass'];
$name = $_ENV['DB']['name'];

// Create connection
$link = mysql_connect($host, $user, $pass);
if ( ! $link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully' . $BR;

$db = mysql_select_db($name, $link);
if ($db) {
	echo 'Selected db: ' . $name . $BR;
} else {
	exit('Could not select database.' . mysql_error() . $BR);
}

$q = "select * from test";
echo $q . $BR;
$result = mysql_query($q);
if (mysql_error()) {
	exit(mysql_error());
}
while ($row = mysql_fetch_object($result)) {
	print_r($row);
	echo $BR;
}
echo 'good';
