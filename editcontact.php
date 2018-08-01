<?php
include("connection.php");
$id=$_GET["id"];
$q="SELECT *FROM contact where id='$id'";
$res=mysqli_query($conn,$q); 
$row=mysqli_fetch_object($res);
include("header.php");
?>
<form action="updatecontact.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id?>">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $row->name?>">
		</br></br>
			
			<label>Email</label>
			<input type="Email" name="email" value="<?php echo $row->email?>">
		</br></br>
		<label>subject</label>
			<input type="text" name="subject" value="<?php echo $row->subject?>">
		</br></br>
			<label>Message</label>
			<textarea rows="10" name="message" value="<?php echo $row->message?>"></textarea>
			<input type="submit" value="send"></br></br></br>
		</form>
	</div>

</div>
<?php
include("footer.php");
?>