<?php 
	// database connection setup
	$servername = "localhost";
	$username = "root";
	$password = "";

	// create connection
	$conn = new mysqli($servername, $username, $password);
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="BeyondLimits official website"/>
		<meta name="keywords" content="portfolios, web development, graphic designing, vfx, 3D modeling, motion graphics, illustration"/>
		<meta name="author" content="BeyondLimits" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/template.css" />
		<title>BeyondLimits</title>
		<!--[if lt IE 9]>  
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="maxWidth ma">
			<section class="socmed ma mt-2 align-right">
				<ul class="flex-container">
					<li><a href="#">behance</a></li>
					<li><a href="#">facebook</a></li>
					<li><a href="#">github</a></li>
					<li><a href="#">youtube</a></li>
					<li><a href="#">instagram</a></li>
				</ul>
			</section>
		</header>
		<main>
			<?php			
				// check connection
				if($conn->connect_error){
					die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully";
			?>

		</main>
	</body>
</html>

