<!DOCTYPE html>
<html lang="sl">

<head>
    <title>Gambling room</title>
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="favicon.ico" href="favicon.ico" />
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
				<br />

					<label for="kocke">Število kock:</label>
					<select id="kocke" name="kocke">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>

					<label for="igre">Število iger:</label>
					<select id="igre" name="igre">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<br />
				<input type="submit" id="submit" value="START"></input>
				
			</form>
		
    	</div>
		<br>
	
	</div>
	<br>
	<img src="slike/kocke.jpeg" alt="kocke" id="slikakocke">
</body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>