<?php                        $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                        if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
                          $amt = $_POST['wta'];    $name = $_COOKIE['shkie'];                          
                          $sql = "SELECT Account_Number,Balance FROM wallets WHERE User_Name='$name'";
                          $result = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($result) > 0) {
                            while($r = $result->fetch_assoc()) { $ac = $r["Account_Number"];  $b = $r["Balance"]; }
                          } 
                          $bt = $b - $amt;
                          $sql4 = "UPDATE wallets SET Balance = '$bt' WHERE Account_Number = '$ac'";
                          if ($conn->query($sql4) === TRUE) {} 
                          $s1 = "SELECT Balance from bank where Account_Number='$ac'";
                          $result2 = mysqli_query($conn, $s1);
                          if (mysqli_num_rows($result2) > 0) {
                            while($r2 = $result2->fetch_assoc()) {  $base = $r2["Balance"]; }
                          } 
                          $bst = $base + $amt;
                          $sql5 = "UPDATE bank SET Balance = '$bst' WHERE Account_Number = '$ac'";
                          if ($conn->query($sql5) === TRUE) {
                            mysqli_close($conn); header("Location: gamehome.php");exit;
                        }  ?>