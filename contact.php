<?php
include("header.php");
?>
<div class="content-area">
	<a href="allcontact.php">View All</a>
		<div class="form">
			<div class="heading">
			<h2>Contact us</h2></div>

		<form action="savecontact.php" method="post">
			<label>Name</label>
			<input type="text" name="name">
		</br></br>
			
			<label>Email</label>
			<input type="Email" name="email">
		</br></br>
		<label>subject</label>
			<input type="text" name="subject">
		</br></br>
			<label>Message</label>
			<textarea rows="10" name="message"></textarea>
			<input type="submit" value="send"></br></br></br>
		</form>
	</div>

</div>
<?php
include("footer.php");
?>