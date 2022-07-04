<!DOCTYPEhtml>

<html>

<head>

	<title>Delete Page</title>
	
	<link rel="stylesheet" href="styles/Header&Footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		.delete{
			padding:5px;
			width:20%;
			border-radius:5px;
		}
		
		.btndelete{
			padding:10px;
			border-radius:5px;
			width:10%;
		}
		
		.btndelete:hover{
			color:#d91107;
		}
	</style>

</head>

<body>
	<!--header-->
	<header>
		<img src="images/PEARL.png" alt="Website Logo" width="100px" height="100px" class="img-logo">
		
		<img src="images/user1.jpg" alt="user icon" width="70px" height="70px" align="right" class="img-user">
		
		
		<div class="dropdown">
			<select>
				<option value="login">Login</option>
				<option value="logout">Logout</option>
			</select>
		</div>
		
		<div class="nav-bar">
			<ul>
				<div class="nav-bar-content">
					<li><a href="home.html">Home</a></li>
					<li><a href="register.html">Registration</a></li>
					<li><a href="packages.html">Packages</a></li>
					<li><a href="book.html">Book</a></li>
					<li><a href="aboutus.html">More</a></li>
				</div>
			</ul>
		</div>
	</header>
	<!--End header-->
	
	<br/><br/>
	
	<center>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<h1>Input boat/data name you want to remove : </h1>
		<input type="text" placeholder="Delete" name="delete" class="delete">
		<input type="submit" name="btndelete" class="btndelete" value="Delete">
	</form>
	</center>
	
	<br/>
	
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
	
	<?php

	require 'config.php';

	if(isset($_POST['btndelete'])){
		$boat = $_POST['delete'];
	
		$sql = "DELETE * FROM seller WHERE boat_owned='delete' ";
	
		if($con->query($sql)){
			echo "<script>alert('Deleted successfully!');</script>";
		}
		else{
			echo "<script>alert('Not Deleted');</script>";
		}
	}

	$con->close();

	?>
	
	
	<!--footer-->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<h4>Company</h4>
					<ul>
						<li><a href="useraccount.html">User Account</a></li>
						<li><a href="accommodation.html">Accommodations</a></li>
						<li><a href="experiences.html">Experiences</a></li>
						<li><a href="payments.html">Payments</a></li>
					</ul>
				</div>
			    <div class="col">
					<h4>Contact</h4>
					<ul>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="review.html">Reviews & Rates</a></li>
						<li><a href="faq.html">FAQ</a></li>
					</ul>
				</div>
				<div class="col">
					<h4>Service Provider</h4>
					<ul>
						<li><a href="seller.html">Seller Page</a></li>
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
	<!--End footer-->

</body>

</html>