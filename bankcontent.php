<div id="forms" class="grid_7 matchheight">
<form name="bank" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="statename" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='bank.php?bank_name='+ newstr" >
		  	 		    <?php echo '<option>' . $bank_name .'</option>' ?>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="index.php"><i class="fa fa-undo fa-2x green" aria-hidden="true"></i></a></td>
		  	 </tr>
		  </table>
	</form>
	<form name="state" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="statename" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='state.php?bank_name=<?php echo $original_bank_name; ?>&state_name='+ newstr" >
		  	 		    <option value="Select State Name">Select State Name</option>
		  	 		    <?php show_states($bank_name);?>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="bank.php?bank_name=<?php echo $original_bank_name; ?>"><i class="fa fa-undo fa-2x green" aria-hidden="true"></i></a></td>
		  	 </tr>
		  </table>
	</form>
	<form name="city" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="cityname" onChange="location.href='city.php?city_name ='+ selectURL.options[selectedIndex].value" >
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
	<h2><?php echo '<h2> '. $bank_name . ' available in the following states </h2>';?> </h2>
	<p><?php show_selected_state($bank_name); ?></p>
	</div>