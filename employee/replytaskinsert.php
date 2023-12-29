<?php 

include "../admin/dbcon.php";
$id = $_POST['t_id'];
$eid = $_POST['eid'];
$reply = $_POST['reply'];
$data = "insert into taskreply(reply,t_id,reply_by)value('$reply','$id','$eid')";
$result = mysqli_query($con,$data);
if ($result) {
	// code...
	header('location:replytask.php');
} else {
	// code...
	echo "something went wrong";
}








?>