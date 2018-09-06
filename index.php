<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/dashboard.css"/>
		<script src="js/jquery_library.js"></script>
<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
			<nav class="navbar navbar-default navbar-fixed-top" style="background:#000">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="index.php"><strong class="cd">Online Notice Board</strong></a></li>


	  <li><a href="index.php?option=about"><span class="glyphicon glyphicon-globe cd"> About</span></a></li>



	<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone-alt cd"> Contact</span></a></li>

	</ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user cd"> Sign Up</span></a></li>
      <li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in cd"> Login</span></a></li>
    </ul>



</div>
</nav>

<div class="container-fluid">
	<!-- slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Noticeboard.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
	<div class="item">
      <img src="images/Noticeboard12.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/notice.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slider end-->
</div>


<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{
			if($opt=="about")
			{
			include('about.php');
			}
			else if($opt=="contact")
			{
			include('contact.php');
			}

			else if($opt=="New_user")
			{
			include('registration.php');
			}
			else if($opt=="login")
			{
			include('login.php');
			}
		}
		else
		{
		echo "<h2><b>'Hello visitor, Welcome to our online notice board.'</b></h2>
		<i> <b> Join with us and stay update with all notices.</b></i>";?>
		
		<div class="vb">
		<a href="index.php?option=New_user"><button class="button"><span class="glyphicon glyphicon-user cd"> Sign Up</span></button></a>
		<a href="index.php?option=login"><button class="button"><span class="glyphicon glyphicon-log-in cd"> Login</span></button></a>
		</div>
		<?php 
		}
		?>
		
</div>
	<!-- container -->

		<div class="col-sm-4">
			<div class="panel panel-default">
  <div class="panel-heading"><b>Some Data</b></div>
  <div class="panel-body">
  <?php 
$q=mysqli_query($conn,"select * from user WHERE opt='1'");
$rr=mysqli_num_rows($q);
?>
Registered user: <?php if(!$rr)
{
echo "<h2 style='color:red'>No any user exists !!!</h2>";
}
else
{
?>
<?php 
$i=1;
while($row=mysqli_fetch_assoc($q))
{$df=$i++;}
?>
<span style="color:red;font-size:20px;">
<?php 
echo $df;
}
?></span> 
<br/><br/>
	Notice count:
	<?php 
$qx=mysqli_query($conn,"select * from noticebyusertype");
?>
<?php 
$ix=1;
while($row=mysqli_fetch_assoc($qx))
{$dfx=$ix++;}
?>
<span style="color:red;font-size:20px;">
<?php 
echo $dfx;

?></span>
  </div>
</div>

		</div>
	</div>

</div>
<br/>
<br/>
<br/>
<br/>
<nav class="navbar navbar-default navbar-bottom" style="background:black">
  <div class="container">

  <ul class="nav navbar-nav navbar-left">
    <li><a href="#"> Develop by Rayhan</a></li>

	</ul>
	<ul class="nav navbar-nav navbar-right">
   
	<li><a href="mailto:limon7530.it@gmail.com"><span class="glyphicon glyphicon-envelope"> Send mail</span></a></li></ul>
</div>
</nav>
</body>
</html>
