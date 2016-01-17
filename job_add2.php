<?php
include "inc/dbcon.php";
//print_r($_GET);

//	$cuscontact_name = $_POST['cuscontact_name'];
//	$billto_id = $_POST['billto_id'];
//	$billto_addr = $_POST['billto_addr'];
	$cus_code = $_POST['cus_code'];
	$job_name = $_POST['job_name'];
	$job_ship = $_POST['job_ship'];
	$job_sdate = $_POST['job_sdate'];
	$cus_no = $_POST['cus_no'];
	//$user_no=1;
	$cuser_no=1;
	
	
    $sql1="SELECT cus_no FROM customer WHERE cus_code='$cus_code'";
    //$sql="SELECT * FROM customer";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    $cus_no = $row1['cus_no'];
                            
	
//	echo "$cuscontact_name";
//	echo "12345";
//	echo "$cus_no a";
//	echo "$job_sdate z";
//	$job_name = %05d($job_name);
//	echo "J$job_name";
//	echo "$cus_code c";
	
$d = strtotime("now");
$e = date("Y-m-d", $d);
	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	$sql = "insert into job (job_no, job_name, job_ship, job_date, job_sdate, job_edate, job_status, cus_no, user_no, cuser_no, euser_no, billto_no, cuscontact_no, inv_no, uship_no) values ('','$job_name','$job_ship','$e','$job_sdate','$job_edate','','$cus_no','','$cuser_no','','','','','')";
	
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