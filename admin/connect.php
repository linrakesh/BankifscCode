<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "";
$database ="ifsccode";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
   if(! $conn )
   {
     die('Could not connect: ' . mysqli_error());
   }
mysqli_select_db($conn, $database);
?>   