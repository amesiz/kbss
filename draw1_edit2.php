<?php
include "inc/dbcon.php";

	$draw1_no = $_POST['draw1_no'];
	$draw1_name = $_POST['draw1_name'];
	$draw1 = $_POST['draw1'];
	$draw1_remask = $_POST['draw1_remask'];
	
	$sql1="SELECT * FROM draw1 WHERE draw1_no='$draw1_no'";
    $result1 = mysqli_query($con,$sql1);
    $row1 = mysqli_fetch_array($result1);
    $odraw1 = $row1['draw1'];
    
	if ($odraw1==$draw1){
		$sql = "UPDATE draw1 SET draw1_name='$draw1_name', draw1='0', draw1_status='2', draw1_remask='$draw1_remask' WHERE draw1_no='$draw1_no'";
	
		if(mysqli_query($con, $sql)){

			echo "<script language=\"JavaScript\">";
			echo "alert('Save successfully!');";
			echo "</script>";
		}
		else
		{
			echo "<script>alert('Error! Cannot save data');</script>";
			//echo '<script>window.top.window.showResult("2");</script>';
		}
		
	} elseif ($odraw1>$draw1){
		$draw1 = $odraw1-$draw1;
		$sql = "UPDATE draw1 SET draw1_name='$draw1_name', draw1='$draw1', draw1_status='1', draw1_remask='$draw1_remask' WHERE draw1_no='$draw1_no'";
	
		if(mysqli_query($con, $sql)){

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
		echo "<script>alert('Error! จำนวนเงินเคลียร์เกิน');</script>";
		
	}
	
	
mysqli_close($con);
?>