function myfunction(data){
	if(data=="btn1"){
		document.getElementById("myImage").src = "images/SingleBed.jpg";
		document.getElementById("para").innerHTML="Choose your Great Accomodations";
		
	}
	else if(data=="btn2"){
		document.getElementById("myImage").src = "images/couple.jpg";
		document.getElementById("para").innerHTML ="Have a Romantic stay";
	}
	else if(data=="btn3"){
		document.getElementById("myImage").src = "images/family.jpg";
		document.getElementById("para").innerHTML = "Have a joyfull stay";
	}
}