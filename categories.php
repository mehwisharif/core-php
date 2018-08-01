<?php
include("header.php");
?>
<div class="content-area">
	<a href="allcat.php">View All</a>
		<div class="form">
			<div class="heading">
			<h2>Categories</h2></div>

		<form action="savecat.php" method="post">
			
			<label>Categories</label>
			<input type="text" name="categories"> 
			<input type="submit" value="save"></br></br></br>
		</form>
	</div>

</div>


<?php
include("footer.php");
?>