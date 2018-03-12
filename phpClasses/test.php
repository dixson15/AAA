<?php 
	
	include "Configuration.php";
	include "testView.php";



	$nav =new testView;

	$object = new Configuration;

	$object -> setHostName('localhost');
	$object -> setHostUserName('root');
	$object -> setHostPassword('');
	$object -> setDatabaseName('augustus');

	$serverName = $object -> getHostName();
	$userName = $object->getHostUserName();
	$serverPassword = $object -> getHostPassword();
	$dbName =$object -> getDatabaseName();

	// echo $name;

	$conn = mysqli_connect($serverName, $userName, $serverPassword, $dbName);
	$session = session_start();
	echo "Successfully connected to the server";

 		if (mysqli_connect_errno($conn)) {

			die("Database connect failed: " . mysqli_connect_error());
		}
?>