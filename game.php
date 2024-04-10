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
                    <form>
                        <p class="rsg2">GAME ON</p>
                        <h3>OPPONENTS</h3>
                        <table style="justify-content:centr;margin:auto;">
                            <tr><th>Player Name&emsp;</th><th>Bet Amount&emsp;</th><th>Shark Points&emsp;</th><th>Match Number&emsp;</th>
                            <th>The Gain&emsp;</th><th>The Pain&emsp;</th></tr>
                        <?php
                            header("refresh:5");
                            $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }
                            $nm = $_COOKIE['shkie'];
                            $all = "SELECT * from current_match where User_Name != '$nm' ORDER BY play asc";
                            $result = $conn->query($all);
                            //$result = mysqli_query($conn, $all);

                            if ($result->num_rows > 0) {
                                $eno = 0;
                                while($r = $result->fetch_assoc())
                                {
                                    $a = $r["User_Name"];$b = $r["match_no"]; $c = $r["points"];
                                    $d = $r["Bet"]; $e = $r["Gain"];  $f = $r["Chaos"];
                                    echo "<tr><td>$a</td><td>$d</td><td>$c</td><td>$b</td><td>$e</td><td>$f</td></tr>";
                                    if($f > 2){$enm = $r["User_Name"];$eno=1;}
                                }                            
                              } 
                            $images = array("one.png", "two.png", "three.png","four.png","five.png", "six.png");
                            $val = "select val,play from Choose where nope = 69";
                            $r69 = $conn->query($val);
                            if ($r69->num_rows > 0) {
                                while($r25 = $r69->fetch_assoc())
                                {
                                    $v20 = $r25["val"];
                                    $pl = $r25["play"];
                                }                            
                              } 
                        ?>
                        </table>                        
                        <h3>YOU</h3>
                        <table style="justify-content:centr;margin:auto;">
                            <tr><th>Player Name&emsp;</th><th>Bet Amount&emsp;</th><th>Shark Points&emsp;</th><th>Match Number&emsp;</th>
                                <th>The Gain&emsp;</th><th>The Pain&emsp;</th></tr>
                                <?php
                                    $all2 = "SELECT * from current_match where User_Name = '$nm'";
                                    $result2 = $conn->query($all2);
                                    //$result = mysqli_query($conn, $all);
        
                                    if ($result2->num_rows > 0) {
                                        while($r2 = $result2->fetch_assoc())                                        {
                                            $a = $r2["User_Name"]; $b = $r2["match_no"];  $c = $r2["points"];
                                            $d = $r2["Bet"]; $e = $r2["Gain"];  $f = $r2["Chaos"];
                                            if($f <= 2){
                                            echo "<tr><td>$a</td><td>$d</td><td>$c</td><td>$b</td><td>$e</td><td>$f</td></tr>";}
                                        }                            
                                      } 
                                ?>
                            </table>
                        <br>
                        <?php 
                                $vimg = $v20 - 1;
                              //$img = $images[$vimg];
                            if($vimg == 0){echo "<img id='die' src='$images[$vimg]' style='width:80px;' alt='Shark Dice'><br>";}     
                            else{echo "<img id='die' src='six.png' style='width:80px;' alt='Shark Dice'><br>";}     ?>              
                        <p id="toplay">
                            <?php
                                $cnt = "SELECT count(match_no) as cnt from current_match";
                                $cr = $conn->query($cnt);
                                if ($cr->num_rows > 0) {
                                    while($cs = $cr->fetch_assoc()) { $cv = $cs["cnt"];
                                         echo 'There are '.$cv.' Player for now'; }                            
                                  } 
                                  $vl = $pl-1;
                                  $ccccc = "SELECT User_Name from current_match where play =$vl";
                                $crrr = $conn->query($ccccc);
                                if ($crrr->num_rows > 0) {
                                    while($cssss = $crrr->fetch_assoc()) {   $npl = $cssss["User_Name"]; 
                                        echo '<br>In Past Play<br>'; }                            
                                  } 
                                if($v20 < 1)
                                {
                                    echo 'Nobody';
                                }
                                else{   echo $npl;}
                                  echo ' Gains 1000 Shark Points<br>';
                                  $vf = $v20-1;
                                $ccccsc = "SELECT User_Name from current_match where play =$vf";
                                $crrrs = $conn->query($ccccsc);
                                if ($crrrs->num_rows > 0) {
                                    while($cssssr = $crrrs->fetch_assoc()) {   $nplo = $cssssr["User_Name"]; }                            
                                } 
                                if($v20 < 1)
                                {   echo 'Nobody';}
                                else{   echo $nplo;}
                                $v212 = $pl + 1;
                                if($v212 > $cv){    $v212 = 1;}
                                $ccrsc = "SELECT User_Name from current_match where play ='$v212'";
                                $ccrsqc = $conn->query($ccrsc);
                                if ($ccrsqc->num_rows > 0) {
                                    while($casssr = $ccrsqc->fetch_assoc()) {   $nmsf = $casssr["User_Name"]; }                            
                                } 
                                echo " Looses 800 Shark Points<br><br>";
                                
                                if($cv == 1)  {  header("Location: done.php");exit;}
                                if($eno>0){echo "$enm has Lost more than 2 Times and Needs to be Eliminated<br><br><a class='rsg' id='b1' href='elim.php'>ELIMINATE $enm</a>";}
                                else{    echo "Now $nmsf Rolls the Shark Dice<br><br><a class='rsg' id='b1' href='rool.php'>ROLL DICE</a>";}
                            ?>
                        </p>
                        
                        <br><br>
                    </form>
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
            /*let i = <?php echo $ran-1; ?>
            var images = ["one.png", "two.png", "three.png","four.png", "five.png", "six.png"];
            function cngss(){
            //var newUrl = "rl2.php?img=one.png,two.png,three.png,four.png,five.png,six.png&url=rl1.php";
            var img = document.getElementById('die');
            img.src = images[i];
            document.getElementById('loss').innerHTML = "helo";
            }*/

            function cks(){window.location = "del.php";}
            if (document.cookie.indexOf("shkie") >= 0) {document.getElementById("ls").innerHTML = "LOGOUT";}
            else { document.getElementById("ls").innerHTML = "LOGIN"; }
            function del() { document.cookie = "shkie=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";}
            function check() { window.location = "checktg.php"; }

        </script>
</body>
</html>