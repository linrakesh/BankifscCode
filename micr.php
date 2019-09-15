<?php 
require_once('admin/connect.php');
include('functions.php');
include('admin/googleads.php');?>
<?php include('header.php');?>
<body>
<div class="container_12">
	<div class="grid_12">
		<center><h1>Bank IFSC Codes Today</h1></center>
		<center><h3>All Bank IFSC and MICR code locator operating in India </h3></center>
	</div>
	<div class="grid_12">
		<center><?php echo $add1 ;?></center>
	</div>
	<?php include('menu.php');?>
	<?php include('sidebar.php');?>

	<div id="forms" class="grid_7 matchheight">
	<?php	
		if(isset($_GET['micr_code'])) {
   		   	$code = $_GET['micr_code'];
  			echo "<h2> Bank information for MICR Code :".strtoupper($code) ." </h2> ";
  			show_bank_by_micr_code($code);
  			} 
	?>
			<form action="micr.php" method="GET">
				<table style="margin-top:30px;">
					<tr>
						<td>Enter you MICR Code Here :</td>
						<td><input type="text" id="micr_code" name ="ifsc_code"></td>
						<td><input type="submit" name ="micr_submit" id="micr_submit" value="submit"></td>

					</tr>
				</table>
			</form>
	</div>
	<?php include('sidebar-right.php');?>
</div>
<?php include('footer.php');?>
</body>

</html>