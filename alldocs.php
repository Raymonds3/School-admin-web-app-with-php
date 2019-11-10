<?php include('server.php');

	if (empty($_SESSION['username'])) {
		header('location: login.php');

	}
?>

﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Admin-alldocs</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
											<!--<img src="assets/img/logo.png" />-->
											<h1>Secondary School</h1>

                    </a>

                </div>

                <span class="logout-spn" >

									<?php if (isset($_SESSION["username"])): ?>
										<p><strong><?php echo $_SESSION['username']; ?></strong></p>
										<a href="index.php?logout='1'" style="color: red;">LOGOUT</a>
									<?php endif ?>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>


                    <li>
                        <a href="notification.php"><i class="fa fa-bell-o "></i>Notifications </a>
                    </li>
                    <li class="active-link">
                        <a href="alldocs.php"><i class="fa fa-clipboard "></i>All Docs </a>
                    </li>


                    <li>
                        <a href="onlinesubmittion.php"><i class="fa fa-rocket "></i>Online Submittion </a>
                    </li>
                    <li>
                        <a href="schoolactivities.php"><i class="fa fa-bar-chart-o"></i>School Activities </a>
                    </li>

                    <li>
                        <a href="contactsupport.php"><i class="fa fa-comments-o "></i>Contact Support Team </a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="fa fa-gear "></i>Settings </a>
                    </li>


                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ALL DOCS</h2>
                    </div>
									</div>
	                 <!-- /. ROW  -->
	                  <hr />

	                 <!-- /. ROW  -->

									 <div class="col-lg-12 col-md-4">
											 <ul class="nav nav-tabs">
													 <li class="active"><a href="#Grade8" data-toggle="tab">Grade 8</a>
													 </li>
													 <li class=""><a href="#Grade9" data-toggle="tab">Grade 9</a>
													 </li>
													 <li class=""><a href="#Grade10" data-toggle="tab">Grade 10</a>
													 </li>
													 <li class=""><a href="#Grade11" data-toggle="tab">Grade 11</a>
													 </li>
													 <li class=""><a href="#Grade12" data-toggle="tab">Grade 12</a>
													 </li>

											 </ul>
											 <div class="tab-content">
													 <div class="tab-pane fade active in" id="Grade8">
															 <h4>Grade 8</h4>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Science Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Life Orientation Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 25/01/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>English Homework- Due: 06/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 17/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 1
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 1- Due: 25/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 2
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 2- Due: 26/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>



													 </div>
													 <div class="tab-pane fade" id="Grade9">
															 <h4>Grade 9</h4>


															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Science Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Life Orientation Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 25/01/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>English Homework- Due: 06/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 17/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 1
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 1- Due: 25/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 2
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 2- Due: 26/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

													 </div>
													 <div class="tab-pane fade" id="Grade10">
															 <h4>Grade 10</h4>


															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Science Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Life Orientation Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 25/01/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>English Homework- Due: 06/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 17/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 1
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 1- Due: 25/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 2
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 2- Due: 26/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

													 </div>
													 <div class="tab-pane fade" id="Grade11">
															 <h4>Grade 11</h4>


															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Science Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Life Orientation Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 25/01/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>English Homework- Due: 06/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 17/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 1
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 1- Due: 25/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 2
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 2- Due: 26/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

													 </div>
													 <div class="tab-pane fade" id="Grade12">
															 <h4>Grade 12</h4>


															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Science Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Assignment
					                             </div>
					                             <div class="panel-body">
					                                 <p>Life Orientation Assignment 1</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 25/01/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>English Homework- Due: 06/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Homework
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Homework- Due: 17/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 1
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 1- Due: 25/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

															 <div class="col-lg-3 col-md-4">
					                         <div class="panel panel-primary">
					                             <div class="panel-heading">
					                                 Prep Test 2
					                             </div>
					                             <div class="panel-body">
					                                 <p>Mathematics Prep Test 2- Due: 26/02/2019</p>
					                             </div>
					                             <div class="panel-footer">
					                                 <a href="#" class="btn btn-primary btn-lg">DOWNLOAD </a>
					                             </div>
					                         </div>
					                     </div>

													 </div>

											 </div>
									 </div>

							 </div>





	    </div>
	             <!-- /. PAGE INNER  -->
	            </div>
	         <!-- /. PAGE WRAPPER  -->
	        </div>
    <div class="footer">


            <div class="row">
                <div class="col-lg-12" >
                     2019 CodeCulture.co.za | Design by: <a href="http://CodeCulture.co.za" style="color:#fff;" target="_blank">www.CodeCulture.co.za</a>
                </div>
            </div>
        </div>


     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
