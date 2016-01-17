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
    <link href="css/sb-admin.css" rel="stylesheet">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.html">KB Shipping Service</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="jobs.php"><i class="fa fa-arrow-circle-right"></i> Jobs</a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customer</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Job No.
                            <small>
                            <?php
                            //print_r($_GET);
                            
                            //include "navcus.php";
                            //include "topcus.php";
                            //echo $cus_no;
                            
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
                            
                            
                                     //echo "</tr>";
                            echo "<a href='jobdetail.php?job_no=$job_no'>J$job_name</a>";
                            mysqli_close($con);
                            //include "bot.php";
                            ?>   
                         
                            </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <a href="jobs.php">Jobs</a>
                            </li>
                        </ol>
                        
                </div>

                </div>
                
                                
                <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM container WHERE inv_no='$inv_no' AND ship='1'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $cont_no = $row['cont_no'];
                                    $cont_name = $row['cont_name'];
                                    $fcl20f = $row['fcl20f'];
                                    $fcl20n = $row['fcl20n'];
                                    $fcl40f = $row['fcl40f'];
                                    $fcl40n = $row['fcl40n'];
                                    $lcl1 = $row['lcl1'];
                                    $lcl2 = $row['lcl2'];
                                    $ship = $row['ship'];
                                    
                                    
                        ?>
                        
                        
                        <form action="itemcont_add1.php">
                            <input type="hidden" name="cont_no" value="<?php echo($cont_no); ?>" />
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary"><?php echo($cont_name); ?></button>
                        </form>
                        <br>
                        
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                <!-- /.row -->
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>FCL 20 ฟุต(ตู้)</th>
                                        <th>FCL 40 ฟุต(ตู้)</th>
                                        <th>LCL (KG.)</th>
                                        <th>คำนวณราคา(บาท)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,"SELECT * FROM itemcont WHERE job_no='$job_no' AND ship='1'");
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        //echo "<tr data-href='customerdetail.php?cus_no=" . $row['cus_no'] . "'>";
                                        echo "<tr>";
                                        //echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['fcl20'] . "</td>";
                                        echo "<td>" . $row['fcl40'] . "</td>";
                                        echo "<td>" . $row['lcl'] . "</td>";
                                        $fcl20 = $row['fcl20'];
                                        $fcl40 = $row['fcl40'];
                                        $lcl = $row['lcl'];
                                        $cont_no = $row['cont_no'];
                                        
                                        $sql1="SELECT * FROM container WHERE inv_no='$inv_no' AND cont_no='$cont_no'";
                                        $result1 = mysqli_query($con,$sql1);
                                        $row1 = mysqli_fetch_array($result1);
                                        $fcl20f = $row1['fcl20f'];
                                        $fcl20n = $row1['fcl20n'];
                                        $fcl40f = $row1['fcl40f'];
                                        $fcl40n = $row1['fcl40n'];
                                        $lcl1 = $row1['lcl1'];
                                        $lcl2 = $row1['lcl2'];
                                        
                                        //fcl20
                                        if ($fcl20!=0&&$fcl20>1){
                                            $pfcl20 = ($fcl20-1)*$fcl20n;
                                            $tfcl20 = $pfcl20+$fcl20f;
                                            
                                        } elseif ($fcl20!=0&&$fcl20=1){
                                            $tfcl20 = $fcl20f;
                                            
                                        }
                                        //fcl40
                                        if ($fcl40!=0&&$fcl40>1){
                                            $pfcl40 = ($fcl40-1)*$fcl40n;
                                            $tfcl40 = $pfcl40+$fcl40f;
                                        } elseif ($fcl40!=0&&$fcl40=1){
                                            $tfcl40 = $fcl40f;
                                            
                                        }
                                        //lcl    
                                        if ($lcl!=0&&$lcl>10000){
                                            $plcl = ($lcl-10000)*$lcl2;
                                            $tlcl = $plcl+$lcl1;
                                        } elseif ($lcl!=0&&$lcl<10000){
                                            $tlcl = $lcl1;
                                            
                                        }
                                        
                                        $ttt = $tfcl20+$tfcl40+$tlcl;
                                        $tta = $ttt;
                                        $ttb = $tta+$ttb;
                                        echo "<td>$ttt</td>";
                                        echo "</tr>";
                                        $ttt=0;
                                        $tfcl20=0;
                                        $tfcl40=0;
                                        $tlcl=0;
                                      }
                                    mysqli_close($con);
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($ttb); ?></h4>
                    <!-- /.row -->
                    <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM minimum WHERE inv_no='$inv_no' AND ship='1'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $min_no = $row['min_no'];
                                    $min_name = $row['min_name'];
                                    $min1 = $row['min1'];
                                    $min2 = $row['min2'];
                                    $ship = $row['ship'];
                                    
                                    
                                    
                        ?>
                        
                        
                        <form action="itemmin_add1.php">
                            <input type="hidden" name="min_no" value="<?php echo($min_no); ?>" />
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary"><?php echo($min_name); ?></button>
                        </form>
                        <br>
                        
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                    <!-- /.row -->
                    
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>CBM or TON</th>
                                        <th>คำนวณราคา(บาท)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,"SELECT * FROM itemmin WHERE job_no='$job_no' AND ship='1'");
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        //echo "<tr data-href='customerdetail.php?cus_no=" . $row['cus_no'] . "'>";
                                        echo "<tr>";
                                        //echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['tmin'] . "</td>";
                                        $tmin = $row['tmin'];
                                        $min_no = $row['min_no'];
                                        
                                        $sql1="SELECT * FROM minimum WHERE inv_no='$inv_no' AND min_no='$min_no'";
                                        $result1 = mysqli_query($con,$sql1);
                                        $row1 = mysqli_fetch_array($result1);
                                        $min1 = $row1['min1'];
                                        $min2 = $row1['min2'];
                                        
                                        
                                        if ($tmin!=0){
                                            $ptmin = $tmin*$min2;
                                            
                                            if ($ptmin<$min1){
                                                $ptmin = $min1;
                                                echo "<td>$ptmin</td>";
                                            } elseif ($ptmin>$min1){
                                                echo "<td>$ptmin</td>";
                                            }
                                            
                                        }
                                        $mma = $ptmin;
                                        $mmb = $mma+$mmb;
                                        echo "</tr>";
                                      }
                                    mysqli_close($con);
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($mmb); ?></h4>
                    <!-- /.row -->
                    <?php  if ($ii==0): ?>
                    <div>
                        <?php
                        
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM pership WHERE inv_no='$inv_no' AND ship='1'");
                                    //$row = mysqli_fetch_array($result);
                                    while($row = mysqli_fetch_array($result)){
                                    $pership_no = $row['pership_no'];
                                    $pership_name = $row['pership_name'];
                                    $pership1 = $row['pership1'];
                                    $pership2 = $row['pership2'];
                                    $ship = $row['ship'];
                                    
                                    
                                    
                        ?>
                        
                        
                        <form action="itempership_add1.php">
                            <input type="hidden" name="pership_no" value="<?php echo($pership_no); ?>" />
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary"><?php echo($pership_name); ?></button>
                        </form>
                        <br>
                        
                        <?php
                                    }
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php mysqli_close($con); ?>
                    
                    <!-- /.row -->
                    
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>น้ำหนัก (ก.ก.)</th>
                                        <th>คำนวณราคา(บาท)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,"SELECT * FROM itempership WHERE job_no='$job_no' AND ship='1'");
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        //echo "<tr data-href='customerdetail.php?cus_no=" . $row['cus_no'] . "'>";
                                        echo "<tr>";
                                        //echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['pership'] . "</td>";
                                        $pership = $row['pership'];
                                        $pership_no = $row['pership_no'];
                                        
                                        $sql1="SELECT * FROM pership WHERE inv_no='$inv_no' AND pership_no='$pership_no'";
                                        $result1 = mysqli_query($con,$sql1);
                                        $row1 = mysqli_fetch_array($result1);
                                        $pership1 = $row1['pership1'];
                                        $pership2 = $row1['pership2'];
                                        
                                        
                                        if ($pership!=0&&$pership<=1000){
                                            $tps = $pership1;
                                            
                                            echo "<td>$tps</td>";
                                            
                                        } elseif ($pership!=0&&$pership>1000){
                                            $ps = ($pership-1000)*$pership2;
                                            $tps = $pership1+$ps;
                                            
                                            echo "<td>$tps</td>";
                                            }
                                        
                                        $ppa = $tps;
                                        $ppb = $ppa+$ppb;
                                        echo "</tr>";
                                      }
                                    mysqli_close($con);
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($ppb); ?></h4>
                    <!-- /.row -->
                    
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="itemorder_add1.php">
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary">พิเศษ</button>
                        </form>

                    </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>รายการบริการพิเศษ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM itemorder WHERE job_no='$job_no' AND ship='1'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            $ordera_no = $row['ordera_no'];
                                            $sql1="SELECT * FROM ordera WHERE ordera_no='$ordera_no'";
                                            $result1 = mysqli_query($con,$sql1);
                                            $row1 = mysqli_fetch_array($result1);
                                            $ordera_name = $row1['ordera_name'];
                                            $ordera1 = $row1['ordera1'];
                                            
                                            echo "<tr>";
                                            //echo "<td>" . $num . "</td>";
                                            echo "<td>$ordera_name</td>";
                                            echo "<td>$ordera1</td>";
                                            echo "</tr>";
                                            $num++;
                                            
                                            $ooa = $ordera1;
                                            $oob = $ooa+$oob;
                                            }
                                        mysqli_close($con);    
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($oob); ?></h4>
                <!-- /.row -->
                
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="itemorder2_add1.php">
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary">พิเศษ%</button>
                        </form>

                    </div>
                    </div>    
                <!-- /.row -->
                <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>รายการบริการพิเศษ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                        <th>ยอดคืนอากร</th>
                                        <th>คำนวณราคา(บาท)</th>
                                        <th>รวม(บาท)</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM itemorder2 WHERE job_no='$job_no' AND ship='1'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            $o2_no = $row['o2_no'];
                                            $itemorder2 = $row['itemorder2'];
                                            $sql1="SELECT * FROM o2 WHERE o2_no='$o2_no'";
                                            $result1 = mysqli_query($con,$sql1);
                                            $row1 = mysqli_fetch_array($result1);
                                            $o2_name = $row1['o2_name'];
                                            $o1 = $row1['o1'];
                                            $o2 = $row1['o2'];
                                            
                                            echo "<tr>";
                                            //echo "<td>" . $num . "</td>";
                                            echo "<td>$o2_name</td>";
                                            echo "<td>$o1</td>";
                                            echo "<td>$itemorder2</td>";
                                            
                                            $u = $itemorder2*$o2;
                                            
                                            echo "<td>$u</td>";
                                            
                                            $tu = $u+$o1;
                                            
                                            echo "<td>$tu</td>";
                                            
                                            echo "</tr>";
                                            $num++;
                                            
                                            $uua = $tu;
                                            $uub = $uua+$uub;
                                            }
                                        mysqli_close($con);    
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($uub); ?></h4>
                <!-- /.row -->
                                        
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="itemtran1_add1.php">
                            <input type="hidden" name="job_no" value="<?php echo($job_no); ?>" />
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary">Transport</button>
                        </form>

                    </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th>ชนิดของยานพาหนะ</th>
                                        <th>ค่าบริการ(บาท)</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM itemtran1 WHERE job_no='$job_no' AND ship='1'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            $tran1_no = $row['tran1_no'];
                                            $sql1="SELECT * FROM tran1 WHERE tran1_no='$tran1_no'";
                                            $result1 = mysqli_query($con,$sql1);
                                            $row1 = mysqli_fetch_array($result1);
                                            $tran1_name = $row1['tran1_name'];
                                            $tran1 = $row1['tran1'];
                                            
                                            echo "<tr>";
                                            //echo "<td>" . $num . "</td>";
                                            echo "<td>$tran1_name</td>";
                                            echo "<td>$tran1</td>";
                                            echo "</tr>";
                                            $num++;
                                            
                                            $vva = $tran1;
                                            $vvb = $vva+$vvb;
                                            }
                                        mysqli_close($con);    
                                        ?>
                                        
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <h4>รวม = <?php echo($vvb); ?></h4>                
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