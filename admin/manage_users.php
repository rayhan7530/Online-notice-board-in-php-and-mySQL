<?php 
$q=mysqli_query($conn,"select * from user ORDER BY id DESC");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
	
	function ApproveUser(id)
	{
		if(confirm("Are you sure to approve this user ?"))
		{
		window.location.href="approve_user.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">All Users</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>User Type</th>
		<th>Action</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['Student_ID']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
echo "<td>".$row['usertyp']."</td>";
$opt=$row['opt'];

if($opt=='0'){?>
<Td>
<a href="javascript:ApproveUser('<?php echo $row['id']; ?>')" style='color:green'><span class='glyphicon glyphicon-ok-circle'></span></a>&nbsp;&nbsp;&nbsp;

<a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a>
</td>
<?php }else{?>

<Td>
<a href="javascript:DeleteUser('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a>
</td>
<?php } 

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>