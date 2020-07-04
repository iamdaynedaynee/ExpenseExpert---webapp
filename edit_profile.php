<?php
	// SOLANO, Meryll Dayne B.
	// ITMC231 Platform Technologies
	// BS IT - 2ND YEAR
	// Midterm Requirement
	//Honor Code:
	//This is my own work and I have not received any unauthorized help in completing this. 
	//I have not copied from my classmate, friend, nor any unauthorized resource. 
	//I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	//If proven guilty, I won't be credited any points for this endeavor.
	
	include "database_conn.php";
	session_start();
	
	// check if the delete button has been set/clicked
	if (isset($_GET['del'])) {
	$ID = $_GET['del'];
	// delete the data from the database
	mysqli_query($database_conn, "DELETE FROM userdata WHERE ID=$ID");
	$_SESSION['message'] = "Saved changes!"; 
	header('location: login.php');
	}
?>