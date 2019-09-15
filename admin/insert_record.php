<?php
session_start();
   if(!isset($_SESSION['user_name']))
     {
     	header('location:login.php');
     }
?>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset($_POST['addsubmit']))
{
	$name = $_POST['user_name'];
	$email =$_POST['user_email'];
	$insert_query ="insert into student (name,email) values ('$name','$email')";
	include('connect.php');
	if($name=='' or $email=='')
	 {
        echo "<script> alert('Please fill all the values')</script>";

	 }
	else{
			if (mysqli_query($conn, $insert_query)) {
			    echo "<script> alert('New record added successfully')</script>";
			    echo "<script> window.open('insert_record.php','_self')</script>";
			} else {
			    echo "Error Inserting new record: " . mysqli_error($conn);
			}
		}
	mysqli_close($conn);
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Insert a New Record</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<form action="insert_record.php" method="POST">
		<table width="600" border="5" align="center">
		   <caption><h1>Add New record</h1></caption>
			<tr>
				<td align="right">Name </td>
				<td><input type="text" name="user_name" id ="user_name" size="50"></td>
			</tr>
			<tr>
				<td align="right">Email Id </td>
				<td ><input type="email" name="user_email" id="user_email" size="50"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="addsubmit" value ="Add Record"></td>
				
			</tr>
		</table>
	</form>
</body>
</html>
