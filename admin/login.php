<?php 
session_start();
if(isset($_POST['submit'])){
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_password'];
	include('connect.php');
	$sql ="select * from options where loginid ='$user_name' AND loginpass ='$user_pass'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while( $row = mysqli_fetch_assoc($result))
		{
			$_SESSION['user_name'] = $row['loginid'];
		}
		
    }
   mysqli_close($conn);
   header('location:index.php');
}
?>
<html>
<head>
	<title>Admin Login Panel</title>
</head>
<body>
<div class="login">
	<form action="login.php" method ="post">
		<table width="400" height="150" align="center" valign="center" border="6">
		<caption><h1>Admin Login</h1></caption>
			<tr>
				<td> User Name</td>
				<td> <input type="text" name="user_name" id="user_name"></td>
			</tr>
			<tr>
				<td> Password</td>
				<td> <input type="password" name="user_password" id="user_password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>	
</body>
</html>