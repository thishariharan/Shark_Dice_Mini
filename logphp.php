<?php                        $conn = mysqli_connect('localhost', 'root', '', 'shark_game');
                        if (!$conn) { die("Connection failed: " . mysqli_connect_error());  }
                          $name = $_POST['username'];    $password = $_POST['password'];                     
                          $sql = "SELECT * FROM player WHERE User_Name='$name' AND Passcode='$password'";
                          $result = mysqli_query($conn, $sql);                          
                          if (mysqli_num_rows($result) > 0) {
                            $expire = time() + 18000; setcookie("shkie", $name, $expire);
                            header("Location: gamehome.php");exit;
                          } else {header("Location: sign.html");   exit; }
                          mysqli_close($conn);                    ?>