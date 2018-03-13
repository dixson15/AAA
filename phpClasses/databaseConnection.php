<?php 
	/* @ author Dixson Diku
	Software Engineer
	@ copyright 2018
*/
	include "Configuration.php";

  	$object = new Configuration;

  	$object -> setHostName('localhost');
  	$object -> setHostUserName('root');
  	$object -> setHostPassword('');
  	$object -> setDatabaseName('AAAcounting');

  	$serverName = $object -> getHostName();
  	$userName = $object->getHostUserName();
  	$serverPassword = $object -> getHostPassword();
  	$dbName =$object -> getDatabaseName();
  	$conn = mysqli_connect($serverName, $userName, $serverPassword, $dbName);
  	$session = session_start();

	if (mysqli_connect_errno()) {
	      echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

?>