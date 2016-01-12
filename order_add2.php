<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/

include "inc/dbcon.php";

    $ordera_name = $_POST['ordera_name'];
	$ordera_type = $_POST['ordera_type'];
	$ordera1 = $_POST['ordera1'];
	$inv_no = $_POST['inv_no'];
//	$ship = $_POST['ship'];
	
//	echo "$cont_name";
//	echo "$inv_no";
//	echo "$ship";
	

//$d = strtotime("now");
//$e = date("Y-m-d", $d);
	
	$sql = "insert into ordera (ordera_no, ordera_name, ordera_type, ordera1, inv_no) values ('','$ordera_name','$ordera_type','$ordera1','$inv_no')";
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