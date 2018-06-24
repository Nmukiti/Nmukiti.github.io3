<?php 
$db=mysqli_connect('localhost','root','','hos');
if (isset($_POST['login_submit'])) {
   $username=$_POST['username'];
   $password=$_POST['password'];
   $query="SELECT * FROM users WHERE username='$username' and password='$password'";
   $result=mysqli_query($db,$query);
   if (mysqli_num_rows(result)==1) {
   	header("Location:admin-panel.php");
   }
   else{
   	echo "<script>alert('error login')</script>";
   	echo "<script>window.open('index.php','_self')</script>";
   }
}
if (isset($_POST['pat_sub'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
  $query="INSERT INTO users(fname,lname,email,contact,docapp) VALUES('$fname','$lname','$email','$contact','$docapp')";
  $result=mysqli_query($db,$query);
  if ($result) {
    echo "<script>alert('Appointment registered')</script>";
   	echo "<script>window.open('doc.php','_self')</script>";
  }
 }
	 function get_patient_details(){
global $db;
$query="SELECT * FROM users";
$result=mysqli_query($db,$query);
while ($row=mysqli_fetch_array($result)){
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$docapp=$row['docapp'];
	echo " <tr>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$docapp</td>
    </tr>";
}
}
 ?>

