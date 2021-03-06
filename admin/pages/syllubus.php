<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_name'])){
    header("location: login.php");
}
else {
include ("../includes/db.php");

$sql = "select * FROM post";
$run =mysqli_query($db,$sql);
$total_post=mysqli_num_rows($run);

$sql = "select * FROM syllubus";
$run =mysqli_query($db,$sql);
$total_syllubus=mysqli_num_rows($run);

$sql = "select * FROM gallary";
$run =mysqli_query($db,$sql);
$total_image=mysqli_num_rows($run);

$sql = "select * FROM user";
$run =mysqli_query($db,$sql);
$total_user=mysqli_num_rows($run);

$sql = "select * FROM about";
$run =mysqli_query($db,$sql);
$total_story=mysqli_num_rows($run);



?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Dashboard</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="new_post.php"><i class="fa fa-edit fa-fw"></i> Create News & Events</a>
                    </li>
                    <li>
                        <a href="index.php?view_post=view_post"><i class="fa fa-table fa-fw"></i> View All News & Events</a>
                    </li>
                    <li>
                        <a href="new_syllubus.php"><i class="fa fa-edit fa-fw"></i> Create New Course</a>
                    </li>
                    <li>
                        <a href="syllubus.php"><i class="fa fa-table fa-fw"></i> View All Courses</a>
                    </li>
                    <li>
                        <a href="new_about.php"><i class="fa fa-edit fa-fw"></i> Create New Story</a>
                    </li>
                    <li>
                        <a href="about.php"><i class="fa fa-table fa-fw"></i> View All Story</a>
                    </li>

                    <li>
                        <a href="new_images.php"><i class="fa fa-edit fa-fw"></i> Upload Image</a>
                    </li>
                    <li>
                        <a href="images.php"><i class="fa fa-photo fa-fw"></i> View All Image</span></a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list-ul fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_post; ?></div>
                                <div>All News & Events!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <a href="index.php?view_post=view_post">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-photo fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_image; ?></div>
                                <div>All Images!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <a href="images.php">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_user; ?></div>
                                <div>All Users!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-database fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_syllubus; ?></div>
                                <div>All Courses!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <a href="syllubus.php">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>

                        </div>
                    </a>
                </div>
            </div>
        </div>







        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading">
                            <h2>All Courses</h2>
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>


                                    <?php
                                    //include("../includes/db.php");
                                    $i=1;



                                        $query="select * from syllubus";
                                        $run=mysqli_query($db,$query);

                                        while($row=mysqli_fetch_array($run)){
                                            $syllubus_id = $row['id'];
                                            $title = $row['title'];
                                            $image_name = $row['image'];
                                            $desc = $row['content'];
                                            ?>



                                            <tbody>
                                            <tr class="gradeC">
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $title; ?></td>
                                                <td><img src="../post_images/<?php echo $image_name; ?>" width="50px" height="40px"></td>
                                                <td><?php echo $desc; ?></td>
                                                <td class="center"><a href="syllubus_edit.php?edit=<?php echo $syllubus_id;?>"><button type="button" class="btn btn-success disabled"><span class="fa fa-pencil">&nbsp;</span>Edit</button></a></td>
                                                <td><a href="syllubus_delete.php?del=<?php echo $syllubus_id;?>"><button type="button" class="btn btn-success"><span class="fa fa-trash-o">&nbsp;</span>Delete</button></a></td>
                                            </tr>
                                            </tbody>

                                        <?php } ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Post Section Close-->






    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../bower_components/raphael/raphael-min.js"></script>
<script src="../bower_components/morrisjs/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>


</body>

</html>
<?php } ?>