<?php
session_start();
   if(!isset($_SESSION['user_name']))
     {
     	header('location:login.php');
     }
?>
<?php
if(isset($_POST['submit'])){
   include('connect.php');
   $add1 = $_POST['google72890'];
   $add2 = $_POST['google160600'];
   $add3 = $_POST['google300250'];
   $add4 = $_POST['google72815'];
   $add5 = $_POST['google46015'];

   $sql = "UPDATE OPTIONS  set gadd1 ='$add1', gadd2 ='$add2', gadd3 ='$add3', gadd4='$add4', gadd5='$add5'";
   //echo $sql;
   if (mysqli_query($conn, $sql))
	    {
		    echo "<script> alert('New record added successfully')</script>";
			    echo "<script> window.open('index.php','_self')</script>";
			} 
	else {
			    echo "Error Inserting new record: " . mysqli_error($conn);
			}
mysqli_close($conn);
}
else
{
  include('connect.php');
  $query = "select * from options";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result))
  {
  	$add1 = $row['gadd1'];
  	$add2 = $row['gadd2'];
  	$add3 = $row['gadd3'];
  	$add4 = $row['gadd4'];
  	$add5 = $row['gadd5'];

  }
  mysqli_close($conn);
}

?>
<?php require_once('include/header.php');?>
<div class="container table">
   <div class="row table-row">
		<?php include('include/menu.php');?> <!--three column left hand side-->
		<div class="col-md-9 table-cell right-side"> 	
			<form action="privacy.php" method="POST">
				<table border="6">
					<caption><h1>Privacy Policy</h1></caption>
					<tr>
						<td>Adsense code for 728*90px</td>
						<td><textarea name="google72890" id="google160" cols="80" rows="10"><?php echo $add1; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Save Google Codes"></td>
					</tr>
				</table>
			</form>
		</div> 	
	</div>
</div>
<?php require_once('include/footer.php');?>
</body>
</html>