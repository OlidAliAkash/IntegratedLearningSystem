<?php

 unset($_SESSION['logged_in']);  

session_start();
    session_destroy();
    $_SESSION = array();
    header("location:/IntegratedLearningSystem/index.php");
?>
