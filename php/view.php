<?php

require_once 'config.php';

?>

<!DOCTYPE html>

<html>

<head>

	<title>Update Page</title>
	
	<link rel="stylesheet" href="styles/Header&Footer.css">
	<link rel="stylesheet" href="styles/view.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding:5px;
			width:10px;
		}
		th, td {
			background-color: #96D4D4;
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
	
	<br/>
	
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<label><h2>Search owner details :  </h2></label><br/>
		<input type="text" class="input" name="search" placeholder="Boat Name">
		<input type="submit" name="owner" class="subbtn" value="Display">
	</form>
	
	<br/>
	
<?php

require 'config.php';

if(isset($_POST['owner'])){
	$boatname = $_POST['search'];
	$sql = "SELECT * FROM seller WHERE boat_owned='$boatname'";
	
	$result = $con->query($sql);
	
	if($result->num_rows>0){
		echo "<table border='1'";
		
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo ("<td>". $row['SID']. "</td>");
			echo ("<td>" . $row['name'] . "</td>");
			echo ("<td>" . $row['boat_owned'] . "</td>");
			echo ("<td>" . $row['address'] . "</td>");
			echo ("<td>" . $row['contact'] . "</td>");
			echo ("</tr>");
		}
		echo "</table>";
	}
	else{
		echo "No results";
	}
}
	
$con->close();

?>

<br/>
<form method="POST" action="update.php">
	<label><h2>Do you want to update your profile?</h2></label><br/>
	<input type="submit" id="btn1-update" value="Update"><br/>
</form>
<br/>		
<form method="POST" action="delete.php">
	<label><h2>Do you want to delete your data?</h2></label><br/>
	<input type="submit" id="btn1-delete" value="delete">
</form>

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

