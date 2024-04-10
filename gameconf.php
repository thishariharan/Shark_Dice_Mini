<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shark Dice - GAME</title>
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
                    <p class="rsg2">RULES</p>
                    <p>Each Shark is given two chances<br><br>Each time when the Dice is Rolled, a Random Shark is attacked.<br>
                    <br>Each Shark has 5000 Points at Start.<br><br>The Person who lasts for longer time is the Winner.<br><br>
                    Chaos -> Loose 500 Points<br><br>Gain -> Attain 200 Points<br><br>Chaos more than two time -> Player gets Eliminated</p>
                    <br>
                </div>
                
                <a style="text-decoration: none;color: gold;" href="https://www.shutterstock.com/">
                    <img src="vad.jpg" class="vad" alt="shrstk"></a>
                
                <div class="wlts">
                        <p class="rsg2">MID - CLASS BUSINESS MAN</p>
                        <h3>Bet Amount</h3>
                        <form action="detuct.php" method="post">
                            <input type="number" required id="bat" name="bat" min="200" class="wta" placeholder="Enter Amount"><br><br><br>
                            <button class="rsg">PLAY</button>
                        </form>
                        <br><br>
                </div>
                <br>
                
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
</body>
</html>