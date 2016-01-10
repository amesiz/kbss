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
		//echo 'success';
	}
?>
<h3>New Jobs</h3>
<form action"" method="post">
<div class="col-lg-6">
<div class="form-group">
     <label>Customer Code</label>
     <input class="form-control" placeholder="Enter text" id="cus_name" name="cus_name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
     <label>Contact Name</label>
     <input class="form-control" placeholder="Enter text" id="cus_id" name="cus_id">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
                                <label>Type</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Import</option>
                                    <option>Export</option>
                                    <option>Privilege</option>
                                    <option>Other</option>
                                    <option>Transport</option>
                                </select>
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
                        
                        
                                <label>Channel</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Sea</option>
                                    <option>Air</option>
                                    <option>Land</option>
                                    <option>Dummy</option>
                                    <option>Dummy</option>
                                </select>
                        
                        
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
     <label>Bill to</label>
     <input class="form-control" placeholder="Enter Number">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
     <label>Customer Invoice</label>
     <input class="form-control" placeholder="Enter Number">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
     <label>CS</label>
     <input class="form-control" placeholder="Enter Number">
</div>
</div>
<div class="col-lg-4">
<div class="form-group">
     <label>Remark</label>
     <textarea class="form-control" rows="3" id="cus_addr" name="cus_addr"></textarea>
</div>
</div>
<button type="submit" class="btn btn-default">Submit Button</button>
<button type="reset" class="btn btn-default">Reset Button</button>

</form>
