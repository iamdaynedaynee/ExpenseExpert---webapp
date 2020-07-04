<!DOCTYPE html>
<?php
	// SOLANO, Meryll Dayne B.
	// ITMC231 Platform Technologies
	// BS IT - 2ND YEAR
	// Midterm Requirement
	// Honor Code:
	// This is my own work and I have not received any unauthorized help in completing this. 
	// I have not copied from my classmate, friend, nor any unauthorized resource. 
	// I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	// If proven guilty, I won't be credited any points for this endeavor.
	
	include "database_conn.php";
	session_start();
?>
<html>
	<head>
	<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="login.css">
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
	</head>
	
	<body>
		<div class="split one">
			<div class="col_1">
				<div class="transbox">
					<h1>ExpenseExpert</h1>
				</div>
			</div>
		</div>
		<div class="split two">
			<div class="col_2">
				<!-- loginbox -->
				<div class="loginbox">
					<img src="avatar.png" class="avatar">
					<h1>Login Here</h1>
					<hr/>
					<br/>
					<form method="post" action="login_details.php">
						<div class="login-detials">
							<p>Username</p>
							<input type="text" name="username" placeholder="Enter Username">
							<p>Password</p>
							<input type="password" name="password" placeholder="Enter Password" style="color: pink;">
						</div>
						
						<button type="submit" id="login-btn" value="Login">Login</button>
						<button type="button" data-toggle="modal" data-target="#myModal" id="signup-btn" value="Signup">Signup</button>
					</form>
				</div>
				<!-- signupbox and modal -->
				<div id="myModal" class="modal">
					<div class="modal-content">
						<div class="signupbox">
							<h2>Sign Up Here</h2>
							<hr/>
							<br/>
							<form method="post" action="signup_details.php">
								<div class="signup-details">
									<p>Username</p>
									<input type="text" name="username" placeholder="Enter Username">
									<p>Password</p>
									<input type="password" name="password" placeholder="Enter Password">
								</div>
								
								<button type="cancel" id="cancel-signup" value="Cancel">Cancel</button>
								<button type="submit" id="confirm-signup" value="Confirm">Confirm</button>
							</form>    
						</div>
					</div>
				</div>   

			</div>
		</div>
	<script src="login.js"></script>
	</body>
</html>