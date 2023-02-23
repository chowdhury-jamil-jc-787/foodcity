<?php

session_start();

if( !empty($_SESSION["name"])){
    header("location: ../dashboard.php");
}

?>