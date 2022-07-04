//password vaidation
function checkpassword(){
	if(document.getElementById("pwd").value != document.getElementById("confirm").value){
		alert("Password mismatch!!!");
		return false;
	}
	else{
		alert("Successfully registered!");
		return true;
	}
}

//form validation
function valid(){
	////check name
	var f=document.getElementById("fName").value;
	var l=document.getElementById("lName").value;
	
	if(f==""|| l==""){
		alert("Name column is empty");
		return false;
	}
	
	//gender
	var male=document.getElementById("Male").checked;
	var female=document.getElementById("Female").checked;
	
	if(male==false && female==false){
		alert("Gender is not selected.Please select");
		return false;
	}
	
	//contact
	var mobile=document.getElementById("contact").value;
	
	if(mobile.length>11){
		alert("Too much chracters for mobile number!");
		return false;
	}
	if(isNaN(mobile)){
		alert("Contact number must be filled out");
		return false;
	}
}

