<?php 
	// database connection setup
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "beyondlimitsdb";

	// create connection
	$conn = new mysqli($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="BeyondLimits official website"/>
		<meta name="keywords" content="portfolios, web development, graphic designing, vfx, 3D modeling, motion graphics, illustration"/>
		<meta name="author" content="BeyondLimits" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/template.css" />
		<title>BeyondLimits</title>
		<!--[if lt IE 9]>  
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>