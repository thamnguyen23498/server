<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "quanlisinhvien";


	$conn = mysqli_connect($host,$username,$password,$database);
	mysqli_query($conn,"SET NAME 'utf8'");
	
	
 ?>