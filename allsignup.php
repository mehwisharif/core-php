<?php
include("header.php");
include("connection.php");
$q="SELECT *FROM signup";
$res=mysqli_query($conn,$q);
?>
<div class="table">
<table>
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Retype-Password</th>
		<th>Role</th>
		<th>Action</th>
	</tr>
	<tr>
		<?php while ($row=mysqli_fetch_array($res)) {?>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['password']?></td>
		<td><?php echo $row['retypepassword']?></td>
		<td><?php echo $row['role']?></td>
		<td><a href="editsignup.php?id=<?php echo $row['id']?>">Edit</a></td>
		<td><a href="delsignup.php?id=<?php echo $row['id']?>">Del</a></td>
		<td></td>
	</tr>
<?php }?>
</table>
</div>
<?php
include("footer.php");?>