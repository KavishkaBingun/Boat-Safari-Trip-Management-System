<?php
    $yourame = $_POST['yourname'];
    $youremail = $_POSt['youremail'];
    $subject = $_POST['subject'];
    $yourmassage = $_POST['yourmassage'];

    //Database connection
    $conn = new mysql('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else{
		$stmt = $conn->prepare("insert into contactus(yourname,youremail,subject,yourmassage) 
        values(?, ?, ?, ?,)");
		$stmt->bind_param("ssss",$yourame, $youremail, $subject, $yourmassage,);
	    $stmt->execute();
		echo "Your Massage is submitted...";
		$stmt->close();
		$conn->close();
    }
?>