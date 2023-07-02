<?php
session_start();
if($_SESSION['username']==null)
{  
    echo ' <script> alert(" Please login to logout" ) </script> ';
   
}
else{
    
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("location:index.php");
}

?>