<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/

include "inc/dbcon.php";

    //$cont_name = $_POST['cont_name'];
	$fcl20 = $_POST['fcl20'];
	//$fcl20n = $_POST['fcl20n'];
	$fcl40 = $_POST['fcl40'];
	//$fcl40n = $_POST['fcl40n'];
	$lcl = $_POST['lcl'];
	//$lcl2 = $_POST['lcl2'];
	$cont_no = $_POST['cont_no'];
	$job_no = $_POST['job_no'];
	$inv_no = $_POST['inv_no'];
	$ship = 1;
	
//	echo "$cont_name";
//	echo "$inv_no";
//	echo "$ship";
	

//$d = strtotime("now");
//$e = date("Y-m-d", $d);
	
	$sql = "insert into itemcont (itemcont_no, fcl20, fcl40, lcl, ship, cont_no, job_no, inv_no) values ('','$fcl20','$fcl40','$lcl','$ship','$cont_no','$job_no','$inv_no')";
//	$sql = "insert into invoice (inv_no, inv_name, inv_date, cus_no) values ('','$inv_name','$e','$cus_no')";
	if(mysqli_query($con, $sql)){
//		echo 'success';
//		echo '<meta HTTP-EQUIV="REFRESH" content="0; url=customer.html">';
//	}
	//echo "<script>alert('Save successfully!');</script>";
	//echo '<script>window.top.window.showResult("1");</script>';
	echo "<script language=\"JavaScript\">";
	echo "alert('Save successfully!');";
	//echo "location='customerdetail.php?cus_no=$cus_no'";
	echo "</script>";
}
else
{
	echo "<script language=\"JavaScript\">";
	echo "<script>alert('Error! Cannot save data');</script>";
	//echo "location='customerdetail.php?cus_no=$cus_no'";
	echo "</script>";
	//echo '<script>window.top.window.showResult("2");</script>';
}
mysql_close($mysqli_query);

?>