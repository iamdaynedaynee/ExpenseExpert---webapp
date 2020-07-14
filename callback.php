<!--
	// SOLANO, Meryll Dayne B.
	// ITMC231 Platform Technologies
	// BS IT - 2ND YEAR
	// Final Requirement
	// Honor Code:
	// This is my own work and I have not received any unauthorized help in completing this. 
	// I have not copied from my classmate, friend, nor any unauthorized resource. 
	// I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	// If proven guilty, I won't be credited any points for this endeavor.
-->
<?php
	include_once 'database_conn.php';
	require_once "config.php";
	
	// check whether the code has been set
	if(isset($_GET['code'])){
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		
		// check whether there has been no error
		if (!isset($token['error'])) {
			$gClient->setAccessToken($token['access_token']);
			$_SESSION['access_token'] = $token['access_token'];
			
			$google_service = new Google_Service_Oauth2($gClient);
			$data = $google_service->userinfo->get();

			// check whether the given name from the user's google acount is not empty
			if (!empty($data['given_name']))
			{
				$_SESSION['username'] = $data['given_name'];
				
				$name = $data['given_name']." ".$data['family_name'];
				$_SESSION['googlename'] = $name;
				
				$username = $_SESSION['username'];
				
				$query = "SELECT * FROM db_signup_data where username='$username';";
				$result = mysqli_query($database_conn, $query);
				
				if (mysqli_num_rows($result) > 0 ) {
					$row = mysqli_fetch_assoc($result);
				}
				// if the username of the user has already been stored in the database when trying to sign up
				// then the user will be redirected to the home page
				if ($username == $row['username']) {
					$_SESSION['ID'] = $row['ID'];
					header('location: home.php');
					exit();
				}				
				else
				{
					// else, the data provided by the user during sign up
					// will be stored in the database
					$password = "1234567899";
					$sql = "INSERT INTO db_signup_data(username, password) VALUES ('$username', '$password')";
					$mysql = mysqli_query($database_conn, $sql);
					header('location: home.php');				
				}
			}
		}
	}
?>