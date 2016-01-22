<?php
include "inc/dbcon.php";

$result = mysqli_query($con,"SELECT * FROM job");

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
                <a class="navbar-brand" href="dashboard.php">KB Shipping Service</a>
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
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
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
                            Jobs
                            <small>Management</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Jobs
                            </li>
                        </ol>
                        <div class="col-lg-6">
                        <form role="form">
                        <div class="form-group">
                                <label>Selects Filter</label>
                                <select class="form-control">
                                    <option>ALL</option>
                                    <option>Import</option>
                                    <option>Export</option>
                                    <option>Privilege</option>
                                    <option>Other</option>
                                    <option>Transport</option>
                                </select>
                        </div>
                        </form>
                        </div>
                        <div class="col-lg-6">
                        <form role="form">
                        <div class="form-group">
                                <label>Selects Filter</label>
                                <select class="form-control">
                                    <option>ALL</option>
                                    <option>Sea</option>
                                    <option>Air</option>
                                    <option>Land</option>
                                    <option>Dummy</option>
                                    <option>Dummy</option>
                                </select>
                        </div>
                        </form>
                        </div>
                        <div class="col-lg-6" >
                        <!--
                        <div id="div1">
                        -->
                        <button type="button" class="btn btn-lg btn-primary" onclick="location.href='job_add1.php'">New JOBs</button>
                        <!--
                        <button type="button" class="btn btn-lg btn-primary" onclick="location.href='import_add1.php'">New Import</button>
                        <button type="button" class="btn btn-lg btn-success" onclick="location.href='export_add1.php'">New Export</button>
                        <button type="button" class="btn btn-lg btn-info" onclick="location.href='transport_add1.php'">New Transport</button>
                        <button type="button" class="btn btn-lg btn-warning" onclick="location.href='privilage_add1.php'">New Privilege</button>
                        </div>
                        -->
                        </div>
                        <!--
                        <form action="newjobs.html">
                        <button type="button" class="btn btn-lg btn-primary" onclick="location.href='newjobs.html'">New JOB</button>
                        </form>
                        -->
                        
                    </div>
                </div>
                <!-- /.row -->
            <div>
                        <h3>Jobs List</h3>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Job</th>
                                        <th>วันที่</th>
                                        <th>ลูกค้า</th>
                                        <th>บริการ</th>
                                        <th>สร้างวันที่</th>
                                        <th>สิ้นสุดวันที่</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        $job_status = $row['job_status'];
                                        if($job_status==0){
                                        $tr = "warning";
                                        } else {
                                            $tr = "success";
                                        }
                                        $job_no = $row['job_no'];
                                        echo "<tr class='$tr' data-href='jobdetail.php?job_no=" . $row['job_no'] . "'>";
                                        //echo "<td>" . $num . "</td>";
                                        $job_name = $row['job_name'];
                                        //echo "<td>" . $row['job_name'] . "</td>";
                                        echo "<td>J$job_name</td>";
                                        echo "<td>" . $row['job_sdate'] . "</td>";
                                        $cus_no = $row['cus_no'];
                                            $sql1="SELECT cus_name FROM customer WHERE cus_no='$cus_no'";
                                            $result1 = mysqli_query($con,$sql1);
                                            $row1 = mysqli_fetch_array($result1);
                                            $cus_name = $row1['cus_name'];
                                        echo "<td>$cus_name</td>";
                                        //echo "<td>" . $row['cus_no'] . "</td>";
                                        //echo "<td>" . $row['job_ship'] . "</td>";
                                        $job_ship = $row['job_ship'];
                                        if($job_ship==1){
                                        $ss = "นำเข้า";
                                        } else {
                                            $ss = "ส่งออก";
                                        }
                                        echo "<td>$ss</td>";
                                        echo "<td>" . $row['job_date'] . "</td>";
                                        echo "<td>" . $row['job_edate'] . "</td>";
                                        //echo "<td>" . $row['job_status'] . "</td>";
                                        //$job_status = $row['job_status'];
                                        if($job_status==0){
                                        $js = "ยังไม่สิ้นสุด";
                                        } else {
                                            $js = "สิ้นสุด";
                                        }
                                        echo "<td>$js</td>";
                                        echo "</tr>";
                                        $num++;
                                        }
                                    ?>
                                    <?php mysqli_close($con); ?>
                                    <!--
                                    <tr class="active">
                                        <td>1.</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                    </tr>
                                    <tr class="success">
                                        <td>2.</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3.</td>
                                        <<td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4.</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                        <td>xxxxx</td>
                                    </tr>
                                    -->
                                </tbody>
                            </table>
                        </div>
                    </div>
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
