<?php include('func.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="doc.php">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header style="font size:200px;font-family:gabriola;text-align: center;"><h1>MEL_CHERNI HOSPITALS</h1></header>
   <div class="container">
  	<div id="ney" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
  			<div class="item active"><img src="save3.jfif" width="100%"></div>
            <div class="item"><img src="save2.jfif"width="100%"></div>
  			<div class="item"><img src="down2.jfif"width="100%"></div>
  			<div class="item"><img src="down4.jfif"width="100%"></div>
            <div class="item"><img src="save4.jfif"width="100%"></div>
            <div class="item"><img src="save1.jfif"width="100%"></div>
  		</div>
  		<a href="#ney" class="left carousel-control" data-slide="prev">
  			<span class="glyphicon glyphicon-chevron-left"></span>
  			<span class="sr-only"></span>
  		</a>
  		<a href="#ney" class="right carousel-control" data-slide="next">
  			<span class="glyphicon glyphicon-chevron-right"></span>
  			<span class="sr-only"></span>
  		</a>
  	</div>
  </div>
   <div class="container-fluid">
   	<div class="row">
   		<div class="col-md-3">
   		<div class="list-group">
   			<a href="" class="list-group-item active">Categories</a>
   			<a href="doc.php" class="list-group-item">Doctor's Page</a>
   			<a href="pat.php" class="list-group-item ">Patient's Page</a>
   		</div>
   		</div>
   		<div class="col-md-8">
   			<div class="card">
   				<h3>Book Appointment</h3>
   				<div class="card-body">
   					<form class="form-group" action="index.php" method="POST">
   					First Name:<br>
   					<input type="text" name="fname" class="form-control"><br>
   					Last Name:<br>
   					<input type="text" name="lname" class="form-control"><br>
   					ID:<br>
   					<input type="text" name="id" class="form-control"><br>
   					Email:<br>
   					<input type="text" name="email" class="form-control"><br>
   					Contact:<br>
   					<input type="text" name="contact" class="form-control"><br>
   					<label>Doctor's Appointment:</label>
   					<select class="form-control">
   						<option value="Dr Sharma from 9am to 11am">Dr Mukiti Naum from 9am to 11am</option>
   						<option value="Dr Shatty from 10am to 1pm">Dr Branny Jay from 10am to 1pm</option>
   					</select><br>
   					<input type="submit" class="btn btn-primary" name="pat_sub" value="Enter Appointment">
   					</form>
   				</div>
   			</div>
   		</div>
   		<div class="col-md-1"></div>
   	</div>
   </div>
</body>
</html>