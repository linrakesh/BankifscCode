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
	<?php include('content.php');?>
	<?php include('sidebar-right.php');?>
	
</div>
<?php include('footer.php');?>
</body>
</html>