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
    <title>Simple Admin-onlinesubmittion</title>
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


                    <li class="active-link">
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
                     <h2>ONLINE SUBMITTIONS</h2>
                    </div>
									</div>
	                 <!-- /. ROW  -->
	                  <hr />

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

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Assignment
																				</div>
																				<div class="panel-body">
																						<label>Name of the Assignment</label>
								                            <input class="form-control" />

																						<label>Student Name</label>
								                            <input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Homework
																				</div>
																				<div class="panel-body">
																						<label>Name of the Homework</label>
								                            <input class="form-control" />

																						<label>Student Name</label>
								                            <input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Sick Note
																				</div>
																				<div class="panel-body">
																						<label>Student Name</label>
								                            <input class="form-control" />

																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>
																</div>




														</div>
														<div class="tab-pane fade" id="Grade9">
																<h4>Grade 9</h4>


																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Assignment
																				</div>
																				<div class="panel-body">
																						<label>Name of the Assignment</label>
								                            <input class="form-control" />

																						<label>Student Name</label>
								                            <input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Homework
																				</div>
																				<div class="panel-body">
																						<label>Name of the Homework</label>
								                            <input class="form-control" />

																						<label>Student Name</label>
								                            <input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Sick Note
																				</div>
																				<div class="panel-body">
																						<label>Student Name</label>
								                            <input class="form-control" />

																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



	$expensions= array("jpeg","jpg","png");


		if(in_array($file_ext,$expensions)=== false){

			$errors[]="extension not allowed, please choose a JPEG or PNG file.";

		}



		if($file_size > 2097152){

			$errors[]='File size must be excately 2 MB';

		}



		if(empty($errors)==true){

			move_uploaded_file($file_tmp,"images/".$file_name);

			echo "Success";

		}else{

			print_r($errors);

		}

	}

?>
<div>


<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image" /><br>

<input type="submit"/>

</form>


</div>

																				</div>
																		</div>

																</div>

														</div>
														<div class="tab-pane fade" id="Grade10">
																<h4>Grade 10</h4>


																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Assignment
																				</div>
																				<div class="panel-body">
																						<label>Name of the Assignment</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Homework
																				</div>
																				<div class="panel-body">
																						<label>Name of the Homework</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Sick Note
																				</div>
																				<div class="panel-body">
																						<label>Student Name</label>
																						<input class="form-control" />

																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>

																</div>

														</div>
														<div class="tab-pane fade" id="Grade11">
																<h4>Grade 11</h4>


																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Assignment
																				</div>
																				<div class="panel-body">
																						<label>Name of the Assignment</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Homework
																				</div>
																				<div class="panel-body">
																						<label>Name of the Homework</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Sick Note
																				</div>
																				<div class="panel-body">
																						<label>Student Name</label>
																						<input class="form-control" />

																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>

																</div>

														</div>
														<div class="tab-pane fade" id="Grade12">
																<h4>Grade 12</h4>


																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Assignment
																				</div>
																				<div class="panel-body">
																						<label>Name of the Assignment</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Homework
																				</div>
																				<div class="panel-body">
																						<label>Name of the Homework</label>
																						<input class="form-control" />

																						<label>Student Name</label>
																						<input class="form-control" />
																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

																<div class="col-lg-4 col-md-4">
																		<div class="panel panel-primary">
																				<div class="panel-heading">
																						Sick Note
																				</div>
																				<div class="panel-body">
																						<label>Student Name</label>
																						<input class="form-control" />

																				</div>
																				<div class="panel-footer">

																					<?php
																					if(isset($_FILES['image'])){
																						$errors= array();
																						$file_name = $_FILES['image']['name'];
																						$file_size =$_FILES['image']['size'];
																						$file_tmp =$_FILES['image']['tmp_name'];
																						$file_type=$_FILES['image']['type'];

																$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));



																$expensions= array("jpeg","jpg","png");


																if(in_array($file_ext,$expensions)=== false){

																$errors[]="extension not allowed, please choose a JPEG or PNG file.";

																}



																if($file_size > 2097152){

																$errors[]='File size must be excately 2 MB';

																}



																if(empty($errors)==true){

																move_uploaded_file($file_tmp,"images/".$file_name);

																echo "Success";

																}else{

																print_r($errors);

																}

																}

																?>
																<div>


																<form action="" method="POST" enctype="multipart/form-data">

																<input type="file" name="image" /><br>

																<input type="submit"/>

																</form>


																</div>

																				</div>
																		</div>
																</div>

														</div>


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
