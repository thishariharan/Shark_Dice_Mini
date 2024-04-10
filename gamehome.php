<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shark Dice - Ready</title>
    <script src="throw.js" type="text/javascript"></script>
    <link rel="stylesheet" href="getcss.css"> 
</head>
<body id="whl">
        <div id="tit">
            <div id="hd">
                <a href="smple.html" style="text-decoration: none;color: red;"><h1>SHARK DICE</h1></a></div>
                <button onclick="cks()" id="ls"></button>
        </div>
        <div id="scs">
            <h2>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="smple.html">HOME</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#du">DONATE US</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#cu">CONTACT US</a></span>
                <span class="alls"><a style="text-decoration: none;color: gold;" href="#ab">ABOUT</a></span>
            </h2>
        </div>
        <div id="bod">
                <img id="ad1" src="rad.jpg" alt="leftad">
            <div id="mn">
                <br>
                <div class="wlt">
                <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                          }
                          $name = $_COOKIE['shkie'];
                          
                          $sql = "SELECT Account_Number,match_no,points FROM player WHERE User_Name='$name'";
                          $result = mysqli_query($conn, $sql);
                          $sql2 = "SELECT Balance FROM wallets WHERE User_Name='$name'";
                          $r2 = mysqli_query($conn, $sql2);

                          if (mysqli_num_rows($result) > 0) {
                            while($r = $result->fetch_assoc()) {
                                $ac = $r["Account_Number"]; $m = $r["match_no"]; $p = $r["points"];
                            }
                          }
                          if (mysqli_num_rows($r2) > 0) {
                            while($r = $r2->fetch_assoc()) { $bl = $r["Balance"];}
                          }                         
                    ?>
                    <p class="rsg2">Player Details</p>
                    <h3>User Name : <?php echo $name ?></h3>  <h3>Account Number : <?php echo $ac ?></h3>
                    <h3>Match Number : <?php echo $m ?></h3> <h3>Balance Shark Power : <?php echo $p ?></h3>
                </div>                
                <a style="text-decoration: none;color: gold;" href="https://www.shutterstock.com/">
                    <img src="vad.jpg" class="vad" alt="shrstk"></a>                
                <div class="wlt">
                        <p class="rsg2">Wallet Details</p>
                        <h3>Available Balance : <?php echo $bl ?></h3><h3>Wallet to Account</h3>
                        <form action="wta.php" method="post">
                        <input type="number" name="wta" id="wta" max=<?php echo "'$bl'" ?> class="wta" placeholder="Enter Amount">
                        <button class="wtab">Move</button>
                        </form>
                        <h3>Account to Wallet</h3>
                        <form action="atw.php" method="post">
                        <input type="number" name="atw" id="atw" class="wta" placeholder="Enter Amount">
                        <button class="wtab">Move</button>
                        </form>
                        <br><br>
                </div>
                <br>
                <div class="wlts">
                    <p class="rsg2">MODES</p>
                    <h3> LOW - LIFE PACK</h3><button disabled class="rsg2">Unavailable</button> <hr style="border-radius: 5px ;border-top: 3px solid red;">
                    <h3> MID - CLASS BUSINESS MAN</h3><a href="gameconf.php" class="rsg">Register with Rs200</a><br><br>
                    <hr style="border-radius: 5px ;border-top: 3px solid red;">
                    <h3> LUXURIOUS - MEGALODON</h3><button class="rsg2">Coming Soon</button><br><br>
                </div>
                
                <div id="dets">
                    <h4 class="alls2">Also us</h4>
                    <a href="https://www.facebook.com/"><img class="gto" src="fb.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img class="gto" src="inst.png" alt="Instagram"></a>
                    <a href="https://www.youtube.com/"><img class="gto" src="yt.png" alt="Youtube"></a>
                    <h5 class="alls2">
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="smple.html">HOME</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#du">DONATE US</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#cu">CONTACT US</a></span>
                        <span class="alls2"><a style="text-decoration: none;color: black;" href="#ab">ABOUT</a></span>
                    </h5>
                    <p class="alls2">&copy; Rights Reserved from Year 2023 by Us (Shark Dice Company)</p>
                </div>
            </div>
                <img id="ad2" src="rad.jpg" alt="rightad">
        </div>
        <script>
            function opengame() {
                var amt = document.getElementById('bat');
                if(document.getElementById('bat') >=200) {window.open("game.html"); }
                else   {alert("Bet Amount less than Rs200!, please increase it.");}
            }
            function cks(){window.location = "del.php";}
            if (document.cookie.indexOf("shkie") >= 0) {document.getElementById("ls").innerHTML = "LOGOUT";}
            else { document.getElementById("ls").innerHTML = "LOGIN"; }
            function del() { document.cookie = "shkie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";}
            function check() { window.location = "checktg.php"; }
        </script>
        <?php     mysqli_close($conn);?>
</body>
</html>