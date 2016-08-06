<?php
include('pass.php');
include('connect.php');
//if data entered is valid
if(isset($_POST['username'])!=null&&isset($_POST['firstname'])!=null&&isset($_POST['lastname'])!=null&&isset($_POST['email'])!=null&&isset($_POST['password'])!=null&&isset($_POST['phoneno'])!=null)
{	
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$phoneno=$_POST['phone'];

if(strpos($username,'<') !== false||strpos($firstname,'<') !== false||strpos($lastname,'<') !== false||strpos($email,'<') !== false||strpos($phoneno,'<') !== false)
{
	header("location: index.php?next=ErrorReg");
}
//writes data into table named 'userinfo'
$sql = "INSERT INTO `userinfo` (firstname,lastname,username,password,email,phone) VALUES ('$firstname','$lastname','$username','$password','$email','$phoneno')";
//if data entry recorded
if ($connect->query($sql) === TRUE) {

echo "Data recorded in database successfully";
header("location: index.php?next=LogIn");
}
//if data entry not recorded
else {
echo "data insertion error";
header("location: index.php?next=ErrorReg");
}
}
?>