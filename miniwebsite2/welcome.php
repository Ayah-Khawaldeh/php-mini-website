<?php
 session_start();

if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: welcome.php");
    exit;
}

 session_start();


echo $_POST['uname'];
echo"<br>";
 echo $_POST['pwd'];
 echo"<br>";


?>




