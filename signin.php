<?php
include("header.php");
?>
<div class="content-area">
		<div class="form">
			<div class="heading">
			<h2>Sign In</h2></div>

		<form action="savesignin.php" method="post">
			<label>Username</label>
			<input type="text" name="username">
		</br></br>
			<label>Password</label>
			<input type="Password" name="password">
		</br></br>
			<input type="submit" value="submit"><br><br><br><br>
		</form>
	</div>
</div>
<?php
include("footer.php");
?>