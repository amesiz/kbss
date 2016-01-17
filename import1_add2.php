<?php
include "inc/dbcon.php";
//print_r($_GET);

//	$cuscontact_name = $_POST['cuscontact_name'];
//	$billto_id = $_POST['billto_id'];
//	$billto_addr = $_POST['billto_addr'];
	$freight = $_POST['freight'];
	$hbl = $_POST['hbl'];
	$mbl = $_POST['mbl'];
	$blstatus = $_POST['blstatus'];
	$imp1_agent = $_POST['imp1_agent'];
	$vessel_name = $_POST['vessel_name'];
	$mvessel_name = $_POST['mvessel_name'];
	$eta = $_POST['eta'];
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
	$imp1_remark = $_POST['imp1_remark'];
	$job_no = $_POST['job_no'];
	//$user_no=1;
	

	//$cuser_no=1;
	
	
    $sql1="SELECT * FROM imp1 WHERE job_no='$job_no'";
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
	$sql = "insert into imp1 (`imp1_no`, `freight`, `hbl`, `mbl`, `blstatus`, `imp1_agent`, `vessel_name`, `mvessel_name`, `eta`, `cy`, `delivery`, `return`, `imp1_dest`, `edi`, `dr`, `billt`, `billn`, `locat`, `port`, `imp1_remark`, `job_no`) VALUES 
	('','$freight','$hbl','$mbl','$blstatus','$imp1_agent','$vessel_name','$mvessel_name','$eta','$cy','$delivery','$return','$imp1_dest','$edi','$dr','$billt','$billn','$locat','$port','$imp1_remark','$job_no')";
	
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