<?php
//connecting database
$connect = new mysqli("localhost","root","abc123","odp");
//checking connection
if($connect->connect_errno) {
	echo "Failed to connect to database".$connect->connect_error;
}
else
echo "successfully connected to database";
?>