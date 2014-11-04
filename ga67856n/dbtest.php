<?php

require_once ('./config.php');

print_r($_ENV);

$host = $_ENV['DB']['host'];
$user = $_ENV['DB']['user'];
$pass = $_ENV['DB']['pass'];
$name = $_ENV['DB']['name'];

// Create connection
$link = mysql_connect($host, $user, $pass);
if ( ! $link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db($name, $link) or die('Could not select database.' . mysql_error());

$q = 'select * from wp_users';
$result = mysql_query($q);
$row = mysql_fetch_object($result);
print_r($row);
echo 'good';
