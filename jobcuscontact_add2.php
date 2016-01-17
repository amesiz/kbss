<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/
include "inc/dbcon.php";

	//$billto_name = $_POST['billto_name'];
	//$billto_id = $_POST['billto_id'];
	//$billto_addr = $_POST['billto_addr'];
	$cuscontact_no = $_POST['cuscontact_no'];
	$job_no = $_POST['job_no'];
	
	//echo '$cus_name';
	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	//$sql = "insert into billto (billto_no, billto_name, billto_id, billto_addr, cus_no) values ('','$billto_name','$billto_id','$billto_addr','$cus_no')";
	$sql = "UPDATE job SET cuscontact_no='$cuscontact_no' WHERE job_no='$job_no'";
	
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
	echo "<script>alert('Error! Cannot save data');</script>";
	//echo '<script>window.top.window.showResult("2");</script>';
}
mysqli_close($con);
?>