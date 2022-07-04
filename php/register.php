<?php

require 'config.php';

if(isset($_POST['btnsubmit'])){
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['mail'];
	$contactNo = $_POST['mobile'];
	$address = $_POST['address'];
	$DOB = $_POST['DOB'];

	//insert form data
	$sql = "INSERT INTO customer(CID,fname,lname,gender,mail,mobile,address,DOB) VALUES ('','$firstname','$lastname','$gender','$email','$contactNo','$address','$DOB')";

	if($con->query($sql)){
		echo "<script>alert('Sucessfully Registered!');</script>";
	}
	else{
		echo "Error :".$con->error;
	}

	$con->close();
	}

?>