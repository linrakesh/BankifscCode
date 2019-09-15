<div id="forms" class="grid_7 matchheight">
<form name="bank" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="bankname" onChange="location.href='bank.php?bank=' + selectURL.options[selectedIndex].value" >
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
		  	 		<select name="selectURL" id="statename" onChange="location.href='state.php?bank=state_name='+ selectURL.options[selectedIndex].value" >
		  	 		    <?php echo '<option>' . $state_name .'</option>' ?>
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
		  	 		<select name="selectURL" id="cityname" onChange="location.href='city.php?bank_name=<?php echo $bank_name;?>&state_name=<?php echo $state_name;?>&city_name='+ selectURL.options[selectedIndex].value" >
		  	 		     <?php echo '<option>' . $city_name .'</option>' ?>
		  	 		</select>
		  	 	</td>
		  	 	<td><a href="state.php?bank_name=<?php echo $original_bank_name;?>&state_name=<?php echo $original_state_name;?>"><i class="fa fa-undo fa-2x green" aria-hidden="true"></i></a></td>

		  	 </tr>
		  </table>
	</form>
	<form name="branch" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="branchname" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='branch.php?bank_name=<?php echo $original_bank_name;?>&state_name=<?php echo $original_state_name;?>&city_name=<?php echo $original_city_name?>&branch_name='+ newstr" >
		  	 		 <option value="Select State Name">Select Branch Name</option>
		  	 		 <?php show_branches($bank_name, $state_name, $city_name);?>
		  	 		</select>
		  	 	</td>
		  	 </tr>
		  </table>
	</form>
	<h3><?php echo '<h2> '. $bank_name . ' branches available in <b>'. $city_name.'</b></h2>';?> </h3>
	<p><?php show_branches_links($bank_name, $state_name, $city_name) ?></p>
</div>