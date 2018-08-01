<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$repass=$_POST['retypepassword'];
$role=$_POST['role'];
$q="INSERT INTO signup(name,email,password,retypepassword,role) VALUES('$name','$email','$pass','$repass','$role')";
$res=mysqli_query($conn,$q);
header('location:signup.php');
?>