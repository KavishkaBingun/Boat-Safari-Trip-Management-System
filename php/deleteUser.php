<?php
include_once("connect.php");




	$Cid=$_GET["Cid"];

	$result = mysqli_query($conn,"DELETE FROM userdetails WHERE Cid=$Cid");

	echo "Deleted Successfully"
			
?>


