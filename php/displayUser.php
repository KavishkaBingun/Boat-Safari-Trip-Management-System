<header>
		<img src="../images/PEARL.png" alt="Website Logo" width="100px" height="100px" class="img-logo">
		
		<img src="../images/user1.jpg" alt="user icon" width="70px" height="70px" align="right" class="img-user">
		
		
		<div class="dropdown">
			<select>
				<option value="login">Login</option>
				<option value="logout">Logout</option>
			</select>
		</div>
		
		<div class="nav-bar">
			<ul>
				<div class="nav-bar-content">
					<li><a href="../home.html">Home</a></li>
					<li><a href="../register.html">Registration</a></li>
					<li><a href="../packages.html">Packages</a></li>
					<li><a href="../book.html">Book</a></li>
					<li><a href="../aboutus.html">More</a></li>
				</div>
			</ul>
		</div>
	</header>

		<br>
		<br>
		<br>
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
		
?>

<html>

<body bgcolor="#00adad">
<table align="left">

    <tr><td><label> </label></td></tr>
    <tr><td><label> </label></td></tr>
    <tr><td><label>  </label></td></tr>
    <tr><td><label> </label></td></tr>
    <tr><td><label> </label></td></tr>
    <tr><td><label> </label></td></tr>
    <tr><td><label> </label></td></tr>
	<br>
	<br>
	
	
	
	

			
<?php
	$sql = "SELECT * from userdetails";
	$result = $conn->query($sql);       //return data query , entire table then save in this result variable
	
	if($result-> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td><label>User ID : ".$row["Cid"].
			"<tr><td><label>Name : ".$row["cName"].

			"<tr><td> <label>Gender : ".$row["cGender"].
			"<tr><td><label>Date of birth :".$row["cDOB"].                               

			"<tr><td><label>contact number :".$row["cTelno"].
            "<tr><td><label>Email : ".$row["cEmail"].
            "<tr><td><label>address : ".$row["cAddress"].
			
			" </label><br><br></td></tr>" ; 
		}
	}
	else{
		echo "zero results";
	}
	
	echo "</table>";
	
	$conn->close();


?>
<br>
<br>
<br>
<br>
<div class="backbtn">
<button  onclick="location.href='../useraccount.html'" >Back</button>
</div>
<style>
button{

	margin-left: 1400px;
    margin-right: 100px;
    text-align: center;
	background-color:navy;
	color:white;
	padding: 10px;
	outline-style:double;
	
	

}
</style>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="../useraccount.html">User Account</a></li>
                                <li><a href="../accommodation.html">Accommodations</a></li>
                                <li><a href="../experiences.html">Experiences</a></li>
                                <li><a href="../payment.html">Payments</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Contact</h4>
                            <ul>
                                <li><a href="../contact.html">Contact Us</a></li>
                                <li><a href="../review.html">Reviews & Rates</a></li>
                                <li><a href="../faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Service Provider</h4>
                            <ul>
                                <li><a href="../seller.html">Seller Page</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook-f"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            <div>
                        </div>
                    </div>
                </div>
            
            </footer>
		<style>
			
.img-logo{
	border-radius:50%;
}
.img-user{
	margin-top:20px;
	margin-right:10px;
}

.dropdown{
	float:right;
	margin-top:68px;
}


.nav-bar-content ul{
	list-style-type:none;
	margin: 10px;;
	padding:0;
	overflow:hidden;
	background-color:#0805ad;
    

}


.nav-bar-content li{
	float:left;
}

.nav-bar-content li a{
	display:block;
	color:black;
	text-align:center;
	padding:14px 16px;
	text-decoration:none;
}

.nav-bar-content li a:hover {
    background-color:black;
}

body{
	line-height:1.5;
}

*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}

.container{
	max-width:1170px;
	margin:auto;
}

.row{
	display:flex;
	flex-wrap:wrap;
}

ul{
	list-style:none;
}

.footer{
	background-color:#24262b;
	padding:70px 0;
}

.col{
	width:25%;
	padding:0 15px;
}

.col h4{
	font-size:18px;
	color:#ffffff;
	text-transform:capitalize;
	margin-bottom:35px;
	font-weight:500;
	position:relative;
}

.col h4::before{
	content:'';
	position:absolute;
	left:0;
	bottom:-10px;
	background-color:#e91e63;
	height:2px;
	box-sizing:border-box;
	width:50px;
}

.col ul li:not(:last-child){
	margin-bottom:10px;
}

.col ul li a{
	font-size:16px;
	text-transform:capitalize;
	color:#ffffff;
	text-decoration:none;
	font-weight:300;
	color:#bbbbbb;
	display:block;
}

.col ul li a:hover{
	color:#ffffff;
	padding-left:8px;
}

.col .socialmedia a{
	display:inline-block;
	height:40px;
	width:40px;
	background-color:rgba(255,255,255,0.2);
	margin-right:10px;
	margin:0 10px 10px 0;
	text-align:center;
	line-height:40px;
	border-radius:50%;
	color:#ffffff;
	transition:all 0.5s ease;
}

.col .social-links a:hover{
	color:#24262b;
	background-color:#ffffff;
}


		</style>
		

