<?php
            $con=mysqli_connect('localhost','root','');
            mysqli_select_db($con,'mrs');
			$cid=$_POST['c_id'];
			$msg=$_POST['msg'];
			$mid=$_POST['mid'];
			$rates=$_POST['rates'];
			$sql="INSERT INTO mrs.cratings(rates,reviews,m_id,c_id) VALUES ('$rates','$msg','$mid','$cid');";
//			$result=$con->query($sql);	
            mysqli_query($con,$sql);
            mysqli_commit($con);
		    mysqli_close($con);
           header("Location: " . $_SERVER["HTTP_REFERER"]);
?>