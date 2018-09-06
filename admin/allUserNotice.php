<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $sub=="" || $user=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		
mysqli_query($conn,"insert into noticebyusertype values('','$sub','$details',now(),'$user')");
		}
		
		$err="<font color='green'>Notice added Successfully</font>";	
	}

?>
<h2>Add New Notice</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control" required /></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter Details of the notice </div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control" required ></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Select User</div>
		<div class="col-sm-5">
		<!--<select name="user[]" multiple="multiple" class="form-control">
			<?php 
	$sql=mysqli_query($conn,"select name,email from user");
	while($r=mysqli_fetch_array($sql))
	{
		echo "<option value='".$r['email']."'>".$r['name']."</option>";
	}
			?>
		</select>-->
		<select type="text" name="user" class="form-control fdc" required />
					<option value=" ">--- Select a user type---</option>
					<option value="0">ALL USER / GENERAL NOTICE (Level-0)</option>
					  <option value="1">STUDENT (Level-1)</option>
					  <option value="2">STAFF (Level-2)</option>
					  <option value="3">FACULTY (Level-3)</option>
					  <option value="4">ADMIN (Level-4)</option>
					</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	

<div style="text-align:center;color:red;font-size:20px;padding-top:5%">
N.B: A USER can access all notices which level is equal or less than it's level.
</div>