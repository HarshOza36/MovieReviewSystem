
<html>
<head>
	<title>Movie Review System</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="http://localhost/project wdl+dbms/css/style.css">
</head>
<body onload="document.registration.username.focus();">
<script src='http://localhost/project wdl+dbms/js/script.js' type="text/javascript"></script>
<!--<body>       -->
    <div class="container">
        <br><h1><p class="text-center">HDN:Moview Review System!</p></h1>
         <br>
        <hr>
        <center><p>
        <?php
            session_start();
            if(isset($_SESSION["msg1"])){
                $msg1 = $_SESSION["msg1"];
                echo "<span style='color:red;text-align:center;'>$msg1</span>";
                $msg1="";                
            }
            if(isset($_SESSION["msg"])){
                $msg = $_SESSION["msg"];
                echo "<span style='color:yellow;text-align:center;'>$msg</span>";
                $msg="";
            }
            session_destroy();
         ?>
        </p></center>
        <center><strong class="form-text" style="color:yellow;">All fields are compulsory.</strong></center>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header ">
                    <a href="http://localhost/project wdl+dbms/index.php" class="float-right btn btn-outline-primary mt-1 ">Log in</a>
	                <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    <article class="card-body a">
<!--                       <form name='registration' onSubmit="return formValid();" action="http://localhost/project wdl+dbms/php/insert.php" method="POST" >-->
                       <form name='registration' action="http://localhost/project wdl+dbms/php/insert.php" method="POST" >
                            <div class="form-row ">
                                    <div class="col form-group">
                                        <label for="username">UserName:</label>
                                        <input type="text" name="username" placeholder="Length : 5-30"/>
                                        <p id="p1" style="color:red"> 
                                   </p> 
                                    </div>
                                    <div class="col form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" name="password" placeholder="Length : 7-20"/> <p id="p2" style="color:red"></p>
                                    </div>
                           </div>
                           <div class="form-row">
                                    <div class="col form-group">
                                          <label for="fname">First Name:</label> <p id="p3" style="color:red"></p>
                                          <input type="text" name="fname"/>
                                    </div>
                                    <div class="col form-group">
                                         <label for="lname">Last Name:</label> <p id="p4" style="color:red"></p>
                                         <input type="text" name="lname"/>
                                    </div>
                           </div>
                           <div class="form-group">
                                    <label for="email">Email ID:</label>
                                    <input type="text" name="email" placeholder="somemail@web.com"/>
                                    <small class="form-text" style="color:white;">We'll never share your email with anyone else.</small> <p id="p5" style="color:red"></p>
                                    <p class="form-text"><label for="">Enter Birthdate:</label></p>
	                       </div> 
                          <div class="form-row">
                                    <div class="col form-group">
                                        <label for="day">Day:</label>
                                        <input type="number" min=1 max=31 name="day"/>
                                    </div>
                                    <div class="col form-group">
                                        <label for="month">Month:</label>
                                        <input type="number" min=1 max=12 name="month"/>
                                    </div>
                                    <div class="col form-group">
                                        <label for="year">Year:</label>
                                        <input type="number" min=1930 max=2025 name="year"/>
                                    </div>
                           </div>
                           <div class="form-group">
                                    <label for="ph">Phone Number</label> <p id="p6" style="color:red"></p>
                                    <input type="text" name="ph"/>
                                    
	                       </div> 
                           <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block button button3" onclick="formValid();">Sign Up</button>
                           </div>      
                           <small class="form-text" style="color:white;">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms,Conditions and Privacy Policy.</small>    
                        </form>
                    </article>                          
                </div>
            </div>
        </div>
    </div>
<!--    <center>By Harsh Oza &copy; Rights Reserved.</center>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
