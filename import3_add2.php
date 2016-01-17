<?php
include "inc/dbcon.php";
//print_r($_GET);

//	$cuscontact_name = $_POST['cuscontact_name'];
//	$billto_id = $_POST['billto_id'];
//	$billto_addr = $_POST['billto_addr'];
	$item = $_POST['item'];
	$amount = $_POST['amount'];
	$tweight = $_POST['tweight'];
	$m3 = $_POST['m3'];
	$cweight = $_POST['cweight'];
	$nweight = $_POST['nweight'];
	$containers = $_POST['containers'];
	$cycfs = $_POST['cycfs'];
	/*
	$cy = $_POST['cy'];
	$delivery = $_POST['delivery'];
	$return = $_POST['return'];
	$imp1_dest = $_POST['imp1_dest'];
	$edi = $_POST['edi'];
	$dr = $_POST['dr'];
	$billt = $_POST['billt'];
	$billn = $_POST['billn'];
	$locat = $_POST['locat'];
	$port = $_POST['port'];
	*/
	$imp2_remark = $_POST['imp2_remark'];
	$job_no = $_POST['job_no'];
	//$user_no=1;
	

	//$cuser_no=1;
	
	
    $sql1="SELECT * FROM imp2 WHERE job_no='$job_no'";
    //$sql="SELECT * FROM customer";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    $ss = $row1['job_no'];
    if ($ss==0){
  
    /*
    echo "$freight /";
    echo "$hbl /";
    echo "$mbl /";
    echo "$blstatus /";
    echo "$agent /";
    echo "$vessel_name /";
    echo "$mvessel_name /";
    echo "$eta /";
    echo "$cy /";
    echo "$delivery /";
    echo "$return /";
    echo "$dest /";
    echo "$edi /";
    echo "$dr /";
    echo "$billt /";
    echo "$billn /";
    echo "$port /";
    echo "$imp1_remark /";
    echo "$job_no /";
    */
	
//	echo "$cuscontact_name";
//	echo "12345";
//	echo "$cus_no a";
//	echo "$job_sdate z";
//	$job_name = %05d($job_name);
//	echo "J$job_name";
//	echo "$cus_code c";
	
//$d = strtotime("now");
//$e = date("Y-m-d", $d);
	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	$sql = "insert into imp2 (`imp2_no`, `item`, `amount`, `tweight`, `m3`, `cweight`, `nweight`, `containers`, `cycfs`, `imp2_remark`, `job_no`) VALUES 
	('','$item','$amount','$tweight','$m3','$cweight','$nweight','$containers','$cycfs','$imp2_remark','$job_no')";
	
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
} else {
	echo "<script>alert('ซ้ำ! Cannot save data');</script>";
	
}
mysqli_close($con);


?>