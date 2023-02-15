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
			<div class="container ma p-1">
				<div class="flex-container">
					<div class="logo flx-basis-20p"><a href="#"><img src="img/beyondlimits-logo.png" alt="Beyondlimits logo"></a></div>
					<nav class="top-menu flx-basis-80p text-align-right">
						<ul class="flex-container menu-list align-items-center justify-content-right">
							<?php
								$sql = "SELECT * FROM menus";
								$result = mysqli_query($conn, $sql);
								if(!$result){
									die("Database query failed: " . mysqli_error());
								}

								if(mysqli_num_rows($result) > 0){
									while($row = $result->fetch_assoc()){
										echo "<li>" . "<a href=" . "#" . ">" . $row["menu"] . "</a>" . "</li>";
									}
								}
								else{
									echo "0 results";
								}
							?>
						</ul>
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