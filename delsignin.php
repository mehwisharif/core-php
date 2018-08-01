<?php
include("connection.php");
$id=$_GET["id"];
$q="DELETE from signin where id='$id'";
$res=mysqli_query($conn,$q);
header('location:allsignin.php');

?>