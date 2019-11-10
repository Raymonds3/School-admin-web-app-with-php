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
    <title>Simple Admin-Dashboard</title>
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
                    <a class="navbar-brand" href="index.php">
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



                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>


                    <li>
                        <a href="notification.php"><i class="fa fa-bell-o "></i>Notifications </a>
                    </li>
                    <li>
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
                     <h2>DASHBOARD</h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
											<?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-info">

                          			<div class="error success">
                          				<p>
                          					<?php
                          						echo $_SESSION['success'];
                          						unset ($_SESSION['success']);
                          					?>
                          				</p>
                          			</div>


                        </div>
												<?php endif ?>

                    </div>
                    </div>
                  <!-- /. ROW  -->
									<div class="col-lg-6 col-md-6">
											<h5>Grade 12 term 1</h5>
											<table class="table table-striped table-bordered table-hover">
													<thead>
															<tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Average</th>
															</tr>
													</thead>
													<tbody>
															<tr>
																	<td>1</td>
																	<td>Mark</td>
																	<td>Smith</td>
																	<td>93%</td>
															</tr>
															<tr>
																	<td>2</td>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>90%</td>
															</tr>
															<tr>
																	<td>3</td>
																	<td>John</td>
																	<td>Murrey</td>
																	<td>89%</td>
															</tr>
															<tr>
																	<td>4</td>
																	<td>Larry</td>
																	<td>Bird</td>
																	<td>85%</td>
															</tr>
													</tbody>
											</table>

									</div>

									<div class="col-lg-6 col-md-6">
											<h5>Grade 11 term 1</h5>
											<table class="table table-striped table-bordered table-hover">
													<thead>
															<tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Average</th>
															</tr>
													</thead>
													<tbody>
															<tr>
																	<td>1</td>
																	<td>Mark</td>
																	<td>Smith</td>
																	<td>95%</td>
															</tr>
															<tr>
																	<td>2</td>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>90%</td>
															</tr>
															<tr>
																	<td>3</td>
																	<td>John</td>
																	<td>Murrey</td>
																	<td>89%</td>
															</tr>
															<tr>
																	<td>4</td>
																	<td>Larry</td>
																	<td>Bird</td>
																	<td>89%</td>
															</tr>
													</tbody>
											</table>

									</div>

									<!---principal--->
									<div class="container">
										<div class="col-lg-6 col-md-6">
									  	<div class="profile-photo" style="width: 400: height: 600">
												<h1>Principal M.D Smith</h1>
									    	<img src="assets/img/man2.png" alt="M.D. Smith" />
									    </div>
									  </div>
									</div>
									<!---end Principal--->

									<!---progressbar--->
									<!---
									<div class="container">
										<div class="col-lg-4 col-md-6">
											<div class="progress progress-striped active">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
															<span class="sr-only">20% Complete</span>
													</div>
											</div>

										</div>
									</div>
								--->
									<!---end progressbar--->
									</div>
							</div>
							<!---end of the page---->
                  </div>
              </div>


                 <!-- /. ROW  -->

                 <!-- /. ROW  -->

                  <!-- /. ROW  -->
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
