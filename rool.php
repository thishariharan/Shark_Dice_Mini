<?php   $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
if (!$conn) {    die("Connection failed: " . mysqli_connect_error());   }
$cnt = "SELECT count(match_no) as cnt from current_match";
                                $cr = $conn->query($cnt);
                                if ($cr->num_rows > 0) {
                                    while($cs = $cr->fetch_assoc()) { $cv = $cs["cnt"];}                            
                                  } 
$cnp = "SELECT * from choose where nope=69";
$ccr = $conn->query($cnp);
if ($ccr->num_rows > 0) {
    while($cs = $ccr->fetch_assoc()) { $cccv = $cs["play"];}                            
} 
echo $cccv;
$cnp1 = "SELECT * from current_match where play=$cccv";
$ccr1 = $conn->query($cnp1);
if ($ccr1->num_rows > 0) {
    while($cs1 = $ccr1->fetch_assoc()) { $cv1 = $cs1["Gain"]; $cs2 = $cs1["points"];
    }                              
} 
$cccv1 = $cv1 + 1;  $cpts1 = $cs2 + 1000;
$cset1 = "UPDATE current_match set Gain=$cccv1,points=$cpts1 where play=$cccv";
if ($conn->query($cset1) === TRUE) {  }
$ran = rand(1, $cv);
$cnp2 = "SELECT chaos,points from current_match where play=$ran";
$ccr2 = $conn->query($cnp2);
if ($ccr2->num_rows > 0) {
    while($cs2 = $ccr2->fetch_assoc()) { $cv2 = $cs2["chaos"]; $css2 = $cs2["points"];}                            
} 
$cccv2 = $cv2 + 1;  $cpts2 = $css2 - 800;
$cset2 = "UPDATE current_match set chaos = $cccv2,points=$cpts2 where play=$ran";
if ($conn->query($cset2) === TRUE) {  }
$cngv = $cccv+1;
if($cngv > $cv){    $cngv = 1;}
$set = "UPDATE choose set val = $ran,play=$cngv where nope=69";
if ($conn->query($set) === TRUE) {
    mysqli_close($conn);  header("Location: game.php");   exit;
}?>