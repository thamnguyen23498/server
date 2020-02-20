<?php
	require_once('connect.php');
	$masv=filter_input(INPUT_POST, "masv");
	$pass=filter_input(INPUT_POST, "pass");
	$result= mysqli_query($conn,"select * from login where masv='$masv' and pass = '$pass'");
	if ($data = mysqli_fetch_array($result)) {
		echo "1";
	}
?>