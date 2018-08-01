<?php
include("connection.php");
$user=$_POST['username'];
$pass=$_POST['password'];
$q="INSERT INTO signin(username,password) VALUES('$user','$pass')";
$res=mysqli_query($conn,$q);
header('location:signin.php');
?>