<?php
    session_start();
    setcookie("user_id","",time()-3400);
    session_destroy();
    header("Location:login.php");
?>