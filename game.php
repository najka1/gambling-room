<?php
	session_start();
	if((isset($_POST["start"]))==true){
		$_SESSION["scoreOne"] = 0;
		$_SESSION["scoreTwo"] = 0;
		$_SESSION["scoreThree"] = 0;
		$_SESSION["rollsLeftOne"] = $_POST["rolls"];
		$_SESSION["rollsLeftTwo"] = $_POST["rolls"];
		$_SESSION["rollsLeftThree"] = $_POST["rolls"];
		$_SESSION["stevKoc"] = $_POST["dice"];
		$_SESSION["userOne"] = $_POST["userOne"];
		$_SESSION["userTwo"] = $_POST["userTwo"];
		$_SESSION["userThree"] = $_POST["userThree"];	
	}
	$d1=array();
	$d2=array();
	$d3=array();
	for($i=0;i<$_SESSION["rollsLeftOne"]){
		array_push($d1, array(rand(1,6), rand(1,6), rand(1,6)));
		array_push($d2, array(rand(1,6), rand(1,6), rand(1,6)));
		array_push($d3, array(rand(1,6), rand(1,6), rand(1,6)));
	}
	$ind=0;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="slike/gambling.png" type="image/png">
	<link rel="stylesheet" href="css/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Gambling Room</title>
</head>

<body>	
	<div id="title">VRŽI KOCKO</div>
	<div id="menu">			
		<div id="playerOne" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userOne"]; ?><br /><br></div>	
				<div class="score">Rezultat:</div>
				<div id="scoreOne" class="score">0</div>
				<div class="rollsLeft">Trenutni met:</div>
				<div class="rollsLeft" id="rollsLeftOne"><?php 
					if((isset($_POST["vrzi"]))==true){
						echo $d1[$ind][0]+$d1[$ind][1]+$d1[$ind][2];
					}
				?></div>
				<canvas id="dicePicOne" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicOne2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicOne3" class="dicePic" width="50" height="50"></canvas>
		</div>
		
		<div id="playerTwo" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userTwo"]; ?><br /><br></div>	
				<div class="score">Rezultat:</div>
				<div id="scoreTwo" class="score">0</div>
				<div class="rollsLeft">Trenutni met::</div>
				<div class="rollsLeft" id="rollsLeftTwo"><?php echo $_SESSION["rollsLeftTwo"] ?></div>
				<canvas id="dicePicTwo" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicTwo2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicTwo3" class="dicePic" width="50" height="50"></canvas>
		</div>		
		
		<div id="playerThree" class="playerGame">
				<div class="playerTitle"><?php echo $_SESSION["userThree"]; ?><br /><br></div>	
				<div class="score">Rezultat:</div>
				<div id="scoreThree" class="score">0</div>
				<div class="rollsLeft">Trenutni met::</div>
				<div class="rollsLeft" id="rollsLeftThree"><?php echo $_SESSION["rollsLeftThree"] ?></div>
				<canvas id="dicePicThree" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicThree2" class="dicePic" width="50" height="50"></canvas>
				<canvas id="dicePicThree3" class="dicePic" width="50" height="50"></canvas>
		</div>
		
		<form method="post">
			<input type="submit" name="vrzi" id="results" value="VRŽI"></input>
		</form>
		
	</div>	
</body>	
</html>