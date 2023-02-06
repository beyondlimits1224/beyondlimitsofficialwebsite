<?php require_once "inc/functions.php"; ?>
<?php include "inc/header.php"; ?>
		<?php			
			// check connection
			if($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
			}
		?>
		<header class="ma">
			<div class="container">
				<section class="socmed ma mt-2 align-right">
					<ul class="flex-container">
					
						<?php
							$sql = "SELECT * FROM socmed";
							$result = mysqli_query($conn, $sql);
							if(!$result){
								die("Database query failed: " . mysqli_error());
							}

							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
									echo "<li>" . "<a href='#'>" . $row["icons"] . "</a>" . "</li>";
								}
							}
							else{
								echo "0 results";
							}
	
						?>
					</ul>
				</section>
			</div>
		</header>
		<main>


		</main>

<?php include "inc/footer.php"; ?>

<?php
	mysqli_close($conn);
?>