<?php
session_start();
   if(!isset($_SESSION['user_name']))
     {
     	header('location:login.php');
     }
?>
<?php require_once('include/header.php');?>
<div class="container table">
   <div class="row table-row">
  		<?php include('include/menu.php');?>
		<div class="col-md-9 table-cell right-side"> 	
			   <div class="">
            <h1> How to use IFSC code </h1> 
            <h3>Google Codes :</h3>
            <p> Click on Google Ads at left hand side, This will automatically bring allready stored Google adsense code for each type of unit supported by this script. You are required to just replace each type of google adsene code with your code.</p>  
            <p> The type of code which you do not want to use- Just leave that position blank and and save the google code. This way you can remove any code from any position.</p>

            <h3>Change Password :</h3>
            <p> Click on Change Password link at left hand side, This will automatically bring password change screen, Just supply the new password and <b>click on save</b> to save newly changed password .</p>

            <h3>Disclaimer:</h3>
            <p> Click on Change Disclaimer link at left hand side, This will automatically bring a screen with default disclaimer of the website. if you want to make changes in this disclaimer policy, do the need ful and change it. <b>click on save</b> to save newly changed password .</p>

            <h3>Privacy policy:</h3>
            <p> Click on Change Privacy Policy link at left hand side, This will automatically bring a screen with default privacy policy of the website. if you want to make changes in this privacy policy, do the need ful and change it. <b>click on save</b> to save newly changed password .</p>
         </div>
		</div> 	
	</div>
</div>
<?php require_once('include/footer.php');?>
</body>
</html>