<?php
include_once 'connect.php';

if(isset($_POST['update'])){
	$Cid=$_POST['Cid'];

	$query = "UPDATE 'userdetails' SET fname = '$_POST[fname]', dob = '$_POST[dob]' tpnumber= '$_POST[tpnumber]' mail = '$_POST[mail]' add = '$_POST[add]' WHERE Cid='$_POST[Cid]' " ;
	$query_run = mysqli_query($conn,$query);

	if($query_run)
	{
		echo '<script type="text/javascript">alert("Data Updated")</script>';
	}
	else{
		echo '<script type="text/javascript">alert("Data Not Updated")</script>';
	}
}



?>

<html>
	<body bgcolor="#00adad">
		<br>
		<br>
		<button onclick="location.href='../updateUser.html'">Back</button>

		<style>
			button{
				background-color: navy;
                color: white;
                padding: 7px;
                outline-style: double;
			}

		</style>
		</body>

