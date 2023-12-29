<?php 

//mysqli_connect("hostname","username","password","databasename");


$con = mysqli_connect('localhost','root','','ems');
if ($con){
	echo "";
}
else{
	echo "no connect";
}

?>