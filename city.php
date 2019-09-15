<?php include('functions.php'); 
$original_bank_name = $_GET['bank_name'];
$bank_name = preg_replace('/_/',' ',$_GET['bank_name']);

$original_state_name = $_GET['state_name'];
$state_name = preg_replace('/_/',' ',$original_state_name);

$original_city_name = $_GET['city_name'];
$city_name = preg_replace('/_/',' ',$original_city_name);

?>
<?php 
include('admin/googleads.php');
//include('header.php');?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<TITLE>Find <?php echo $bank_name; ?> branches in <?php echo $state_name . ','. $city_name; ?>IFSC code, MICR Codes, Address, Phone Numbers in India, for NEFT, RTGS, ECS: BankIFSCcodeToday.com</TITLE>
	<link href="http://localhost/cms/images/favicon.ico' rel='shortcut icon">
	<link rel="alternate" type="application/rss+xml" title="Find <?php echo $bank_name; ?> IFSC Code, MICR Codes, Address, All Bank Branches in India, for NEFT, RTGS, ECS: BankIFSCcodeToday.com" href="http://www.bankifsccodetoday.com/feeds">
	<meta name="description" content="Find <?php echo $bank_name; ?> branches in <?php echo $state_name .','.$city_name; ?>IFSC codes, MICR Codes, Address, Phone Numbers in India, for NEFT, RTGS, ECS: Find IFSC, MICR Codes, Address, All Bank Branches in India, for NEFT, RTGS, ECS Transactions">
	<meta name="keywords" content="<?php echo $bank_name; ?> IFSC Codes in <?php echo $state_name; ?>, <?php echo $bank_name; ?> MICR Codes, Phone Numbers of all <?php echo $bank_name; ?> Branches in <?php echo $state_name.','.$city_name; ?> India, for NEFT, RTGS, ECS: , IFSC, MICR, NEFT, RTGS, ECS">
	<meta name="country" content="IN">
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
	<?php include('citycontent.php');?>
	<?php include('sidebar-right.php');?>
</div>
<?php include('footer.php');?>

</body>
</html>