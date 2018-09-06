<?php
	if (!isset($_GET['Pid'])||$_GET['Pid']==NULL){
	echo "<script>window.location ='404.php';</script>";
	}else{$id = preg_replace('/[^-a-zA-Z0-9_]/','',$id = $_GET['Pid']);
	}
$sql=mysqli_query($conn,"select * from noticebyusertype where id='$id'");
$res=mysqli_fetch_assoc($sql);
?>
<head>
  <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
</head>
 <button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script> 
<!--<button class="noprint" id="printPageButton" onclick="window.print();">
	<i class="glyphicon glyphicon-print"></i>
										Print
			</button>-->
<div class="bodyx">
<div id="basic-accordian" >
    <div id="test-header" class="accordion_headings header_highlight"><?php echo $res['noticeSubject'];?></div>
    <div id="test-content">
      <div class="accordion_child">
<p><?php echo $res['noticeDetails'];?></p>
</div>
    </div>
</div>
  <div id="footer">
    <p>Published on : <?php echo $res['date'];?></p>
  </div>
</div>