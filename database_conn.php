<?php
	// SOLANO, Meryll Dayne B.
	// ITMC231 Platform Technologies
	// BS IT - 2ND YEAR
	// Final Requirement
	// Honor Code:
	// This is my own work and I have not received any unauthorized help in completing this. 
	// I have not copied from my classmate, friend, nor any unauthorized resource. 
	// I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	// If proven guilty, I won't be credited any points for this endeavor.
	
	$database_conn = mysqli_connect('localhost', 'dayne','1111','db_signup')
	OR die('Error: ' .mysqli_connect_error());
	
	// initialize variables
	$username = "";
	$password = "";
	$ID = 0;
	$update = false;

	// check if the update button has been set/declared
	if (isset($_POST['update'])) {
		$ID = $_POST['ID'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		// update the data in the database
		mysqli_query($database_conn, "UPDATE db_signup_data SET username='$username', password='$password' WHERE ID=$ID");
		$_SESSION['message'] = "Saved changes!"; 
		header('location: profile.php');  
	}
	
	// check if the delete button has been set/declared
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		
		// delete the account from the database
		mysqli_query($database_conn, "DELETE FROM db_signup_data WHERE id=$id");
	}
?>