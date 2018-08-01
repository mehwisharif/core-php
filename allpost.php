<?php
include("header.php");
include("connection.php");
$q="SELECT *FROM post";
$res=mysqli_query($conn,$q);
?>
<div class="table">
<table>
	<tr>
		<th>id</th>
		<th>Post Title</th>
		<th>Content</th>
		<th>Image</th>
		<th>Categories</th>
		<th>Action</th>
	</tr>
	<tr>
		<?php while ($row=mysqli_fetch_array($res)) {?>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['posttitle']?></td>
		<td><?php echo $row['content']?></td>
		<td><?php echo $row['image']?></td>
		<td><?php echo $row['categories']?></td>
		<td><a href="editpost.php?id=<?php echo $row['id']?>">Edit</a></td>
		<td><a href="delpost.php?id=<?php echo $row['id']?>">Del</a></td>
		<td></td>
	</tr>
<?php }?>
</table>
</div>
<?php
include("footer.php");?>