<?php
	session_start();
	if(isset($_POST["score"])){
		$_SESSION["score"] = $_POST["score"];
	}
	if(isset($_POST["scoreTwo"])){
		$_SESSION["scoreTwo"] = $_POST["scoreTwo"];
	}
	if(isset($_POST["scoreThree"])){
		$_SESSION["scoreThree"] = $_POST["scoreThree"];
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="photos/favicon.png" type="image/png">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Gambling Room</title>
</head>
<body>
	<div id="title">Rezultati</div>
	<div id="menu">				
		<div id="second" class="winners">
			<div class="number" id="numberTwo" >2</div><br />
			<div class="name" id="secondPlayer"></div>
			<div class="name" id="secondScore"></div>
		</div>
		<div id="first" class="winners">
			<div class="number" id="numberOne" >1</div><br />
			<div class="name" id="firstPlayer"></div>
			<div class="name" id="firstScore"></div>
		</div>
		<div id="third" class="winners">
			<div class="number" id="numberThree" >3</div><br />
			<div class="name" id="thirdPlayer"></div>
			<div class="name" id="thirdScore"></div>
		</div>
	</div>
	
	<?php include 'scripts/finish.php';?>
</body>

</html>