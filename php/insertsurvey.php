<?php
	session_start();	
    function redirect($page) {
    header('Location: ' . $page);
    exit;
    }
//	header('location:http://localhost/project wdl+dbms/regp.html');
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'mrs');
    $cid=$_POST['c_id'];
	$q1=$_POST['q1'];	
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
    $reg=" insert into survey(cid,q1,q2,q3,q4,q5) values('$cid','$q1','$q2','$q3','$q4','$q5'); ";
    echo $reg;
    mysqli_query($con,$reg);
//    $result=$con->query($reg);	
    mysqli_commit($con);
    $page="http://localhost/project wdl+dbms/thx.php";
     redirect($page);
?>