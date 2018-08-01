<?php
include("connection.php");
$id=$_GET["id"];
$q="SELECT *FROM category where id='$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_object($res);
include("header.php");
?>
<div class="form">
			<div class="heading">
			<h2>Categories</h2></div>

		<form action="updatecat.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			
			<label>Categories</label>
			<input type="text" name="categories" value="<?php echo $row->categories?>"> 
			<input type="submit" value="save"></br></br></br>
		</form>
	</div>

</div>


<?php
include("footer.php");
?>