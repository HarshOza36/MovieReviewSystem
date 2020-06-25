<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:http://localhost/project wdl+dbms/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank you</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/c3/NGC_4414_%28NASA-med%29.jpg');">
	<br><br><br><br>
	<div class="jumbotron text-center">
		  <h1 class="display-3">Thank You!</h1>
		  <p class="lead"><strong>Survey Successful.</strong>All your reviews highly value us!</p>
		  <hr>
		  <p>
              Press The Button Below to go back to the Home Page<br><br><i class="fas fa-arrow-circle-down  fa-3x"></i>
		  </p>
		  <p class="lead">
		    <a class="btn btn-primary btn-sm" href="http://localhost/project wdl+dbms/WEBPAGE.php" role="button">Continue to homepage</a>
		  </p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>