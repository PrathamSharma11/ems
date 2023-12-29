<?php 
include "dbcon.php";
$eid = $_POST['eid'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];
$data = "update employee set name = '$name',email = '$email',password = '$password',age = '$age',phone = '$phone',gender = '$gender',department = '$department',role = '$role' where eid = '$eid'";
$result = mysqli_query($con,$data);
header('location:addemployee.php');










?>