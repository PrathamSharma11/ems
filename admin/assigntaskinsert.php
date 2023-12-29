<?php
include "dbcon.php";

$task = $_POST['task'];
$assigned_by = $_POST['assigned_by'];
$eid = $_POST['eid'];
foreach ($eid as $e) {
	// code...
	$query = "insert into assigntask (eid,task,assigned_by)value('$e','$task','$assigned_by')";
	$result = mysqli_query($con,$query);
	if ($result) {
		// code...
		header('location:assigntask.php');
	} else {
		// code...
		echo "";
	}
	
}


?>