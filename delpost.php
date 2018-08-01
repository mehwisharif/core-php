<?php
include("connection.php");
$id=$_GET["id"];
$q="DELETE from post where id='$id'";
$res=mysqli_query($conn,$q);
header('location:allpost.php');

?>