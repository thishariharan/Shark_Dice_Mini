<?php                        $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                        if (!$conn) {  die("Connection failed: " . mysqli_connect_error());    }
                          $nm = $_POST['username'];   $ps = $_POST['password'];    $em = $_POST['email'];
                          $ag = $_POST['age'];    $ph = $_POST['phone'];   $ac = $_POST['acc'];                          
                          $sql = "SELECT * FROM player WHERE User_Name='$nm'";
                          $result = mysqli_query($conn, $sql);
                          $str = "INSERT INTO player VALUES ('$nm','$ps',$ph,'$em',$ag,$ac,0,0)";                          
                          if (mysqli_num_rows($result) <= 0) {
                            if(mysqli_query($conn,$str)===true) {     }
                            $expire = time() + 3600;  setcookie("shkie", $nm, $expire);
                            header("Location: gamehome.php");      exit;
                          } else {   header("Location: create.html"); exit;     }                          
                          mysqli_close($conn);                    ?>