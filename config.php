<?php
include_once('Database.php');

define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

$dsn	= 	"mysql:dbname=".DB_NAME.";host=".DB_HOST."";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>