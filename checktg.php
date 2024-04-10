<?php    if(isset($_COOKIE["shkie"]))    {        header("Location: gamehome.php");exit;    }
    else    {        header("Location: sign.html");   exit;   } ?>