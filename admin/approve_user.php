<?php 
include('../connection.php');
$nid=$_GET['id'];
mysqli_query($conn,"update user set opt='1' where id='$nid'");

header('location:index.php?page=manage_users');

?>