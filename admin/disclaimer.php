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
   $add1 = $_POST['disclaimer'];
   $sql = "UPDATE OPTIONS  set disclaimer ='$add1'";
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
  	$disclaimer = $row['disclaimer'];
   }
  mysqli_close($conn);
}

?>
<?php require_once('include/header.php');?>
<div class="container table">
   <div class="row table-row">
		<?php include('include/menu.php');?> <!--three column left hand side-->
		<div class="col-md-9 table-cell right-side"> 	
			<form action="disclaimer.php" method="POST">
				<table border="6">
					<caption><h1>Disclaimer </h1></caption>
					<tr>
						<td>Privacy Policy </td>
						<td><textarea name="disclaimer" id="privacy" cols="240" rows="15"><?php echo $disclaimer; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Save Policy"></td>
					</tr>
				</table>
			</form>
		</div> 	
	</div>
</div>
<?php require_once('include/footer.php');?>
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'privacy' );
            </script>
</body>
</html>