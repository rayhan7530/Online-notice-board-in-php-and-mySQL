<?php
extract($_POST);
if(isset($save))
{
$np=md5($np);
$cp=md5($cp);
$op=md5($op);

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";
	}
	else
	{
$sql=mysqli_query($conn,"select * from user where id='$uid'");
$r=mysqli_num_rows($sql);
if($r==true)
{
while($row=mysqli_fetch_assoc($sql))
{
$oldpass=$row['pass'];
}
if($op!=$oldpass)
	{$err="<font color='red'>Old  password not matched. </font>";}

	else if($np==$cp)
	{

	$sql=mysqli_query($conn,"UPDATE user SET pass='$np' WHERE id='$uid'");

	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<h2>UPDATE PASSWORD</h2>
<form method="post">

	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>



	<div class="row">
		<div class="col-sm-4">Old Password</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4">New Password</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>

	<div class="row">
		<div class="col-sm-4">Confirm Password</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">


		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>
