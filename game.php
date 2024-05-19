<?php
    session_start();
    if(isset($_POST["start"])){
        $_SESSION["p1Score"]=0;
        $_SESSION["p2Score"]=0;
        $_SESSION["p3Score"]=0;
        $_SESSION["p1"]=$_POST["play1"];
        $_SESSION["p2"]=$_POST["play2"];
        $_SESSION["p3"]=$_POST["play3"];
        $_SESSION["stevKoc"]=$_POST["dice"];
        $_SESSION["stevMet"]=$_POST["turns"];
        $_SESSION["pCT"]=array(0,0,0);
        $_SESSION["stevVrz"]=0;
    }
    function p1() {
        if(isset($_POST["throw"])) {
            $destination = "end.php";
            if($_SESSION["stevVrz"]==$_SESSION["stevMet"]){
                header("Location: $destination");
                exit;
            }
            $_SESSION["stevVrz"]++;
            $t1 = 0;
            $p1Met = array();
            for($i = 0; $i < $_SESSION["stevKoc"]; $i++) {
                $tr1 = rand(1, 6);
                array_push($p1Met, $tr1);
                $t1 += $tr1;
            }
            $_SESSION["pCT"][0] = $t1;
            $_SESSION["p1Score"] += $_SESSION["pCT"][0];
            echo "<h4>Trenuten met:</h4>
                  <h4>" . $_SESSION["pCT"][0] . "</h4>
                  <h4>Skupaj:</h4>
                  <h4 class=\"d\">" . $_SESSION["p1Score"] . "</h4>
                  <div class=\"dic\">
                      <div class=\"di\">";
            foreach ($p1Met as $throw) {
                echo "<img src='img/".$throw.".png'>";
            }
            echo "</div>
                  </div>";
        }
    }

    function p2() {
        if(isset($_POST["throw"])) {
            $t2 = 0;
            $p2Met = array();
            for($i = 0; $i < $_SESSION["stevKoc"]; $i++) {
                $tr2 = rand(1, 6);
                array_push($p2Met, $tr2);
                $t2 += $tr2;
            }
            $_SESSION["pCT"][1] = $t2;
            $_SESSION["p2Score"] += $_SESSION["pCT"][1];
            echo "<h4>Trenuten met:</h4>
                  <h4>" . $_SESSION["pCT"][1] . "</h4>
                  <h4>Skupaj:</h4>
                  <h4 class=\"d\">" . $_SESSION["p2Score"] . "</h4>
                  <div class=\"dic\">
                      <div class=\"di\">";
            foreach ($p2Met as $throw) {
                echo "<img src='img/".$throw.".png'>";
            }
            echo "</div>
                  </div>";
        }
    }

    function p3() {
        if(isset($_POST["throw"])) {
            $t3 = 0;
            $p3Met = array();
            for($i = 0; $i < $_SESSION["stevKoc"]; $i++) {
                $tr3 = rand(1, 6);
                array_push($p3Met, $tr3);
                $t3 += $tr3;
            }
            $_SESSION["pCT"][2] = $t3;
            $_SESSION["p3Score"] += $_SESSION["pCT"][2];
            echo "<h4>Trenuten met:</h4>
                  <h4>" . $_SESSION["pCT"][2] . "</h4>
                  <h4>Skupaj:</h4>
                  <h4 class=\"d\">" . $_SESSION["p3Score"] . "</h4>
                  <div class=\"dic\">
                      <div class=\"di\">";
            foreach ($p3Met as $throw) {
                echo "<img src='img/".$throw.".png'>";
            }
            echo "</div>
                  </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambling Room</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="icon" type="image/x-icon" href="img/gambling.png">
</head>
<body>
    <h1>GAME</h1>
    <div class="main">
    <form method="post">
        <table>
            <tr>
                <td class="pl">
                    <div class="pla">
                        <h3><?php echo $_SESSION["p1"]; ?></h3>
                        <?php
                        if((isset($_POST["throw"]))==false) {
                            echo "<h4>Trenuten met:</h4>
                                  <h4>0</h4>
                                  <h4>Skupaj:</h4>
                                  <h4 class=\"d\">0</h4>
                                  <div class=\"dic\">
                                      <div class=\"di\">";
                            echo "</div>
                                  </div>";
                        }
                        p1();?>
                    </div>
                </td>
                <td class="pl">
                    <div class="pla">
                        <h3><?php echo $_SESSION["p2"]; ?></h3>
                        <?php
                        if((isset($_POST["throw"]))==false) {
                            echo "<h4>Trenuten met:</h4>
                                  <h4>0</h4>
                                  <h4>Skupaj:</h4>
                                  <h4 class=\"d\">0</h4>
                                  <div class=\"dic\">
                                      <div class=\"di\">";
                            echo "</div>
                                  </div>";
                        }
                        p2();?>
                    </div>
                </td>
                <td class="pl">
                    <div class="pla">
                        <h3><?php echo $_SESSION["p3"]; ?></h3>
                        <?php
                        if((isset($_POST["throw"]))==false) {
                            echo "<h4>Trenuten met:</h4>
                                  <h4>0</h4>
                                  <h4>Skupaj:</h4>
                                  <h4 class=\"d\">0</h4>
                                  <div class=\"dic\">
                                      <div class=\"di\">";
                            echo "</div>
                                  </div>";
                        }
                        p3();?>
                    </div>
                </td>
            </tr>
        </table>
        <input type="submit" name="throw" class="btn" value="<?php if($_SESSION["stevVrz"]==$_SESSION["stevMet"]){echo "REZULTATI";}else{echo "VRZI";}?>">
    </form>
    </div>
</body>
</html>