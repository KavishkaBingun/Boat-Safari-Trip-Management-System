<?php
	include_once 'connect.php';
?>




<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$tpNumber = $_POST["tpNumber"];
	$Dayin =$_POST["Dayin"];
    $Dayout =$_POST["Dayout"];
    $roomtype =$_POST["roomtype"];
    $num =$_POST["num"];
    $room =$_POST["room"];


	
	$sql = "INSERT INTO accomodation(name,email,tpNumber,Dayin,Dayout,roomtype,num,room)values('$name','$email','$tpNumber','$Dayin','$Dayout',' $roomtype','$num',' $room')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR inserting')</script>";
	}
	mysqli_close($conn);
?>

<html>
	<body bgcolor="#00adad">
		<br>
		<br>
		<button onclick="location.href='../accomodation.html'">Back</button>

		<style>
			button{
				background-color: navy;
                color: white;
                padding: 7px;
                outline-style: double;
			}

		</style>