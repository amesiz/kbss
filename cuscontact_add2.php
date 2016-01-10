<?php
include "inc/dbcon.php";
//print_r($_GET);

	$cuscontact_name = $_POST['cuscontact_name'];
//	$billto_id = $_POST['billto_id'];
//	$billto_addr = $_POST['billto_addr'];
	$cus_no = $_POST['cus_no'];
	
//	echo "$cuscontact_name";
//	echo "12345";
//	echo "$cus_no";
	

	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	$sql = "insert into cuscontact (cuscontact_no, cuscontact_name, cus_no) values ('','$cuscontact_name','$cus_no')";
	
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
mysql_close($mysqli_query);

?>