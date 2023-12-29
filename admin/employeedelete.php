
<?php 

include "dbcon.php";
$eid =  $_GET['eid'];
$data = "delete from employee where eid = '$eid'";
$result = mysqli_query($con,$data);
header('location:addemployee.php');









?>