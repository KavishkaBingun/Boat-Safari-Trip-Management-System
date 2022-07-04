function loadData(data){
	if(data=="btn1"){
		document.getElementById("packageImg").src = "images/weekend.jpg";
		document.getElementById("para").innerHTML="Come and enjoy with Pearl Boat Safari";
		
	}
	else if(data=="btn2"){
		document.getElementById("packageImg").src = "images/kids.png";
		document.getElementById("para").innerHTML ="Book your child's special event with us and you will be amazed by the memories you will make!";
	}
	else if(data=="btn3"){
		document.getElementById("packageImg").src = "images/family.png";
		document.getElementById("para").innerHTML = "We offer a special package designed for family. This economical package includes foods, accommodations many more things";
	}
	else if(data=="btn4"){
		document.getElementById("packageImg").src = "images/couple.png";
		document.getElementById("para").innerHTML ="Book your honeymoon in our hotels and get a boat trip free";
	}
	else if(data=="btn5"){
		document.getElementById("packageImg").src = "images/holiday.png";
		document.getElementById("para").innerHTML ="We give 25% of discount for boat safaris in holidays";
	}
}