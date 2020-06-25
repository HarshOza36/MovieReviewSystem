	function formValid(){
	var dob=document.registration.dob;
	var ph=document.registration.ph;
	var uid=document.registration.username;
	if(userid_validation(uid,5,20)){
		if(dob_valid(dob)){
		
			alert("Submitted Successfully!");
		}
	}					
	function dob_valid(dob){
		var d=dob.value.length;
		var dd1=/^([0-9][0-9][0-9][0-9])(-)([0-1][0-9])(-)([0-2][0-9]|(3)[0-1])$/;
		if(d!=0 && dob.value.match(dd1)){
			return true;
		}else{
			alert("DOB required in form YYYY-MM-DD/DOB cannot be empty");
			return false;	
		}
	}
	function userid_validation(uid,mx,my){
		var uid_len=uid.value.length;
		if(uid_len==0||uid_len>my||uid_len<mx){
			alert("User ID should not be empty or length should be between " +mx+ " to " +my);
    			uid.focus();
    			return false;
		}
		return true;
	}
}
