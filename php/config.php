<?php

//Connection object
$con = new mysqli("localhost","root","","iwt_project");

//Check connection
if($con->connect_error){
	die ("connection Error:").$con->connect_error;
}

?>