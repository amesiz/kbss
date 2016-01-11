<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/
include "inc/dbcon.php";

    $inv_name = $_POST['inv_name'];
	$fcl20f = $_POST['fcl20f'];
	$fcl20n = $_POST['fcl20n'];
	$fcl40f = $_POST['fcl40f'];
	$fcl40n = $_POST['fcl40n'];
	$lcl1 = $_POST['lcl1'];
	$lcl2 = $_POST['lcl2'];
	$cus_no = $_POST['cus_no'];
	
$d = strtotime("now");
$e = date("Y-m-d", $d);
	
	$sql = "insert into invoice (inv_no, inv_name, fcl20f, fcl20n, fcl40f, fcl40n, lcl1, lcl2, inv_date, cus_no) values ('','$inv_name','$fcl20f','$fcl20n','$fcl40f','$fcl40n','$lcl1','$lcl2','$e','$cus_no')";
	
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