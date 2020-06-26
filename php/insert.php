<?php
	session_start();	
    function redirect($page) {
    header('Location: ' . $page);
    exit;
    }
//	header('location:http://localhost/project wdl+dbms/regp.html');
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'mrs');
	$name=$_POST['username'];
    $r=1;
	$pass=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $dob=$year."-".$month."-".$day;
	$ph=$_POST['ph'];
    $chk=gettype(100);
    $q=0;
	$s=" select * from customer where cid='$name' "; 
    $msg="Registered Successfully:Press Login Button Below";
    $msg1="Username Already Taken!";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
	if($num==1){
        sleep(1);
        $_SESSION["msg1"] = $msg1;
        isset($_SESSION["msg1"]);
        $page="http://localhost/project wdl+dbms/regp.php";
        redirect($page);   
    }else {
		$reg="insert into customer(cid,password,email,f_name,l_name,dob) values('$name','$pass','$email','$fname','$lname','$dob'); ";	
         $reg2="insert into mrs.ph_no(cid,phone_no) values ('$name','$ph') ";
         mysqli_query($con,$reg);
        mysqli_query($con,$reg2);
        if(mysqli_error($con)){
            sleep(10);
            $r=0;    
        }
		mysqli_commit($con);
		mysqli_close($con);
        $_SESSION["msg"] = $msg;
        isset($_SESSION["msg"]);
        sleep(10);
        $page="http://localhost/project wdl+dbms/regp.php";
        redirect($page);
    }
    if($r==0){
       sleep(7);
       $page="http://localhost/project wdl+dbms/regp.php";
        redirect($page); 
    }
?>