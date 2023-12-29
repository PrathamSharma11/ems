<?php 
include "dbcon.php";

if(isset($_POST['approved']))
{
	$status = "approved";
	$id = $_POST['id'];
	$query = "update apply_leave set status = '$status' where a_id = '$id'";

	$result = mysqli_query($con,$query);
	if ($result) {
		// code...
		header('location:emprepleave.php');

	} else {
		// code...
		echo "something went wrong!!!";
	}
	
}






if(isset($_POST['reject']))
{
	$status = "reject";
	$id = $_POST['id'];
	$query = "update apply_leave set status = '$status' where a_id = '$id'";

	$result = mysqli_query($con,$query);
	if ($result) {
		// code...
		header('location:emprepleave.php');

	} else {
		// code...
		echo "something went wrong!!!";
	}
	
}











?>