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
	<title>HDN:Movie Reviews</title>

<!-- -----------------------------------------LINKS--------------------------------------------- -->
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/6ddb8061bd.js"></script>

<link rel="stylesheet" type="text/css" href="http://localhost/project wdl+dbms/css/mobile.css">

</head>


<body>
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

<div style="position: absolute; z-index: -1;"><canvas id="canvas" style="width:230vh;height: 1100vh"></canvas></div>





    <div style="position: relative; z-index: 1000">
<!-- ----------------------------------------ME BEFORE YOU --------------------------------------->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 text-white-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">ME BEFORE YOU</h1>
					<p class="lead">After losing her job, Louisa Clark is forced to accept one which requires her to take care of Will Traynor, a recently-paralyzed man. The two of them soon bond with each other. 	<br>
					Release date: 3 June 2016 (India)<br>
					Director: Thea Sharrockbr	<br>
					Box office: 20.83 crores USD <br>
					Story by: Jojo Moyes <br>
					Awards: People's Choice Award for Favorite Dramatic Movie.</p>
				</div>
				
			</div>
			

		</div>
		<div class="col-lg-6 hello">
	    	<div class="hovereffect">
		        <img class="img-responsive" src="http://images6.fanpop.com/image/photos/40000000/Me-Before-You-Movie-Poster-movie-trailers-40097761-464-347.jpg" >
		        <div class="overlay">
		           <h2>Me Before You</h2>
		           <a class="info" href="http://localhost/project wdl+dbms/movie/me_before_you.php">Give Review</a>
		        </div>
	    	</div>
	</div>
		<!-- <div class="col-lg-6 hello">
			<a  href="file:///C:/Users/NRP/Desktop/web/MOVIE%20REVEW%20SYSTEM/me%20before%20you.html"><img src="http://images6.fanpop.com/image/photos/40000000/Me-Before-You-Movie-Poster-movie-trailers-40097761-464-347.jpg">  </a>
		</div> -->
	</div>
</section>
<!-- ---------------------------------------AVENGERS ENDGAME----------------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 text-white-center ">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">AVENGERS ENDGAME</h1>
					<p class="lead">Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.   <br>
					Release date: 26 April 2019 (India) Trending <br>
					Directors: Anthony Russo, Joe Russo <br>
					Box office: $2.772 billion <br>
					Budget: 35.6 crores USD</p>
				</div>
				
			</div>
			

		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/81mIV6aiWUL._SX342_.jpg" >
        <div class="overlay">
           <h2>Avengers Endgame</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/avengers_end_game.php">Give Review</a>
        </div>
    </div>
</div>
		 <!-- <div class="col-lg-6 row justify-content-center " order-2>
			<img src="https://images-na.ssl-images-amazon.com/images/I/81mIV6aiWUL._SX342_.jpg" class="image-fluid">
		</div> --> 
	</div>
</section>

<!-- -----------------------------------------SPIDERMAN ----------------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 text-white-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">SPIDERMAN FAR FROM HOME</h1>
					<p class="lead">Following the events of Avengers: Endgame, Spider-Man must step up to take on new threats in a world that has changed forever. <br>
					Initial release: 28 June 2019 (Japan) <br>
					Director: Jon Watts <br>
					Budget: 16 crores USD <br>
					Film series: Spider-Man: Homecoming <br>
					Box office: $580.1 million</p>
				</div>
				
			</div>
			

		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfarfromhome_lob_crd_04_3.jpg" >
        <div class="overlay">
           <h2>spider Man Far From Home</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/spiderman_far_from_home.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 hello">
			<img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfarfromhome_lob_crd_04_3.jpg" class="image-fluid">
		</div> -->
	</div>
</section>
<!-- -----------------------------------------------Loveyatri--------------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-white-center ">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">LOVEYATRI</h1>
					<p class="lead">Sushrut who runs a garba academy falls in love with a beautiful NRI, Michelle, but her father creates a rift between the two. However, Sushrut is determined to win her back. <br>
					Release date: 5 October 2018 (India) <br>
					Director: Abhiraj Minawala <br>
					Box office: 12 crores INR <br>
					Budget: 27 crores INR</p>

					
				</div>
				
			</div>
		
		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="http://localhost/project wdl+dbms/img/a.jpg" >
        <div class="overlay">
           <h2>Loveyatri</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/loveyatri.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello" order-2>
			<img src="https://c.saavncdn.com/401/Loveyatri-A-Journey-Of-Love-Hindi-2018-20181003-500x500.jpg" class="image-fluid">
		</div> -->
	</div>
</section>
<!-- -------------------------------------------Aashiqui 2---------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-white-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">AASHIQUI 2</h1>
					<p class="lead">Rahul, a singing sensation, falls in love with Aarohi, a woman who sings in a bar. He helps her accomplish her dream of becoming a famous singer, but his own shortcomings jeopardise their future. <br>
					Release date: 26 April 2013 (India) <br>
					Director: Mohit Suri <br>
					Box office: est. ₹175.07 crore <br>
					Music director: Mithoon, Ankit Tiwari, Jeet Ganguly, Raju Singh <br>
					Singers: Arijit Singh, Ankit Tiwari, Palak Muchhal</p>

					
				</div>
				
			</div>
			

		</div>

<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="http://s.wsj.net/public/resources/images/OB-XG087_iaashi_G_20130426070846.jpg" >
        <div class="overlay">
           <h2>Aashiqui 2</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/aashiqui2.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello">
			<img src="http://s.wsj.net/public/resources/images/OB-XG087_iaashi_G_20130426070846.jpg" class="image-fluid">
		</div> -->
	</div>
</section>

<!-- ------------------------------------------------Infinity war------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-white text-center ">
			<div class="row justify-content-center">
				<div id="headingGroup" class=" text-white-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">AVENGERS INFINITY WAR</h1>
					<p class="lead">The Avengers must stop Thanos, a mad Titan, and his army from getting their hands on all the infinity stones. However, the mad Titan is prepared to go to any lengths to carry out his insane plan. <br>
					Release date: 27 April 2018 (India) <br>
					Director: Anthony Russo <br>
					Box office: 204.84 crores USD <br>
					Budget: 31.6 crores USD (2018)</p>

					
				</div>
				
			</div>
			
		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/81GfZasnt9L._SY445_.jpg" >
        <div class="overlay">
           <h2>Infinity War</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/avengers_infinity_war.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello" order-2>
			<img src="https://images-na.ssl-images-amazon.com/images/I/81GfZasnt9L._SY445_.jpg" class="image-fluid">
		</div> -->
	</div>
</section>

<!-- ---------------------------------------------Cars 3----------------------------------- -->

<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">CARS 3</h1>
					<p class="lead">Lighting McQueen, a legendary racer, is overcome by new generation racers. He sets out to prove that he is the best racer in the world with the help of Cruz Ramirez. <br>
					Initial release: 15 June 2017 (Russia) <br>
					Director: Brian Fee <br>
					Box office: 38.39 crores USD <br>
					Budget: 17.5 crores USD <br>
					Story by: Brian Fee, Eyal Podell, Ben Queen, Jonathon E. Stewart</p>

				</div>
				
			</div>
			
		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://kbimages1-a.akamaihd.net/faf48f11-d8d7-47d3-ab71-4cbd170e22b8/353/569/90/False/cars-3-2.jpg" >
        <div class="overlay">
           <h2>Cars 3</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/cars_3.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello">
			<img src="https://kbimages1-a.akamaihd.net/faf48f11-d8d7-47d3-ab71-4cbd170e22b8/353/569/90/False/cars-3-2.jpg" class="image-fluid">
		</div> -->
	</div>
</section>

<!-- ---------------------------------------------Don 2---------------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-center ">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">DON 2</h1>
					<p class="lead">After dominating the Asian underworld, Don sets his eyes on the European souk. Caught between the Berlin underworld and law enforcement, Don now has to escape treachery and betrayal. <br>
					Release date: 23 December 2011 (India) <br>
					Director: Farhan Akhtar <br>
					Box office: est. ₹209 crore <br>
					Film series: Don</p>

					
				</div>
				
			</div>
			

		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/51zHKlnFp7L._SX466_.jpg" >
        <div class="overlay">
           <h2>Don 2</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/don_2.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello" order-2>
			<img src="https://images-na.ssl-images-amazon.com/images/I/51zHKlnFp7L._SX466_.jpg" class="image-fluid">
		</div> -->
	</div>
</section>

<!-- ----------------------------------------------Khamoshiyan--------------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-center order-2">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h2 class="display-3">KHAMOSHIYAN</h2>
					<p class="lead">Kabir, a struggling writer, travels to Kashmir for inspiration and starts staying at a mysterious guest house. He falls in love with Meera, the owner of the guesthouse, who harbours a dark secret. <br>
					Release date: 30 January 2015 (India) <br>
					Director: Karan Dara <br>
					Box office: est. ₹14.02 crore (US$2.0 million) <br>
					Music director: Ankit Tiwari, Jeet Ganguly, Raju Singh</p>

				
				</div>
				
			</div>
			
		</div>
<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/91fV6lA01-L._SY606_.jpg" >
        <div class="overlay">
           <h2>Khamoshiyan</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/khamoshiyan.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello">
			<img src="https://c.saavncdn.com/378/Khamoshiyan-Hindi-2014-500x500.jpg" class="image-fluid">
		</div> -->
	</div>
</section>
<!-- --------------------------------------------------Toystory 4--------------------------- -->
<section class="containe-fluid px-0">
	<div class=" row align-items-center">
		<div class="col-lg-6 col-sm-6 text-center ">
			<div class="row justify-content-center">
				<div id="headingGroup" class="text-white text-center col-10 col-lg-8 d-lg-block mt-5 pt-md-3">
					<h1 class="display-3">TOYSTORY 4</h1>
					<p class="lead">Woody, Buzz Lightyear and the rest of the gang embark on a road trip with Bonnie and a new toy named Forky. The adventurous journey turns into an unexpected reunion as Woody's slight detour leads him to his long-lost friend Bo Peep. As Woody and Bo discuss the old days, they soon start to realize that they're worlds apart when it comes to what they want from life as a toy. <br>
					Release date: 21 June 2019 (India) <br>
					Director: Josh Cooley <br>
					Box office: 105.8 crores USD <br>
					Featured song: You've Got a Friend in Me</p>

				
				</div>
				
			</div>
			
		</div>

<div class="col-lg-6 hello">
    <div class="hovereffect">
        <img class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/I/81o8T-V0daL._SY445_.jpg" >
        <div class="overlay">
           <h2>Toystory 4</h2>
           <a class="info" href="http://localhost/project wdl+dbms/movie/toystory4.php">Give Review</a>
        </div>
    </div>
</div>
		<!-- <div class="col-lg-6 col-sm-6 hello" order-2>
			<img src="https://images-na.ssl-images-amazon.com/images/I/81o8T-V0daL._SY445_.jpg" class="image-fluid">
		</div> -->
	</div>
</section>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://localhost/project wdl+dbms/js/ssscript.js"></script>
</body>
</html>