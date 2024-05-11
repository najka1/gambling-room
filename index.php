<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="favicon.ico" href="slike/gambling.png" />
</head>


<body>
    <div id="naslov">
        <h1>WELCOME to GAMBLING ROOM</h1>
    </div>
	<div class="glavni">
    	<div class="uporabniki">
			<form action="game.php" method="post">
				<div id="playerOne" class="player">
					<div class="playerTitle">UPORABNIK 1:<br /></div>				
					<input id="player0" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userOne" required placeholder="Janez"></input>
				</div><br />
				<div id="playerTwo" class="player">
					<div class="playerTitle">UPORABNIK 2:<br /></div>
					<input id="player1" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userTwo" required placeholder="Tina"></input>
				</div><br />
				<div id="playerThree" class="player">
					<div class="playerTitle">UPORABNIK 3:<br /></div>
					<input id="player2" autocomplete="off" maxlength='11' type="text" class="playerInput" name="userThree" required placeholder="Maja"></input>
				</div><br />
				
				<div id="roundsWrapper">
					<div id="roundsTitle">Število metov:</div>
						<select name="rolls" id="rounds">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
				</div>
				<br />
				<input type="submit" value="START"></input>
				
			</form>
		
    	</div>
		<br>
	
	</div>
	<br>
	<img src="slike/kocke.jpeg" alt="kocke" id="slikakocke">
	
	<script src="script/input.js"></script>
</body>

</html>