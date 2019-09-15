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
		if(isset($_GET['ifsc_code'])) {
   		   	$code = $_GET['ifsc_code'];
  			echo "<h2> Bank information for IFSC Code :".strtoupper($code) ." </h2> ";
  			show_bank_by_code($code);
  			} 
	?>
			<form action="ifsc.php" method ="GET">
				<table style="margin-top:30px;">
					<tr>
						<td>Enter you IFSC Code Here :</td>
						<td><input type="text" id="ifsc_code" name ="ifsc_code"></td>
						<td><input type="submit" id="ifsc_submit" value="Submit"></td>

					</tr>
				</table>
			</form>
	</div>
	<?php include('sidebar-right.php');?>
</div>
<?php include('footer.php');?>
</body>

</html>