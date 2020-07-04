<?php
	//This is my own work and I have not received any unauthorized help in completing this. 
	//I have not copied from my classmate, friend, nor any unauthorized resource. 
	//I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	//If proven guilty, I won't be credited any points for this endeavor.

	include "database_conn.php";
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	
	
	$query = "SELECT * FROM db_signup_data WHERE (username = '$username' &&  password = '$password')";
	$result = mysqli_query($database_conn, $query);
	
	$data = mysqli_fetch_assoc($result);
	
	
	if(mysqli_num_rows($result) == 1){
		$getdata = mysqli_fetch_assoc($query);
		$id = $data['ID'];
		$_SESSION['id'] = $id;
		header("location: home.php");
	}
	else {
		echo '<script> alert("Login failed.");</script>';
		echo '<script> window.location.href="login.php" </script>';
	}
?>