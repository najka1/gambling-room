<?php
    session_start();
    $p1=$_SESSION["p1Score"];
    $p2=$_SESSION["p2Score"];
    $p3=$_SESSION["p3Score"];
    $a1=array(array($p1,$p2,$p3), array($_SESSION["p1"],$_SESSION["p2"],$_SESSION["p3"]));
    array_multisort($a1[0], $a1[1]);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambling Room</title>
    <link rel="stylesheet" href="zadnji.css">
    <link rel="icon" type="image/x-icon" href="img/gambling.png">
</head>
<body>
    <h1>ČESTITKE</h1>
    <div class="main">
        <table>
            <tr>
                <td>
                    <div id="td1">
                        <h2>3RD</h2>
                        <h3><?php echo $a1[1][0]?></h3>
                        <h4><?php echo $a1[0][0]." Points"?></h4>
                    </div>
                </td>
                <td>
                    <div id="td2">
                        <h2>1ST</h2>
                        <h3><?php echo $a1[1][2]?></h3>
                        <h4><?php echo $a1[0][2]." Points"?></h4>
                    </div>
                </td>
                <td>
                    <div id="td3">
                        <h2>2ND</h2>
                        <h3><?php echo $a1[1][1]?></h3>
                        <h4><?php echo $a1[0][1]." Points"?></h4>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <h5 id="cnt">You can roll again in 10</h5>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const a=document.getElementById("cnt");
        i=10;
        setInterval(function(){
            i--;
            a.innerText="You can roll again in "+i;
            if(i==0){
                window.location.href = 'index.php';
            }
        },1000)
    });
</script>
</html>