 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer :-)</title>

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
                            Customer
                            <small>
                            <?php
                            //print_r($_GET);
                            
                            //include "navcus.php";
                            //include "topcus.php";
                            //echo $cus_no;
                            
                            include "inc/dbcon.php";
                            
                            $cus_no = $_GET['cus_no'];
                            $sql="SELECT * FROM customer WHERE cus_no='$cus_no'";
                            //$sql="SELECT * FROM customer";
                            $result = mysqli_query($con,$sql);
                            $row = mysqli_fetch_array($result);
                            $cus_name = $row['cus_name'];
                            
                                     //echo "</tr>";
                            echo "$cus_name";
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
                    <div class="col-lg-12" >
                        <form action="billto_add1.php">
                            <input type="hidden" name="cus_no" value="<?php echo($cus_no); ?>" />
                            <button class="btn btn-primary">Bill to</button>
                        </form>

                    </div>
                </div>
                <!-- /.row -->
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Customer</th>
                                        <th>Address</th>
                                        <th>Tax ID.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "inc/dbcon.php";
                                    $result = mysqli_query($con,"SELECT * FROM billto WHERE cus_no='$cus_no'");
                                    $num=1;
                                    while($row = mysqli_fetch_array($result))
                                        {
                                        //echo "<tr data-href='customerdetail.php?cus_no=" . $row['cus_no'] . "'>";
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['billto_name'] . "</td>";
                                        echo "<td>" . $row['billto_addr'] . "</td>";
                                        echo "<td>" . $row['billto_id'] . "</td>";
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
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="cuscontact_add1.php">
                            <input type="hidden" name="cus_no" value="<?php echo($cus_no); ?>" />
                            <button class="btn btn-primary">Contact Name</button>
                        </form>

                    </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Contact Name</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM cuscontact WHERE cus_no='$cus_no'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            echo "<tr>";
                                            echo "<td>" . $num . "</td>";
                                            echo "<td>" . $row['cuscontact_name'] . "</td>";
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
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="inv_add1.php">
                            <input type="hidden" name="cus_no" value="<?php echo($cus_no); ?>" />
                            <button class="btn btn-primary">Quotation</button>
                        </form>

                    </div>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Quotation</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <?php
                                        include "inc/dbcon.php";
                                        $result = mysqli_query($con,"SELECT * FROM invoice WHERE cus_no='$cus_no'");
                                        $num=1;
                                        while($row = mysqli_fetch_array($result))
                                            {
                                            echo "<tr data-href='invdetail.php?inv_no=" . $row['inv_no'] . "'>";
                                            echo "<td>" . $num . "</td>";
                                            echo "<td>" . $row['inv_name'] . "</td>";
                                            echo "<td>" . $row['inv_date'] . "</td>";
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
                    <div class="row">
                    <div class="col-lg-12" >
                        <form action="customer_edit1.php">
                            <input type="hidden" name="cus_no" value="<?php echo($cus_no); ?>" />
                            <button class="btn btn-primary">Customer Edit</button>
                        </form>

                    </div>
                    </div>
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