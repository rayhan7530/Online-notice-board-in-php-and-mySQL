<?php
	include('../connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{$pass=md5($pass);
		$que=mysqli_query($conn,"select * from user where email='$email' AND pass='$pass' AND usertyp='4' AND opt='1'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['admin']=$email;
				header('location:index.php');
			}
		else
			{
				$err="<font color='red'>ACCESS DENIED !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/metisMenu.min.css" rel="stylesheet">

   <link href="../css/sb-admin-2.css" rel="stylesheet">

    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
		<div style="padding-top:10%;">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
								
								<div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
								
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			</div>
        </div>
    </div>
	<script src="../css/css/jquery.min.js"></script>
	<script src="../css/css/bootstrap.min.js"></script>
	<script src="../css/css/metisMenu.min.js"></script>
	<script src="../css/css/sb-admin-2.js"></script>
</body>
</html>