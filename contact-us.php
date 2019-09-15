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
	<div class="grid_7 macthheight">
		<div class="contact-us">
		<h1>Contact us</h1>
		<form action="contact-us.php" action ="POST">
		<table width="100%">
			<tr>
				<td width="40%">Name *</label> </td>
				<td><input type="text" name="name" id="username"></td>
			</tr>
			<tr>
				<td>Email *</label> </td>
				<td><input type="email" name="email" id="email"></td>
			</tr>
			<tr>
				<td>Message *</label> </td>
				<td><textarea name="message" id="message" cols="80" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Submit Messages"> </td>
			</tr>
			
			
		</table>
		</form>
		</div>
	</div>
	<?php include('sidebar-right.php');?>
	
</div>
<?php include('footer.php');?>
</body>
</html>