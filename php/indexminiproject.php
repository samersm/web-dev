<?php
	if ($_POST["submit"]) {
		if (!$_POST['name']) {
			$error=" <br /> Please enter your name";
		}
		if (!$_POST['email']) {
			$error.=" <br /> Please enter your email address";
		}
		if (!$_POST['comment']) {
			$error.=" <br /> Please enter a comment";
		}
			
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { 
    		//echo 'VALID'; 
    		$error.=" <br /> Please enter a valid email address";
		}
		
		if($error) {
		$result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
		} else {
    		//echo 'NOT VALID';
    		if (mail("test11@mohmal.com", "Comment from website!", "Name: ".$_POST['name']."
    		
    		Email: ".$_POST['email']."
    		
    		Comment: ".$_POST['comment'])) {
		$result='<div class="alert alert-success"><strong>Thank You! </strong>i\'ll be in touch.</div>';
		
    		} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    			
    		}
		}
	}
?>

<!doctype html>
<html>
<head>
    <title>Example jQuery</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
   
    <style>
    .emailForm {
    	border:1px solid grey;
    	border-radius:10px;
    	margin-top:20px;
    }
    textarea {
    	height:120px;
    }
    form {
    	padding-bottom:20px;
    }
    
    </style>
</head>

<body>
<div>
	
<!--	<?php
		//to send email via php code.
		
		/*$emailTo="test11@mohmal.com";
		$subject="I hope this work"
		$body="I think you're great";
		$headers="From: me@me.com";
		
		if (mail($emailTo, $subject, $body, $headers)) {
			echo "Mail sent successfully!";
		} else {
			echo "Mail not sent!";
		}*/
		
	?>  -->
	
	<div class="container">
	<div class="row">
	<div class="col-md-6 col-md-offset-3 emailForm">
	<h1>My email form</h1>
	<?php echo $result; ?>
	<p class="lead">Please get in touch - I'll get back to you as soon as I can.</p>
	<form method="post">
		<div class="form-group">
			<label for="name">Your Name:</label>
			<input name="name" type="text" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name']; ?>" />
		</div>
		
		<div class="form-group">
			<label for="email">Your Email:</label>
			<input name="email" type="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
		</div>
		
		<div class="form-group">
			<label for="comment">Your Comment:</label>
			<textarea class="form-control" name="comment"><?php echo $_POST['comment']; ?></textarea>
		</div>
		
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="submit" />
		
	</form>
	</div>
	</div>
	</div>
	<!--<form>
		<label for="name">Name</label>
		<input name="name" type="text" />
		<input type="submit" name="submit" value="submit Your Name" />
	</form>-->
	
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 
	<script>
	</script>
	
</body>
</html>
