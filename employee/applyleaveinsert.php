<?php 
include "../admin/dbcon.php";
$a = $_POST['validfrom'];
$b = $_POST['validto'];
$c = $_POST['paidleave'];
$d = $_POST['medicalleave'];
$e = $_POST['casualleave'];
$f = $_POST['applyby'];
$status = "pending";

$data = "insert into apply_leave(leave_from,leave_to,paid_leave,medical_leave,casual_leave,apply_by,status)value('$a','$b','$c','$d','$e','$f','$status')";
$result = mysqli_query($con,$data);
if ($result = mysqli_query($con,$data)) {
	// code...
	header('location:employeeleave.php');
} else {
	// code...
	echo "something went wrong.";
}











?>