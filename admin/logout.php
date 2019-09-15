<?php 
session_start();
echo "<script>alert('Logout from the system')</script>";
session_destroy();
echo "<script>window.open('login.php','_self')</script>";
?>