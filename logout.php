<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['role']);
unset($_SESSION['id']);
header("location:login.php");
?>