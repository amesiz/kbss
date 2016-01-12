<?php
/*
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','kbss');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
*/

include "inc/dbcon.php";

    $min_name = $_POST['min_name'];
	$min1 = $_POST['min1'];
	$min2 = $_POST['min2'];
	$inv_no = $_POST['inv_no'];
	$ship = $_POST['ship'];
	
//	echo "$cont_name";
//	echo "$inv_no";
//	echo "$ship";
	

//$d = strtotime("now");
//$e = date("Y-m-d", $d);
	
	$sql = "insert into minimum (min_no, min_name, min1, min2, inv_no, ship) values ('','$min_name','$min1','$min2','$inv_no','$ship')";
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