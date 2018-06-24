<?php include ('func.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient Details</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	  <div class="card">
      <img src="save7.jfif" class="card-img-top">
      <div class="card-body" style="background-color: #000000;color: #ffffff;">
      	<a href="index.php" class="btn btn-primary">Go Back</a>
      </div>
      <header style="font-size:70px;font-family: gabriola; width:50%">Patient Details</header>
      	<form class="form-group" action="doc.php" method="post">
      	</form>
      </div>
      </div></div>
      <div class="card-body" style="background-color: #000000;color: #ffffff;">></div>
  <table class="table table-bordered">
  <thead-dark>
    <tr>
      <th scope="col">first name</th>
      <th scope="col">last name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
   <?php get_patient_details(); ?>
  </tbody>
</table>
</div>

</div>   
</body>
</html>