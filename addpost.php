<?php
include("header.php");
?>
<div class="content-area">
		<div class="form">
			<a href="allpost.php">View All</a>
			<div class="heading">
			<h2>Add New Post</h2></div>

		<form action="savepost.php" method="post">
			<label>Post title</label>
			<input type="text" name="post">
		</br>
	</br>
			<label>content</label>
			<textarea rows="10" name="content"></textarea>
			</br>
		</br>
			<label>Image</label>
			<input type="file" value"browser" name="image" >
		</br>
			</br>
			<label>Categories</label>
			<select name="categories">
				<option value="1">A</option>
				<option value="2">B</option>
				<option value="3">C</option>
			</select>
			<input type="submit" value="submit"></br></br></br></br></br>
		</form>
	</div>
	</div>
<?php
include("footer.php");
?>