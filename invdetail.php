<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

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
                    <li>
                        <a href="jobs.php"><i class="fa fa-arrow-circle-right"></i> Jobs</a>
                    </li>
                    <li class="active">
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
                            Invoice
                            <small>
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
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <a href="customer.php">Customer</a>
                            </li>
                        </ol>
                    </div>
                </div>
                        	
               <div class="col-lg-12" >
                   <div class="col-lg-2" >
                        <form action="cont_add1.php">
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-primary">Container</button>
                        </form>
                        </div>
                        <div class="col-lg-2" >
                        <form action="cont_add1.php">
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-success">Minimum</button>
                        </form>
                        </div>
                        <div class="col-lg-2" >
                        <form action="cont_add1.php">
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-warning">Per Shipment</button>
                        </form>
                        </div>
                        <div class="col-lg-2" >
                        <form action="cont_add1.php">
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-danger">รายการ/คำร้อง/ตู้(x-ray)</button>
                        </form>
                        </div>
                         <div class="col-lg-2" >
                        <form action="cont_add1.php">
                            <input type="hidden" name="inv_no" value="<?php echo($inv_no); ?>" />
                            <button class="btn btn-info">พิเศษ</button>
                        </form>
                        </div>

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
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FCL 20 feet First Container</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl20f); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 20 feet Next Container</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl20n); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 40 feet First Container</td>
                                        <td>Baht/Container</td>
                                        <td>
                                        <?php echo($fcl40f); ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>FCL 40 feet Next Container</td>
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
                    <!-- /.row -->
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