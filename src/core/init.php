<?php 

session_start();
error_reporting(E_ALL); 
ini_set('display_errors', 1);



$base = $_SERVER["DOCUMENT_ROOT"] .'/vacature';

//require_once $base .'/src/includes/sanitize.php';

$config = array(
	'db_host'		=> 'localhost',
	'db_name'		=> 'vacaturewebsite',
	'db_username'	=> 'root',
	'db_password'	=> ''
);

//start autoload
spl_autoload_register(function($class) {
	$base = $_SERVER["DOCUMENT_ROOT"] .'/vacature';
	require_once $base. '/src/classes/' . $class . '.php';
});

?>
