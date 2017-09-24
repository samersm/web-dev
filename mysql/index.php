<?php include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .navbar-brand {
    	font-size:1.8em;
    }
    #topContainer {
    	background-image:url("images/background.jpg");
    	height:400px;
    	width:100%;
    	background-size:cover;
    }
    #topRow {
    	margin-top:100px;
    	text-align:center;
    	font-size:;
    }
     #topRow h1 {
    	font-size:300%;
    }
    .bold {
    	font-weight:bold;
    }
    .marginTop {
    	margin-top:30px;
    }
    .center {
    	text-align:center;
    }
    .title {
    	margin-top:100px;
    	font-size:300%;
    }
    #footer {
    	background-color:#B0D1FB;
    	padding-top:50px;
    	width:100%;
    }
    .marginBottom {
    	margin-bottom:30px;
    }
    .appstoreimage {
    	width:200px;
    }


    </style>
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">
  
  	<div class="navbar navbar-inverse navbar-fixed-top">
  				<!-- navbar-default -->
  		<div class="container">
  			<div class="navbar-header">
  				<a href="" class="navbar-brand">Secret Diary</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
  				
  			</div>
  			
  			<div id="navbar" class="collapse navbar-collapse">
  			
  			<form class="navbar-form navbar-right" method="post">
				<div class="form-group">
				<input type="email" placeholder="Email" class="form-control" name="loginemail" value="<?php echo addslashes($_POST['loginemail']); ?>" />
				</div>
				<div class="form-group">
				<input type="password" placeholder="password" class="form-control" name="loginpassword" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
				</div>
				<input type="submit" name="submit" class="btn btn-success" value="Log In">Log In</input>
			</form>
			</div>
			
  		</div>
  	</div>

    <div id="topContainer" class="container contentContainer">
	
	 <div class="row">
  		<div class="col-md-6 col-md-offset-3" id="topRow">
  		<h1 class="marginTop">Secret Diary</h1>
  		<p class="lead">Your own private diary, with you wherever you go.</p>
  		<p class="bold marginTop">Interested? Sign Up Below!</p>
  		<form class="marginTop" method="post">
  			<div class="form-group">
				<label for="email">Email Address</label>
  				<input type="email" name="email" class="form-control" placeholder="your email" value="<? echo addslashes($_POST['email']); ?>" />
  			</div>
  			<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
  		</form>
  		</div>
	<div class="form-group">
				<label for="password">password</label>
  				<input type="password" name="password" class="form-control" placeholder="password" value="<? echo addslashes($_POST['password']); ?>" />
  			</div>
  			<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop" />
  		</form>
  		</div>
  		
	</div>
	
	</div>
	
	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    $(".contentContainer").css("min-height",$(window).height());
    
    </script>
    
  </body>
</html>