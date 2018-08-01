<?php
include("connection.php");
$id=$_GET["id"];
$q="SELECT *FROM post where id='$id'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_object($res);
include("header.php");
?>

<div class="content-area">

		<div class="form">
			<div class="heading">
			<h2>Categories</h2></div>

		<form action="updatepost.php" method="post">
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<label>Post title</label>
			<input type="text" name="post" value="<?php echo $row->posttitle ?>">
		</br>
	</br>
			<label>content</label>
			<textarea rows="10" name="content"><?php echo $row->content ?></textarea>
			</br>
		</br>
			<label>Image</label>
			<input type="file" value"browser" name="image" value="<?php echo $row->image ?>" >
		</br>
			</br>
			<label>Categories</label>
			<select name="categories" value="<?php echo $row->categories ?>">
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
			</select>
			<input type="submit" value="submit"></br></br></br></br></br>
			
		</form>
	</div>



<?php
include("footer.php");
?>