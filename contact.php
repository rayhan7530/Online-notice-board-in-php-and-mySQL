<?php 
if(isset($_POST['submitmsg'])){
    $to ="someone@example.com";// this is receiver's Email address
    $from =$_POST['mail'];// this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Form submission::  ".$_POST['subject'];
    $subject2 = "Form submission::  ".$_POST['subject'];
    $message = " Name:  ".$first_name ."\n\n wrote the following::" . "\n\n" . $_POST['msg'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['msg'];

    $headers = "From:" .$from;
    $headers2 = "From:" .$to; 
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<font color='green'>Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</font>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<h2><b>CONTACT US</b></h2>
<form method="post">
	<div class="row pt">
		<div class="col-md-8">
		<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	<div class="pd">
	<div class="row">
		<div class="col-sm-4">Name</div>
		<div class="col-sm-5">
		<input type="name" name="name" class="form-control" placeholder="Name" required maxlength="40"></div>
	</div>

	<div class="row pd">
		<div class="col-sm-4">E-mail</div>
		<div class="col-sm-5">
		<input type="email" name="mail" placeholder="E-mail" required class="form-control" maxlength="40" ></div>
	</div>
	
	<div class="row pd">
		<div class="col-sm-4">Subject</div>
		<div class="col-sm-5">
		<input type="text" name="subject" placeholder="Subject" required class="form-control" maxlength="40" ></div>
	</div>
	
	<div class="row pd">
		<div class="col-sm-4" >Enter Your Message</div>
		<div class="col-sm-5">
	<textarea name="msg"placeholder="Your message" required maxlength="400" ></textarea></div>
	</div>

	<div class="row" style="margin-top:10px;float:right;">
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
		<input type="submit" value="Submit"name="submitmsg" class="btn btn-success"/>

		</div>
	</div>
</div></form>
		</div>
		
		<div class="col-md-4">
		<h2>Contact us</h2>

		NAME::  EXAMPLE<br/>
		CELL::   0000000<br/>
		Email: someone@example.com<br/>
		Website: <a href="#">example</a>
		</div>
	</div>