<?php
include("connection.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$mess=$_POST['message'];
$q="INSERT INTO contact(name,email,subject,message) VALUES('$name','$email','$sub','$mess')";
$res=mysqli_query($conn,$q);
header('location:contact.php');

?>