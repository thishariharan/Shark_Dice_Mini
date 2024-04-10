<?php                        $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                        if (!$conn) {   die("Connection failed: " . mysqli_connect_error());      }
                          $amt = $_POST['bat']; $name = $_COOKIE['shkie'];                          
                          $sql = "SELECT Balance FROM wallets WHERE User_Name='$name'";
                          $result = mysqli_query($conn, $sql);                          
                          if (mysqli_num_rows($result) > 0) {
                            while($r = $result->fetch_assoc()) {$b = $r["Balance"];  }                            
                          }
                          $bt = $b - $amt;$getsa = "SELECT match_no from player where User_Name = '$name'";
                          $gresult = mysqli_query($conn, $getsa);                          
                          if (mysqli_num_rows($gresult) > 0) {
                            while($r5 = $gresult->fetch_assoc())  {    $ms = $r5["match_no"];    }                            
                          } 
                          $mt = $ms + 1;  $tc = "SELECT * from current_match where User_Name='$name'";
                          $tcr = mysqli_query($conn, $tc);
                          $cnt = "SELECT count(match_no) as cnt from current_match";
                                $cr = $conn->query($cnt);
                                if ($cr->num_rows >= 0) {
                                    while($cs = $cr->fetch_assoc()) { $pc = $cs["cnt"];}                            
                                  } 
                          $play = $pc + 1;
                          $tru = "INSERT into current_match values ('$name',$mt,5000,$amt,0,0,$play)";
                          if (mysqli_num_rows($tcr) <= 0) {
                            if(mysqli_query($conn,$tru)===true) {}                            
                            } 
                          $sql4 = "UPDATE wallets SET Balance = '$bt' WHERE User_Name = '$name'";
                          $sql14 = "UPDATE player SET match_no = '$mt' WHERE User_Name = '$name'";
                          $sql24 = "UPDATE choose SET val = 0 WHERE nope = 69";
                          if ($conn->query($sql24) === TRUE) {   } 
                          if ($conn->query($sql14) === TRUE) {   } 
                          if ($conn->query($sql4) === TRUE) {
                            mysqli_close($conn);  header("Location: game.php");   exit;
                        }    ?>