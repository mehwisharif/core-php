<?php
include("connection.php");
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$mess=$_POST["message"];
$q="UPDATE contact SET name='$name',email='$email',subject='$sub',message='$mess' where id='$id'";
$res=mysqli_query($conn,$q);
header("location:allcontact.php");
?>