<?php
	//This is my own work and I have not received any unauthorized help in completing this. 
	//I have not copied from my classmate, friend, nor any unauthorized resource. 
	//I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	//If proven guilty, I won't be credited any points for this endeavor.
	
	include "database_conn.php";
	session_start();
	unset($_SESSION['id']);
	session_destroy();
	
	header("location: login.php");
?>