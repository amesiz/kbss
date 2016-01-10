<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/
include "inc/dbcon.php";

	$cus_id = $_POST['cus_id'];
	$cus_name = $_POST['cus_name'];
	$cus_tname = $_POST['cus_tname'];
	$cus_addr = $_POST['cus_addr'];
	$cus_code = $_POST['cus_code'];
	
	//echo '$cus_name';
	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	$sql = "insert into customer (cus_no, cus_id, cus_name, cus_name, cus_addr, cus_code) values ('','$cus_id','$cus_name','$cus_addr','$cus_code')";
	
	if(mysqli_query($con, $sql)){
//		echo 'success';
//		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=customer.html">';
//	}
	//echo "<script>alert('Save successfully!');</script>";
	//echo '<script>window.top.window.showResult("1");</script>';
	echo "<script language=\"JavaScript\">";
	echo "alert('Save successfully!');";
	echo "</script>";
}
else
{
	//echo "<script>alert('Error! Cannot save data');</script>";
	//echo '<script>window.top.window.showResult("2");</script>';
}
mysql_close($mysqli_query);
?>