<?php
 session_start(); 
 unset($_SESSION['user']); 
 unset($_SESSION['stat']); 
 include_once "./locations.php";
 header("Location: ".$default);   
?>