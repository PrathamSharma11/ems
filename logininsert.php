<?php 
session_start();
include "dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];
$data = "select * from employee where email = '$email' && password = '$password'";
$result = mysqli_query($con,$data);
$total = mysqli_num_rows($result);
$v = mysqli_fetch_array($result);

if ($total==1) {
	// code...
    $_SESSION['n'] = $v['name'];
    $_SESSION['e'] = $v['email'];
    $_SESSION['assigned_by'] = $v['eid'];
    $_SESSION['eid'] = $v['eid'];

    $role = $v['role'];
    if ($role=='admin') {
    	// code...
    	header('location:admin/dashboard.php');

    }elseif ($role=='Employee') {
    	// code...
    	header('location:employee/dashboard.php');
    }elseif ($role=='other') {
    	// code...
    	header('location:other/dashboard.php');
    }
}else{
    	header('location:index.php');
    }


	





?>