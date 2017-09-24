<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
		html, body {
			height:100%;
		}
        #topContainer {
    	background-image:url("images/7bf17d33.jpeg");
    	height:100%;
    	width:100%;
    	background-size:cover;
    	background-position:center;
    }
    	#topRow {
    	margin-top:100px;
    	text-align:center;
    	font-size:;
    }
    	#topRow h1 {
    	font-size:300%;
    }
  		.marginTop {
    	margin-top:30px;
    }
        .center {
    	text-align:center;
    }
        .bold {
    	font-weight:bold;
    }
    p {
    	padding-top:7px;
    	padding-bottom:7px;
    }
    .alert {
    display:none;
    }

    </style>
 </head>
<body data-spy="scroll" data-target=".navbar-collapse">
    <div id="topContainer" class="container contentContainer">
	 <div class="row">
  		<div class="col-md-6 col-md-offset-3" id="topRow">
  		<h1 class="marginTop">Weather Predictor</h1>
  		<p class="lead bold">Enter your city below to get a forecast for the weather.</p>
  		<form class="marginTop">
  			<div class="form-group">
  			<input name="city" id="city" type="text" class="form-control" placeholder="Eg. France, London" />
  			</div>
  			<button id="findMyWeather" class="btn btn-success btn-lg marginTop">Find My Weather</button>
  		</form>
  		
  		<div id="success" class="alert alert-success marginTop">Success!</div>
  		<div id="fail" class="alert alert-danger marginTop">Could not find the weather data for that city. please try again.</div>
  		</div>
  		<div id="noCity" class="alert alert-danger marginTop">Please enter a city!</div>
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
    
    <script>
    $("#findMyWeather").click(function(event) {
    	//alert('clicked');
    	event.preventDefault();
    		$(".alert").hide();
    	if ($("#city").val()!="") {
    	$.get("scraper.php?city="+$("#city").val(), function( data ) {
    		//alert(data);
    		//$("#success").html(data).fadeIn();
    		if (data=="") {
    			//$("#success").hide();
    			$("#fail").fadeIn();
    		} else {
    		//$("#fail").hide();
    		$("#success").html(data).fadeIn();
    		}
    	});
    	} else {
    		//alert("please enter a city");
    		$("#noCity").fadeIn();
    	}
    });
    </script>
    
  </body>
</html>
  		