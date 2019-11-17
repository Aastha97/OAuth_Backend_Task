<?php
	include 'database.php';
	$obj = $_POST['data'];

	$count=count($_POST["data"]);
	
	for($i=0;$i<$count;$i++){
		$sql1="UPDATE backend_test SET particulars='" . $_POST['data'][$i][1] . "', previous_year='" . $_POST['data'][$i][2] . "', latest_year='" . $_POST['data'][$i][3] . "' WHERE id='" . $_POST['data'][$i][0] . "'";
		$result1=mysql_query($sql1);
	}
	if($result1)
		echo ok;

?>