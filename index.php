<!DOCTYPE html>
<html lang="en">
<head>
  <title>My CV Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  	.center{
  		text-align: center;
  	}
  	a,.container{
  		color: white;
  	}
  	.form-control,.btn{
  		border-radius: 10px;
  	}
  	body{
     background: #007bff;
     background: linear-gradient(to right, #0062E6, #33AEFF);
   }
    
  </style>
</head>
<body>
<?php session_start(); include('include/menu.php'); ?>
  <div class="container">	
  		<h2 align="center">Find Your Suitable Job Here</h2>
  		<form action="job_search.php" method="post">
  			<div class="row">	
  				<div class="col-md-5">
		  <div class="form-group">
		    <label for="email"><h4>What</h4><small>Job Skill or Company</small></label>
		    <input type="text" class="form-control" id="email" name="skill">
		  </div>
		  	</div>
		  	<div class="col-md-5">
		  <div class="form-group">
		    <label for="email"><h4>Where</h4><small>city,state or pincode</small></label>
		    <input type="text" class="form-control" id="pwd" name="place">
		  </div>
		  	</div>
		  	<div class="col-md-2"><br><br><br>
		  <input type="submit" class="btn btn-primary" name="submit" value="Find Jobs">
		  </div>
		  </div>
		</form>
		
  </div>
</body>
</html>