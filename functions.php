<?php

function show_ifsc_code($code = NULL)
{
  $sql ="select * from codelist where ifsc ='$code' order by bank_name"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo 'Bank Name'. $row['bank_name'] .'<br/>' ;
				echo 'State Name'. $row['state'] .'<br/>' ;
				echo 'City'. $row['city'] .'<br/>' ;
				echo 'Branch Name'. $row['branch'] .'<br/>' ;
				echo 'Address'. $row['address'] .'<br/>' ;
				echo 'IFSE code '. $row['ifsc'] .'<br/>' ;
			}
    }  
	mysqli_close($conn);
}


function show_banks()
{
  $sql ="select distinct(bank_name) from codelist order by bank_name"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<option>'. $row['bank_name'] .'</option>' ;
			}
    }  
	mysqli_close($conn);
}

function show_selected_state($bank=NULL)
{

  $sql ="select distinct(state) from codelist where bank_name ='$bank' order by state"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<span style="padding:0px 10px 0px 0px;"><a href="state.php?bank_name='.str_replace(' ','_',$bank).'&state_name='. $row['state'] .'">'.$row['state'].'</a></span> / ' ;
			}
    }  
	mysqli_close($conn);
}

function show_states($bank = NULL)
{

  $sql ="select distinct(state) from codelist where bank_name ='$bank' order by state"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<option>'. $row['state'] .'</option>' ;
			}
    }  
	mysqli_close($conn);
}

/*-----show cities in select ---*/
function show_cities_select($bank = NULL, $state= NULL)
{

  $sql ="select distinct(city) from codelist where bank_name ='$bank' AND state = '$state' order by bank_name,state"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
echo '<option>'.$row['city'].'</option>' ;
			}
    }  
	mysqli_close($conn);
}
/*---end of select */

function show_cities($bank = NULL, $state= NULL)
{

  $sql ="select distinct(city) from codelist where bank_name ='$bank' AND state = '$state' order by bank_name,state"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
echo '<span style="padding:0px 10px 0px 0px;"><a href="city.php?bank_name='.str_replace(' ','_',$bank).'&state_name='. str_replace(' ','_',$state). '&city_name='.str_replace(' ','_',$row['city']) .'">'.$row['city'].'</a></span> / ' ;
			}
    }  
	mysqli_close($conn);
}
/* show branches in option panel of select */
function show_branches($bank = NULL, $state= NULL, $city = NULL)
{

  $sql ="select distinct(branch) from codelist where bank_name ='$bank' AND state = '$state' AND city = '$city'  order by branch"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<option>'. $row['branch'] .'</option>' ;
			}
    }  
	mysqli_close($conn);
}

/*-----------show all branches and thier link at the bottom --*/
function show_branches_links($bank = NULL, $state= NULL, $city = NULL)
{

  $sql ="select * from codelist where bank_name ='$bank' AND state = '$state' AND city = '$city'  order by branch"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<b> Bank Name :</b> '. $row['bank_name'] .'<br/>' ;
				echo '<b> State Name :</b>'. $row['state'] .'<br/>' ;
				echo '<b> City : </b>'. $row['city'] .'<br/>' ;
				echo '<b> Branch Name :</b>'. $row['branch'] .'<br/>' ;
				echo '<b> Address : </b>'. $row['address'] .'<br/>' ;
				echo '<b> IFSE code : </b>'. '<a href=ifsc.php?ifsc_code='.$row['ifsc'].'>'. $row['ifsc'].'</a><br/> <br/> <br/>' ;

			}
    }  
	mysqli_close($conn);
}



function show_results($bank = NULL, $state= NULL, $city = NULL,$branch = NULL)
{

  $sql ="select * from codelist where bank_name ='$bank' AND state = '$state' AND city = '$city' AND branch = '$branch' "; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<b> Bank Name :</b> '. $row['bank_name'] .'<br/>' ;
				echo '<b> State Name :</b>'. $row['state'] .'<br/>' ;
				echo '<b> City : </b>'. $row['city'] .'<br/>' ;
				echo '<b> Branch Name :</b>'. $row['branch'] .'<br/>' ;
				echo '<b> Address : </b>'. $row['address'] .'<br/>' ;
				echo '<b> IFSE code : </b>'. '<a href=ifsc.php?ifsc_code='.$row['ifsc'].'>'. $row['ifsc'].'</a><br/>' ;
			}
    }  
	mysqli_close($conn);
}

function show_bank_by_code($code =NULL)
{
	$sql ="select * from codelist where ifsc ='$code'"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<b> Bank Name : </b> '. $row['bank_name'] .'<br/>' ;
				echo '<b> State Name : </b>'. $row['state'] .'<br/>' ;
				echo '<b> City : </b>'. $row['city'] .'<br/>' ;
				echo '<b> Branch Name : </b>'. $row['branch'] .'<br/>' ;
				echo '<b> Address : </b>'. $row['address'] .'<br/>' ;
				echo '<b> IFSE code : </b>'. '<a href=ifsc.php?ifsc_code='.$row['ifsc'].'>'. $row['ifsc'].'</a><br/>' ;
			}
    }  
	mysqli_close($conn);
}

/*----------show bank details by micr code ---------*/
function show_bank_by_micr_code($code =NULL)
{
	$sql ="select * from codelist where micr ='$code'"; 
  include('admin/connect.php');
  $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		   while( $row = mysqli_fetch_assoc($result))
			{
				echo '<b> Bank Name : </b> '. $row['bank_name'] .'<br/>' ;
				echo '<b> State Name : </b>'. $row['state'] .'<br/>' ;
				echo '<b> City : </b>'. $row['city'] .'<br/>' ;
				echo '<b> Branch Name : </b>'. $row['branch'] .'<br/>' ;
				echo '<b> Address : </b>'. $row['address'] .'<br/>' ;
				echo '<b> IFSE code : </b>'. '<a href=ifsc.php?ifsc_code='.$row['ifsc'].'>'. $row['ifsc'].'</a><br/>' ;
			}
    }  
	mysqli_close($conn);
}

?>