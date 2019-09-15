<div id="forms" class="grid_7 matchheight">
<form name="bank" action="">
		  <table>
		  	 <tr>
		  	 	<td>
		  	 		<select name="selectURL" id="bankname" onChange="var str = selectURL.options[selectedIndex].value ;var newstr= str.replace(/ /g,'_');location.href='bank.php?bank_name='+ newstr" >
		  	 		    <option value="Select Bank Name">Select Bank Name</option>
		  	 		    <?php show_banks();?>
		  	 		</select>
		  	 	</td>
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
</div>