<?php 
include('../connection.php');

if($_GET['id']){$nid=$_GET['id'];
$q=mysqli_query($conn,"delete from notice where notice_id='$nid'");
header('location:index.php?page=notification');}
else if($_GET['id2'])
{
$nid2=$_GET['id2'];
$q=mysqli_query($conn,"delete from noticebyusertype where id='$nid2'");
header('location:index.php?page=notification');}


?>