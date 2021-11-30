<?php
include 'config.php';
// database connection code
if(isset($_POST))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '', 'regform');

// get the post records
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$phoneNo=$_POST['phoneNo'];
$email=$_POST['email'];
$address=$_POST['address'];



// database insert SQL code
$sql = "INSERT INTO `reg` ('fname','lname','password','phoneNo','email','address') VALUES ('$fname', '$lname', '$password','$phoneNo','$email','$address')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo '<script>alert("Your request has been submitted succesfully")</script>';
	header("location:successful.html");
}
}

else
{
	echo '<script>alert("Failed to update your request")</script>';
	
}
?>