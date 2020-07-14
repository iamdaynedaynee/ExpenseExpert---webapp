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
    session_start();
    require_once("GoogleAPI/vendor/autoload.php");
	
    $gClient = new Google_Client();
	// assign the client ID with the one provided by google when signing in to google API
    $gClient->setClientId("1003727518596-rsbeefj9rmk5df0gohjh95ovmvaar251.apps.googleusercontent.com");
	// assign the client secret with the one provided by google when signing in to google API
    $gClient->setClientSecret("KOLVW3e-MgnkMztwieDs0Ors");
	// set application name
    $gClient->setApplicationName("ExpenseExpert");
	// set redirection url
    $gClient->setRedirectUri("http://localhost/ExpenseExpert/callback.php");
	// add user's email and profile in the scope
    $gClient->addScope("email");
    $gClient->addScope("profile");
	// create auth url
    $loginURL = $gClient->createAuthUrl();
?>
