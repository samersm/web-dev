<?php
	session_start();
	include("connection.php");
	if ($_POST['submit']=="Sign Up") {
		if (!$_POST['email']) $error.="<br />Please enter your email";
			else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="Please enter a Valid Email Address!";
			
			if (!$_POST['password']) $error.="<br />Please enter your password";
				else {
					if (strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
					if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password";
					//you can find more password validation codes in a web.
				}
			if ($error) echo "There were error(s) in your signup details:".$error;
			else {
				$query="SELECT * FROM 'users' WHERE email='".mysqli_real_escape_string($link, $_post['email'])."'";
				$result = mysqli_query($link, $query);
				$results = mysqli_num_rows($result);
				if ($result) echo "That email address is already registered. Do you eant to log in?";
				else {
					$query="INSERT INTO 'users' ('email', 'password') VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
					mysqli_query($link, $query);
					echo "You've been signed up!";
					$_SESSION['id']=mysqli_insert_id($link);
					//print_r($_SESSION);
					//Redirect to logged in page.
					
					}
			}
	
	}
	
	/*if ($_POST['Log On']) {}*/
	if ($_POST['submit']=="Log In") {
		$query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])." LIMIT 1"
		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_array($result);
		//print_r($row);
		if ($row) {
			$_SESSION['id']=$row['id'];
			print_r($_SESSION);
			//Redirect to logged in page.
			} else {
				echo "We could not find a iser with that email and password. Please try again.";
			}
		}
	}

	
?>