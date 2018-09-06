<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."' ORDER BY notice_id DESC");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any personal notice for You !!!</h2>";
}
else
{
?>
<h2>Personal Notification (Selected for you)</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<!--<th>Details</th>-->
		<th>Date</th>
		</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
?><td><a href="index.php?page=limonV2&&PidX=<?php echo $row['notice_id'];?>">
<?php
echo $row['subject'];?></a></td><?php
//echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>

</table>
<?php }?>
<!-- all notification by category-->

<?php 
$q=mysqli_query($conn,"select * from noticebyusertype where userAccess<='$utyp' ORDER BY id DESC");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any user type notice for You !!!</h2>";
}
else
{
?>
<h2>All Notification (Selected by your position)</h2>

<table class="table table-bordered">
	<Tr class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<!--<th>Details</th>-->
		<th>Date</th>
		</Tr>
		<?php


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
?><td><a href="index.php?page=limon&&Pid=<?php echo $row['id'];?>">
<?php
echo $row['noticeSubject'];?></a></td><?php
//echo "<td>".$row['noticeDetails']."</td>";
echo "<td>".$row['date']."</td>";

echo "</Tr>";
$i++;
}
		?>

</table>
<?php }?>

