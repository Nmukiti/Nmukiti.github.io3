<?php  
session_start();
$username="";
$errors=array();
$con=mysqli_connect('localhost','root','','mwalzhospital');
if (isset($_POST['reg_user'])){
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$pwd1=mysqli_real_escape_string($con,$_POST['pwd1']);
	$pwd2=mysqli_real_escape_string($con,$_POST['pwd2']);
	//form validation 
	if (empty($username)){
		array_push($errors,"Username is required");
	}
	if (empty($pwd1)){
		array_push($errors,"Password required");
	}
	if ($pwd1 !=$pwd2){
		array_push($errors,"Password Mismatch");
	}
	//check if user exists
	$check_user="SELECT * FROM login WHERE username='$username'";
	$result=mysqli_query($con,$check_user);
	$user=mysqli_fetch_assoc($result);
	if ($user){
		if ($user['username']===$username){
			array_push($errors,"Username exists");
		}
	}
	//go ahead to register users if there is no error
	if (count($errors)===0){
		//md5 will be used for encryption before saving on database
		$password=md5($pwd1);
		//query statement to insert into
		$qq="INSERT INTO login(username,password)
			VALUES ('$username',$password)";
		mysqli_query($connect,$qq);
		$_SESSION['username']=$username;
		$_SESSION['success']="Successful signup";
		header('location:index.php');
	}
}
//login
if (isset($_POST['login_submit'])){
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	if (empty($username)){
		array_push($errors,"Input username");
	}
	if (empty($password)){
		array_push($errors,"Input password");
	}
	if (count($errors)==0){
		$password=md5($password);
		$qq="SELECT * FROM login WHERE username='$username' AND 
			password='$password'";
		$result=mysqli_query($connect,$qq);
		if (mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['success']="Login successful";
			header('location:index.php');
		}
		else{
			array_push($errors,"Wrong password or username");
		}
	}
}
if (isset($_POST['pat_submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
	$result=mysqli_query($con,$query);
	if ($result)
	{
		echo "<script>alert('Appointment Registered.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
function get_patient_details(){
global $con;
$query="SELECT * FROM doctorapp";
$result=mysqli_query($con,$query);
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