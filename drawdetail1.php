<?php
include "inc/dbcon.php";

$draw1_status = $_GET['draw1_status'];
$sql="SELECT * FROM draw1 WHERE draw1_status='$draw1_status'";

if(isset($_GET['delete_no']))
{
 mysqli_query($con,"DELETE FROM draw1 WHERE draw1_no=".$_GET['delete_no']);
 //mysql_query($sql_query);
 header("Location: drawdetail.php");
}
if(isset($_GET['update_no']))
{
 mysqli_query($con,"UPDATE draw1 SET draw1_status='1' WHERE draw1_no=".$_GET['update_no']);
 //mysql_query($sql_query);
 header("Location: drawdetail.php");
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Draw :-)</title>

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

<script type="text/javascript">
function delete_no(no)
{
 if(confirm('Sure To Remove This Record ?'))
 {
  window.location.href='drawdetail.php?delete_no='+no;
 }
}
</script>
<script type="text/javascript">
function update_no(no)
{
 if(confirm('Sure To Applove This Record ?'))
 {
  window.location.href='drawdetail.php?update_no='+no;
 }
}
</script>
<script type="text/javascript">
function draw1_status(no)
{
  window.location.href='drawdetail1.php?draw1_status='+no;
}
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
                    <li>
                        <a href="jobs.php"><i class="fa fa-arrow-circle-right"></i> Jobs</a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Customer</a>
                    </li>
                    <li class="active">
                        <a href="drawdetail.php"><span class="glyphicon glyphicon-bitcoin"></span> เงินเบิก</a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="glyphicon glyphicon-road"></span> Transport</a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="glyphicon glyphicon-earphone"></span> Customer Service</a>
                    </li>
                    <li>
                        <a href="customer.php"><span class="glyphicon glyphicon-briefcase"></span> Shipping</a>
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
                            เงินเบิก
                            <small>
                            <?php
                            /*
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
                            echo "J$job_name";
                            mysqli_close($con);
                            //include "bot.php";
                            */
                            ?>   
                        
                            </small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <a href="drawdetail.php">เงินเบิก</a>
                            </li>
                        </ol>
                        
                </div>

                </div>
                
                    <!-- /.row -->
                    <div class="row">
                    <div class="col-lg-12" >
                        <a href='drawdetail.php'><button class='btn btn-primary'>ทั้งหมด</button></a>
                        <a href='javascript:draw1_status(0)'><button class='btn btn-primary'>รออนุมัติ</button></a>
                        <a href='javascript:draw1_status(1)'><button class='btn btn-primary'>ยังไม่ได้เคลียร์</button></a>
                        <a href='javascript:draw1_status(2)'><button class='btn btn-primary'>เคลียร์แล้ว</button></a>
                    </div>
                    </div>
                    <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Job No.</th>
                                        <th>รายการ</th>
                                        <th>เบิกจำนวน(บาท)</th>
                                        <th>ค้างจำนวน(บาท)</th>
                                        <th>สถานะ</th>
                                        <th>อนุมัติ</th>
                                        <th>เคลียร์</th>
                                        <th>ลบ</th>
                                        <th>หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";

                                    $result = mysqli_query($con,$sql);
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        $draw1_no = $row['draw1_no'];
                                        $draw1_status = $row['draw1_status'];
                                        $job_no = $row['job_no'];
                                        //echo "<tr data-href='jobdetail.php?job_no=" . $job_no . "'>";
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        
                                        $sql1="SELECT * FROM job WHERE job_no='$job_no'";
                                        $result1 = mysqli_query($con,$sql1);
                                        $row1 = mysqli_fetch_array($result1);
                                        $job_name = $row1['job_name'];
                                        echo "<td>J$job_name</td>";
                                        
                                        echo "<td>" . $row['draw1_name'] . "</td>";
                                        echo "<td>" . $row['draw2'] . "</td>";
                                        echo "<td>" . $row['draw1'] . "</td>";
                                        if($draw1_status==0){
                                        $ss = "รออนุมัติ";
                                        echo "<td>$ss</td>";
                                        echo "<td><a href='javascript:update_no($draw1_no)'><button class='btn btn-sm btn-primary'>อนุมัติ</button></a></td>";
                                        echo "<td></td>";
                                        } elseif($draw1_status==1) {
                                            $ss = "ยังไม่ได้เคลียร์";
                                            echo "<td>$ss</td>";
                                            echo "<td></td>";
                                            echo "<td>
                                                <form action='draw1_edit1.php'>
                                                <input type='hidden' name='job_no' value='$job_no' />
                                                <input type='hidden' name='draw1_no' value='$draw1_no' />
                                                <button class='btn btn-sm btn-primary'>เคลียร์</button>
                                                </form>
                                                </td>";
                                        } else {
                                             $ss = "เคลียร์แล้ว";
                                             echo "<td>$ss</td>";
                                             echo "<td></td>";
                                             echo "<td></td>";
                                        }
                                        //echo "<td>$ss</td>";
                                        //echo "<td><a href='javascript:update_no($draw1_no)'><button class='btn btn-sm btn-primary'>อนุมัติ</button></a></td>";
                                        echo "<td><a href='javascript:delete_no($draw1_no)'><button class='btn btn-sm btn-primary'>ลบ</button></a></td>";
                                        echo "<td>" . $row['draw1_remark'] . "</td>";
                                        echo "</tr>";
                                        $num++;
                                        }
                                    mysqli_close($con);
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- /.row -->
                     <br>
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