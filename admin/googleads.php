<?php 
  include('connect.php');
  $query = "select * from options";
  $result = mysqli_query($conn,$query);
  while($row = mysqli_fetch_assoc($result))
  {
  	$add1 = $row['gadd1'];
  	$add2 = $row['gadd2'];
  	$add3 = $row['gadd3'];
  	$add4 = $row['gadd4'];
  	$add5 = $row['gadd5'];

  }
  mysqli_close($conn);
  ?>