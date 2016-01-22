<?php
require_once('mpdf/mpdf.php');
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jobs :-)</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--
    <link href="css/sb-admin.css" rel="stylesheet">
    -->

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $.ajax({url: "customer_add.php", success: function(result){
            $("#div1").html(result);
        }});
    });
});
$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).data('href');
        return false;
    });
});
</script>
</head>

<body>

    
        
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            ใบปฏิบัติงานจัดส่งสินค้า
                            <small>
                            TRANSPORTATION ORDER
                            </small>
                        </h3>
                        
                </div>

                </div>
                
                <!-- /.row -->
                    <div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>JOB No. :
                                            <?php
                                            include "inc/dbcon.php";
                                            
                                            $job_no = $_GET['job_no'];
                                            $sql="SELECT * FROM job WHERE job_no='$job_no'";
                                            //$sql="SELECT * FROM customer";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $job_name = $row['job_name'];
                                            $job_ship = $row['job_ship'];
                                            $cus_no = $row['cus_no'];
                                            $billto_no = $row['billto_no'];
                                            $cuscontact_no = $row['cuscontact_no'];
                                            $inv_no = $row['inv_no'];
                                            $user_no = $row['user_no'];
                                            $uship_no = $row['uship_no'];
                                            $job_date = $row['job_date'];
                                            
                                            
                                                     //echo "</tr>";
                                            echo "J$job_name";
                                            mysqli_close($con);
                                            //include "bot.php";
                                            ?>   
                                        </th>
                                        <th>INV No. :
                                            <?php
                                            include "inc/dbcon.php";
                                            
                                            $sql="SELECT * FROM invoice WHERE inv_no='$inv_no'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $inv_name = $row['inv_name'];

                                            echo "$inv_name";
                                            mysqli_close($con);
                                            ?>
                                        </th>
                                        <th>
                                            DATE : <?php echo($job_date); ?>
                                        </th>
                                    </tr>
                                    </thead>
                                    </table>
                                    <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <td>
                                            ลูกค้า :
                                            <?php
                                            include "inc/dbcon.php";
                                            
                                            $sql="SELECT * FROM customer WHERE cus_no='$cus_no'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $cus_name = $row['cus_name'];

                                            echo "$cus_name";
                                            mysqli_close($con);
                                            ?>
                                        </td>
                                        <td>
                                            TAX ID :
                                            <?php
                                            include "inc/dbcon.php";
                                            
                                            $sql="SELECT * FROM billto WHERE billto_no='$billto_no'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $billto_id = $row['billto_id'];

                                            echo "$billto_id";
                                            mysqli_close($con);
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                           บริษัท SHIPPING : KB SHIPPING SERVICE CO.,LTD.<br>
                                           ติดต่อ :
                                            <?php
                                            include "inc/dbcon.php";
                                            
                                            $sql="SELECT * FROM user WHERE user_no='$user_no'";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($result);
                                            $user_name = $row['user_name'];

                                            echo "$user_name";
                                            mysqli_close($con);
                                            ?>                                            
                                        </td>
                                        <td>
                                            TEL : (02)726-6956-7 #104<br>
                                            FAX : (02)726-6958
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                           บริษัทขนส่ง : <br>
                                           ติดต่อ :
                                                                                       
                                        </th>
                                        <th>
                                            TEL : <br>
                                            FAX : 
                                        </th>
                                    </tr>
                                </thead>
                                </table>
                                <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ลำดับที่</th>
                                        <th>รายละเอียดสินค้า</th>
                                        <th>นน.สุทธิ(ก.ก.)</th>
                                        <th>หีบห่อ</th>
                                        <th>ชนิดรถ</th>
                                        <th>นน.รวม(ก.ก.)</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,"SELECT * FROM imp2 WHERE job_no='$job_no'");
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        //echo "<tr data-href='customerdetail.php?cus_no=" . $row['cus_no'] . "'>";
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['item'] . "</td>";
                                        echo "<td>" . $row['nweight'] . "</td>";
                                        echo "<td>" . $row['amount'] . "</td>";
                                        echo "<td></td>";
                                        echo "<td>" . $row['tweight'] . "</td>";
                                        echo "<td>" . $row['imp2_remark'] . "</td>";
                                        echo "</tr>";
                                        $num++;
                                        }
                                    mysqli_close($con);
                                    ?>
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>รวม</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                </tbody>
                            </table>
                                
                            <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,"SELECT * FROM imp1 WHERE job_no='$job_no'");
                                    $row = mysqli_fetch_array($result);
                                        $imp1_agent = $row['imp1_agent'];
                                        $imp1_dest = $row['imp1_dest'];
                                        $vessel_name = $row['vessel_name'];
                                        $eta = $row['eta'];
                                        $billn= $row['billn'];
                                        $port = $row['port'];
                                        $locat = $row['locat'];

                                    mysqli_close($con);
                                    ?>
                                        <th>
                                            AGENT : <?php echo($imp1_agent); ?><br>
                                            VESSEL : <?php echo($vessel_name); ?><br>
                                            BL NO. : <?php echo($billn); ?>
                                        </th> 
                                        <th>
                                            ปลายทาง/ต้นทาง : <?php echo($imp1_dest); ?><br>
                                            ETD/ETA : <?php echo($eta); ?><br>
                                            .
                                        </th>
                                    </tr>
                                    </thead>
                            </table>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            ท่าที่นำเข้า :   <?php echo($port); ?>
                                        </th>
                                        <th>
                                            CLOSING/วันที่และเวลารับสินค้า :
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            สถานที่ส่งสินค้า :   <?php echo($locat); ?>
                                        </th>
                                        <th>
                                            วันที่ส่งสินค้า :
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            สถานที่คืนตู้เปล่า :   
                                        </th>
                                        <th>
                                            วันที่คืนตู้เปล่า :
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            หมายเหตุ : 
                                            
                                        </th>
                                    </tr>
                                </thead>
                             </table>   
                             <table class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             พนง.ขับรถ/วันที่<br><br><br>
                                             .......................
                                         </th>
                                         <th>
                                             ผู้จ่ายสินค้า/วันที่<br><br><br>
                                             .......................
                                         </th>
                                         <th>
                                             ผู้รับสินค้า/วันที่<br><br><br>
                                             .......................
                                         </th>
                                     </tr>
                                 </thead>
                             </table>
                             <table class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             "กรุณาให้ลูกค้าเซ็นรับสินค้า แล้วส่งกลับออฟฟิตตอนวางบิล"
                                         </th>
                                     </tr>
                                 </thead>
                             </table>
                             <table class="table table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>
                                             มีปัญหาติดต่อ SHIPPING คุณอ้วน 080-8233308
                                         </th>
                                     </tr>
                                 </thead>
                             </table>
                <!-- /.row -->
                <br>
                <!--
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="customer_edit1.php">
                            <input type="hidden" name="cus_no" value="<?php //echo($cus_no); ?>" />
                            <button class="btn btn-primary">Customer Edit</button>
                        </form>

                    </div>
                    </div>
                    -->
                <!-- /.row -->
                                    
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF();
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html);
$pdf->Output();
?>  