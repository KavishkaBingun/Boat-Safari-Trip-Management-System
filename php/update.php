<?php

require_once 'config.php';

?>

<!DOCTYPEhtml>

<html>

<head>

	<title>Update Page</title>
	
	<link rel="stylesheet" href="styles/Header&Footer.css">
	<link rel="stylesheet" href="styles/update.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

<center>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
	<h1>Update Profile</h1><br/>
	<label>Previous SID : </label>
	<input type="number" placeholder="prev SID" class="prevsid" name="prevsid"><br/><br/>
	
	<label>SID : </label>
	<input type="number" placeholder="New SID" class="sid" name="SID"><br/><br/>
	
	<label>Enter name : </label>
	<input type="text" placeholder="New Name" class="newname" name="name"><br/><br/>
	
	<label>Enter mobile : </label>
	<input type="number" placeholder="New Number" class="newnum" name="mobile"><br/><br/>

	<input type="submit" name="updatebtn" class="updatebtn" value="Save changes">
	
</form>
</center>

	<br/>

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
	
<?php

require 'config.php';

if(isset($_POST['updatebtn'])){
	$sid = $_POST['SID'];
	$name = $_POST['name'];
	$contactNo = $_POST['mobile'];

	//update form data
	$sql = "UPDATE seller set SID='$sid',name='$name',mobile='$contactNo' WHERE SID='$prevsid' ";

	if($con->query($sql)){
		echo "<script>alert('Sucessfully updated!');</script>";
	}
	else{
		echo "Error :".$con->error;
	}

	$con->close();
}


?>