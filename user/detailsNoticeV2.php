<?php
	if (!isset($_GET['PidX'])||$_GET['PidX']==NULL){
	echo "<script>window.location ='404.php';</script>";
	}else{$idx = preg_replace('/[^-a-zA-Z0-9_]/','',$id = $_GET['PidX']);
	}
$sql=mysqli_query($conn,"select * from notice where notice_id='$idx'");
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
<div class="bodyx">
<div id="basic-accordian" >
    <div id="test-header" class="accordion_headings header_highlight"><?php echo $res['subject'];?></div>
    <div id="test-content">
      <div class="accordion_child">
<p><?php echo $res['Description'];?></p>
</div>
    </div>
</div>
  <div id="footer">
    <p>Published on : <?php echo $res['Date'];?></p>
  </div>
</div>