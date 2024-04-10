<?php    if(isset($_COOKIE["shkie"]))
    {        setcookie("shkie", $_COOKIE["shkie"], time() + 0);
        header("Location: sign.html");   exit;    }
    else    {        header("Location: sign.html");   exit;   } ?>