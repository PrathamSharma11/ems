<?php 

include "dbcon.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];
$data = "insert into employee(name,email,password,age,phone,gender,department,role)value('$name','$email','$password','$age','$phone','$gender','$department','$role')";
$result = mysqli_query($con,$data);
if ($result) {
	// code..
	header('location:addemployee.php');
} else {
	// code...
	echo "something went wrong!!!!";
}









?>