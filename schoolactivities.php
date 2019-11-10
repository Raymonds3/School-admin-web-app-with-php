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
    <title>Simple Admin-schoolactivities</title>
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
                    <li>
                        <a href="alldocs.php"><i class="fa fa-clipboard "></i>All Docs </a>
                    </li>


                    <li>
                        <a href="onlinesubmittion.php"><i class="fa fa-rocket "></i>Online Submittion </a>
                    </li>
                    <li class="active-link">
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
                     <h2>SCHOOL ACTIVITIES</h2>
                    </div>
									</div>
	                 <!-- /. ROW  -->
	                  <hr />

	                 <!-- /. ROW  -->

									 <h1>Gallery</h1>

			<p>Click on an image for a detailed view.</p>
			<div id="gallery">
			<a href="assets/img/gallery/image1.jpg" data-lightbox="waverly" title="Boulders beach, Cape Peninsula">
	        <img src="assets/img/gallery/image1s.jpg" alt="Boulders beach, Cape Peninsula" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image2.jpg" data-lightbox="waverly" title="Seafood">
            <img src="assets/img/gallery/image2s.jpg" alt="Seafood" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image3.jpg" data-lightbox="waverly" title="Simon's Town">
            <img src="assets/img/gallery/image2s.jpg" alt="Simon's Town" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image4.jpg" data-lightbox="waverly" title="Playing at Boulder Beach">
            <img src="assets/img/gallery/image4s.jpg" alt="Playing at Boulder Beach" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image5.jpg" data-lightbox="waverly" title="A South African Navy Vessel in Simon's Town">
            <img src="assets/img/gallery/image5s.jpg" alt="A South African Navy Vessel in Simon's Town" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image6.jpg" data-lightbox="waverly" title="Simon's Town city centre">
            <img src="assets/img/gallery/image6s.jpg" alt="Simon's Town city centre" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image7.jpg" data-lightbox="waverly" title="View of the boulders">
            <img src="assets/img/gallery/image7s.jpg" alt="View of the boulders" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image8.jpg" data-lightbox="waverly" title="Jackass Penguins on Boulder Beach">
            <img src="assets/img/gallery/image8s.jpg" alt="Jackass Penguins on Boulder Beach" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image9.jpg" data-lightbox="waverly" title="Waverly pool area">
            <img src="assets/img/gallery/image9s.jpg" alt="Waverly pool area" class="img-thumbnail"></a>

            <a href="assets/img/gallery/image10.jpg" data-lightbox="waverly" title="Outside dining at Waverlys">
            <img src="assets/img/gallery/image10.jpg" alt="Outside dining at Waverlys" class="auto-style3"</a height="78"150"
			</div width="150">

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
