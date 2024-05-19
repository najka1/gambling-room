<!DOCTYPE html>
<html>
    <head>
        <title>Gambling Room</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/x-icon" href="img/gambling.png">
    </head>
    <body>
        <h1>GAMBLING ROOM</h1>
        <div class="main">
            <form name="game" action="game.php" method="POST" autocomplete="off">
                <ul id="pl">
                    <li>
                        <div class="players">
                            <h3 class="top">PRVI</h3>
                            <h3 class="bottom">UPORABNIK</h3>
                            <input type="text" name="play1" class="player" required>
                        </div>
                    </li>
                    <li>
                        <div class="players">
                            <h3 class="top">DRUGI</h3>
                            <h3 class="bottom">UPORABNIK</h3>
                            <input type="text" name="play2" class="player" required>
                        </div>
                    </li>
                    <li>
                        <div class="players">
                            <h3 class="top">TRETJI</h3>
                            <h3 class="bottom">UPORABNIK</h3>
                            <input type="text" name="play3" class="player" required>
                        </div>
                    </li>
                </ul><br>
                        <div class="rules">
                            <br><br><span class="dice1">ŠTEVILO KOCK</span>
                            <select name="dice">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <br>
                            <span class="turns1">ŠTEVILO METOV</span>
                            <select name="turns">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                        </div>
                
                <br><input type="submit" id="start" name="start" value="IGRAJ">
            </form>
        </div>
    </body>
</html>