<?php
include 'database.php';
	$query = "SELECT * FROM bt_tbl";
	$result = mysqli_query($con,$query);
	while ($row = mysqli_fetch_assoc($result))
   {
      $res_return[] = $row;
   }
	//echo var_export($result);
	echo json_encode(array_values($res_return));
	//$result= mysqli_fetch_row($row);
?>