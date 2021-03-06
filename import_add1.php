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
                            IMPORT
                            <small>
                            <?php
                            include "inc/dbcon.php";
                            
                            $job_no = $_GET['job_no'];
                            $sql="SELECT * FROM job WHERE job_no='$job_no'";
                            //$sql="SELECT * FROM customer";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($result);
                            $job_name = $row['job_name'];
                            $job_ship = $row['job_ship'];
                            //$cus_no = $row['cus_no'];
                            $job_date = $row['job_date'];
                            
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
                                <i class="fa fa-file"></i> <a href="jobs.php">Job</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                        <form action"" method="post">
                        <div class="col-lg-1">
                        <div class="form-group">
                             <label>Date</label>
                             <input class="form-control" placeholder="<?php echo($job_date) ?>" placeholder="Disabled input" disabled>
                        </div>
                        </div>
                        <div class="col-lg-3">
                            <?php
                            include "inc/dbcon.php";
                            
                            $cus_no = $_GET['cus_no'];
                            $sql="SELECT * FROM customer WHERE cus_no='$cus_no'";
                            //$sql="SELECT * FROM customer";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($result);
                            $cus_code = $row['cus_code'];
                            $cus_name = $row['cus_name'];
                            $cus_addr = $row['cus_addr'];
                            
                            mysqli_close($con);
                            
                            ?>
                        <div class="form-group">
                             <label>Customer Code</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo($cus_code) ?>" disabled>
                        </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Customer Name</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="<?php echo($cus_name) ?>" disabled>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                             <label>Address</label>
                             <input class="form-control" placeholder="<?php echo($cus_addr) ?>" id="cus_id" name="cus_id" disabled>
                        </div>
                        </div>
                        
                        <!-- Bill to -->
                        <div class="col-lg-3">
                            <label>Bill to</label>
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                             <label>Bill to Address</label>
                             <input class="form-control" placeholder="" id="cus_id" name="cus_id" disabled>
                        </div>
                        </div>
                        
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Contact Name</label>
                             <input class="form-control" placeholder="" list="cuscontact_no" autocomplete="off" name="cuscontact_no" disabled>
                        </div>
                        </div>
                        <!--
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
                        -->
                        <div class="col-lg-4">
                        <div class="form-group">
                                                
                                                
                                                        <label>FREIGHT</label>
                                                        <select class="form-control" id="freight" name="freight">
                                                            <option>Select</option>
                                                            <option>Sea</option>
                                                            <option>Air</option>
                                                            <option>Land</option>
                                                        </select>
                                                
                                                
                        </div>
                        </div>
                        
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Customer Invoice</label>
                             <input class="form-control" placeholder="" id="inv_no" name="inv_no" disabled>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>CS</label>
                             <input class="form-control" placeholder="" id="inv_no" name="inv_no" disabled>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>ITEM</label>
                             <input class="form-control" placeholder="Enter Text/Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Amount</label>
                             <input class="form-control" placeholder="Enter Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Total Weigth</label>
                             <input class="form-control" placeholder="Enter Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Measurement(M3)</label>
                             <input class="form-control" placeholder="Enter Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Chargeable Weight</label>
                             <input class="form-control" placeholder="Enter Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Net Weight</label>
                             <input class="form-control" placeholder="Enter Number">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>H B/L</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>M B/L</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                         <div class="col-lg-4">
                        <div class="form-group">
                             <label>B/L Status</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                         <div class="col-lg-4">
                        <div class="form-group">
                             <label>Agent/Forwarder</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                         <div class="col-lg-4">
                        <div class="form-group">
                             <label>Vessel Name</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Master Vessel Name</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>ETA</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>CY</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>Delivery</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>Return</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Number of Containers</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Destination Port</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                                <label></label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>CY
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">CFS
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>EDI Date</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                             <label>Date Release</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Destination Port</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Bill Type</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Bill No.</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Shipping</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Customs</label>
                             <input class="form-control" placeholder="Enter Text">
                        </div>
                        </div>
                         <div class="col-lg-4">
                        <div class="form-group">
                             <label>Port#</label>
                             <input class="form-control" placeholder="Enter Text" disabled>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                             <label>Remark</label>
                             <textarea class="form-control" rows="3" id="cus_addr" name="cus_addr"></textarea>
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <button type="submit" class="btn btn-lg btn-warning">Save!</button>
                        </div>
                        </form>
                        
            
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
