<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

	<title>HDN:LOGIN</title>
<!--   LINKS-->
    <script src='js/script.js' type="text/javascript"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="http://localhost/project wdl+dbms/css/style.css">  
<!--    links-->
</head>
<body>

     <div class="container">  
        <br><h1><p class="text-center">HDN:Moview Review System!</p></h1>
        <hr>  
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <header class="card-header">
	                <h4 class="card-title mt-2">Login</h4>
                   <h4>
                       <?php
                            if(isset($_SESSION["error"])){
                                $error = $_SESSION["error"];
                                echo "<span style='color:red;text-align:center;'>$error</span>";
                            }
                        ?>  
                   </h4>
                    </header> 
                    <div style="padding-top:30px" class="panel-body a" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form  name='registration'  action="http://localhost/project wdl+dbms/php/validation.php" method="POST" class="form-horizontal" >
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  type="text" class="form-control" name="username" placeholder="username">     
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  type="password" class="form-control" name="password" placeholder="password">
                            </div>
                             <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
<!--                                      <a id="btn-login" href="http://localhost/project wdl+dbms/WEBPAGE.html" class="btn btn-success">Login </a>-->
<!--                                           <input type="submit" name="Submit" onclick="http://localhost/project wdl+dbms/WEBPAGE.html"/>-->
                                           <button class=" button button3 " name="Submit">Login</button>
                                    </div>
                            </div>
                            <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style=" color:#fff;border-top: 1px solid white; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                            <a href="http://localhost/project wdl+dbms/regp.php" style="color:yellow">
                                            Sign Up Here
                                            </a>
                                        </div>
                                    </div>
                             </div>    
                        </form>     
                </div>
            </div>
         </div>
    </div>
    
                                    
<!--
<font face="Courier">
<center><h1>LOGIN</h1></center>
</font>
<br>
<form name='registration'  action="http://localhost/project wdl+dbms/php/validation.php" method="POST">
		<label for="username">UserName:</label><br>
		<input type="text" name="username"/><br>
		<label for="password">Password:</label><br>
		<input type="password" name="password"/><br>
		<input type="submit" name="Submit" onclick="http://localhost/project wdl+dbms/WEBPAGE.html"/>
		<center><a href="regp.html">Registration</a></center>
</form>
-->
<!--<center>By Harsh Oza &copy; Rights Reserved.</center>-->

</body>
</html>
<?php
    unset($_SESSION["error"]);
?>
