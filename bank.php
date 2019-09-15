<?php require_once('functions.php'); 
$original_bank_name = $_GET['bank_name'];
$bank_name = preg_replace('/_/',' ',$_GET['bank_name']);
?>
<?php
include('admin/googleads.php');
 //include('header.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<TITLE>Find <?php echo $bank_name; ?> all branches IFSC code, MICR Codes, Address, Phone Numbers in India, for NEFT, RTGS, ECS: BankIFSCcodeToday.com</TITLE>
	<link href="http://localhost/cms/images/favicon.ico' rel='shortcut icon">
	<link rel="alternate" type="application/rss+xml" title="Find IFSC, MICR Codes, Address, All Bank Branches in India, for NEFT, RTGS, ECS: BankIFSCcodeToday.com" href="http://www.bankifsccodetoday.com/feeds">
	<meta name="description" content="Find <?php echo $bank_name; ?> IFSC codes, MICR Codes, Address, Phone Numbers in India, for NEFT, RTGS, ECS: Find IFSC, MICR Codes, Address, All Bank Branches in India, for NEFT, RTGS, ECS Transactions">
	<meta name="keywords" content="Find <?php echo $bank_name; ?> IFSC Codes, <?php echo $bank_name; ?> MICR Codes, Phone Numbers of all <?php echo $bank_name; ?> Branches in India, for NEFT, RTGS, ECS: , IFSC, MICR, NEFT, RTGS, ECS">
	<meta name="country" content="IN">
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0, maximum-scale=1″>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://use.fontawesome.com/b39e08a5f4.js"></script>
</head>


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
	<?php include('bankcontent.php');?>
	<?php include('sidebar-right.php');?>
</div>
<?php include('footer.php');?>
</body>
</html>