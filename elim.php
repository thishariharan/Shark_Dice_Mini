<?php                            $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
                            $nm = $_COOKIE['shkie'];
                            $cnt = "SELECT play,Bet from current_match where Chaos > 2";
                            $cr = $conn->query($cnt);
                                if ($cr->num_rows > 0) {
                                    while($cs = $cr->fetch_assoc()) { $cv = $cs["play"]; $b = $cs["Bet"];    }                            
                                  } 
                            $cnt2 = "SELECT count(match_no) as cnt from current_match";
                            $cr2 = $conn->query($cnt2);
                            if ($cr2->num_rows > 0) {
                                while($cs2 = $cr2->fetch_assoc()) { $cv2 = $cs2["cnt"];}                            
                            }                             
                            if($cv < $cv2)
                            {   $cng = $cv; $cng2 = $cv + 1;}
                            $cng2 = $cv + 1;
                            echo $cv." ".$b." ".$cv2." ".$cv." ".$cng2;
                            
                            $up = "UPDATE current_match set play=$cv where play = $cng2";
                            if ($conn->query($up) === TRUE) {  }
                            $cnt3 = "SELECT * from win";
                            $cr3 = $conn->query($cnt3);
                                if ($cr3->num_rows > 0) {
                                    while($cs3 = $cr3->fetch_assoc()) { $v = $cs3["amt"];}                            
                                  } 
                            $bt = $v + $b;
                            $up2 = "UPDATE win set amt=$bt";
                            if ($conn->query($up2) === TRUE) {  }
                            $up3 = "UPDATE choose set play=$cv where nope =69";
                            if ($conn->query($up3) === TRUE) {  }
                            $all = "DELETE from current_match where Chaos > 2";
                            if (mysqli_query($conn, $all)) { header("Location: game.php");  exit; }    
                            ?>