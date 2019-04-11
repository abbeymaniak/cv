<?php
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$visitor_email =$_POST['email'];
	$subject=$_POST['subject'];
	$msg=$_POST['comment'];
	
	$success =  "Message Sent, Thank you for Contacting us!";
	
	$to='xxxxxxx@gmail.com';	
	$subject="Form Submission"." '$subject'";
	$message="Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
	$headers ="From: $visitor_email\r\n";
    $headers .="Reply-To: $visitor_email\r\n";
	
	if(mail($to, $subject, $message, $headers)){
		
		echo "<html>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'>
		<link rel='stylesheet' href='style.css'>
		<div class='jumbotron text-xs-center'>
			<h1 class='display-3'>Thank You!</h1>
			<p class='lead'><strong><h1>Sent Successfully! Thank you"." ".$name.", We will Contact you shortly! </h1>.</p>
			<hr>
			
			<p class='lead'>
			  <a class='btn btn-primary btn-sm' href='index.php' role='button' style='color: black; background-color: #c59a37; border: 1px solid black;'>Continue to homepage</a>
			</p>
			</div>
		
		
		
		</html>";
		
		
		
							
	}
	else{
		
		echo  "<html>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css'>
		<link rel='stylesheet' href='style.css'>
		<div class='jumbotron text-xs-center'>
			<h1 class='display-3'>OOPS!!!!</h1>
			<p class='lead'><strong><h1>Message Not sent"." ".$name.", Please Try again shortly! </h1>.</p>
			<hr>
			
			<p class='lead'>
			  <a class='btn btn-primary btn-sm' href='index.php' role='button' style='color: black; background-color: #c59a37; border: 1px solid black;'>Continue to homepage</a>
			</p>
			</div>
		
		
		
		</html>";
		exit;
		
			}
	
	
}

?>