<?php
include("connection.php");
$cat=$_POST['categories'];
$q="INSERT INTO category(categories) VALUES('$cat')";
$res=mysqli_query($conn,$q);
header('location:categories.php');
?>