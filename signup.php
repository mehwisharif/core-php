<?php
include("header.php");
?>
	<div class="content-area">
		<div class="form">
			<div class="heading">
			<h2>Sign Up</h2></div>

		<form action="savesignup.php" method="post">
			<label>Name</label>
			<input type="text" name="name">
		</br></br>
		<label>Email</label>
			<input type="Email" name="email">
		</br></br>
			<label>Password</label>
			<input type="Password" name="password">
		</br></br>
			<label>Re-type Password</label>
			<input type="Password" name="retypepassword">
		</br></br>
			<label>Role</label>
			<select name="role">
				<option value="1">Author</option>
				<option value="2">User</option>
				
			</select>
			<input type="submit" value="submit"></br></br></br></br></br>
		</form>
	</div>
</div>
<?php
include("footer.php");
?>