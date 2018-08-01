<?php
include("connection.php");
$id=$_GET["id"];
$q="DELETE from signup where id='$id'";
$res=mysqli_query($conn,$q);
header('location:allsignup.php');

?>