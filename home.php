<!DOCTYPE html>
<?php
	// SOLANO, Meryll Dayne B.
	// ITMC231 Platform Technologies
	// BS IT - 2ND YEAR
	// Final Requirement
	// Honor Code:
	// This is my not fully my own work and I have received some help from the internet that helped in completing this.
	// I have integrated some ideas that I have found available on the internet.
	// I have not copied from my classmate, friend, I just get ideas from internet resources.
	// I am well aware of the policies stipulated in the handbook regarding academic dishonesty. 
	// If proven guilty, I won't be credited any points for this endeavor.

	include "database_conn.php";
	require_once "callback.php";
	
	if(!isset($_SESSION['ID'])){
		header("location: login.php");
	}
	else {
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ExpenseExpert</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
		<link rel ="icon" type="image/png" href="logo.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- top navigation bar -->
		<div class="topnav">
			<a class="active" href="home.php"><i class="fa fa-home"></i> Home</a>
			
			<div class="topnav-right">
				<div class="dropdown">
					<button class="dropbtn"><i class="fa fa-user"></i> <?php echo $_SESSION['username'];?></button>
					<div class="dropdown-content">
						<a href="weather.html"><i class="fa fa-cloud"></i> Weather </a>
						<a href="profile.php"><i class="fa fa-pencil-square-o"></i> Edit Profile </a>
						<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
					</div>
				</div>
			</div>
		</div>
		<!-- summary -->
		<div class="summary">
			<div class="budget">
				<div class="budget_title">Available Budget</div>
				<div class="budget_value">+ 2,345.64</div>
				<div class="budget_income clearfix">
					<div class="budget_income_text">Income</div>
					<div class="right">
						<div class="budget_income_value">+ 4,300.00</div>
                        <div class="budget_income_percentage">&nbsp;</div>
					</div>
				</div>
				<div class="budget_expenses clearfix">
					<div class="budget_expenses_text">Expenses</div>
					<div class="right clearfix">
						<div class="budget_expenses_value">- 1,954.36</div>
                        <div class="budget_expenses_percentage">45%;</div>
					</div>
				</div>
			</div>
		</div>
		<!-- details -->
		<div class="details">
			<div class="option">
				<div class="option_container">
					<select class="option_type">
						<option value="inc" selected>+</option>
						<option value="exp">-</option>
					</select>
					<input type="text" class="description" placeholder="Add Description">
					<input type="number" class="amount" placeholder="Amount">
					<button class="confirm"><i class="ion-ios-checkmark-outline"></i></button>
				</div>
			</div>
			<div class="container clearfix">
				<div class="income">
					<h2 class="income_title">Income</h2>
					<div class="income_list"></div>
				</div>
				<div class="expenses">
					<h2 class="expenses_title">Expenses</h2>
					<div class="expenses_list"></div>
				</div>
			</div>
		</div>
		<script src="home.js"></script>
	</body>
</html> 
<?php
	}
?>