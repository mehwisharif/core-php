<?php
include("connection.php");
$id=$_POST["id"];
$cat=$_POST["categories"];
$q="UPDATE category SET categories='$cat' where id='$id'";
$res=mysqli_query($conn,$q);
header("location:allcat.php");
?>