<?php   
include "dbcon.php";
$validfrom = $_POST['validfrom'];

$validto = $_POST['validto'];
$paidleave = $_POST['paidleave'];
$medicalleave = $_POST['medicalleave'];
$casualleave = $_POST['casualleave'];
$eid = $_POST['eid'];
$assigned_by = $_POST['assigned_by'];
foreach ($eid as $assigned_to) {
	// code...
	$data = "insert into assignleave(valid_from,valid_to,paid_leave,medical_leave,casual_leave,assign_by,assign_to)value('$validfrom','$validto','$paidleave','$medicalleave','$casualleave','$assigned_by','$assigned_to')";
	$result = mysqli_query($con,$data);
	if ($result) {
		// code...
		header('location:assignleave.php');
	} else {
		// code...
		echo "something went wrong";
	}
	
}













?>