<?php
include("connection.php");
$post=$_POST['post'];
$con=$_POST['content'];
$img=$_POST['image'];
$cat=$_POST['categories'];
$q="INSERT INTO post(posttitle,content,image,categories) VALUES('$post','$con','$img','$cat')";
$res=mysqli_query($conn,$q);
header('location:addpost.php');
?>