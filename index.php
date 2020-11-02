<?php
	require "dbconfig/config.php";
?>

<?php
	if(isset($_GET["name"])){
	$name = $_GET["name"];
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Athlete's Info</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

		<script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

		<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	</head>
	<body>
	<script> alert("Welcome to my Tennis Player blog!")
		</script>
		<?php include("navbar.php"); ?>

		<div class = "container">
			<div class = "row">
				<div class = "col-3" id="pname">
					<h1>Tennis Players</h1>
					<img class="animate__animated animate__bounce"
            src="data:image/jpeg;base64,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"
         style="height: 100px;" />
					<?php
						$name = "";
						if(isset($_POST["delete"])){
							$name = $_GET["name"];

							$query = "DELETE FROM players WHERE PlayerName = '$name'";
							$query_run = mysqli_query($con, $query);
							if($query_run){
								echo "<script> alert('Player deleted'); 
								location.href = 'index.php';
								</script>";
							}

						}
					?>
					<?php
						$query = "SELECT PlayerName FROM players";
						$result = mysqli_query($con, $query);
						while($row = mysqli_fetch_array($result)){
							$name = $row['PlayerName'];
							echo "<h4><a href='index.php?name=$name'> $name<br></a>
							</h4>";
						}
					?>
				</div>
				<div class = "col-6">
					<?php
						if(isset($_GET["name"])){
						$name = $_GET["name"];
						$query = "SELECT Description FROM players WHERE PlayerName = '$name' ";
						$query_run = mysqli_query($con, $query);
						$row = mysqli_fetch_array($query_run);
						$desc = $row['Description'];

						echo 
						"<h2>$name</h2>
						<p>$desc<br></p>";
						}else{
							echo "<h2>Choose a player, or add a player!</h2>";
						}
					?>
<img class="animate__animated animate__flip"; margin-top: 50px
            src="data:image/jpeg;base64,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"
			style="height: 250px;" />

				</div>
				<div class = "col-3" id="picpic">
					<?php
						if(isset($_GET["name"])){
						$name = $_GET["name"];
						$query = "SELECT Image FROM players WHERE PlayerName = '$name'";
						$query_run = mysqli_query($con, $query);
						$row = mysqli_fetch_array($query_run);

						echo '
						<form method= "post" action ="index.php?name='.$name.'" >
						<div class="btns">
						<input type="button" value="Hide Pic" id="hidebtn">
						<input type="submit" name="delete" value="Delete Player">
						</div>
						<img id="hide" src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="200" />
						</form>';
						}
					?>
				</div>
			</div>
		</div>

		<script>
			$("#hidebtn").click(function(){
			$("#hide").toggle(100);
			if($('#hidebtn').val() === 'Hide Pic'){
				$('#hidebtn').val("Show Pic");
			}else{
				$('#hidebtn').val("Hide Pic");
			}
		});
		</script>
		
	</body>
</html>