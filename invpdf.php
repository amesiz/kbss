<?php
require_once('mpdf/mpdf.php');
ob_start();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!--
    <title>SB Admin - Bootstrap Admin Template</title>

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

</head>

<body>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h5 class="page-header">
                            <small>INVOICE
<?php
//print_r($_GET);

//include "navcus.php";
//include "topcus.php";
//echo $cus_no;

include "inc/dbcon.php";

$inv_no = $_GET['inv_no'];
$sql="SELECT * FROM invoice WHERE inv_no='$inv_no'";
//$sql="SELECT * FROM customer";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$inv_name = $row['inv_name'];
$cus_no = $row['cus_no'];

//                                        echo "<tr>";
//                                        echo "<td>" . $num . "</td>";
//                                       echo $row['cus_name'];
//                                        echo "<td>" . $row['cus_addr'] . "</td>";
//                                        echo "<td>" . $row['cus_code'] . "</td>";
//                                        echo "</tr>";
echo "<a href='customerdetail.php?cus_no=$cus_no'>$inv_name</a>";
mysqli_close($con);
//include "bot.php";
?>   
                            </small>
                        </h5>
            <h2><u><p class="text-center">ราคาค่าดำเนินการพิธีการศุลกากร</p></u></h2>
                        
                    </div>
                </div>
                <!-- /.row -->
                
                <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM container WHERE inv_no='$inv_no'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $cont_name = $row['cont_name'];
                                    $fcl20f = $row['fcl20f'];
                                    $fcl20n = $row['fcl20n'];
                                    $fcl40f = $row['fcl40f'];
                                    $fcl40n = $row['fcl40n'];
                                    $lcl1 = $row['lcl1'];
                                    $lcl2 = $row['lcl2'];
                                    $ship = $row['ship'];
                                    
                                    if($ship==1){
                                        $ss = "IMPORT";
                                    } else {
                                        $ss = "EXPORT";
                                    }
                                    
                        ?>
                        <h3><?php echo($ss); ?></h3>
                        <smail>
                        <?php
                                    
                                    echo "$cont_name";
                                    //mysqli_close($con);
                        ?>
                        </smail>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Packing type</th>
                                        <th>Unit</th>
                                        <th>Price(Baht)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FCL 20 ฟุต ตู้แรก</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl20f); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 20 ฟุต ตู้ถัดไป</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl20n); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 40 ฟุต ตู้แรก</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl40f); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 40 ฟุต ตู้ถัดไป</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl40n); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>LCL < 10,000 KG.</td>
                                        <td>Baht/Shipment</td>
                                        <td>
                                        <?php echo($lcl1); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>> 10,000 KG.</td>
                                        <td>Baht/KG.</td>
                                        <td>
                                        <?php echo($lcl2); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    <!-- /.row -->
                    <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM minimum WHERE inv_no='$inv_no'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $min_name = $row['min_name'];
                                    $min1 = $row['min1'];
                                    $min2 = $row['min2'];
                                    $ship = $row['ship'];
                                    
                                    if($ship==1){
                                        $ss = "IMPORT";
                                    } else {
                                        $ss = "EXPORT";
                                    }
                                    
                        ?>
                        <h3><?php echo($ss); ?></h3>
                        <smail>
                        <?php
                                    
                                    echo "$min_name";
                                    //mysqli_close($con);
                        ?>
                        </smail>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Packing type</th>
                                        <th>Unit</th>
                                        <th>Price(Baht)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MINIMUM</td>
                                        <td>Baht/Shipment</td>
                                        <td>
                                        <?php echo($min1); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CBM or TON</td>
                                        <td>Baht/CBM or TON</td>
                                        <td>
                                        <?php echo($min2); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                    <!-- /.row -->
                    <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM pership WHERE inv_no='$inv_no'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $pership_name = $row['pership_name'];
                                    $pership1 = $row['pership1'];
                                    $pership2 = $row['pership2'];
                                    $ship = $row['ship'];
                                    
                                    if($ship==1){
                                        $ss = "IMPORT";
                                    } else {
                                        $ss = "EXPORT";
                                    }
                                    
                        ?>
                        <h3><?php echo($ss); ?></h3>
                        <smail>
                        <?php
                                    
                                    echo "$pership_name";
                                    //mysqli_close($con);
                        ?>
                        </smail>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Packing type</th>
                                        <th>Unit</th>
                                        <th>Price(Baht)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><= 1,000 ก.ก.</td>
                                        <td>Baht/Shipment</td>
                                        <td>
                                        <?php echo($pership1); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>> 1,000 ก.ก.</td>
                                        <td>Baht/KG.</td>
                                        <td>
                                        <?php echo($pership2); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                    <h3>ค่าบริการพิเศษต่างๆ</h3>
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>รายการบริการพิเศษ</th>
                                        <th>หน่วยนับ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM ordera WHERE inv_no='$inv_no'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            //echo "<tr data-href='invdetail.php?inv_no=" . $row['inv_no'] . "'>";
                                            echo "<td>" . $row['ordera_name'] . "</td>";
                                            $order_type = $row['ordera_type'];
                                            if ($order_type==1){
                                                echo "<td>บาท/Shipment</td>";
                                            } elseif ($order_type==2){
                                                echo "<td>บาท/รายการ</td>";
                                            } elseif ($order_type==3){
                                                echo "<td>บาท/คำร้อง</td>";
                                            } elseif ($order_type==4){
                                                echo "<td>บาท/ชั่วโมง</td>";
                                            } elseif ($order_type==5){
                                                echo "<td>บาท/สถานที่</td>";
                                            } elseif ($order_type==6){
                                                echo "<td>บาท/Container</td>";
                                            } elseif ($order_type==7){
                                                echo "<td>บาท/Shipment/ตู้</td>";
                                            }
                                            //echo "<td>" . $row['ordera_type'] . "</td>";
                                            echo "<td>" . $row['ordera1'] . "</td>";
                                            echo "</tr>";
                                            $num++;
                                            }
                                        mysqli_close($con);    
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                        
                        <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM o2 WHERE inv_no='$inv_no'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $o2_name = $row['o2_name'];
                                    $o1 = $row['o1'];
                                    $o2 = $row['o2'];
                                    //$ship = $row['ship'];
                                    /*
                                    if($ship==1){
                                        $ss = "IMPORT";
                                    } else {
                                        $ss = "EXPORT";
                                    }
                                    */
                                    
                        ?>
                        <!--
                        <h3><?php //echo($ss); ?></h3>
                        
                        <smail>
                        <?php
                                    
                                    //echo "$pership_name";
                                    //mysqli_close($con);
                        ?>
                        </smail>
                        -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>รายการบริการพิเศษ</th>
                                        <th>หน่วยนับ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo($o2_name); ?></td>
                                        <td>บาท/Shipment</td>
                                        <td>
                                        <?php echo($o1); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>ร้อยละของยอดคืนอากร</td>
                                        <td>
                                        <?php echo($o2); ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                    <h3>ค่าบริการขนส่งพาหนะพิเศษ</h3>
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ชนิดของยานพาหนะ</th>
                                        <th>หน่วยนับ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM tran1 WHERE inv_no='$inv_no'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            //echo "<tr data-href='invdetail.php?inv_no=" . $row['inv_no'] . "'>";
                                            echo "<td>" . $row['tran1_name'] . "</td>";
                                            /*
                                            $order_type = $row['ordera_type'];
                                            if ($order_type==1){
                                                echo "<td>บาท/Shipment</td>";
                                            } elseif ($order_type==2){
                                                echo "<td>บาท/รายการ</td>";
                                            } elseif ($order_type==3){
                                                echo "<td>บาท/คำร้อง</td>";
                                            } elseif ($order_type==4){
                                                echo "<td>บาท/ชั่วโมง</td>";
                                            } elseif ($order_type==5){
                                                echo "<td>บาท/สถานที่</td>";
                                            } elseif ($order_type==6){
                                                echo "<td>บาท/Container</td>";
                                            } elseif ($order_type==7){
                                                echo "<td>บาท/Shipment/ตู้</td>";
                                            }
                                            */
                                            //echo "<td>" . $row['ordera_type'] . "</td>";
                                            echo "<td>บาท/เที่ยว</td>";
                                            echo "<td>" . $row['tran1'] . "</td>";
                                            echo "</tr>";
                                            $num++;
                                            }
                                        mysqli_close($con);    
                                        ?>
                                        
                                    </tbody>
                                </table>
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