<?php
	$servername  =  "localhost";
	$username  =  "root";
	$password = "";
	$db = "project";
	
	//create connction
	$conn  =  new mysqli($servername, $username, $password ,$db );
	
	//check connection
	if($conn-> connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected Succesfully";
?>