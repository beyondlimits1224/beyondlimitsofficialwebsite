<?php require_once "inc/functions.php"; ?>
<?php include "inc/header.php"; ?>
		<?php			
			// check connection
			if($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
		?>
		<header>
			<div class="container ma">
				<section class="socmed ma mt-2 mr-0 p-1 socmed-align-center">
					<ul class="flex-container">
						<?php
							$sql = "SELECT * FROM socmed";
							$result = mysqli_query($conn, $sql);
							if(!$result){
								die("Database query failed: " . mysqli_error());
							}

							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
									echo "<li>" . "<a href=" . $row["links"] . ">" . $row["icons"] . "</a>" . "</li>";
								}
							}
							else{
								echo "0 results";
							}
	
						?>
					</ul>
				</section>
			</div>
			<div class="container ma p-1 debug-red">
				<div class="flex-container">
					<div class="logo debug-blue flx-basis-20p"><img src="img/beyondlimits-logo.png" alt="Beyondlimits logo"></div>
					<nav class="debug-yellow flx-basis-80p">
						this is the menu
					</nav>
				</div>
			</div>
		</header>
		<main>


		</main>

<?php include "inc/footer.php"; ?>

<?php
	mysqli_close($conn);
?>