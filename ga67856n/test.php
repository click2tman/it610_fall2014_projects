<?php

// http://ga67856n.it610.tambalamin.me/test.php?exec=pwd
// http://ga67856n.it610.tambalamin.me/test.php?sql=1
// http://ga67856n.it610.tambalamin.me/test.php?sql=show%20databases
// http://ga67856n.it610.tambalamin.me/test.php?file


require_once ('./config.php');

$DB = $_ENV['DB'];
$q = $_GET;

// exec
if (isset($q['exec'])) {
	echo 'exec: ' . $q['exec'] . $BR;
	$exec = $q['exec'];

// mysql
} elseif (isset($q['sql'])) {
	switch ($q['sql']) {
		case 1:
			$sql = 'SHOW DATABASES';
			break;

		case 2:
			$sql = 'SHOW tables';
			break;

		case 3:
			$sql = 'DROP TABLE IF EXISTS test;
					CREATE TABLE test (
			   			id INT NOT NULL AUTO_INCREMENT,
			   			title VARCHAR(100) NOT NULL,
			   			PRIMARY KEY ( id )
			   		);
			   		INSERT INTO test VALUES (
			   			NULL,
			   			\'abc\'
			   		),(
			   			NULL,
			   			\'DEF\'
			   		)';
			break;

		default:
			$sql = urldecode($q['sql']);
	}
	echo 'MySQL: ' . $sql . $BR;
	$exec = "mysql -u $DB[user] --password='$DB[pass]' -D $DB[name] -e \"$sql;\"";

// mysql file
} elseif (isset($q['file'])) {
	$file = "sql/$q[file].sql";
	echo 'MySQL FILE: ' . $file . $BR;
	$exec = "mysql -u $DB[user] --password='$DB[pass]' -D $DB[name] < $file";
} else {
	exit('no query');
}

// exec
echo 'Exec: ' . $exec . $BR;
$out = `$exec 2>&1`; // redirect stderr to stdout

echo 'Response: ' . $BR;
echo nl2br($out);
