<?php
include("header.php");
include("connection.php");
$q="SELECT *FROM contact";
$res=mysqli_query($conn,$q);
?>
<div class="table">
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
	<tr>
		<?php while ($row=mysqli_fetch_array($res)) {?>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['email']?></td>
		<td><?php echo $row['subject']?></td>
		<td><?php echo $row['message']?></td>
		<td><a href="editcontact.php?id=<?php echo $row['id']?>">Edit</a></td>
		<td><a href="delcontact.php?id=<?php echo $row['id']?>">Del</a></td>
		<td></td>
	</tr>
<?php }?>
</table>
</div>
<?php
include("footer.php");?>