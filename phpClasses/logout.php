<?php 

session_start();  
	
	if(session_destroy())
	{
		echo'Successfully logged out';
		header('Refresh: 2; URL = ../phpClasses/login.php');
	}
	

