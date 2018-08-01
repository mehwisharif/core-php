<?php
include("connection.php");
$id=$_GET["id"];
$q="DELETE from category where id='$id'";
$res=mysqli_query($conn,$q);
header('location:allcat.php');

?>