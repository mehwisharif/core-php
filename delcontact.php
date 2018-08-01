<?php
include("connection.php");
$id=$_GET["id"];
$q="DELETE from contact where id='$id'";
$res=mysqli_query($conn,$q);
header('location:allcontact.php');

?>