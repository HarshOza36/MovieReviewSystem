function formValid(){
var uid=document.registration.username;	
var password=document.registration.password;
var fname=document.registration.fname;
var lname=document.registration.lname;
var email=document.registration.email;
var ph=document.registration.ph;
    if(userid_validation(uid,5,30)){
		if(passid_validation(password,7,20)){
			if(fname_valid(fname) && lname_valid(lname)){
				if(allLetter(fname) && allLetter1(lname)){
					if(emailverif()){
						if(phval(ph,10)){
                            document.getElementById("p10").innerHTML="Registered Successfully:Press Login Button Below";
                            alert("Registered Successfully:Press Login Button Below");
							return true;
						}
					}
				}
			}
		}
	}
	function userid_validation(uid,mx,my){
		var uid_len=uid.value.length;
		if(uid_len==0||uid_len>my||uid_len<mx){
//			alert("User ID should not be empty or length should be between " +mx+ " to " +my);
            document.getElementById("p1").innerHTML = "User ID should not be empty or length should be between " +mx+ " to " +my;
    			uid.focus();
    			return false;
		}
		return true;
	}
	function allLetter(fname){
		var letters=/^[A-Za-z]+$/;
		if(fname.value.match(letters)){
			return true;
		}else{
//			alert("FirstName must have alphabets only");
             document.getElementById("p3").innerHTML = "FirstName must have alphabets only";
   			fname.focus();
   			return false;
		}
	}
	function allLetter1(lname){
		var letters=/^[A-Za-z]+$/;
		if(lname.value.match(letters)){
			return true;
		}else{
//			alert("LastName must have alphabets only");
             document.getElementById("p4").innerHTML = "LastName must have alphabets only";
   			lname.focus();
   			return false;
		}
	}
	function fname_valid(fname){
		var nl=fname.value.length;
		if(nl==0){
//			alert("FirstName cannot be empty");
             document.getElementById("p3").innerHTML = "FirstName cannot be empty";
   			fname.focus();
   			return false;
		}else{
			return true;
		}	
	}
	function lname_valid(lname){
		var nl1=lname.value.length;
		if(nl1==0){
//			alert("LastName cannot be empty");
             document.getElementById("p4").innerHTML = "LastName cannot be empty";
   			lname.focus();
   			return false;
		}else{
			return true;
		}	
	}
	function passid_validation(password,mx,my){
		var passid_len = password.value.length;
		if (passid_len == 0 ||passid_len >= my || passid_len < mx){
//			alert("Password should not be empty / length be between " +mx+ " to " +my);
             document.getElementById("p2").innerHTML = "Password should not be empty / length be between " +mx+ " to " +my;
			password.focus();
			return false;
		}
		return true;
	}
	function emailverif(){
		var em=email.value.length;
		var el1=/^[A-Za-z0-9]@[A-za-z].[a-z]+$/;
		var el2=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var el=/\S+@\S+\.\S+/;
		if(em!=0 && email.value.match(el)){
			return true;
		}else{
//			alert("Email required in form mymail@some.com/Email cannot be empty");
             document.getElementById("p5").innerHTML = "Email required in form mymail@some.com/Email cannot be empty";
			return false;	
		}
	}
	function phval(ph,mx){
		var phlen=ph.value.length;
		if(phlen==0||phlen>mx||phlen<mx){
//			alert("Phone number should be numbers only MAX-10 digits/Phone number shouldnt be empty");
             document.getElementById("p6").innerHTML = "Phone number should be numbers only MAX-10 digits/Phone number shouldnt be empty";
    			return false;
		}else{
		return true;	
		}
	}
}
