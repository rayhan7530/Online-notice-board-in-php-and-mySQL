<script>
	function DeleteNotice(id)
	{
		if(confirm("Are you sure to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
	function DeleteNotice2(id)
	{
		if(confirm("Are you sure to delete this record ?"))
		{
		window.location.href="delete_notice.php?id2="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice ORDER BY notice_id DESC");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Notice found !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Notice by user(s)</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['user']."</td>";
echo "<td>".$row['Date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>
<?php 
$q2=mysqli_query($conn,"select * from noticebyusertype ORDER BY id DESC");
$rr2=mysqli_num_rows($q2);
if(!$rr2)
{
echo "<h2 style='color:red'>No any Notice found in this query !!!</h2>";
}
else
{
?>
<h2 style="color:#00FFCC">All Notice by user type</h2>

<table class="table table-bordered">
	<tr>
		<th colspan="7"><a href="index.php?page=allUserNotice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>User type</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q2))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['noticeSubject']."</td>";
echo "<td>".$row['noticeDetails']."</td>";
echo "<td>".$row['userAccess']."</td>";
echo "<td>".$row['date']."</td>";

?>

<Td><a href="javascript:DeleteNotice2('<?php echo $row['id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice2&notice_id=".$row['id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>