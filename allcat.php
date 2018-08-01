<?php
include("header.php");
include("connection.php");
$q="SELECT *FROM category";
$res=mysqli_query($conn,$q);
?>
<div class="table">
<table>
	<tr>
		<th>id</th>
		<th>Categories</th>
		<th>Action</th>
	</tr>
	<tr>
		<?php while ($row=mysqli_fetch_array($res)) {?>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['categories']?></td>
		<td><a href="editcat.php?id=<?php echo $row['id']?>">Edit</a></td>
		<td><a href="delcat.php?id=<?php echo $row['id']?>">Del</a></td>
		<td></td>
	</tr>
<?php }?>
</table>
</div>
<?php
include("footer.php");?>