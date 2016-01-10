<?php
	define('HOST','localhost');
	define('USERNAME', 'amesiz');
	define('PASSWORD','');
	define('DB','shipping');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
	
	$cus_id = $_POST['cus_id'];
	$cus_name = $_POST['cus_name'];
	$cus_addr = $_POST['cus_addr'];
	$cus_code = $_POST['cus_code'];
	
	//echo '$cus_name';
	
	
	//$sql = "insert into users (username, password) values ('$username','$pass')";
	$sql = "insert into customer (cus_no, cus_id, cus_name, cus_addr, cus_code) values ('','$cus_id','$cus_name','$cus_addr','$cus_code')";
	
	if(mysqli_query($con, $sql)){
		echo 'success';
	}
?>
<div class="col-lg-6">
<form action"" method="post">
<div class="form-group">
     <label>Name</label>
     <input class="form-control" placeholder="Enter text" id="cus_name" name="cus_name">
</div>

<div class="form-group">
     <label>Tax ID</label>
     <input class="form-control" placeholder="Enter text" id="cus_id" name="cus_id">
</div>

<div class="form-group">
     <label>Address</label>
     <textarea class="form-control" rows="3" id="cus_addr" name="cus_addr"></textarea>
</div>

<div class="form-group">
     <label>Code</label>
     <input class="form-control" placeholder="Enter text/Number" id="cus_code" name="cus_code">
</div>

<div class="form-group">
     <label>Tel.</label>
     <input class="form-control" placeholder="Enter Number">
</div>
<div class="form-group">
     <label>Fax.</label>
     <input class="form-control" placeholder="Enter Number">
</div>
<button class="btn btn-default" id='insert'>Submit</button>
			<p id='result'></p>
			
			<script src='insert.js'></script>
</form>
</div>