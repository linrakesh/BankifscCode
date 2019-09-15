<div id="forms" class="grid_7 matchheight">
	<p>180  Banks and their 132962 branches IFSC code and MICR code information is available Here. It is as per RBI data published on 2nd Auguest 2016.</p>
	<form name="bank" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="bankname" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='bank.php?bank_name='+ newstr" >
		  	 		    <option value="Select Bank Name">Select Bank Name</option>
		  	 		    <?php show_banks();?>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="index.php"><i class="fa fa-undo fa-2x green" aria-hidden="true"></i>
</a></td>
		  	 </tr>
		  </table>
	</form>
	<form name="state" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="statename" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='state.php?state_name='+ newstr" >
		  	 		    <option value="Select State Name">Select State Name</option>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="#"><i class="fa fa-undo fa-2x black" aria-hidden="true"></i></a></td>
		  	 </tr>
		  </table>
	</form>
	<form name="city" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="cityname" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='city.php?city_name='+ newstr;" >
		  	 		    <option value="Select State Name">Select city Name</option>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="#"><i class="fa fa-undo fa-2x black" aria-hidden="true"></i></a></td>
		  	 </tr>
		  </table>
	</form>
	<form name="branch" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="branchname" onChange="location.href='branch.php?branch_name ='+ selectURL.options[selectedIndex].value" >
		  	 		    <option value="Select State Name">Select Branch Name</option>
		  	 		</select>
		  	 	</td>
		  	 </tr>
		  </table>
	</form>
	<h1> Available Banks IFSC codes </h1>
	<?php
		include('admin/connect.php');
		require_once('functions.php');
		$sql = "select distinct(bank_name) from codelist order by bank_name";
		$result = mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while( $row = mysqli_fetch_assoc($result))
					{
						echo '<a href=bank.php?bank_name='. preg_replace('/ /', '_',$row['bank_name']) .'>'. $row['bank_name'] .'</a><br/>';
					}
			    }  
			   mysqli_close($conn);
	  
	?>
	<?php echo $add3; ?>
</div> <!--end of grid_9-->