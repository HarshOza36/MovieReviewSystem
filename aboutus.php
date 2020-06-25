<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:http://localhost/project wdl+dbms/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" href="s.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim&display=swap" rel="stylesheet"> 
    <style>
    input#go {
    background-color: #4c9ed9;
    color: #ffffff;
    padding: 5px 10px;
  border:1px solid #111;
}
input#go:hover {
    background-color: #ffffff;
    color: #4c9ed9;
    border:1px solid #111;
}

button {
  position: relative;
  display:block;
  height: 30px;
  width: 100px;
  
  font-weight: 700;
  font-size: 15px;
  letter-spacing: 2px;
  color: white;
  border: 2px solid white;
  border-radius: 4px;
  text-transform: uppercase;
  outline: 0;
  overflow:hidden;
  background: none;
  z-index: 1;
  cursor: pointer;
  transition:         0.08s ease-in;
  -o-transition:      0.08s ease-in;
  -ms-transition:     0.08s ease-in;
  -moz-transition:    0.08s ease-in;
  -webkit-transition: 0.08s ease-in;
}

.fill:hover {
  color: red;
}

.fill:before {
  content: "";
  position: absolute;
  background: white;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  -webkit-transition: top 0.09s ease-in;
}

.fill:hover:before {
  top: 0;
}

h3 {
 
  font-family: 'Megrim', cursive;
  color:azure;
  
}


    </style>
</head>
<body style="background-image: url('https://images.unsplash.com/photo-1534796636912-3b95b3ab5986?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80');">
   <!-- -----------------------------------------------NAVBAR--------------------------------------- -->
<nav id="mainNavbar" class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#"><img class="1a" id="1a" src="http://localhost/project wdl+dbms/img/7.png" ></a>
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarLinks"  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/project wdl+dbms/WEBPAGE.php">Home </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Information
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/aboutus.php">About Us</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/survey.php" target="_blank">Review US!</a>
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MOVIES
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/me_before_you.php" target="_blank">Me Before You</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/avengers_end_game.php" target="_blank">Avengers EndGame</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/spiderman_far_from_home.php" target="_blank">SpiderMan Far From Home</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/loveyatri.php" target="_blank">Loveyatri</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/aashiqui2.php" target="_blank">Aashiqui 2</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/avengers_infinity_war.php" target="_blank">Avengers Infinity War</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/cars_3.php" target="_blank">Cars 3</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/don_2.php" target="_blank">Don 2</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/khamoshiyan.php" target="_blank">Khamoshiyan</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/toystory4.php" target="_blank">Toy Story 4</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DOWNLOADS</a>
      </li>
         <li class="nav-item">
<!--        <a class="nav-link" href="http://localhost/project wdl+dbms/php/logout.php"><font color="red">LOGOUT</font></a>-->
     <a class="nav-link" href="http://localhost/project wdl+dbms/php/logout.php"><font color="red"><button class="fill">LOGOUT</button></font></a>
      </li>	
      </ul>
  </div>
</nav>

   <br><br>
    <div class="dynamicDiv" id="dd.0.1"><div class="container mt-lg-6 mt-5">
  <div class="row">
    <div class="col-lg-10 col-xl-7 mx-auto jumbotron text-center">
      <h1>About us</h1>
      <p class="lead">HDN Movie Review System was made as a college project.This website's mission is to give latest movie information with big free environment.</p>
    </div>
  </div>
</div>
<div class="dynamicDiv" id="dd.0.2" style="color: white;"><div class="dynamicDiv" id="dd.0.2.0"><div class="container mt-lg-6 mt-5">
  <div class="row">
 
  </div>
  <div class="row mt-lg-4">
    <div class="col-md-10 col-lg-4 mt-lg-0 mt-5 mx-auto text-lg-left text-center">
      <img class="img-fluid" alt="Nehal Panara" src="http://localhost/project wdl+dbms/img/nehal.jpg" style="width: 300px;height=300;">
      <h3 class="mt-lg-3 mt-5"><strong>Nehal Panara</strong></h3>
      <p class="lead text-uppercase">Front End Designer</p>
      <p> </p>
      <div class="mt-4">
        <a href="#" target="_blank">
          <i class="fa fa-twitter text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-linkedin text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-github text-nobel fa-2x"></i>
        </a>
      </div>
    </div>
    <div class="col-md-10 col-lg-4 mt-lg-0 mt-5 mx-auto text-lg-left text-center">
      <img class="img-fluid" alt="Harsh Oza" src="http://localhost/project wdl+dbms/img/harshOza.jpg" style="width: 300px;height=300;">
      <h3 class="mt-lg-3 mt-5"><strong>Harsh Oza</strong></h3>
      <p class="lead text-uppercase">Back End Developer</p>
      <p></p>
      <div class="mt-4">
        <a href="#" target="_blank">
          <i class="fa fa-twitter text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-linkedin text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-github text-nobel fa-2x"></i>
        </a>
      </div>
    </div>
    <div class="col-md-10 col-lg-4 mt-lg-0 mt-5 mx-auto text-lg-left text-center">
      <img class="img-fluid" alt="Dharmi Hemani" src="http://localhost/project wdl+dbms/img/dharmi.jpg" style="margin-top: 30px;">
      <h3 class="mt-lg-3 mt-5"><strong>Dharmi Hemani</strong></h3>
      <p class="lead text-uppercase">Front End Developer</p>
      <p></p>
    <div class="mt-4">
        <a href="#" target="_blank">
          <i class="fa fa-twitter text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-linkedin text-nobel fa-2x mr-2"></i>
        </a>
        <a href="#" target="_blank">
          <i class="fa fa-github text-nobel fa-2x"></i>
        </a>
      </div>
    </div>
  </div>
</div></div>
    </div>
    </div>
    <div class="dynamicDiv" id="dd.0.2.1">
        <div class="mt-md-6 mt-5"> 
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body></html>