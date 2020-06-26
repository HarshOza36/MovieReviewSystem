<?php
//	function phpAlert($msg) {
//    		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
//	}
	session_start();	
    $error="Username /Password Invalid";
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'mrs');
	$name=$_POST['username'];	
	$pass=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$s=" select * from customer where cid='$name' && password='$pass' "; 
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num==1){
		$_SESSION['username'] = $name;
        $_SESSION['status']="Active";
		header('location:http://localhost/project wdl+dbms/wlcm.php');
//	}else{	phpAlert("Username or Password is Wrong");
    }else{  $_SESSION["error"] = $error;
        	header('location:http://localhost/project wdl+dbms/index.php');
		
	}
	
?>