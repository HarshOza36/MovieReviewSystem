<?php
session_start();
if($_SESSION['status']!="Active")
{
    header("location:http://localhost/project wdl+dbms/index.php");
}
$_SESSION['norow']="No Comments given yet!";
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'mrs');
$query="Select reviews,rates from mrs.cratings where m_id in(Select mid from mrs.movie where movie_name='SpiderMan Far From Home');";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<head>
	<title>SPIDERMAN FAR FROM HOME</title>
<style>
	textarea{
		width:400px;height:80px;background-color:#fff;resize:none;	
	}
</style>
<!-- ---------------------------------------------------LINKS----------------------------------- -->
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/6ddb8061bd.js"></script>

<link rel="stylesheet" type="text/css" href="http://localhost/project wdl+dbms/css/mobile.css">

</head>


<body>
<!-- -----------------------------------------------------NAV BAR------------------------------------------ -->
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
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/me_before_you.php">Me Before You</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/avengers_end_game.php">Avengers EndGame</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/spiderman_far_from_home.php">SpiderMan Far From Home</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/loveyatri.php">Loveyatri</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/aashiqui2.php">Aashiqui 2</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/avengers_infinity_war.php">Avengers Infinity War</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/cars_3.php">Cars 3</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/don_2.php">Don 2</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/khamoshiyan.php">Khamoshiyan</a>
          <a class="dropdown-item" href="http://localhost/project wdl+dbms/movie/toystory4.php">Toy Story 4</a>
          
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
<div style="position: absolute; z-index: -1;"><canvas id="canvas" style="width:220vh;height: 270vh"></canvas></div>





    <div style="position: relative; z-index: 1000">

<!-- ------------------------------------------------------SPIDERMAN FAR FROM HOME RIGHT SIDE-------------------- -->


<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h2 class="display-2">SPIDERMAN FAR FROM HOME</h2>
					<p class="lead">Peter Parker's relaxing European vacation takes an unexpected turn when Nick Fury shows up in his hotel room to recruit him for a mission. The world is in danger as four massive elemental creatures -- each representing Earth, air, water and fire -- emerge from a hole torn in the universe. Parker soon finds himself donning the Spider-Man suit to help Fury and fellow superhero Mysterio stop the evil entities from wreaking havoc across the continent. <br>
					Initial release: 26 June 2019 (USA) <br>
					Director: Jon Watts <br>
					Box office: 112.9 crores USD <br>
					Budget: 16 crores USD (2019) <br>
					Film series: Spider-Man: Homecoming</p>

					IMDB REVIEWS:
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star "></span>
				</div>
				
			</div>
			
<!-- -------------------------------------------------------LEFT SIDE ------------------------------- -->
		</div>
		<div class="col-lg-6 col-sm-6 hello">
			<img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfarfromhome_lob_crd_04_0.jpg" class="image-fluid">
		</div>
	</div>
</section>

<!-- ------------------------------------------------COMMENTS-------------------------------- -->
<section class="containe-fluid px-0">
    <div class="row">
        <div class="col-sm">
            <div class=" row ">
                <div class="col-lg-6 col-sm-6  ">
                    <div class="row ">
                        <div id="headingGroup" class="text-white text-center ">
                            <div class="detailBox">
                                <div class="titleBox">
                                  <label>Comment Box</label>
                                </div>
                                <div class="commentBox">
                                    <p class="taskDescription"> Ratings and comments on Spiderman Far From Home</p>
                                </div>
                                <div class="actionBox">
                                    <ul class="commentList">         
                                           <?php
                                            if($num==0){
                                                echo $_SESSION['norow'];
                                            }
                                            while($rows=mysqli_fetch_assoc($result)){
                                                print"<li>";
                                                print"<div class='commenterImage'>";
                                                print"<img src='http://placekitten.com/50/50'>";
                                                print"</img>";
                                                print"</div>";
                                                print"<div class='commentText'>";
		     print"<p>";
		      print"<STRONG>";
                                                print" User Rated: ".$rows['rates'];
                                                print"</STRONG>";
                                                print"<br>";
                                                print $rows['reviews'];
                                               print"</p>";
		     print"</div>";	
                                                print"<hr>";		
                                                print"</li>";        
                                            }
                                            ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
                <div class="col-lg-6 col-sm-6 hello video" order 2>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/Nt9L1jCKGnE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
        </div>
    </div>
</section>




<div class="card qw">
  <div class="card-header" style="font-family: 'Roboto Slab', serif;">
    Rate and Give a Comment
  </div>
  <div class="card-body h">
    <h5 class="card-title">All your Ratings will be kept anonymous!</h5>
    <p class="card-text h">
    <?php
        $u=$_SESSION['username'];
        echo"<form method='POST' action='http://localhost/project wdl+dbms/php/comments.php'>
        <input type='hidden' name='mid' value='M004'/>
        <input type='hidden' name='c_id' value='$u'/>
        <div class='form-row'>
        Give Ratings from 1-5: <pre>        </pre><input type='number' min='1' max='5' name='rates' >
        </div><br>
        <div class='form-row'>
        Write Review Here:<pre>           </pre>
        <textarea name='msg'></textarea><br>
        </div>
        <br>
        <center><button class='commentSubmit but1' type='submit'>Comment</button><?center>
        </form>"                        
     ?>
    </p>
  </div>
        </div></div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    	$(function () {
    		$(document).scroll(function(){
    			var $nav = $("#mainNavbar");
    			$nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    		});
    	});
    </script>

<script src="http://localhost/project wdl+dbms/js/ssscript.js"></script>


</body>
</html>